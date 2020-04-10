@extends('cms.layouts.app', ['activePage' => 'newEvent', 'title' => 'Event Manager UFFS', 'navName' => 'Novo Evento'])

@section('content')
    <div class="content">
        <div class="container-fluid">

            <form class="" action="{{ route('event.store') }}" method="post">
                @csrf

                {{-- event name --}}
                <div class="form-group">
                    <label>Nome do Evento</label>
                    <input type="text" name="name" class="form-control">
                </div>

                {{-- event description --}}
                <div class="form-group">
                    <label>Breve Descrição</label>
                    <textarea class="form-control" name="description" id="description" maxlength="300"></textarea>
                </div>

                {{-- event place --}}
                <div class="form-group">
                    <label>Local do Evento</label>
                    <input type="text" name="place" class="form-control">
                </div>

                {{-- event course --}}
                <div class="form-group">
                    <label>Curso</label>
                    <input type="text" name="course" class="form-control">
                </div>

                {{-- start date --}}
                <div class="form-group">
                    <label>Data de início</label>
                    <input type="text" name="startDate" class="form-control">
                </div>

                {{-- event place --}}
                <div class="form-group">
                    <label>Local do Evento</label>
                    <input type="text" name="place" class="form-control">
                </div>

            </form>

        </div>
    </div>
@endsection
