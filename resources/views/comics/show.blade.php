@extends('layout.app')

@section('title', 'Comic Page DC Comics')

@section('jumbotron-comics')
    <div class="jumbotron-comics">
    
    </div>
@endsection

@section('content')

<div class="show_bg">
    <div class="bg_brand">

    </div>
    <section class="container bg_comics">
    <div class="comics">
        
        <div class="comic_cards comic_card_show">
            <img src="{{$comic['thumb'] }}" alt="" class="img_show">
            <h2>{{$comic['title']}}</h2>
            
           <p>US.Price: $ {{$comic['price']}} </p>
           <p> {{$comic['description']}}</p>


        </div>
    </div>
    
 
</section>


</div>


@endsection
