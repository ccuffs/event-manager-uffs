@extends('cms.layouts.app', [
    'title' => 'Programação',
    'navName' => 'Programação',
    'activePage' => 'schedule'
])

@section('content')
<div class="content">
    <div class="container-fluid">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">
                    nome-do-evento/{{ $schedule->title }}
                </h4>
            </div>

            <div class="card-body">
                <div class="py-2">
                    <a href="{{ route('schedule.index') }}" class="btn btn-primary">
                        Voltar
                    </a>
                    <form action="{{ route('schedule.destroy', $schedule) }}" class="d-inline" method="post">
                        @method('delete')
                        @csrf
                        <button class="btn btn-danger">Excluir</button>
                    </form>
                </div>
                <div class="table-responsive">
                    <table class="table table-hover">
                        <tr>
                            <th>Título</th>
                            <td>{{ $schedule->title }}</td>
                        </tr>
                        <tr>
                            <th>Local</th>
                            <td>{{ $schedule->place }}</td>
                        </tr>
                        <tr>
                            <th>Início</th>
                            <td>{{ $schedule->start_at->format('d/m/Y H:i') }}</td>
                        </tr>
                        @if ($schedule->end_at)
                        <tr>
                            <th>Término</th>
                            <td>{{ $schedule->end_at->format('d/m/Y H:i') }}</td>
                        </tr>
                        @endif
                        <tr>
                            <th>Descrição</th>
                            <td>{{ $schedule->description }}</td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection