@extends('layouts.monsters')

@section('title', $monster->name)

@section('content')

    <div class="row">

        <div class="col-12 col-md-6 col-lg-4 mb-4">

            <img class="img-fluid" src="{{ asset('storage/' . $monster->image) }}" alt="{{ $monster->name }}">

        </div>



        <div class="col-12 col-md-6 col-lg-8 mb-4">

            <div class="mt-3 mb-2 d-flex gap-3">
                <a class="btn btn-outline-primary" href="{{ route('monsters.index') }}">Torna alla home</a>
                <a class="btn btn-outline-warning" href="{{ route('monsters.edit', $monster) }}">Modifica il mostro</a>
                <button type="button" class="btn btn-outline-danger" data-bs-toggle="modal" data-bs-target="#exampleModal">
                    Elimina il mostro
                </button>
            </div>

            @if ($monster->size)
                <h5>Taglia: {{ $monster->size?->name }}</h5>
                <p>{{ $monster->size?->description }}</p>

            @endif

            @if ($monster->types)
                @foreach ($monster->types as $type)
                    <h6>{{ $type->name }}</h6>
                    <p>{{ $type->description }}</p>
                @endforeach
            @endif

            <h5>Descrizione:</h5>
            <p>{{ $monster->description }}</p>

        </div>

    </div>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Elimina il mostro</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    Vuoi davvero eliminare il mostro?
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Annulla</button>
                    <form action="{{ route('monsters.destroy', $monster)}}" method="POST">
                        @csrf
                        @method('DELETE')
                        <input class="btn btn-outline-danger" type="submit" value="Elimina definitivamente">
                    </form>
                </div>
            </div>
        </div>
    </div>


@endsection