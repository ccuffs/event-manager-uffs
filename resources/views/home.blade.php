@extends('layouts.app')

@section('content')

    <event-form>
    </event-form>

    {{-- Header --}}
    <base-header>
        <header class="header">
            <div class="header__container">
                <div class="header__content">
                    <p class="header__title">Event Manager UFFS</p>
                </div>

                <svg class="header__svg" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100" preserveAspectRatio="none">
                    <path
                    d="
                    M -5,50
                    S 0,90 25,90
                    S 50,50 75,50
                    S 100,50 125,50
                    L 100,100
                    L 0,100
                    z
                    "
                    />
                </svg>
            </div>
        </header>

        <nav class="navbar navbar-expand-lg bg-light navbar-light" id="stickyNavbar" ref="stickyNavbar">
            <div class="mx-auto order-0">
                <p class="navbar__title">Event Manager UFFS</p>
            </div>

            <div class="order-3">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-user-section" aria-controls="navbar-user-section" aria-expanded="false">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbar-user-section">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="#">Sair</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

    </base-header>

    {{-- Main --}}
    <main class="app-main">

        <base-card
            action-card
            modalTrigger
            modalTarget="createEventModal"
        >
        </base-card>
    </main>

    {{-- Footer --}}
    <footer class="app-footer">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="app-footer__logo">
                        Desenvolvido pela FronteiraTec
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="app-footer__nav">
                        <div class="app-footer__nav-title">
                            Links úteis
                        </div>

                        <a href="http://cc.uffs.edu.br/" class="app-footer__link">CC UFFS</a>
                    </div>
                </div>


            </div>

        </div>
    </footer>



@endsection
