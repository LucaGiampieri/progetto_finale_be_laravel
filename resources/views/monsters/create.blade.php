@extends('layouts.monsters')

@section('title', 'Inserisci i dati per il mostro che vuoi aggiungere')

@section('content')

    <form action="{{ route('monsters.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="form-control mb-3 d-flex flex-column">
            <label for="name">Nome</label>
            <input type="text" name="name" id="name">
        </div>

        <div class="form-control mb-3 d-flex flex-column">
            <img id="preview" class="mt-3 img-fluid d-none" style="max-width: 250px;">

            <label for="image">Immagine</label>
            <input id="image" name="image" type="file" accept="image/*">

        </div>

        <div class="form-control mb-3 d-flex flex-column">
            <label for="monster_size_id">Taglia</label>
            <select name="monster_size_id" id="monster_size_id">
                @foreach ($sizes as $size)
                    <option value="{{ $size->id }}">{{ $size->name }}</option>
                @endforeach
            </select>
        </div>

        <div class="form-control mb-3 d-flex flex-column">
            <label class="mb-3 text-center" for="types">Tipologie</label>
            <div class="d-flex flex-wrap gap-4 justify-content-center">
                @foreach ($types as $type)
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="types[]" value="{{ $type->id }}"
                            id="type-{{ $type->id }}">

                        <label class="form-check-label" for="type-{{ $type->id }}">
                            {{ $type->name }}
                        </label>
                    </div>
                @endforeach
            </div>
        </div>

        <div class="form-control mb-3 d-flex flex-column">
            <label for="description">Descrizione</label>
            <textarea name="description" id="description" width="100%" rows="5"></textarea>
        </div>

        <input class="btn btn-success" type="submit" value="Salva">

    </form>

    <div class="mt-3">
        <a class="btn btn-outline-primary" href="{{ route('monsters.index') }}">Torna alla home</a>
    </div>

    @push('scripts')
        <script>
            document.getElementById('image').addEventListener('change', function () {
                const file = this.files[0];

                if (!file) return;

                const reader = new FileReader();

                reader.onload = function (e) {
                    const preview = document.getElementById('preview');
                    preview.src = e.target.result;
                    preview.classList.remove('d-none');
                };

                reader.readAsDataURL(file);
            });
        </script>
    @endpush

@endsection