<header>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
      <div class="container-fluid">
        <a class="navbar-brand" href="{{route('i')}}"
          ><img
            src="./images/Nintendo-Logo.png"
            alt=""
            width="200px"
            height="70px"
        /></a>
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navbarNav"
          aria-controls="navbarNav"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link" href="{{route('j')}}">Juegos</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{route('e')}}">Equipo</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{route('n')}}">Noticias</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
</header>