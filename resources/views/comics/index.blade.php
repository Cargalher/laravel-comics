@extends('layout.app')

@section('title', 'Comics Page DC Comics')

@section('content')


<section class="container bg_comics">
    <div class="comics">
        @foreach($comics as $comic)
        <div class="comic_cards">
            <img src="{{$comic['thumb'] }}" alt="">
            {{ $comic['series']}}
        </div>
        @endforeach
    </div>
    <div class="button">
        <button>Load More</button>
    </div>
    
 
</section>


@endsection

