@extends('layouts.app')

@section('content')
    {{-- Header --}}
    <header>
        <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
            <div class="mx-auto order-0">
                <p class="header__title">Event Manager UFFS</p>
            </div>

            <div class="order-3">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#headerUserSection" aria-controls="headerUserSection" aria-expanded="false">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="headerUserSection">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="#">Sair</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    {{-- Main --}}
    <main class="main">
    </main>

    {{-- Footer --}}
    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="footer__logo">
                        Desenvolvido pela FronteiraTec
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="footer__nav">
                        <div class="footer__nav-title">
                            Links úteis
                        </div>

                        <a href="http://cc.uffs.edu.br/" class="footer__link">CC UFFS</a>
                    </div>
                </div>


            </div>

        </div>
    </footer>

@endsection
