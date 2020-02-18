@extends('layouts.app')

@section('content')
    {{-- Header --}}
    <base-header>
    </base-header>

    {{-- Main --}}
    <main class="app-main">
        <base-card>
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
