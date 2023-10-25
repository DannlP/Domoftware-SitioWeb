<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quiénes Somos</title>

    @include('plantillas.navinicio')
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/quienessomos.css') }}">


 
    <div class="bg-light">
<br>



    <div style="text-align: center;">
    <img src="{{ asset('equipo/Equipo.png') }}" alt="" class="img-fluid floating-image">
    <h1 class="font-weight-light animacion-texto"><i>PENSAMOS, DISEÑAMOS Y CONSTRUIMOS</i></h1>
    </div>
    <br>
    <br>

    <style>
    /* Quien Somos */
    .contenedor, .contenedord, .contenedords {
        position: relative;
    }

    #imagends {
        width: 700px;
        left: 600px;
        border-radius: 50%;
        position: relative;
        z-index: 1;
        transition: transform 0.3s ease-in-out;
    }

    .texto-ocultods, .texto-ocultod {
        position: absolute;
        top: 50%;
        left: 49%;
        transform: translate(-50%, -50%);
        color: #000000;
        padding: 10px;
        transition: transform 0.5s ease-in-out, opacity 0.5s ease-in-out;
        z-index: 0;
        opacity: 0;
    }

    /* Nuestra Misión */
    #imagend {
        width: 400px;
        left: 700px;
        position: relative;
        z-index: 1;
        transition: transform 0.3s ease-in-out;
    }

    /* Nuestro vision */
    #imagen {
        width: 450px;
        left: 160px;
        position: relative;
        z-index: 1;
        transition: transform 0.3s ease-in-out;
    }

    .texto-oculto {
        position: absolute;
        top: 50%;
        left: 29%;
        transform: translate(-50%, -50%);
        color: #000000;
        padding: 10px;
        transition: transform 0.5s ease-in-out, opacity 0.5s ease-in-out;
        z-index: 0;
        opacity: 0;
    }
</style>

<div class="contenedords">
        <img src="{{ asset('png/quienessomos2.png') }}" alt="Imagends" id="imagends">
        <div class="texto-ocultods font-italic text-muted mb-4" id="textods">
          <h2 class="display-4 font-weight-light">Quiénes Somos</h2>
          <p>Es liderar la industria<br>
          Descubre más sobre nuestra historia y nuestra pasión por lo que hacemos.<br>
          Conócenos mejor y descubre cómo podemos ayudarte a alcanzar tus metas.</p>
      </div>    
    </div>

<br>
<br>

    <div class="contenedord">
        <img src="{{ asset('png/quienessomos.png') }}" alt="Imagend" id="imagend">
        <div class="texto-ocultod font-italic text-muted mb-4" id="textod">
        <p style="text-align: right;">
          <h2 class="display-4 font-weight-light">Nuestra Misión</h2>
          <p> Es liderar la industria
          con una aplicación móvil y web innovadora<br>
          para el control eficiente del riego en cultivos,<br>
          priorizando la sostenibilidad y la satisfacción del usuario.</p>
      </div>    
    </div>

   
  
    <div class="contenedor">
        <img src="{{ asset('png/quienessomosvision.png') }}" alt="Imagen"  id="imagen">
        <div class="texto-oculto font-italic text-muted mb-4" id="texto">
        <h2 class="display-4 font-weight-light">Nuestra vision</h2>
        <p style="text-align: left;">Es liderar la industria con una aplicación móvil y web innovadora <br>
         para el control eficiente del riego en cultivos,<br>
        priorizando la sostenibilidad y la satisfacción del usuario.</p>
      </div>    
    </div>


  </div>
</div>

