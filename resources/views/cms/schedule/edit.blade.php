@extends('cms.layouts.app', [
    'title' => 'Programação',
    'navName' => 'Programação',
    'activePage' => 'schedule'
])

@section('content')
    <div class="content" id="app">
        <div class="container-fluid">
            <div class="card">
                <form action="{{ route('schedule.update', $schedule) }}" method="post" autocomplete="off">
                    @csrf
                    @method('PUT')
                    <div class="card-header">
                        <h4 class="card-title">
                            Editar Programação
                            <a href="{{ route('schedule.show', $schedule) }}" class="btn btn-primary float-right">
                                <i class="fa fa-arrow-left"></i>
                            </a>
                        </h4>
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
                                        <label for="title"> Nome </label>
                                        <input
                                            name="title"
                                            value="{{$schedule->title}}"
                                            class="form-control @error('title') is-invalid @enderror"
                                            id="title"
                                            placeholder="Nome"
                                            required
                                        >
                                    </div>
                                </div>

                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="place"> Local </label>
                                        <input
                                            name="place"
                                            value="{{$schedule->place}}"
                                            class="form-control @error('place') is-invalid @enderror"
                                            id="place"
                                            placeholder="Local"
                                            required
                                        >
                                    </div>
                                </div>

                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="start_at"> Início </label>
                                        <input
                                            name="start_at"
                                            value="{{$schedule->start_at->format('Y-m-d')}}"
                                            class="form-control @error('start_at') is-invalid @enderror"
                                            id="start_at"
                                            type="date"
                                            required
                                        >
                                    </div>
                                </div>

                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="end_at"> Término </label>
                                        <input
                                            name="end_at"
                                            @if ($schedule->end_at)
                                            value="{{$schedule->end_at->format('Y-m-d')}}"
                                            @endif
                                            class="form-control @error('end_at') is-invalid @enderror"
                                            id="end_at"
                                            rows="4"
                                            type="date"
                                        >
                                    </div>
                                </div>

                                <div class="col-12">
                                    <div class="form-group">
                                        <label for="description"> Descrição </label>
                                        <textarea
                                            name="description"
                                            class="form-control @error('description') is-invalid @enderror"
                                            id="description"
                                            placeholder="Descrição"
                                            rows="4"
                                            required
                                        >{{$schedule->description}}</textarea>
                                    </div>
                                </div>
                            </div>

                            <button type="submit" class="btn btn-success btn-wd mt-2">
                                Salvar
                            </button>
                            <a href="{{ route('schedule.index') }}" class="btn mt-2">
                                Voltar
                            </a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection