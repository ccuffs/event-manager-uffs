<?php

namespace App\Http\Controllers\Cms;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Event;
use Carbon\Carbon;

use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;

class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $events = Event::all();

        return view('cms.event.index', compact('events'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('cms.event.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $validatedData = $request -> validate([
            'name' => 'required|max:255',
            'description' => 'required',
            'place' => 'required|max:255',
            'course' => 'required|max:255',
            'start_date' => 'required|date',
            'duration' => 'required|integer|min:1|max:365',
            'enrollable' => 'boolean',
        ]);

        if (! array_key_exists('enrollable', $validatedData)) {
            $validatedData['enrollable'] = "0";
        }

        $banner = $request -> file('banner');
        $fileName = '';

        if ($banner) {
            $extension = $banner -> getClientOriginalExtension();
            $fileName = $banner -> getFilename() . '.' . $extension;

            Storage::disk('public')
                -> put($fileName, File::get($banner));
        }

        $validatedData['banner'] = $fileName;

        try {
            Event::create($validatedData);
            return redirect() -> route('event.index') -> with('success', 'Evento criado com sucesso.');

        } catch (\Exception $e) {
            return redirect() -> route('event.index') -> with('error', 'Erro ao criar evento.');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function show(Event $event)
    {
        return view('cms.event.show', compact('event'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function edit(Event $event)
    {
        return view('cms.event.edit', compact('event'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Event $event)
    {
        $validatedData = $request -> validate([
            'name' => 'required|max:255',
            'description' => 'required',
            'place' => 'required|max:255',
            'course' => 'required|max:255',
            'start_date' => 'required|date',
            'duration' => 'required|integer|min:1|max:365',
            'enrollable' => 'boolean',
        ]);

        if (! array_key_exists('enrollable', $validatedData)) {
            $validatedData['enrollable'] = "0";
        }

        try {
            $event->update($validatedData);
            return redirect() -> route('event.show', $event) -> with('success', 'Evento atualizado com sucesso');

        } catch (\Exception $e) {
            return redirect() -> route('event.show', $event) -> with('error', 'Não foi possível atualizar evento');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function destroy(Event $event)
    {
        try {
            $event->delete();
            return redirect() -> route('event.index') -> with('success', 'Evento removido com sucesso');

        } catch (\Exception $e) {
            return redirect() -> route('event.index') -> with('error', 'Erro ao excluir evento');
        }
    }
}
