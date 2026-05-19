@extends('layouts.monsters')

@section('title', 'Modifica i dati del mostro')

@section('content')

    <form action="{{ route('monsters.update', $monster) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="form-control mb-3 d-flex flex-column">
            <label for="name">Nome</label>
            <input type="text" name="name" id="name" value="{{ $monster->name }}">
        </div>

        <div class="form-control mb-3 d-flex gap-5">
            <div>

            </div>

            <div class="d-flex flex-column">
                <h6>immagine attuale</h6>
                <img src="{{ asset('storage/' . $monster->image) }}" alt="{{ $monster->name }}" class="img-fluid mb-3"
                    style="max-width: 250px;">

                <input id="image" name="image" type="file" accept="image/*">
            </div>

            <div id="new-image-box" class="d-none">
                <h6>Nuova immagine</h6>
                <img id="preview" class="img-fluid" style="max-width: 250px;">
            </div>
        </div>

        <div class="form-control mb-3 d-flex flex-column">
            <label for="monster_size_id">Taglia</label>
            <select name="monster_size_id" id="monster_size_id">
                @foreach ($sizes as $size)
                    <option value="{{ $size->id }}" {{ $monster->monster_size_id == $size->id ? "selected" : "" }}>
                        {{ $size->name }}
                    </option>
                @endforeach
            </select>
        </div>

        <label class="mb-3 text-center" for="types">Tipologie</label>
        <div class="d-flex flex-wrap gap-4 justify-content-center">
            @foreach ($types as $type)
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="types[]" value="{{ $type->id }}"
                        id="type-{{ $type->id }}" {{ $monster->types->contains($type->id) ? "checked" : "" }}>

                    <label class="form-check-label" for="type-{{ $type->id }}">
                        {{ $type->name }}
                    </label>
                </div>
            @endforeach
        </div>

        <div class="form-control mb-3 d-flex flex-column">
            <label for="description">Descrizione</label>
            <textarea name="description" id="description" width="100%" rows="5">{{ $monster->description }}</textarea>
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

                const box = document.getElementById('new-image-box');
                const preview = document.getElementById('preview');

                if (!file) {
                    box.classList.add('d-none');
                    preview.src = '';
                    return;
                }

                const reader = new FileReader();

                reader.onload = function (e) {
                    preview.src = e.target.result;
                    box.classList.remove('d-none');
                };

                reader.readAsDataURL(file);
            });
        </script>
    @endpush

@endsection