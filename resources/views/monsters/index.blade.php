@extends('layouts.monsers')

@section('title', 'Tutti i mostri disponibili')

@section('content')

    <div class="row">
        @foreach ($monsters as $monster)
            <div class="col-12 col-md-6 col-lg-4 mb-4">
                <div class="card p-3 h-100">
                    <h2 class="h5 text-center">{{ $monster->name }}</h2>

                    <img class="img-fluid" src="{{ asset('storage/' . $monster->image) }}" alt="{{ $monster->name }}">
                </div>
            </div>
        @endforeach
    </div>


@endsection