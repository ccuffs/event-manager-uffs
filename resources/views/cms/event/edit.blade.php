@extends('cms.layouts.app', [
    'title' => 'Event Manager UFFS',
    'navName' => 'Novo Evento',
    'activePage' => 'event',
])

@section('content')
    <div class="content" id="app">
        <div class="container-fluid">
            <div class="card">


                <form class="" action="{{ route('event.update', $event) }}" method="post">
                    @method('put')
                    @csrf

                    <div class="card-header">
                        <h4 class="card-title">Editando "{{ $event -> name }}"</h4>
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
                                            value="{{ $event -> name }}"
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
                                            value="{{ $event -> place }}"
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
                                            value="{{ $event -> course }}"
                                        >
                                    </div>
                                </div>

                                <div class="col-sm-3">
                                    <div class="form-group">
                                        <label>Data de início</label>
                                        <input
                                            type="date"
                                            name="startDate"
                                            class="form-control @error('startDate') is-invalid @enderror"
                                            value="{{ $event -> startDate }}"
                                        >
                                    </div>
                                </div>

                                <div class="col-sm-3">
                                    <div class="form-group">
                                        <label>Duração do Evento (em dias)</label>
                                        <input
                                            type="number"
                                            name="duration"
                                            class="form-control @error('duration') is-invalid @enderror"
                                            min="1"
                                            value="1"
                                            max="365"
                                            value="{{ $event -> duration }}"
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
                                        >{{ trim($event -> description) }}</textarea>
                                    </div>
                                </div>

                                <div class="col-12">
                                    <img-handler
                                        field-name="banner"
                                        img-url="{{ asset('storage/' . $event -> banner) }}"
                                        image-uploaded
                                    ></img-handler>

                                </div>

                                <div class="form-group d-inline">
                                    <div class="form-check d-inline">
                                        <label class="form-check-label">
                                            <input
                                                type="checkbox"
                                                name="enrollable"
                                                value="1"
                                                class="form-check-input"
                                                @if ($event -> enrollable)
                                                    checked
                                                @endif
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
