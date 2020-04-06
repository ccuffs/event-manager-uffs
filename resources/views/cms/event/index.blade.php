@extends('cms.layouts.app', ['activePage' => 'existingEvents', 'title' => 'Event Manager UFFS', 'navName' => 'Eventos'])

@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="table-responsive table-full-width">
            	<table class="table table-hover table-striped">
            		<thead>
            			<th>Nome</th>
            			<th>Data</th>
            			<th>Inscritos</th>
            			<th>Local</th>
            			<th>Ações</th>
            		</thead>
            		<tbody>
                        @foreach ($events as $event)
                            <tr>
                                <td>{{ $event -> name }}</td>
                                <td>{{ $event -> date }}</td>
                                <td>coming soon...</td>
                                <td>{{ $event -> place }}</td>
                                <td>D P</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
