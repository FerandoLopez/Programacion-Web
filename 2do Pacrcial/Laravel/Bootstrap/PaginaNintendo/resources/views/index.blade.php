@extends('plantilla')
@section('content')

<main>

    <div class="img-fluid">
      <img src="./images/kirby.webp" alt="" width="100%" height="100%" />
      <br /><br />
    </div>
    <div class="container">
      <div class="row justify-content-md-center">
        <div class="col col-lg-2">
          <h2>Reservalo ya</h2>
        </div>
        <div class="col col-lg-3">
          <h2>Mas información ></h2>
        </div>
        <div class="col col-lg-3">
          <img src="./images/es-e10.svg" alt="" />
          Violencia de caricatura.
          <br /><br />
        </div>
      </div>
      <div>
        <br />
        <h1>Explora las consolas de videojuegos</h1>
      </div>
      <div class="img-fluid">
        <img
          src="./images/2296x680_ExploreGamingSystems_ES.webp"
          alt=""
          width="100%"
          height="100%"
        />
      </div>
      <div>
        <br />
        <h1>Novedades</h1>
      </div>
    </div>
    <div class="container">
      <div class="row justify-content-md-center">
        <div class="col-lg-6">
          <div class="card mb-6">
            <img
              src="./images/rf5.jpg"
              class="card-img-top"
              alt="..."
              height="340px"
            />
            <div class="card-body">
              <h5 class="card-title">
                Embárcate en una gran aventura en Rune Factory 5.
              </h5>
              <p class="card-text">
                En el tranquilo pueblo fronterizo de Rigbarth, el equilibrio de
                la paz ha empezado a perderse. Unos misteriosos eventos han
                causado cambios en las runas que rigen el equilibrio entre la
                humanidad y la naturaleza.
              </p>
              <p class="card-text">
                <small class="text-muted"><br />22/03/22</small>
              </p>
            </div>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="card mb-6">
            <img src="./images/dlc mk8.jpg" class="card-img-top" alt="..." />
            <div class="card-body">
              <h5 class="card-title">
                ¡La primera ola ya está disponible! Compite a través del Centro
                Cocotero y otras pistas de contenido descargable que fueron
                recientemente agregadas al juego Mario Kart 8 Deluxe.
              </h5>
              <p class="card-text">
                ¡Prepárense, pilotos! Ocho pistas remasterizadas han sido
                agregadas al juego Mario Kart™ 8 Deluxe. A partir de hoy podrás
                competir en la Copa Turbo Dorada y la Copa Felina Fortuna.
              </p>
              <p class="card-text">
                <small class="text-muted">18/03/22</small>
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
</main>
@endsection