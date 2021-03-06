@extends('cms.layouts.app', [
    'title' => 'Event Manager UFFS',
    'navName' => 'Novo Evento',
    'activePage' => 'event',
])

@section('content')
    <div class="content" id="app">
        <div class="container-fluid">
            <div class="card">

                <form class="" action="{{ route('event.store') }}" method="post" enctype="multipart/form-data">
                    @csrf

                    <div class="card-header">
                        <h4 class="card-title">Novo Evento</h4>
                    </div>

                    <div class="card-body">
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                        <div class="p-2">

                            <div class="row">

                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Nome do Evento</label>
                                        <input
                                            type="text"
                                            name="name"
                                            class="form-control @error('name') is-invalid @enderror"
                                        >
                                    </div>
                                </div>


                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Local do Evento</label>
                                        <input
                                            type="text"
                                            name="place"
                                            class="form-control @error('place') is-invalid @enderror"
                                        >
                                    </div>
                                </div>

                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Curso</label>
                                        <input
                                            type="text"
                                            name="course"
                                            class="form-control @error('course') is-invalid @enderror"
                                        >
                                    </div>
                                </div>

                                <div class="col-sm-3">
                                    <div class="form-group">
                                        <label>Data de início</label>
                                        <input
                                            type="date"
                                            name="start_date"
                                            class="form-control @error('start_date') is-invalid @enderror"
                                        >
                                    </div>
                                </div>

                                <div class="col-sm-3">
                                    <div class="form-group">
                                        <label>Duração do Evento (em dias)</label>
                                        <input
                                            type="number"
                                            name="duration"
                                            value="1"
                                            min="1"
                                            max="365"
                                            class="form-control @error('duration') is-invalid @enderror"
                                            min="1"
                                            value="1"
                                            max="365"
                                        >
                                    </div>
                                </div>

                                <div class="col-12">
                                    <div class="form-group">
                                        <label for="description">Breve Descrição</label>
                                        <textarea
                                            name="description"
                                            id="description"
                                            maxlength="300"
                                            rows="5"
                                            class="form-control @error ('description') is-invalid @enderror"
                                        ></textarea>
                                    </div>
                                </div>

                                <div class="col-12">
                                    <img-handler
                                        field-name="banner"
                                    ></img-handler>

                                </div>

                                <div class="form-group col-12">
                                    <div class="form-check d-inline">
                                        <label class="form-check-label">
                                            <input
                                                type="checkbox"
                                                name="enrollable"
                                                value="1"
                                                class="form-check-input"
                                            >
                                            <span class="form-check-sign"></span>
                                            Evento é inscitível
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="card-footer">
                        <button type="submit" name="submit" class="btn btn-success">Salvar</button>
                    </div>

                </form>
            </div>


        </div>
    </div>
@endsection
