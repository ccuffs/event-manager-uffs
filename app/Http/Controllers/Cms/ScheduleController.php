<?php

namespace App\Http\Controllers\Cms;

use App\Http\Controllers\Controller;

use App\Schedule;
use Illuminate\Http\Request;

class ScheduleController extends Controller
{
    public function index()
    {
        $schedules = Schedule::all();
        return view('cms.schedule.index', compact('schedules'));
    }

    public function create()
    {
        return view('cms.schedule.create');
    }

    public function store(Request $request)
    {
        $scheduleData = $request->validate([
            'title' => 'required|max:255',
            'place' => 'required|max:255',
            'description' => 'required',
            'start_at' => 'date',
            'end_at' => 'nullable|date|after_or_equal:start_at'
        ]);

        $schedule = Schedule::create($scheduleData);

        return redirect()->route('schedule.index');
    }

    public function show(Schedule $schedule)
    {
        return view('cms.schedule.show', compact('schedule'));
    }

    public function edit(Schedule $schedule)
    {
        return view('cms.schedule.edit', compact('schedule'));
    }

    public function update(Request $request, Schedule $schedule)
    {
        $scheduleData = $request->validate([
            'title' => 'required|max:255',
            'place' => 'required|max:255',
            'description' => 'required',
            'start_at' => 'date',
            'end_at' => 'nullable|date|after_or_equal:start_at'
        ]);

        try {
            $schedule = $schedule->update($scheduleData);
            return redirect()->route('schedule.index')->withSuccess('Programação atualizada.');
        } catch (\Throwable $th) {
            return redirect()->route('schedule.index')->withError('Falha ao atualizar programação.');
        }
    }

    public function destroy(Schedule $schedule)
    {
        //
    }
}
