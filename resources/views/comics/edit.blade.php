@extends('layouts.main')

@section('page-title', 'Modifica ' . $comic->title)

@section('main-content')
    <div class="container">

        <h1 class="text-center fw-bolder my-4">
            Modifica {{ $comic->title }}
        </h1>

        <div class="row">
            <div class="col bg-light py-4 rounded">
                <form action="{{ route('comics.update', ['comic' => $comic->id]) }}" method="POST">
                    @csrf
                    @method('PUT')

                    <div class="mb-3">
                        <label for="src" class="form-label fw-bold">Thumb</label>
                        <input type="text" maxlength="1024" class="form-control" id="thumb" name="thumb"
                            placeholder="Enter value..." value="{{ $comic->thumb }}">
                    </div>

                    <div class="mb-3">
                        <label for="title" class="form-label fw-bold">Titolo</label>
                        <input type="text" maxlength="128" class="form-control" id="title" name="title"
                            placeholder="Enter value..." required value="{{ $comic->title }}">
                    </div>

                    <div class="mb-3">
                        <label for="type" class="form-label fw-bold">Tipo</label>
                        <input type="text" maxlength="16" class="form-control" id="type" name="type"
                            placeholder="Enter value..." required value="{{ $comic->type }}">
                    </div>

                    <div class="mb-3">
                        <label for="price" class="form-label fw-bold">Prezzo</label>
                        <input type="number" class="form-control" id="price" name="price"
                            placeholder="Enter value..." value="{{ $comic->price }}">
                    </div>

                    <div class="mb-3">
                        <label for="series" class="form-label fw-bold">Serie</label>
                        <input type="text" maxlength="128" class="form-control" id="series" name="series"
                            placeholder="Enter value..." required value="{{ $comic->series }}">
                    </div>

                    <div class="mb-3">
                        <label for="sale_date" class="form-label fw-bold">Data uscita</label>
                        <input type="date" class="form-control" id="sale_date" name="sale_date"
                            placeholder="Enter value..." required value="{{ $comic->sale_date }}">
                    </div>

                    <div class="mb-3">
                        <label for="artists" class="form-label fw-bold">Artisti (separati da virgola)</label>
                        <input type="text" maxlength="1024" class="form-control" id="artists" name="artists"
                            placeholder="Enter value..." required
                            value="{{ is_array($comic->artists) ? implode(', ', $comic->artists) : $comic->artists }}">
                    </div>

                    <div class="mb-3">
                        <label for="writers" class="form-label fw-bold">Scrittori (separati da virgola)</label>
                        <input type="text" maxlength="1024" class="form-control" id="writers" name="writers"
                            placeholder="Enter value..." required
                            value="{{ is_array($comic->artists) ? implode(', ', $comic->artists) : $comic->artists }}">
                    </div>

                    <div class="mb-3">
                        <label for="description" class="form-label fw-bold">Descrizione</label>
                        <textarea class="form-control" id="description" name="description" rows="3">{{ $comic->description }}</textarea>
                    </div>

                    <div>
                        <button type="submit" class="btn btn-warning">
                            Aggiorna
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
