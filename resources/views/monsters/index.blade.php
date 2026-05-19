@extends('layouts.monsters')

@section('title', 'Tutti i mostri disponibili')

@section('content')

    <div class="container py-3">
        <div class="mb-4 d-flex justify-content-between">

            <a class="btn btn-outline-success" href="{{ route('monsters.create') }}">Aggiungi un nuovo mostro</a>
            <div>
                <a class="btn btn-outline-primary " href="{{ route('monsterSizes.index') }}">Vai alle taglie</a>
                <a class="btn btn-outline-primary " href="{{ route('monsterTypes.index') }}">Vai alle tipologie</a>
            </div>
        </div>
    </div>

    <div class="row">
        @foreach ($monsters as $monster)
            <div class="col-12 col-md-6 col-lg-4 mb-4">
                <div class="card p-3 h-100">
                    <h2 class="h5 text-center">
                        <a class="btn btn-outline-secondary" href="{{ route('monsters.show', $monster) }}">
                            {{ $monster->name }}
                        </a>
                    </h2>

                    <img class="img-fluid" src="{{ asset('storage/' . $monster->image) }}" alt="{{ $monster->name }}">
                </div>
            </div>
        @endforeach
    </div>


@endsection