@extends('layouts.app')

@section('content')

    <div class="container">
        <div class=row>
            <div class="col col-xs-12 col-sm-12 col-md-7 col-lg-7 col-xl-5 mx-auto">
                <div class="card mt-5">
                    <div class="card-body">
                        <div class="media text-center">
                            <img src="{{ asset('/img/logo_uffs.png') }}" class="img-fluid" alt="logo_uffs">
                        </div>
                        <div class="input-group mb-3">
                            <input type="text" class="form-control" placeholder="IdUFFS">
                        </div>
                        <div class="input-group mt-4">
                            <input type="password" class="form-control" placeholder="Senha">
                        </div>
                        <button type="button" class="btn mt-4 mb-3">ENTRAR</button>
                        <a href="https://id.uffs.edu.br/id/XUI/?realm=/#forgotUsername/" target="_blank" class="text-success mt-2"> Não sabe seu IdUFFS? </a>
                        <a href="#" target="_blank" class="text-success mx-2"> Esqueci minha senha? </a>
                    </div>
                </div>
            </div>

        </div>
    </div>

@endsection
