<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>


@include('plantillas.navinicio')

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">

<link rel="stylesheet" href="{{ asset('css/inicio.css') }}">

<video autoplay muted loop id="video-background">
        <source src="{{ asset('videos/video3.mp4') }}" type="video/mp4">
        Tu navegador no admite videos HTML5.
    </video>




<script>
    @if($errors->has('error'))
        $(document).ready(function() {
            $('#loginModal').modal('show');
        });
    @endif
</script>



    <h1>Tu Jardín Inteligente</h1>




    <div id="hora-actual"></div>
    <div id="fecha"></div>

<br>
<div class="container text-center"> 
    <img src="{{ asset('images/Icono2.png') }}" alt="Tu Logo" class="logo pulse-animation">
</div>
<br>
<br>



    
<script src="{{ asset('js/Home_priv.js') }}"></script>



@include('plantillas.fooster')
@include('plantillas.Animacion')
