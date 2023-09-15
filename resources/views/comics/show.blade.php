@extends('layouts.main')

@section('page-title', $comic->title)

@section('main-content')
    <div class="container">
        <div class="card">
            <div class="card-header">
                <h1>{{ $comic->title }}</h1>
            </div>
            <div class="card-body">
                <p><strong>Descrizione</strong> {{ $comic->description }}</p>
                <p><strong>Copertina:</strong></p>
                <img src="{{ $comic->thumb }}" alt="{{ $comic->title }}" class="w-25">
                <p><strong>Prezzo:</strong> ${{ $comic->price }}</p>
                <p><strong>Serie:</strong> {{ $comic->series }}</p>
                <p><strong>Data uscita:</strong> {{ $comic->sale_date }}</p>
                <p><strong>Tipo:</strong> {{ $comic->type }}</p>
                <p><strong>Artisti:</strong>{{ implode(', ', json_decode($comic->artists)) }}</p>
                <p><strong>Scrittori:</strong>{{ implode(', ', json_decode($comic->writers)) }}</p>
            </div>
        </div>
    </div>
@endsection
