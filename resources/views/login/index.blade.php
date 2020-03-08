@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-xs-12 col-md-7 col-xl-5">
            <div class="card__shadow">
                <div class="card-body">
                    <div class="media">
                        <img src="{{ asset('/img/logo_uffs.png') }}" class="img-fluid" alt="logo_uffs">
                    </div>
                    <form action="" method="POST">
                        @csrf
                        <div class="input-group mb-3">
                            <input type="text" name="username" class="card__input" placeholder="IdUFFS">
                        </div>

                        <div class="input-group mt-4">
                            <input type="password" name="password" class="card__input" placeholder="Senha">
                        </div>
                        <br>
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        <button class="btn btn-primary">ENTRAR</button>
                        <br>
                        <a href="https://id.uffs.edu.br/id/XUI/?realm=/#forgotUsername/" target="_blank" class="text-primary"> Não sabe seu IdUFFS? </a>
                        <br>
                        <a href="#" target="_blank" class="text-primary"> Esqueceu seu senha? </a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
