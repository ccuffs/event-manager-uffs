<?php

namespace App\Http\Controllers\Cms;

use App\Http\Controllers\Controller;

use App\Schedule;
use Illuminate\Http\Request;

class ScheduleController extends Controller
{
    public function index()
    {
        return view('cms.schedule.index');
    }

    public function create()
    {
        return view('cms.schedule.create');
    }

    public function store(Request $request)
    {
        //
    }

    public function show(Schedule $schedule)
    {
        //
    }

    public function edit(Schedule $schedule)
    {
        //
    }

    public function update(Request $request, Schedule $schedule)
    {
        //
    }

    public function destroy(Schedule $schedule)
    {
        //
    }
}
