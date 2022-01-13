@extends('layouts.default')

@section('title', 'ComicsCreateForm')
@section('links')
<link href="{{ asset('css/app.css') }}" rel="stylesheet">  
<script src="{{ asset('js/app.js') }}"></script>  
@endsection
@include('partials.links')
    
@section('content')
    
    <div class="container my-4">
    <h2>Nuovo comic</h2>
    
    <form action="{{ route("comics.store" )}}" method="post">
        @csrf

        <div class="mb-3">
            <label for="" class="form-label">Titolo Fumetto</label>
            <input type="text" class="form-control" name="title">
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Descrizione/Trama</label>
            <input type="text" class="form-control" name="description">
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Copertina</label>
            <input type="text" class="form-control" name="thumb">
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Prezzo</label>
            <input type="text" class="form-control" name="price">
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Serie</label>
            <input type="text" class="form-control" name="series">
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Data di uscita</label>
            <input type="text" class="form-control" name="sale_date">
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Tipologia</label>
            <input type="text" class="form-control" name="type">
        </div>

        <div>
            <button class="btn btn-dark" type="resete">Reset</button>
            <button class="btn btn-success" type=submit>Inserisci Fumetto</button>
        </div>
    </form>
@endsection