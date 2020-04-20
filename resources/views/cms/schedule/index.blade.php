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
                    nome-do-evento/Programação
                </h4>
            </div>

            <div class="card-body">
                <div class="py-2">
                    <a href="{{ route('schedule.create') }}" class="btn  btn-primary btn-wd">
                        Adicionar
                    </a>
                </div>
                <div class="table-responsive">
                    <table class="table table-hover">
                        <thead>
                            <th> Titulo </th>
                            <th> Local </th>
                            <th> Horário </th>
                            <th> Ações </th>
                        </thead>
                        <tbody>
                        @foreach($schedules as $schedule)
                            <tr>
                                <td>{{ $schedule->title }}</td>
                                <td>{{ $schedule->place }}</td>
                                <td>{{ $schedule->start_at->format('d/m/Y H:i') }}</td>
                                <td>
                                    <a href="{{ route('schedule.show', $schedule) }}" class="btn btn-sm btn-primary">Exibir</a>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection