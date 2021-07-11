@extends('layout.app')

@section('title', 'Comics Page DC Comics')

@section('jumbotron-comics')
    <div class="jumbotron-comics">
    
    </div>
@endsection

@section('content')


<section class="container bg_comics">
    <div class="comics">
        @foreach($comics as $index => $comic)
        <div class="comic_cards">
           
            <a href="{{route('comic', ['id' => $index])}}">
                <img src="{{$comic['thumb'] }}" alt="">
                {{ $comic['series']}}
            </a>
        </div>
        @endforeach
    </div>
    <div class="button">
        <button>Load More</button>
    </div>
   
 
</section>


@endsection

