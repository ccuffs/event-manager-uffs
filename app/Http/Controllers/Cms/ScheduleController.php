<?php

namespace App\Http\Controllers\Cms;

use App\Http\Controllers\Controller;

use App\Event;
use App\Schedule;
use Illuminate\Http\Request;

class ScheduleController extends Controller
{
    public function index(Request $request)
    {
        $event_id = $request->event_id;
        $request->session()->flash('event_id', $event_id);
        $event = Event::where('id', '=', $event_id)->get(['id', 'name'])->first();
        $schedules = Schedule::all();

        return view('cms.schedule.index', compact('schedules', 'event'));
    }

    public function create(Request $request)
    {
        $event_id = $request->session()->get('event_id');
        return view('cms.schedule.create', ['event_id' => $event_id]);
    }

    public function store(Request $request)
    {
        $scheduleData = $request->validate([
            'title' => 'required|max:255',
            'place' => 'required|max:255',
            'description' => 'required',
            'start_at' => 'date',
            'end_at' => 'nullable|date|after_or_equal:start_at',
            'event_id' => 'required'
        ]);

        $schedule = Schedule::create($scheduleData);

        return redirect()->route('schedule.index', ['event_id' => $schedule->event_id]);
    }

    public function show(Schedule $schedule)
    {
        $event = Event::where('id', '=', $schedule->event_id)->get(['name', 'id'])->first();
        return view('cms.schedule.show', compact('schedule', 'event'));
    }

    public function edit(Schedule $schedule)
    {
        return view('cms.schedule.edit', compact('schedule'));
    }

    public function update(Request $request, Schedule $schedule)
    {
        $event_id = $schedule->event_id;
        $scheduleData = $request->validate([
            'title' => 'required|max:255',
            'place' => 'required|max:255',
            'description' => 'required',
            'start_at' => 'date',
            'end_at' => 'nullable|date|after_or_equal:start_at'
        ]);

        try {
            $schedule = $schedule->update($scheduleData);
            return redirect()->route('schedule.index', ['event_id' => $event_id])->withSuccess('Programação atualizada.');
        } catch (\Throwable $th) {
            return redirect()->route('schedule.index', ['event_id' => $event_id])->withError('Falha ao atualizar programação.');
        }
    }

    public function destroy(Schedule $schedule)
    {
        try {
            $schedule->delete();
            return redirect()->route('schedule.index', ['event_id' => $schedule->event_id])->withSuccess('Progração excluída.');
        } catch (\Throwable $th) {
            return redirect()->route('schedule.index', ['event_id' => $schedule->event_id])->withError('Erro ao excluir programação.');
        }
    }
}
