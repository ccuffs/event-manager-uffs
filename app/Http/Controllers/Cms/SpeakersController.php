<?php

namespace App\Http\Controllers\Cms;

use App\Speakers;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;

class SpeakersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('cms.speakers.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('cms.speakers.create');
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
        $fileName = '';
        
        if ($photo)
        {

            $extension = $photo->getClientOriginalExtension();
            
            $fileName = $photo->getFilename().'.'.$extension;
            Storage::disk('public')->put($fileName,  File::get($photo));
        }
            
        $speaker = Speakers::create([
            'name' => $name,
            'biography' => $biography,
            'photo' => $fileName
        ]);

        $speaker->save();

        return redirect()->route('speakers.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Speakers  $speakers
     * @return \Illuminate\Http\Response
     */
    public function show(Speakers $speakers)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Speakers  $speakers
     * @return \Illuminate\Http\Response
     */
    public function edit(Speakers $speakers)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Speakers  $speakers
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Speakers $speakers)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Speakers  $speakers
     * @return \Illuminate\Http\Response
     */
    public function destroy(Speakers $speakers)
    {
        //
    }
}
