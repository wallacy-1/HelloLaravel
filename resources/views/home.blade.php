@extends('layouts.main')
@section('title','home')

@section('content')

<div id="banner-search" class="col-md-12">
    <h1>Busque um evento</h1>
    <form action="/" method="GET">
        <input type="search" name="search" id="search" class="form-control" placeholder="Procurar...">
    </form>
</div>
@if($search)
    <h2 class="p-3">Buscando por: {{$search}}</h2>
@else
    <h2 class="p-3">Veja os eventos dos próximos dias</h2>
@endif
<div class="row row-cols-1 row-cols-md-4 rounded-3 p-3 w-100">
    @foreach( $events as $event)
    <div class="col p-1">
        <div id="event" class="card h-100">
            <img class="card-img-top" src="../img/events/{{ $event-> image}}" alt="...">
            <span>
                @if($event -> private == 0)
                PUBLICO
                @else
                PRIVADO
                @endif
            </span>
            <div class="card-body">
                <h5 class="card-title">{{$event -> title}}</h5>
                <p class="card-text"> {{ count($event->users) }} Participantes</p>
                <a href="/events/{{$event -> id}}" class="btn btn-primary">Saber mais</a>
            </div>
            <div class="card-footer">
                <small class="text-muted">Dia: {{date('d/m/Y', strtotime($event -> date))}}</small>
            </div>
        </div>
    </div>
    @endforeach
    @if(count($events)== 0 && $search)
        <p>Não foi possivel encontrar nenhum evento com {{$search}} <a href="/">Ver todos</a></p>
    @elseif(count($events)== 0)
        <p>Não há eventos disponiveis</p>
    @endif
</div>



@endsection