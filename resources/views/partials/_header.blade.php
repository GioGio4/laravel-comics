<header>

    <nav class="navbar bg-light">
        <div class="container">
          <a class="navbar-brand" href="{{route('home')}}">
            <img src="{{Vite::asset('resources/img/dc-logo.png')}}" alt="Bootstrap" width="50" height="50">
          </a>
          <ul class="nav">
            <li class="nav-item">
                <a class="nav-link" href="{{route('home')}}">HOME</a>
              </li>
            <li class="nav-item">
              <a class="nav-link" href="{{route('characters')}}">CHARACTERS</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{route('comics')}}">COMICS</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{route('movies')}}">MOVIES</a>
            </li>
          </ul>
        </div>
    </nav>

</header>