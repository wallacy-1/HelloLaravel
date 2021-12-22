@extends('layouts.main')
@section('title','home')

@section('content')

<div id="banner-search" class="col-md-12">
    <h1>Busque um evento</h1>
    <form action="">
        <input type="search" id="search" class="form-control" placeholder="Procurar...">
    </form>
</div>

<h5 class="p-3">Veja os eventos dos próximos dias</h5>

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
                <p class="card-text"> X Participantes</p>
                <a href="/events/{{$event -> id}}" class="btn btn-primary">Saber mais</a>
            </div>
            <div class="card-footer">
                <small class="text-muted">Dia: 10/12/2022</small>
            </div>
        </div>
    </div>
    @endforeach
</div>



@endsection