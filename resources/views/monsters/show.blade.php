@extends('layouts.monsters')

@section('title', $monster->name)

@section('content')

    <div class="row">

        <div class="col-12 col-md-6 col-lg-4 mb-4">

            <img class="img-fluid" src="{{ asset('storage/' . $monster->image) }}" alt="{{ $monster->name }}">

        </div>



        <div class="col-12 col-md-6 col-lg-8 mb-4">
            <h5>Taglia: {{ $monster->size->name }}</h5>
            <p>{{ $monster->size->description }}</p>

            @foreach ($monster->types as $type)
                <h6>{{ $type->name }}</h6>
                <p>{{ $type->description }}</p>
            @endforeach

            <h5>Descrizione:</h5>
            <p>{{ $monster->description }}</p>

            <a href="{{ route('monsters.index') }}">Torna alla home</a>

        </div>

    </div>


@endsection