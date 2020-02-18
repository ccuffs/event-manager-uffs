@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col col-xs-12 col-md-7 col-xl-5">
                <div class="card__shadow">
                    <div class="card-body">
                        
                        <div class="media">
                            <img src="{{ asset('/img/logo_uffs.png') }}" class="img-fluid" alt="logo_uffs">
                        </div>

                        <div class="input-group mb-3">
                            <input type="text" class="card__input" placeholder="IdUFFS">
                        </div>
                        
                        <div class="input-group mt-4">
                            <input type="password" class="card__input" placeholder="Senha">
                        </div>
                        
                        <button type="button" class="card__btn btn-primary">ENTRAR</button>
                        
                        <a href="https://id.uffs.edu.br/id/XUI/?realm=/#forgotUsername/" target="_blank" class="card__action text-primary"> Não sabe seu IdUFFS? </a>
                        
                        <a href="#" target="_blank" class="card__action text-primary mx-2"> Esqueceu seu senha? </a>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
