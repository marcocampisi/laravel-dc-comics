@extends('layouts.main')

@section('page-title')
    Comic Index
@endsection

@section('main-content')
    <div class="container">
        <div class="row">
            <div class="col">
                <h1 class="text-center my-4 fw-bolder">Comic Index</h1>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-12">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Titolo</th>
                            <th scope="col">Prezzo</th>
                            <th scope="col">Tipo</th>
                            <th scope="col">Azioni</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($comics as $comic)
                            <tr>
                                <th scope="row">{{ $comic->id }}</th>
                                <td>{{ $comic->title }}</td>
                                <td>{{ $comic->price }}$</td>
                                <td>{{ ucfirst($comic->type) }}</td>
                                <td>
                                    <a href="{{ route('comics.show', ['comic' => $comic->id]) }}"
                                        class="btn btn-primary mx-2">
                                        Vedi
                                    </a>
                                    <a href="{{ route('comics.edit', ['comic' => $comic->id]) }}"
                                        class="btn btn-warning mx-2">
                                        Modifica
                                    </a>
                                    <form action="{{ route('comics.destroy', ['comic' => $comic->id]) }}"
                                        class="d-inline-block mx-2" method="POST"
                                        onsubmit="return confirm('Sei sicuro di voler cancellare questo elemento?');">
                                        @csrf
                                        @method('DELETE')

                                        <button type="submit" class="btn btn-danger">
                                            Elimina
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <div class="mb-4 text-center">
                <a href="{{ route('comics.create') }}" class="btn btn-success">
                    Aggiungi
                </a>
            </div>
        </div>
    </div>
@endsection
