<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title', 'DC Comics')</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">

        <!-- Styles -->
        <link rel="stylesheet" href="{{asset('css/app.css')}}">
    </head>
    <body>
        <header id="site_header">
            <div class="top_header" class="container">
                    <a href="#">DC Power℠ Visa®</a>
                    <a href="#">Additional DC Sites ▼</a>
            </div>
            <div class="header_bottom" class="container">
                    <img src="{{asset('img/dc-logo.png')}}" alt="logo">
                    
                    <nav class="menu">
                        <a href="{{ route('characters') }}">Character</a>
                        <a href="{{ route('comics') }}">Comics</a>
                        <a href="{{ route('movies') }}">Movies</a>
                        <a href="#">TV</a>
                        <a href="#">Games</a>
                        <a href="#">Collectibles</a>
                        <a href="#">Videos</a>
                        <a href="#">Fans</a>
                        <a href="#">News</a>
                        <a href="#">Shop</a>
                    </nav>
                    <div>

                    </div>
            </div>
                

            
        </header>
        <main id="site_main">
            @yield('content')
           
        </main>
        <footer id="site_footer">
           <section class="top_footer">
               <div class="top_footer_content container">
                   <img src="{{asset('img/buy-comics-digital-comics.png')}}" alt="logo">
                    <span>Digital Comics</span>
               </div>
               <div class="top_footer_content container">
                   <img src="{{asset('img/buy-comics-digital-comics.png')}}" alt="logo">
                    <span>Digital Comics</span>
               </div>
               <div class="top_footer_content container">
                   <img src="{{asset('img/buy-comics-digital-comics.png')}}" alt="logo">
                    <span>Digital Comics</span>
               </div>
               <div class="top_footer_content container">
                   <img src="{{asset('img/buy-comics-digital-comics.png')}}" alt="logo">
                    <span>Digital Comics</span>
               </div>
               <div class="top_footer_content container">
                   <img src="{{asset('img/buy-comics-digital-comics.png')}}" alt="logo">
                    <span>Digital Comics</span>
               </div>
                
           </section>
           <section class="middle_footer"></section>
           <section class="bottom_footer"></section>
        </footer>
          
    </body>
</html>