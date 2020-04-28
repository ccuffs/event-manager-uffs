@extends('cms.layouts.app', [
    'title' => 'Event Manager UFFS',
    'navName' => 'Eventos',
    'activePage' => 'event',
])

@section('content')
    <div class="content" id="app">
        <div class="container-fluid">
            <div class="card">
                <div class="card-header">
                    <div class="mb-3 d-flex justify-content-between">
                        <div>
                            <h4 class="card-title d-inline">
                                {{ $event -> name }}
                            </h4>
                        </div>

                        <div>
                            <a href="{{ route('event.index') }}" class="btn btn-secondary">
                                <i class="fa fa-arrow-left"></i>
                            </a>

                            <a href="{{ route('event.edit', $event) }}" class="btn btn-primary">
                                <i class="fa fa-pencil"></i>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="card-body">
                    @if (session('success'))
                        <div class="alert alert-success alert-dismissible fade show">
                            {{ session('success') }}
                        </div>

                    @elseif (session('error'))
                        <div class="alert alert-danger alert-dismissible fade show">
                            {{ session('error') }}
                        </div>

                    @endif

                    <event-dashboard
                        place="{{ $event -> place}}"
                        course="{{ $event -> course }}"
                        duration="{{ $event -> duration }}"
                        start-date="{{ date('d/m/Y', strtotime($event -> startDate)) }}" 
                        description="{{ $event -> description }}"
                        enrollable="{{ $event -> enrollable }}"
                        schedule-route="{{ route('schedule.index', ['event_id' => $event->id]) }}"
                        speakers-route="{{ route('speaker.index', ['event_id' => $event->id]) }}"
                    >
                    </event-dashboard>
                </div>
            </div>
        </div>
    </div>
@endsection
