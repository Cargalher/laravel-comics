@extends('layout.app')

@section('title', 'Comic Page DC Comics')

@section('jumbotron-comics')
    <div class="jumbotron-comics">
    
    </div>
@endsection

@section('content')

<div class="comic_description">
    <div class="bg_brand">

    </div>
    <section class="container bg_comics">
    <div class="comics">
        
        <div class="comic_card_show">

            <img src="{{$comic['thumb'] }}" alt="" class="img_show">

            <div class="container_comic_description">
                <div class="left_description">
                    <h2>{{$comic['title']}}</h2>
                    <p class="price">US.Price: $ {{$comic['price']}} </p>
                    <p class="desc"> {{$comic['description']}}</p>
                </div>
                <div class="img_description">
                    <img src="{{asset('img/adv.jpg')}}" alt="logo" class="adv_img">
                </div>
            </div>
            


        </div>
    </div>
    
 
</section>
<div class="artists">
        <div class="talent">
            <h3>Talent</h3>
            <div class="border_tp">Art by: <p style="color:#0282F9">Artist Name from database</p>  </div> 
            <div  class="border_tp">Writen by:<p style="color:#0282F9"> Writers from database</p>  </div>
        </div>  
        <div class="specs">
            <h3>Specs</h3>
            <div class="border_tp">Series: <span style="color: #0282F9; text-transform:uppercase">{{$comic['series']}}</span></div> 
            <div  class="border_tp">US.Price: <span>{{$comic['price']}}</span></div>
            <div class="border_tp">On Sale Date: <span>{{$comic['sale_date']}}</span></div>
        </div>  
        
</div>
<div class="digital_shop">
    <div class="side_border">Digital comics</div>
    <div class="side_border">Shop DC</div>
    <div class="side_border">Comic shop locator</div>
    <div class="side_border">Subscriptions</div>
</div>


@endsection
