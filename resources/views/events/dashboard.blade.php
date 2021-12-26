@extends('layouts.main')

@section('title', 'dashboard')

@section('content')

<div class="col-md-10 offset-md-1 dashboard-title-container">
    <h1>Meus Eventos</h1>
</div>
<div class="col-md-10 offset-md-1 dashboard-event-container">
    @if(count($events) > 0)
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nome</th>
                    <th scope="col">Participantes</th>
                    <th scope="col">Ações</th>
                </tr>
            </thead>
            <tbody>
                @foreach($events as $event)
                <tr>
                    <td scropt="row">{{$loop -> index + 1}}</td>
                    <td><a href="/events/{{ $event->id }}">{{ $event -> title}}</a></td>
                    <td>0</td>
                    <td><a class="me-2" href="#">Editar</a><a href="#">Deletar</a></td>
                </tr>
                @endforeach
            </tbody>
        </table>
    @else
    <p>Você não tem evento :( <a href="/events/create">Criar evento</a></p>
    @endif
</div>

@endsection