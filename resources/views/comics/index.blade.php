@extends('layouts.default')

@section('title', 'Comics')

@section('content')
    <h2>Main Comics</h2>
    <div class="container">
    <h2>Lista Comics</h2>
    <a class="btn btn-link" href="{{ route('comics.create') }}">Aggiungi fumetto...</a>
    <ul>
        @foreach ($comics as $info_comics)
            <li><a href="{{ route("comics.show", $info_comics->id) }}">{{$info_comics->title}}</a></li>   
        @endforeach
    </ul>
    </div>
@endsection