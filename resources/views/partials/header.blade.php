<header>
    
    <nav class="navbar d-flex justify-content-evenly">

        <img src="{{Vite::asset('resources/img/favicon.ico')}}" alt="logo">

        <ul class="nav">
            <li class="nav-item">
                @if ($active == 'characters')
                    <a class="nav-link active "  href="{{route('characters')}}">CHARACTERS</a>    
                @else
                    <a class="nav-link "  href="{{route('characters')}}">CHARACTERS</a>
                @endif
            </li>
            <li class="nav-item">
                @if ($active == 'home')
                    <a class="nav-link active" aria-current="page" href="{{route('comics')}}">COMICS</a>    
                @else
                    <a class="nav-link" aria-current="page" href="{{route('comics')}}">COMICS</a>
                @endif
            </li>
            <li class="nav-item">
                @if ($active == 'movies')
                    <a class="nav-link active" href="{{route('movies')}}">MOVIES</a>
                @else
                    <a class="nav-link" href="{{route('movies')}}">MOVIES</a>
                @endif
            </li>
            <li class="nav-item">
                @if ($active == 'tv')
                    <a class="nav-link active" href="{{route('tv')}}">TV</a>
                @else
                    <a class="nav-link" href="{{route('tv')}}">TV</a>
                @endif
            </li>
            <li class="nav-item">
                @if ($active == 'games')
                    <a class="nav-link active" href="{{route('games')}}">GAMES</a>
                @else
                    <a class="nav-link" href="{{route('games')}}">GAMES</a>
                @endif
            </li>
            <li class="nav-item">
                @if ($active == 'collectibles')
                    <a class="nav-link active" href="{{route('collectibles')}}">COLLECTIBLES</a>
                @else
                    <a class="nav-link" href="{{route('collectibles')}}">COLLECTIBLES</a>
                @endif
            </li>
            <li class="nav-item">
                @if ($active == 'videos')
                    <a class="nav-link active" href="{{route('videos')}}">VIDEOS</a>
                @else
                    <a class="nav-link" href="{{route('videos')}}">VIDEOS</a>
                @endif
            </li>
            <li class="nav-item">
                @if ($active == 'fans')
                    <a class="nav-link active" href="{{route('fans')}}">FANS</a>
                @else
                    <a class="nav-link" href="{{route('fans')}}">FANS</a>
                @endif
            </li>
            <li class="nav-item">
                @if ($active == 'news')
                    <a class="nav-link active"  href="{{route('news')}}">NEWS</a>
                @else
                    <a class="nav-link"  href="{{route('news')}}">NEWS</a>
                @endif
            </li>
            <li class="nav-item">
                @if ($active == 'shop')
                    <a class="nav-link active" href="{{route('shop')}}">SHOP</a>
                @else
                    <a class="nav-link" href="{{route('shop')}}">SHOP</a>
                @endif
            </li>
        </ul>
    </nav>

</header>