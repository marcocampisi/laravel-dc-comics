@extends('layouts.main')

@section('main-content')
    <div class="container">
        <div class="card">
            <div class="card-header">
                <h1>{{ $comic->title }}</h1>
            </div>
            <div class="card-body">
                <p><strong>Descrizione</strong> {{ $comic->description }}</p>
                <p><strong>Copertina:</strong></p>
                <img src="{{ $comic->thumb }}" alt="{{ $comic->title }}" class="img-fluid">
                <p><strong>Prezzo:</strong> ${{ $comic->price }}</p>
                <p><strong>Serie:</strong> {{ $comic->series }}</p>
                <p><strong>Data uscita:</strong> {{ $comic->sale_date }}</p>
                <p><strong>Tipo:</strong> {{ $comic->type }}</p>
                <p><strong>Artisti:</strong> {{ implode(', ', $comic->artists) }}</p>
                <p><strong>Scrittori:</strong> {{ implode(', ', $comic->writers) }}</p>
            </div>
        </div>
    </div>
@endsection
