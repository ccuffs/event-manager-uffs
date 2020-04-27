<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Event;

class HomeController extends Controller
{
    public function index()
    {
        return view('home', [
            'events' => Event::all()
        ]);
    }
}
