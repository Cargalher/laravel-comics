<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title', 'DC Comics')</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.1/css/all.css"
        integrity="sha384-O8whS3fhG2OnA5Kas0Y9l3cfpmYjapjI0E4theH4iuMD+pLhbf6JI0jIMfYcK3yZ" crossorigin="anonymous">
        <!-- Styles -->
        <link rel="stylesheet" href="{{asset('css/app.css')}}">
    </head>
    <body>
        <header id="site_header">
            <div class="top_header" class="container">
                    <a href="#">DC Power℠ Visa®</a>
                    <a href="#">Additional DC Sites ▼</a>
            </div>
            <div class="header_bottom container">
                <img src="{{asset('img/dc-logo.png')}}" alt="logo">
                    
                    <nav class="menu">
                        <a href="{{ route('characters') }}" class="{{ Route::currentRouteName() === 'characters' ? 'active' : '' }}">Character</a>
                        <a href="{{ route('comics') }}" class="{{ Route::currentRouteName() === 'comics' ? 'active' : '' }}">Comics</a>
                        <a href="{{ route('movies') }}" class="{{ Route::currentRouteName() === 'movies' ? 'active' : '' }}">Movies</a>
                        <a href="{{ route('tv') }}" class="{{ Route::currentRouteName() === 'tv' ? 'active' : '' }}">TV</a>
                        <a href="{{ route('games') }}" class="{{ Route::currentRouteName() === 'games' ? 'active' : '' }}">Games</a>
                        <a href="{{ route('collectibles') }}" class="{{ Route::currentRouteName() === 'collectibles' ? 'active' : '' }}">Collectibles</a>
                        <a href="{{ route('videos') }}" class="{{ Route::currentRouteName() === 'videos' ? 'active' : '' }}">Videos</a>
                        <a href="{{ route('fans') }}" class="{{ Route::currentRouteName() === 'fans' ? 'active' : '' }}">Fans</a>
                        <a href="{{ route('news') }}" class="{{ Route::currentRouteName() === 'news' ? 'active' : '' }}">News</a>
                        <a href="{{ route('shop') }}" class="{{ Route::currentRouteName() === 'shop' ? 'active' : '' }}">Shop</a>
                    </nav>
            </div>        
            <div class="jumbotron" style="height:460px;">
    
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
                   <img src="{{asset('img/buy-comics-merchandise.png')}}" alt="logo">
                    <span>Digital Comics</span>
               </div>
               <div class="top_footer_content container">
                   <img src="{{asset('img/buy-comics-subscriptions.png')}}" alt="logo">
                    <span>Digital Comics</span>
               </div>
               <div class="top_footer_content container">
                   <img src="{{asset('img/buy-comics-shop-locator.png')}}" alt="logo">
                    <span>Digital Comics</span>
               </div>
               <div class="top_footer_content container">
                   <img src="{{asset('img/buy-dc-power-visa.svg')}}" alt="logo">
                    <span>Digital Comics</span>
               </div>
                
            </section>
            <section class="middle_footer" >
                <div class="container">
                    <div class="menu_col ">
                        <div>
                            <h5>Dc comics</h5>
                            <ul>
                                <li>Characters</li>
                                <li>Comics</li>
                                <li>Movies</li>
                                <li>TV</li>
                                <li>Games</li>
                                <li>Videos</li>
                                <li>News</li>
                            </ul>
                            <h5>Shop</h5>
                            <ul>
                                <li>Shop DC</li>
                                <li>Shop DC Collectibles</li>
                            </ul>
                        
                        </div>

                        <div>
                            <h5>Dc</h5>
                            <ul>
                                <li>Terms of use</li>
                                <li>Privacy Policy(New)</li>
                                <li>Ad Choices</li>
                                <li>Advertising</li>
                                <li>Jobs</li>
                                <li>Subscriptions</li>
                                <li>Talent Workshops</li>
                                <li>CPSC Certificates</li>
                                <li>Ratings</li>
                                <li>Shop Help</li>
                                <li>Contact us</li>
                            </ul>
                            
                                
                        </div>

                        <div>
                        <h5>Sites</h5>
                        <ul>
                                <li>DC</li>
                                <li>MAD Magazine</li>
                                <li>DC Kids</li>
                                <li>DC Universe</li>
                                <li>DC Power Visa</li>
                            </ul>
                        </div>
                    </div>
                    <p>All Site Content TM and <i class="far fa-copyright"></i> 2020 DC Entertainment, unless otherwise <a href="#">noted here</a>. All rigths reserved. <br><a href="#">Cookies Settings</a></p>
                    <div class="big_logo">
                        <img src="{{asset('img/dc-logo-bg.png')}}" style="height:365px;" alt="big logo">
                    </div>
                </div>
                
            </section>
            <section class="bottom_footer">
                <div class="container bottom_footer_display">
                    <div>
                        <button>Sign-up now</button>
                    </div>
                    <div>
                        <ul>
                            <li>Follow us</li>
                            <li><i class="fab fa-facebook"></i></li>
                            <li><i class="fab fa-twitter"></i></li>
                            <li><i class="fab fa-youtube"></i></li>
                            <li><i class="fab fa-pinterest"></i></li>
                            <li><i class="fab fa-pinterest"></i></li>
                        </ul>
                    </div>
                </div>
            </section>
        </footer>
          
    </body>
</html>