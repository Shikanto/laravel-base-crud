@extends('layouts.default')

@section('title', 'ComicsShow')

@section('content')
    <h2>Main Show</h2>
    <div class="container">
        <h2 class="mb-3">Singolo fumetto</h2>
        <h3 class="mb-3">Comics: {{$comic->title}}</h3>
        <h3 class="mb-3">Description: {{$comic->description}}</h3>
        <h3 class="mb-3">Price: ${{$comic->price}}</h3>
        <h3 class="mb-3">Series: {{$comic->series}}</h3>
        <h3 class="mb-3">Sale_date: {{$comic->sale_date}}</h3>
        <h3 class="mb-3">Type: {{$comic->type}}</h3>
        <img src="{{ $comic->thumb}}" alt="copertina">
@endsection