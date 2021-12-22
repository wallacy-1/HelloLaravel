@extends('layouts.main')

@section('title', 'Eventos')

@section('content')

    <div id="event-create-container" class="col-md-6 offset-md-3">
        <h1>Crie um evento</h1>
        <form action="/events" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group p-2">
                <label for="image">imagen:</label>
                <input type="file" class="form-control" id="image" name="image">
            </div>
            <div class="form-group p-2">
                <label for="title">Evento:</label>
                <input type="text" name="title" id="title" class="form-control" placeholder="Nome do evento">
            </div>
            <div class="form-group p-2">
                <label for="city">Cidade:</label>
                <input type="text" name="city" id="city" class="form-control" placeholder="Local do evento">
            </div>
            <div class="form-group p-2">
                <label for="private">O evento e Privado ?</label>
                <select name="private" id="private" class="form-control">
                    <option selected disabled>Selecione uma opção</option>
                    <option value="0">Não</option>
                    <option value="1">Sim</option>
                </select>
            </div>
            <div class="form-group p-2">
                <label for="description">Descrição:</label>
                <textarea name="description" id="description" class="form-control" placeholder="O que vai acontecer no evento ?"></textarea>
            </div>
            <div class="form-group p-2">
                <input type="submit" value="Criar Evento" class="btn btn-primary">
                <input type="reset" value="Limpar" class="btn btn-primary">
            </div>
        </form>
    </div>

@endsection