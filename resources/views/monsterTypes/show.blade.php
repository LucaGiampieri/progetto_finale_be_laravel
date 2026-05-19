@extends('layouts.monsterTypes')

@section('title', $monsterType->name)

@section('content')

    <div class="container py-5">

        <div class="row justify-content-center">

            <div class="col-12 col-lg-8">

                <div class="card border-0 shadow-lg">

                    <div class="card-body p-4 p-lg-5">

                        <div class="d-flex flex-wrap gap-3 justify-content-between mb-5">

                            <div>
                                <a class="btn btn-outline-warning px-4"
                                    href="{{ route('monsterTypes.edit', $monsterType) }}">
                                    Modifica
                                </a>

                                <button type="button" class="btn btn-outline-danger px-4" data-bs-toggle="modal"
                                    data-bs-target="#exampleModal">
                                    Elimina
                                </button>
                            </div>

                            <div>
                                <a class="btn btn-outline-primary px-4" href="{{ route('monsterTypes.index') }}">
                                    Torna alle tipologie
                                </a>

                                <a class="btn btn-outline-primary px-4" href="{{ route('monsters.index') }}">
                                    Torna ai mostri
                                </a>
                            </div>

                        </div>

                        <div class="mb-4">

                            <h4 class="border-bottom pb-2 mb-3 fw-semibold">
                                Nome della tipologia
                            </h4>

                            <p class="fs-5 mb-0">
                                {{ $monsterType->name }}
                            </p>

                        </div>

                        <div>

                            <h4 class="border-bottom pb-2 mb-3 fw-semibold">
                                Descrizione
                            </h4>

                            <p class="text-muted lh-lg mb-0">
                                {{ $monsterType->description }}
                            </p>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">

        <div class="modal-dialog modal-dialog-centered">

            <div class="modal-content border-0 shadow">

                <div class="modal-header">

                    <h1 class="modal-title fs-5" id="exampleModalLabel">
                        Elimina la taglia
                    </h1>

                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                    </button>

                </div>

                <div class="modal-body">

                    Vuoi davvero eliminare la taglia
                    <strong>{{ $monsterType->name }}</strong>?

                </div>

                <div class="modal-footer">

                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                        Annulla
                    </button>

                    <form action="{{ route('monsterTypes.destroy', $monsterType) }}" method="POST">

                        @csrf
                        @method('DELETE')

                        <input class="btn btn-danger" type="submit" value="Elimina definitivamente">

                    </form>

                </div>

            </div>

        </div>

    </div>

@endsection