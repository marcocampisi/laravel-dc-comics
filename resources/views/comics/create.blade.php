@extends('layouts.main')

@section('main-content')
    <div class="container">
        <h1>Create Comic</h1>
        <form method="post" action="{{ route('comics.store') }}">
            @csrf
            <div class="form-group">
                <label for="title">Titolo:</label>
                <input type="text" name="title" id="title" class="form-control">
            </div>
            <div class="form-group">
                <label for="description">Descrizione:</label>
                <textarea name="description" id="description" class="form-control"></textarea>
            </div>
            <div class="form-group">
                <label for="thumb">Thumbnail:</label>
                <input type="text" name="thumb" id="thumb" class="form-control">
            </div>
            <div class="form-group">
                <label for="price">Prezzo:</label>
                <input type="text" name="price" id="price" class="form-control">
            </div>
            <div class="form-group">
                <label for="series">Serie:</label>
                <input type="text" name="series" id="series" class="form-control">
            </div>
            <div class="form-group">
                <label for="sale_date">Data vendita:</label>
                <input type="date" name="sale_date" id="sale_date" class="form-control">
            </div>
            <div class="form-group">
                <label for="type">Tipo:</label>
                <input type="text" name="type" id="type" class="form-control">
            </div>
            <div class="form-group">
                <label for="artists">Artisti (separati da virgole):</label>
                <input type="text" name="artists" id="artists" class="form-control">
            </div>
            <div class="form-group">
                <label for="writers">Scrittori (separati da virgole):</label>
                <input type="text" name="writers" id="writers" class="form-control">
            </div>
            <button type="submit" class="btn btn-primary">Crea Comic</button>
        </form>
    </div>
@endsection
