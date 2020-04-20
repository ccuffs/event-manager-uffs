@extends('cms.layouts.app', [
    'title' => 'Event Manager UFFS',
    'navName' => 'Eventos',
    'activePage' => 'event',
])

@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="card">
                <div class="card-header">

                    <div class="mb-3">
                        <h4 class="card-title">
                            Eventos Cadastrados
                        </h4>
                    </div>

                    <a href="{{ route('event.create') }}" class="btn btn-primary btn-wd">
                        Novo
                        <i class="nc-icon nc-simple-add"></i>
                    </a>
                </div>

                <div class="card-body">
                    <div class="table-responsive table-full-width">
                        <table class="table table-hover">
                            <thead>
                                <th>Nome</th>
                                <th>Data</th>
                                <th>Inscritos</th>
                                <th>Local</th>
                                <th>Ações</th>
                            </thead>
                            
                            <tbody>
                                @foreach ($events as $event)
                                    <tr>
                                        <td>{{ $event -> name }}</td>
                                        <td>{{ date('d/m/Y', strtotime($event -> startDate)) }}</td>
                                        <td>coming soon...</td>
                                        <td>{{ $event -> place }}</td>
                                        <td> . </td>
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
