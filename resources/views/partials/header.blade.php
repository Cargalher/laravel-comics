<header id="site_header">
            
            <div class="top_header">
                <div class="container display_top_header">
                    <a href="#">DC Power℠ Visa®</a>
                    <a  href="#">Additional DC Sites ▼</a>
                </div>
                    
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
                    <a href="{{ route('shop') }}" class="{{ Route::currentRouteName() === 'shop' ? 'active' : '' }}">Shop <i class="fas fa-sort-down"></i></a>
                </nav>
                <div class="input_search">
                    <input type="search" name="" id="search_ip" placeholder="Search">
                    <i class="fas fa-search"></i>
                </div>
                
            </div>        
            <div class="jumbotron" style="height:460px;">
    
            </div>
           
        </header>