@extends('layouts.default')

@section('links')
<link href="{{ asset('css/app.css') }}" rel="stylesheet">  
<script src="{{ asset('js/app.js') }}"></script>  
@endsection

@section('title', 'Comics')

@section('content')
    
    <div class="container" style="margin: 100px auto; width: 900px">
        <h2>Lista Comics</h2>
        <a class="btn btn-link" href="{{ route('comics.create') }}">Aggiungi fumetto...</a>
        <ul>
            @foreach ($comics as $info_comics)
                <li><a href="{{ route("comics.show", $info_comics->id) }}">{{$info_comics->title}}</a></li>   
            @endforeach
        </ul>
    </div>
@endsection