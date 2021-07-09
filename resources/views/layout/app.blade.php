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
                    <span> DC POWER VISA</span>
                    <span>ADDITIONAL DC SITES</span>
            </div>
            <div class="header_bottom" class="container">
                    <img src="{{asset('img/dc-logo.png')}}" alt="logo">
                    
                    <nav class="menu">
                        <a href="#">Character</a>
                        <a href="#">Comics</a>
                        <a href="#">Movies</a>
                        <a href="#">TV</a>
                        <a href="#">Games</a>
                        <a href="#">Collectibles</a>
                        <a href="#">Videos</a>
                        <a href="#">Fans</a>
                        <a href="#">News</a>
                        <a href="#">Shop</a>
                    </nav>
            </div>
                

            
        </header>
        <main id="site_main">
            @yield('content')
            <section class="jumbotron">
                    this is the jumbotron part
            </section>
            <section class="card"></section>
            <section class="info_main"></section>
        </main>
        <footer id="site_footer" class="container">Footer content</footer>
          
    </body>
</html>