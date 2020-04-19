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
        $scheduleData = $request->validate([
            'title' => 'required|max:255',
            'description' => 'required',
            'start_at' => 'date',
            'end_at' => 'nullable|date|after_or_equal:start_at'
        ]);

        $schedule = Schedule::create($scheduleData);

        return redirect()->route('schedule.index');
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
