@extends('layouts.app')

@section('content')
    {{-- Header --}}
    <base-header>
    </base-header>

    {{-- Main --}}
    <main class="app-main">
        <button type="button" class="btn btn--primary">
            Button Primary
        </button>

        <button type="button" class="btn btn--info btn--small">
            Button Small
        </button>

        <button type="button" class="btn btn--info btn--large">
            Button Large
        </button>

        <button type="button" class="btn btn--dark">
            Button Dark
        </button>

        <button type="button" class="btn btn--danger btn--shadow-md">
            Button Danger Shadow md
        </button>

        <button type="button" class="btn btn--primary-gradient">
            Button Primary Gradient
        </button>

        <button type="button" class="btn btn--primary-outline">
            Button Primary Outline
        </button>

        <button type="button" class="btn btn--secondary btn--full">
            Button Full Width
        </button>
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
