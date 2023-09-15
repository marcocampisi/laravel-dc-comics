@extends('layouts.main')

@section('page-title', 'Modifica ' . $comic->title)

@section('main-content')
    <div class="container">
        <div class="row">
            <div class="col">
                <h1>
                    Modifica {{ $comic->title }}
                </h1>
            </div>
        </div>

        <div class="row">
            <div class="col bg-light py-4">
                <form action="{{ route('comics.update', ['comic' => $comic->id]) }}" method="POST">
                    @csrf
                    @method('PUT')

                    <div class="mb-3">
                        <label for="src" class="form-label">Src</label>
                        <input type="text" maxlength="1024" class="form-control" id="src" name="src"
                            placeholder="Enter value..." value="{{ $comic->src }}">
                    </div>

                    <div class="mb-3">
                        <label for="title" class="form-label">Titolo</label>
                        <input type="text" maxlength="128" class="form-control" id="title" name="title"
                            placeholder="Enter value..." required value="{{ $comic->title }}">
                    </div>

                    <div class="mb-3">
                        <label for="type" class="form-label">Tipo</label>
                        <input type="text" maxlength="16" class="form-control" id="type" name="type"
                            placeholder="Enter value..." required value="{{ $comic->type }}">
                    </div>

                    <div class="mb-3">
                        <label for="cooking_time" class="form-label">Prezzo</label>
                        <input type="number" min="1" max="15" class="form-control" id="cooking_time"
                            name="cooking_time" placeholder="Enter value..." value="{{ $comic->price }}">
                    </div>

                    <div class="mb-3">
                        <label for="weight" class="form-label">Serie</label>
                        <input type="number" min="100" max="5000" class="form-control" id="weight"
                            name="weight" placeholder="Enter value..." required value="{{ $comic->series }}">
                    </div>

                    <div class="mb-3">
                        <label for="weight" class="form-label">Data uscita</label>
                        <input type="number" min="100" max="5000" class="form-control" id="weight"
                            name="weight" placeholder="Enter value..." required value="{{ $comic->sale_date }}">
                    </div>

                    <div class="mb-3">
                        <label for="weight" class="form-label">Artisti (separati da virgola)</label>
                        <input type="number" min="100" max="5000" class="form-control" id="weight"
                            name="weight" placeholder="Enter value..." required value="{{ $comic->artists }}">
                    </div>

                    <div class="mb-3">
                        <label for="weight" class="form-label">Scrittori (separati da virgola)</label>
                        <input type="number" min="100" max="5000" class="form-control" id="weight"
                            name="weight" placeholder="Enter value..." required value="{{ $comic->writers }}">
                    </div>

                    <div class="mb-3">
                        <label for="description" class="form-label">Descrizione</label>
                        <textarea class="form-control" id="description" name="description" rows="3">{{ $comic->description }}</textarea>
                    </div>

                    <div>
                        <button type="submit" class="btn btn-warning w-100">
                            Aggiorna
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
