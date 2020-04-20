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
                    @if (session('success'))
                        <div class="alert alert-success alert-dismissible fade show">
                            {{ session('success') }}
                        </div>

                    @elseif (session('error'))
                        <div class="alert alert-danger alert-dismissible fade show">
                            {{ session('error') }}
                        </div>

                    @endif

                    @if (! $events -> isEmpty())
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
                                            <td>
                                                <form
                                                    action="{{ route('event.destroy', $event) }}"
                                                    method="post"
                                                    class="d-inline"
                                                >
                                                    @method('delete')
                                                    @csrf
                                                    <button type="submit" class="btn btn-danger btn-sm">
                                                        Excluir
                                                        <i class="nc-icon nc-simple-remove"></i>
                                                    </button>

                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    @else
                        <h4>Nenhum evento cadastrado</h4>
                        <h4>Clique em <a href="{{ route('event.create') }}" class="text-primary">Novo +</a> para criar um evento.</h4>
                    @endif
                </div>
            </div>
        </div>
    </div>
@endsection
