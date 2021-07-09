@extends('layout.app')

@section('title', 'Comics Page DC Comics')

@section('content')


<section class="container">
    <div class="comics">
        @foreach($comics as $comic)
        <div class="comic_cards">
            <img src="{{$comic['thumb'] }}" alt="">
            {{ $comic['series']}}
        </div>
        @endforeach
    </div>
 
</section>


@endsection

