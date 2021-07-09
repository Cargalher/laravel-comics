@extends('layout.app')

@section('title', 'Comics Page DC Comics')

@section('content')
<h1>Comics page</h1>


<section class="comics container">
    @foreach($comics as $comic)
        <div class="comic_cards container">
            <img src="{{$comic['thumb'] }}" alt="">
            {{ $comic['series']}}
        </div>
    @endforeach
</section>









@endsection