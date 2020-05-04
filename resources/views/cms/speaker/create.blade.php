@extends('cms.layouts.app', ['title' => 'Palestrantes', 'navName' => 'Palestrantes', 'activePage' => 'speakers'])

@section('content')
    <div class="content" id="app">
        <div class="container-fluid">
            <div class="card">
                <form action="{{ route('speaker.store') }}" method="post" autocomplete="off" enctype="multipart/form-data">
                    @csrf
                    <div class="card-header">
                        <h4 class="card-title">
                            Novo Palestrante
                            <a href="{{ route('speaker.index', ['event_id' => $event_id]) }}" class="btn btn-primary float-right">
                                <i class="fa fa-arrow-left"></i>
                            </a>
                        </h4>
                    </div>

                    <div class="card-body">
                        <speaker-form photo="{{ asset('img/placeholder-image.png') }}"></speaker-form>
                        <input type="hidden" name="event_id" value="{{ $event_id }}">
                    </div>

                    <div class="card-footer">
                        <button type="submit" class="btn btn-success btn-wd mb-3">
                            Criar
                            <i class="nc-icon nc-check-2"></i>
                        </button>
                    </div>

                </form>
            </div>
        </div>
    </div>
@endsection