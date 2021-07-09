@extends('layout.app')

@section('title', 'Comics Page DC Comics')

@section('content')
<h1>Comics page</h1>

@foreach($comics as $comic)
    <div class="comic">
    <img src="{{$comic['thumb'] }}" alt="">
        {{ $comic['series']}}
    </div>

@endforeach









@endsection