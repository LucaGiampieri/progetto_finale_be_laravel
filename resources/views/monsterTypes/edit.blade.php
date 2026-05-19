@extends('layouts.monsterTypes')

@section('title', 'Inserisci i dati per la tipologia che vuoi modificare')

@section('content')

    <form action="{{ route('monsterTypes.update', $monsterType)}}" method="POST">
        @csrf
        @method('PUT')

        <div class="form-control mb-3 d-flex flex-column">
            <label for="name">Nome</label>
            <input type="text" name="name" id="name" value="{{ $monsterType->name }}">
        </div>

        <div class="form-control mb-3 d-flex flex-column">
            <label for="description">Descrizione</label>
            <textarea name="description" id="description" width="100%" rows="5">{{ $monsterType->description }}</textarea>
        </div>

        <input class="btn btn-success" type="submit" value="Salva">

    </form>

    <div class="mt-3">
        <a class="btn btn-outline-primary" href="{{ route('monsterTypes.index') }}">Torna alle tipologie</a>
    </div>

@endsection