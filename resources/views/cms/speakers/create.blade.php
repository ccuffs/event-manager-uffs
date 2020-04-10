@extends('cms.layouts.app', ['title' => 'Palestrantes', 'navName' => 'Palestrantes', 'activePage' => 'speakers'])

@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">
                        Novo Palestrante
                    </h4>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-sm-4">
                            <div class="text-center">
                                <img src="{{asset('img/placeholder-image.png') }}" alt="Placeholder image">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <form action="" method="post">
                                <div class="form-group">
                                    <label for="name"> Nome </label>
                                    <input type="text" name="name" placeholder="Nome" class="form-control" >
                                </div>
                                <div class="form-group">
                                    <label for="biography"> Biografia </label>
                                    <textarea name="biography" placeholder="Biografia" name="biography" cols="30" rows="10"></textarea>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="card-footer"></div>
            </div>
        </div>
    </div>
@endsection