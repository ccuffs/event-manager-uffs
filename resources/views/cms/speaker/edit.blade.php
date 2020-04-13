@extends('cms.layouts.app', ['title' => 'Palestrantes', 'navName' => 'Palestrantes', 'activePage' => 'speakers'])

@section('content')
    <div class="content" id="app">
        <div class="container-fluid">
            <div class="card">
                <form action="{{ route('speaker.update', $speaker) }}" method="post" autocomplete="off" enctype="multipart/form-data">
                    @csrf
                    @method('put')
                    <div class="card-header">
                        <h4 class="card-title">
                            Editar Palestrante
                        </h4>
                    </div>

                    <div class="card-body">
                        <speaker-form
                            name="{{ $speaker->name }}"
                            biography="{{ $speaker->biography }}"
                            photo="{{ 
                                $speaker->photo ? 
                                asset('storage/' . $speaker->photo) :
                                asset('img/placeholder-image.png')
                                }}"
                        >
                        </speaker-form>
                    </div>

                    <div class="card-footer">
                        <button type="submit" class="btn btn-success btn-wd float-right mb-3">
                            Atualizar
                            <i class="nc-icon nc-check-2"></i>
                        </button>
                    </div>

                </form>
            </div>
        </div>
    </div>
@endsection