<div class="bg-light py-5">
  <div class="container py-5">
    <div class="row mb-4">
      <div class="col-lg-5">
        <h2 class="display-4 font-weight-light">Nuestro personal</h2>
        <p class="font-italic text-muted">Apasionado por lo que hacemos y con una amplia experiencia para brindarte soluciones excepcionales. Descubre cómo trabajamos juntos para ofrecerte lo mejor en cada proyecto. ¡Únete a nosotros!</p>
      </div>
    </div>


    <div class="row text-center">
      <div class="col-xl-3 col-sm-6 mb-5">
        <div class="bg-white rounded shadow-sm py-5 px-4"><img src="{{ asset('equipo/daniel.jpg') }}" alt="" width="100" class="img-fluid rounded-circle mb-3 img-thumbnail shadow-sm">
          <h5 class="mb-0">Daniel Lopez</h5><span class="small text-uppercase text-muted">Programador</span>
          <ul class="social mb-0 list-inline mt-3">
                <li class="list-inline-item"><a href="#" class="social-link"><i class="fab fa-facebook"></i></a></li>
                <li class="list-inline-item"><a href="#" class="social-link"><i class="fab fa-twitter"></i></a></li>
                <li class="list-inline-item"><a href="#" class="social-link"><i class="fab fa-instagram"></i></a></li>
                <li class="list-inline-item"><a href="#" class="social-link"><i class="fab fa-linkedin"></i></a></li>
          </ul>
        </div>
      </div>

      <div class="col-xl-3 col-sm-6 mb-5">
        <div class="bg-white rounded shadow-sm py-5 px-4"><img src="{{ asset('equipo/santiago.jpg') }}" alt="" width="100" class="img-fluid rounded-circle mb-3 img-thumbnail shadow-sm">
          <h5 class="mb-0">Santiago meneses</h5><span class="small text-uppercase text-muted">Documentador</span>
          <ul class="social mb-0 list-inline mt-3">
                <li class="list-inline-item"><a href="#" class="social-link"><i class="fab fa-facebook"></i></a></li>
                <li class="list-inline-item"><a href="#" class="social-link"><i class="fab fa-twitter"></i></a></li>
                <li class="list-inline-item"><a href="#" class="social-link"><i class="fab fa-instagram"></i></a></li>
                <li class="list-inline-item"><a href="#" class="social-link"><i class="fab fa-linkedin"></i></a></li>
          </ul>
        </div>
      </div>
    
      <div class="col-xl-3 col-sm-6 mb-5">
        <div class="bg-white rounded shadow-sm py-5 px-4"><img src="{{ asset('equipo/andres.jpg') }}" alt="" width="100" class="img-fluid rounded-circle mb-3 img-thumbnail shadow-sm">
          <h5 class="mb-0">Johan Enriquez</h5><span class="small text-uppercase text-muted">Programador</span>
          <ul class="social mb-0 list-inline mt-3">
                <li class="list-inline-item"><a href="#" class="social-link"><i class="fab fa-facebook"></i></a></li>
                <li class="list-inline-item"><a href="#" class="social-link"><i class="fab fa-twitter"></i></a></li>
                <li class="list-inline-item"><a href="#" class="social-link"><i class="fab fa-instagram"></i></a></li>
                <li class="list-inline-item"><a href="#" class="social-link"><i class="fab fa-linkedin"></i></a></li>
          </ul>
        </div>
      </div>

      <div class="col-xl-3 col-sm-6 mb-5">
        <div class="bg-white rounded shadow-sm py-5 px-4"><img src="{{ asset('equipo/yuliana.jpeg') }}" alt="" width="100" class="img-fluid rounded-circle mb-3 img-thumbnail shadow-sm">
          <h5 class="mb-0">Yuliana Morales</h5><span class="small text-uppercase text-muted">Documentador</span>
          <ul class="social mb-0 list-inline mt-3">
                <li class="list-inline-item"><a href="#" class="social-link"><i class="fab fa-facebook"></i></a></li>
                <li class="list-inline-item"><a href="#" class="social-link"><i class="fab fa-twitter"></i></a></li>
                <li class="list-inline-item"><a href="#" class="social-link"><i class="fab fa-instagram"></i></a></li>
                <li class="list-inline-item"><a href="#" class="social-link"><i class="fab fa-linkedin"></i></a></li>
          </ul>
        </div>
      </div>

    </div>
  </div>
</div>


<script src="{{ asset('js/quienessomos.js') }}"></script>


@include('plantillas.fooster')
@include('plantillas.Animacion')
