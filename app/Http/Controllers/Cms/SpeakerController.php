<?php

namespace App\Http\Controllers\Cms;

use App\Speaker;
use App\Event;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;

class SpeakerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $event_id = $request->event_id;

        $request->session()->flash('event_id', $event_id);
        $speakers = Speaker::where('event_id', '=', $event_id)->get();
        
        $event = Event::where('id', '=', $event_id)->get(['name', 'id'])->first();
        return view('cms.speaker.index', ['speakers' => $speakers, 'event' => $event]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $event_id = $request->session()->get('event_id');
        return view('cms.speaker.create', ['event_id' => $event_id]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $name = $request->name;
        $biography = $request->biography;
        $photo = $request->file('photo');
        $eventId = $request->event_id;
        $fileName = '';
        
        if ($photo)
        {
            $extension = $photo->getClientOriginalExtension();
            $fileName = $photo->getFilename().'.'.$extension;
            
            Storage::disk('public')->put($fileName,  File::get($photo));
        }
            
        $speaker = Speaker::create([
            'name' => $name,
            'biography' => $biography,
            'photo' => $fileName,
            'event_id' => $eventId
        ]);

        $speaker->save();

        return redirect()->route('speaker.index', ['event_id' => $eventId])->withStatus('Palestrante cadastrado com sucesso.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Speaker  $speaker
     * @return \Illuminate\Http\Response
     */
    public function show(Speaker $speakers)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Speaker  $speaker
     * @return \Illuminate\Http\Response
     */
    public function edit(Speaker $speaker)
    {
        return view('cms.speaker.edit', ['speaker' => $speaker]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Speaker  $speaker
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Speaker $speaker)
    {
        $speaker->name = $request->name;
        $speaker->biography = $request->biography;
        $photo = $request->file('photo');

        if ($photo)
        {
            $this->deletePhoto($speaker->photo);
            
            $extension = $photo->getClientOriginalExtension();
            $speaker->photo = $photo->getFilename().'.'.$extension;
            
            Storage::disk('public')->put($speaker->photo,  File::get($photo));
        }

        $speaker->update();

        return redirect()->route('speaker.index', ['event_id' => $speaker->event_id])->withStatus('Palestrante atualizado com sucesso');
    }

    private function deletePhoto($photoName)
    {
        if ($photoName)
        {
            Storage::disk('public')->delete($photoName);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Speaker  $speaker
     * @return \Illuminate\Http\Response
     */
    public function destroy(Speaker $speaker)
    {
        $this->deletePhoto($speaker->photo);
        $speaker->delete();
        
        return redirect()->route('speaker.index', ['event_id' => $speaker->event_id])->withStatus('Palestrante removido com sucesso');
    }
}
