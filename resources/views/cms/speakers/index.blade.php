@extends('cms.layouts.app', ['title' => 'Palestrantes', 'navName' => 'Palestrantes', 'activePage' => 'speakers'])

@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">
                        nome-do-evento/Palestrantes
                    </h4>
                    <div class="row">
                        <div class="col mt-4">
                            <a href="{{ route('speakers.create') }}" class="btn btn-primary btn-wd">
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
                    </div>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <td>Nome</td>
                                            <td>Biografia</td>
                                            <td>Ações</td>
                                        </tr>
                                    </thead>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection