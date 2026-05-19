@extends('layouts.monsterSizes')

@section('title', 'Inserisci i dati per la taglia che vuoi modificare')

@section('content')

    <form action="{{ route('monsterSizes.update', $monsterSize) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="form-control mb-3 d-flex flex-column">
            <label for="name">Nome</label>
            <input type="text" name="name" id="name" value="{{ $monsterSize->name }}">
        </div>

        <div class="form-control mb-3 d-flex flex-column">
            <label for="description">Descrizione</label>
            <textarea name="description" id="description" width="100%" rows="5">{{ $monsterSize->description }}</textarea>
        </div>

        <input class="btn btn-success" type="submit" value="Salva">

    </form>

    <div class="mt-3">
        <a class="btn btn-outline-primary" href="{{ route('monsterSizes.index') }}">Torna alle taglie</a>
    </div>

@endsection