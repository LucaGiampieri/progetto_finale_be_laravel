@extends('layouts.monsterTypes')

@section('title', 'Tutte le tipologie disponibili')

@section('content')

    <div class="container py-4 ">

        <div class="mb-4 d-flex justify-content-between">
            <a class="btn btn-outline-success px-4" href="{{ route('monsterTypes.create') }}">
                Aggiungi una nuova tipologia
            </a>

            <a class="btn btn-outline-primary px-4" href="{{ route('monsters.index') }}">
                Torna ai mostri
            </a>

        </div>

        <div class="card shadow-sm">
            <div class="card-body p-0">

                <ul class="list-group list-group-flush">

                    @foreach ($monsterTypes as $type)
                        <li class="list-group-item d-flex justify-content-between align-items-center py-3 px-4">

                            <span class="fw-semibold fs-5">
                                {{ $type->name }}
                            </span>

                            <a class="btn btn-outline-secondary btn-sm" href="{{ route('monsterTypes.show', $type) }}">
                                Visualizza
                            </a>

                        </li>
                    @endforeach

                </ul>

            </div>
        </div>

    </div>

@endsection