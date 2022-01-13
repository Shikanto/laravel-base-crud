@extends('layouts.default')

@section('links')
<link href="{{ asset('css/app.css') }}" rel="stylesheet">  
<script src="{{ asset('js/app.js') }}"></script>  
@endsection
@include('partials.links')

@section('title', 'Modifica Comics')

@section('content')
    
    <div class="container my-4">
    <h2>Aggiornamento Comics</h2>
    
    <form action="{{ route("comics.update", $comic->id )}}" method="post">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="" class="form-label">Titolo Fumetto</label>
            <input type="text" class="form-control" name="title" 
            value="{{ old('title') ?? $comic->title}}">
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Descrizione/Trama</label>
            <input type="text" class="form-control" name="description"
            value="{{ old('description') ?? $comic->description}}">
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Copertina</label>
            <input type="text" class="form-control" name="thumb"
            value="{{ old('thumb') ?? $comic->thumb}}">
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Prezzo</label>
            <input type="text" class="form-control" name="price"
            value="{{ old('price') ?? $comic->price}}">
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Serie</label>
            <input type="text" class="form-control" name="series"
            value="{{ old('series') ?? $comic->series}}">
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Data di uscita</label>
            <input type="text" class="form-control" name="sale_date"
            value="{{ old('sale_date') ?? $comic->sale_date}}">
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Tipologia</label>
            <input type="text" class="form-control" name="type"
            value="{{ old('type') ?? $comic->type}}">
        </div>

        <div>
            <button class="btn btn-dark" type="reset">Reset</button>
            <button class="btn btn-success" type=submit>Salva Modifiche Fumetto</button>
        </div>
    </form>
@endsection