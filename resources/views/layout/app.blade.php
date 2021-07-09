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
            <div class="header_bottom">
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
            <div class="jumbotron">
    Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ea amet nostrum quis et, quaerat nisi, dolorem alias officiis voluptates, atque saepe omnis asperiores doloremque earum commodi beatae vero ipsa provident enim porro? Voluptatum accusamus explicabo sint nulla impedit aliquid iure consectetur quas, minima inventore. Quae voluptatibus architecto dolor qui iure placeat, a aperiam temporibus exercitationem dicta iste excepturi obcaecati veniam. Cumque cum aliquam quis, a veritatis quibusdam molestias mollitia dolore sequi deserunt perferendis quo similique suscipit magnam provident tempore iure nisi autem animi repellat, tenetur nostrum voluptatem. Quas, quis eum. Non totam ipsam alias recusandae repellat, quidem ab animi tenetur et sint modi! Repudiandae, atque voluptatem? Quae quidem assumenda autem dolorum sunt quis quam nihil! Doloremque, id. Similique soluta exercitationem minus aliquam veniam repellat, numquam eaque sit fugiat tempora facilis perspiciatis at ab eius placeat! Voluptas dolore saepe reprehenderit ullam dolorem, suscipit aliquam debitis laudantium. Distinctio voluptas incidunt at qui doloribus ullam sequi soluta illo unde dolores. Neque molestiae numquam ad? Corrupti eum earum excepturi enim. Soluta id quam illum, eos reprehenderit repudiandae dicta magnam perferendis ullam temporibus voluptatibus. Eligendi harum temporibus nulla tempora. Obcaecati, incidunt! Autem blanditiis suscipit ex quis nisi dolores qui nesciunt modi ipsam, voluptatem id magnam!
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
           <section class="middle_footer"></section>
           <section class="bottom_footer"></section>
        </footer>
          
    </body>
</html>