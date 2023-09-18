@extends('layouts.main')

@section('main-content')
    <div class="container w-75">
        <h1 class="fw-bolder my-4">Create Comic</h1>
        <form method="post" action="{{ route('comics.store') }}">
            @csrf
            <div class="form-group mb-2">
                <label for="title">Titolo:</label>
                <input type="text" name="title" id="title" class="form-control">
                @error('title')
                    <div class="alert alert-danger mt-2">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group mb-2">
                <label for="description">Descrizione:</label>
                <textarea name="description" id="description" class="form-control"></textarea>
                @error('description')
                    <div class="alert alert-danger mt-2">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group mb-2">
                <label for="thumb">Thumbnail:</label>
                <input type="text" name="thumb" id="thumb" class="form-control">
                @error('thumb')
                    <div class="alert alert-danger mt-2">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group mb-2">
                <label for="price">Prezzo:</label>
                <input type="text" name="price" id="price" class="form-control">
                @error('price')
                    <div class="alert alert-danger mt-2">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group mb-2">
                <label for="series">Serie:</label>
                <input type="text" name="series" id="series" class="form-control">
                @error('series')
                    <div class="alert alert-danger mt-2">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group mb-2">
                <label for="sale_date">Data vendita:</label>
                <input type="date" name="sale_date" id="sale_date" class="form-control">
                @error('sale-date')
                    <div class="alert alert-danger mt-2">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group mb-2">
                <label for="type">Tipo:</label>
                <input type="text" name="type" id="type" class="form-control">
                @error('type')
                    <div class="alert alert-danger mt-2">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group mb-2">
                <label for="artists">Artisti (separati da virgole):</label>
                <input type="text" name="artists" id="artists" class="form-control">
                @error('artists')
                    <div class="alert alert-danger mt-2">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group mb-2">
                <label for="writers">Scrittori (separati da virgole):</label>
                <input type="text" name="writers" id="writers" class="form-control">
                @error('writers')
                    <div class="alert alert-danger mt-2">{{ $message }}</div>
                @enderror
            </div>
            <button type="submit" class="btn btn-primary mt-4">Crea Comic</button>
        </form>
    </div>
@endsection
