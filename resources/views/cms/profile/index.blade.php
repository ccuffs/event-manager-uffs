@extends('cms.layouts.app', [
    'title' => 'Event Manager UFFS',
    'navName' => 'Perfil',
    'activePage' => 'profile',
])

@section('content')
   <div class="content" id="app">
       <div class="container-fluid">
           <div class="card">
               <div class="card-header">
                   <h4 class="card-title">Dados Pessoais</h4>
               </div>

               <div class="card-body">
                       <div class="p-2">
                           <div class="row">
                               <div class="col-sm-6">
                                   <div class="form-group">
                                       <label>Nome</label>
                                       <input
                                           type="text"
                                           name="name"
                                           class="form-control"
                                           value="{{$user->name}}"
                                           readonly
                                       >
                                   </div>
                               </div>
                               <div class="col-sm-6">
                                   <div class="form-group">
                                       <label>E-mail</label>
                                       <input
                                           type="email"
                                           name="email"
                                           class="form-control"
                                           value="{{$user->email}}"
                                           readonly
                                       >
                                   </div>
                               </div>

                               <div class="col-sm-6">
                                   <div class="form-group">
                                       <label>CPF</label>
                                       <input
                                           type="text"
                                           id="cpf"
                                           name="cpf"
                                           class="form-control"
                                           value="{{$user->cpf}}"
                                           readonly
                                       >
                                   </div>
                               </div>
                               <div class="col-sm-6">
                                   <div class="form-group">
                                       <label>IdUFFS</label>
                                       <input
                                           type="text"
                                           name="iduffs"
                                           class="form-control"
                                           value="{{$user->username}}"
                                           readonly
                                       >
                                   </div>
                               </div>
                           </div>
                       </div>
                   </div>
           </div>
       </div>
   </div>
@endsection
