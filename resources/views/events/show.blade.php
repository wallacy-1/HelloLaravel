@extends('layouts.main')

@section('title', $event-> title)

@section('content')
<div class="col-md-10 offset-md-1 p-1">
    <div class="row">
        <div class="col-md-6">
            <img src="/img/events/{{ $event->image }}" class="img-fluid rounded-3" alt="{{ $event->title }}">
            <div id="description-container">
                <h3>Sobre o evento:</h3>
                <p class="event-description">{{ $event->description }}</p>
            </div>
        </div>
        <div id="info-container" class="col-md-6">
            <h1>{{ $event->title }}</h1>
            <p class="event-city">
                <ion-icon name="location-outline"></ion-icon> {{ $event->city }}
            </p>
            <p class="event-owner">
                <ion-icon name="alarm-outline"></ion-icon> Data do evento: {{date('d/m/Y', strtotime($event->date))}}
            </p>
            <p class="events-participants">
                <ion-icon name="people-outline"></ion-icon> X Participantes
            </p>
            <p class="event-owner">
                <ion-icon name="star-outline"></ion-icon> Dono do Evento
            </p>
            <a href="#" class="btn btn-primary" id="event-submit">Confirmar Presença</a>
            <div>
                <h3>O evento conta com:</h3>
                <ul id="items-list">
                    @foreach($event -> items as $item)
                    <li>
                        <ion-icon name="play-outline"></ion-icon><span>{{ $item }}</span>
                    </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
</div>
@endsection