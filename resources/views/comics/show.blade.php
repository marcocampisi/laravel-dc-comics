@extends('layouts.main')

@section('page-title', $comic->title)

@section('main-content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-6">
                <div class="card">
                    <img src="{{ $comic->thumb }}" class="card-img-top w-50 mx-auto" alt="{{ $comic->title }}">
                    <div class="card-body">
                        <h3 class="card-title">{{ $comic->title }}</h5>
                            <p class="card-text">{{ $comic->description }}.</p>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item"><strong>Prezzo:</strong> {{ $comic->price }}$</li>
                        <li class="list-group-item"><strong>Data uscita:</strong> {{ $comic->sale_date }}</li>
                        <li class="list-group-item"><strong>Tipo:</strong> {{ $comic->type }}</li>
                        <li class="list-group-item"><strong>Artisti:</strong>
                            {{ implode(', ', json_decode($comic->artists)) }}</li>
                        <li class="list-group-item"><strong>Scrittori:</strong>
                            {{ implode(', ', json_decode($comic->writers)) }}</li>
                    </ul>
                </div>
                <a href="/comics" class="btn btn-primary my-4 d-block">Torna all'indice</a>
            </div>
        </div>
    </div>
@endsection
