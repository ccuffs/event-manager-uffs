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
                    <div class="mb-3 d-flex justify-content-between">
                        <div>
                            <h4 class="card-title d-inline">
                                {{ $event -> name }}
                            </h4>
                        </div>

                        <div>
                            <a href="{{ route('event.index') }}" class="btn btn-secondary">
                                Voltar
                                <i class="nc-icon nc-stre-left"></i>
                            </a>

                            <a href="{{ route('event.edit', $event) }}" class="btn btn-primary">
                                Editar
                                <i class="nc-icon nc-single-copy-04"></i>
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
                    
                    <div class="table-responsive table-full-width">
                        <table class="table table-hover">
                            <tr>
                                <th>Local do Evento</th>
                                <td>{{ $event -> place }}</td>
                            </tr>

                            <tr>
                                <th>Curso Relacionado</th>
                                <td>{{ $event -> course }}</td>
                            </tr>

                            <tr>
                                <th>Data de Início</th>
                                <td>{{ date('d/m/Y', strtotime($event -> startDate)) }}</td>
                            </tr>

                            <tr>
                                <th>Duração</th>
                                <td>
                                    {{ $event -> duration }}
                                    @if ($event -> duration > 1)
                                        dias
                                    @else
                                        dia
                                    @endif
                                </td>
                            </tr>

                            <tr>
                                <th>Descrição</th>
                                <td>{{ $event -> description }}</td>
                            </tr>
                        </table>
                    </div>
                </div>

                @if ($event -> enrollable)
                    <div class="card-footer">
                        <h5><i>O evento pode requerer inscrição dos participantes.</i></h5>
                    </div>
                @endif

            </div>
        </div>
    </div>
@endsection
