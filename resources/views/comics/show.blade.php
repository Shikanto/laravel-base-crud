@extends('layouts.default')
@section('links')
<link href="{{ asset('css/app.css') }}" rel="stylesheet">  
<script src="{{ asset('js/app.js') }}"></script>  
@endsection

@section('title', 'ComicsShow')

@section('content')
    <h2>Main Show</h2>
    <div class="container" style="margin: 100px auto; width: 900px">
        <h2 style="margin-bottom: 50px">Singolo fumetto</h2>
        <h3 style="margin-bottom: 50px">Comics: {{$comic->title}}</h3>
        <h3 style="margin-bottom: 50px">Description: {{$comic->description}}</h3>
        <h3 style="margin-bottom: 50px">Price: ${{$comic->price}}</h3>
        <h3 style="margin-bottom: 50px">Series: {{$comic->series}}</h3>
        <h3 style="margin-bottom: 50px">Sale date: {{$comic->sale_date}}</h3>
        <h3 style="margin-bottom: 50px">Type: {{$comic->type}}</h3>
        <img src="{{ $comic->thumb}}" alt="copertina">
@endsection