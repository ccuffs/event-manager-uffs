@extends('cms.layouts.app', ['title' => 'Palestrantes', 'navName' => 'Palestrantes', 'activePage' => 'speakers'])

@section('content')
    <div class="content" id="app">
        <div class="container-fluid">
            <div class="card">
                <div class="card-header">
                    
                    <div class="mb-3">
                        <h4 class="card-title">
                            nome-do-evento/Palestrantes
                        </h4>
                    </div>

                    <a href="{{ route('speaker.create') }}" class="btn btn-primary btn-wd">
                        Novo
                        <i class="nc-icon nc-simple-add"></i>
                    </a>

                    <div class="form-group d-inline">
                        <div class="form-check d-inline">
                            <label class="form-check-label">
                                <input class="form-check-input" type="checkbox" value="">
                                <span class="form-check-sign"></span>
                                Exibir sessão
                            </label>
                        </div>
                    </div>
                    @if(session('status'))
                        <alert-toast
                            inner-text="{{ session('status') }}"
                            classes="alert-info">
                        </alert-toast>
                    @endif
                </div>

                <div class="card-body">
                @if(!$speakers->isEmpty())
                    <div class="table-responsive">
                        <table class="table table-hover">
                            <thead>
                                <th> Id </th>
                                <th> Nome </th>
                                <th> Biografia </th>
                                <th> Ações </th>
                            </thead>
                            <tbody>
                                @foreach($speakers as $speaker)
                                    <tr>
                                        <td>{{ $speaker->id }}</td>
                                        <td> {{ $speaker->name }}</td>
                                        <td> {{ $speaker->biography }}</td>
                                        <td>
                                            <form action="{{ route('speaker.destroy', $speaker) }}" method="post">
                                                
                                                @csrf
                                                @method('delete')

                                                <button type="submit" class="btn btn-simple btn-danger">
                                                    <i class="nc-icon nc-simple-remove"></i>
                                                </button>

                                                <a href="{{ route('speaker.edit', $speaker) }}" class="ml-2">
                                                    <i class="fa fa-edit"></i>
                                                </a>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                @else
                    <div class="alert alert-info fit-content" style="width: fit-content;">
                        <i class="fa fa-warning"></i>
                        Não há nenhum palestrante cadastrado
                    </div>
                @endif
                </div>
            </div>
        </div>
    </div>
@endsection