@extends('layouts.monsterSizes')

@section('title', 'Tutte le taglie disponibili')

@section('content')

    <div class="container py-4">

        <div class="mb-4 text-center d-flex justify-content-between">
            <a class="btn btn-outline-success px-4" href="{{ route('monsterSizes.create') }}">
                Aggiungi una nuova taglia
            </a>

            <a class="btn btn-outline-primary px-4" href="{{ route('monsters.index') }}">
                Torna ai mostri
            </a>

        </div>

        <div class="card shadow-sm">
            <div class="card-body p-0">

                <ul class="list-group list-group-flush">

                    @foreach ($monsterSizes as $size)
                        <li class="list-group-item d-flex justify-content-between align-items-center py-3 px-4">

                            <span class="fw-semibold fs-5">
                                {{ $size->name }}
                            </span>

                            <a class="btn btn-outline-secondary btn-sm" href="{{ route('monsterSizes.show', $size) }}">
                                Visualizza
                            </a>

                        </li>
                    @endforeach

                </ul>

            </div>
        </div>

    </div>

@endsection