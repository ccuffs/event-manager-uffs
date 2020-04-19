@extends('cms.layouts.app', [
    'title' => 'Programação',
    'navName' => 'Programação',
    'activePage' => 'schedule'
])

@section('content')
    <div class="content" id="app">
        <div class="container-fluid">
            <div class="card">
                <form action="{{ route('schedule.store') }}" method="post" autocomplete="off">
                    @csrf
                    <div class="card-header">
                        <h4 class="card-title">
                            Adicionar Programação
                        </h4>
                    </div>

                    <div class="card-body">
                        <div class="p-2">
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="title"> Nome </label>
                                        <input
                                            name="title"
                                            id="title"
                                            class="form-control"
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
                                            id="place"
                                            class="form-control"
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
                                            id="start_at"
                                            class="form-control"
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
                                            id="end_at"
                                            class="form-control"
                                            rows="4"
                                            type="date"
                                            required
                                        >
                                    </div>
                                </div>

                                <div class="col-12">
                                    <div class="form-group">
                                        <label for="description"> Descrição </label>
                                        <textarea
                                            name="description"
                                            id="description"
                                            class="form-control"
                                            placeholder="Descrição"
                                            rows="4"
                                            required
                                        ></textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card-footer">
                        <button type="submit" class="btn btn-success btn-wd mb-3">
                            Salvar
                        </button>
                    </div>

                </form>
            </div>
        </div>
    </div>
@endsection