@extends('layout.app')

@section('title', 'Comic Page DC Comics')

@section('jumbotron-comics')
    <div class="jumbotron-comics">
    
    </div>
@endsection

@section('content')


<section class="container bg_comics">
    <div class="comics">
        
        <div class="comic_cards">
            <img src="{{$comic['thumb'] }}" alt="">
            {{ $comic['series']}}
        </div>
       
    </div>
    
    
 
</section>


@endsection
