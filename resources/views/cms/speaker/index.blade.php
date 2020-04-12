@extends('cms.layouts.app', ['title' => 'Palestrantes', 'navName' => 'Palestrantes', 'activePage' => 'speakers'])

@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title mb-3">
                        nome-do-evento/Palestrantes
                    </h4>

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
                </div>

                <div class="card-body">
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

                                                <a href="#" onclick="this.parentElement.submit();">
                                                    <i class="nc-icon nc-simple-remove"></i>
                                                </a>
                                            </form>
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