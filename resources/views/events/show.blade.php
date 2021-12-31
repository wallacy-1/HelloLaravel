@extends('layouts.main')

@section('title', $event-> title)

@section('content')
<div class="col-md-10 offset-md-1 p-1">
    <div class="row">
        <div class="col-md-6">
            <img src="/img/events/{{ $event->image }}" class="img-fluid rounded-3" alt="{{ $event->title }}">
            <div id="description-container" class="mt-2">
                <h3>Sobre o evento:</h3>
                <p class="event-description">{{ $event->description }}</p>
            </div>
        </div>
        <div id="info-container" class="col-md-6 d-xl-flex justify-content-xl-between">
            <div>
                <h1>{{ $event->title }}</h1>
                <p class="event-city">
                    <ion-icon name="location-outline"></ion-icon> {{ $event->city }}
                </p>
                <p class="event-owner">
                    <ion-icon name="alarm-outline"></ion-icon> Data do evento: {{date('d/m/Y', strtotime($event->date))}}
                </p>
                <p class="events-participants">
                    <ion-icon name="people-outline"></ion-icon> {{ count($event->users) }} Participantes
                </p>
                <p class="event-owner">
                    <ion-icon name="star-outline"></ion-icon> {{$eventOwner['name']}}
                </p>
                <form action="/events/join/{{ $event->id }}" method="post">
                    @csrf
                    <a href="/events/join/{{ $event->id }}" class="btn btn-primary" id="event-submit" onclick="event.preventDefault(); this.closest('form').submit();">Confirmar Presença</a>
                </form>
            </div>
            <div class="mt-3">
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