<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DOMOFTWARE</title>
    <link rel="icon" href="{{ asset('images/icono2.png') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/nav.css') }}">
</head>
<body>

<div class="container-fluid bg-custom-navbar sticky-top" style="z-index: 2;">
    <nav class="navbar navbar-expand-md navbar-dark bg-custom-navbar container">
            <a class="navbar-brand" href="{{ route('privada') }}">
                <img src="images/icono2.png" width="30" height="30" class="d-inline-block align-top" alt=""> 
                Domoftware
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto">
        <li class="nav-item">
            <a class="nav-link" href="{{ route('privada') }}">Home</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('contacto') }}">Contactos</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('quienes_somos') }}">Quiénes Somos</a>
        </li>

        @if (auth()->check())

        <button class="open-btn px-2" onclick="openSidebar()" style="outline: none;">
  <img src="{{ asset('images/configuraciones.png') }}" alt="Menú" class="img-small">
</button>


<button class="btn btn-danger btn-xs ml-2 mr-2 float-right" onclick="window.location.href='{{ route('logout') }}'" style="cursor: pointer;">
  <i class="fas fa-sign-out-alt"></i> Salir
</button>




@else
<button class="btn btn-customized ml-3 custom-hover-button" data-toggle="modal" data-target="#loginModal" style="outline: none;">
    <i class="fas fa-user"></i> Hola, identifícate
</button>

@endif

            </div>
        </nav>
    </div>
        

    
  
    </ul>
</div>





@if (auth()->check())

  <!-- Sidebar -->
  <div id="mySidebar" class="sidebar">
    
    <div class="containeruser">
  <img src="images/iconouser.png" alt="Icono" class="icon-image">

  <h5>{{ Auth::user()->name }}</h5>
 <h5>{{ Auth::user()->email }}</h5>
 
</div>

<div class="containeropciones">
    <div class="sidebar-content">
  <div style="font-size: 18px; margin-left: 10px;">Arduino</div>
  <a href="#" onclick="redirigirAVista1()" style="font-size: 14px;"><i class="fas fa-eye"></i> Streaming</a>
  <a href="{{ route('arduino') }}" onclick="redirigirAVista1()" style="font-size: 14px;"><i class="fas fa-book"></i> Historial</a>
 
  <div style="font-size: 18px; margin-left: 10px;">Configuraciones</div>
  @if(Auth::user()->id_cargo == 1)
  <a href="{{ route('privada_admin') }}" style="font-size: 14px;"><i class="fas fa-user"></i> Administrar</a>
  @endif
  <a href="{{ route('profile.show') }}" style="font-size: 14px;"><i class="fas fa-cog"></i> Mas opciones</a>
</div>
</div>

<div class="button-container">
  <button class="siderbar-button" onclick="closeSidebar()">
  <i class="fas fa-arrow-left"></i>
  </button>
</div>
</div>
</div>

@endif
    <div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="loginModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">


        <div class="modal-content">
       
            <div class="modal-header">
            
        <article class="fondo">
          <img src="{{ asset('images/icono3.png') }}" alt="User">

          <h5 class="modal-title custom-centered" id="loginModalLabel">
  <span class="animation-text">Bienvenido</span>
</h5>    

@error('error')
    <div style="text-align: center; padding: 9px; background-color: #f8d7da; border: 1px solid #f5c6cb; color: #721c24; ">
        {{ $message }}
    </div>
@enderror
            </div>
            <div class="modal-body">
            
    
                <ul class="nav nav-tabs" id="myTab" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" id="login-tab" data-toggle="tab" href="#login" role="tab" aria-controls="login" aria-selected="true">Iniciar Sesión</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="register-tab" data-toggle="tab" href="#register" role="tab" aria-controls="register" aria-selected="false">Registro</a>
                    </li>
                </ul>
                <div class="tab-content" id="myTabContent">
<!-- Formulario de Iniciar Sesión -->

                    <div class="tab-pane fade show active" id="login" role="tabpanel" aria-labelledby="login-tab">
    <form method="POST" action="{{ route('iniciar-sesión') }}" enctype="multipart/form-data">
        <br>
        @csrf
        <div class="form-group">
            <label for="email"><i class="fas fa-envelope"></i> Email:</label>
            <input type="email" class="form-control" id="email" name="email" placeholder="correo@example.com *" required>
        </div>
        <div class="form-group">
            <label for="password"><i class="fas fa-lock"></i> Contraseña:</label>
            <input type="password" class="form-control" id="password" name="password" placeholder="example123 *" required minlength="8">
            <br>
            <a href="{{ route('password.request') }}" class="forgot-password-link">¿Olvidaste tu contraseña?</a>
        </div>
        <button type="submit" class="boton" id="login">Iniciar Sesión</button>
        <br>
        <br>
        
    </form>
</div>


<!-- Formulario de Registro -->
<div class="tab-pane fade" id="register" role="tabpanel" aria-labelledby="register-tab">
    <form method="POST" action="{{ route('validar-registro') }}" enctype="multipart/form-data">
        <br>
        @csrf
        <div class="form-group">
            <label for="new-username"><i class="fas fa-user"></i> Nombre de Usuario:</label>
            <input type="text" class="form-control" id="new-username" name="name" required placeholder="Usuario123 *" required>
        </div>
        <div class="form-group">
            <label for="new-email"><i class="fas fa-envelope"></i> Email:</label>
            <input type="email" class="form-control" id="emailInput" name="email" placeholder="correo@example.com *" required>
        </div>
        <div class="form-group">
            <label for="new-password"><i class="fas fa-lock"></i> Contraseña:</label>
            <input type="password" class="form-control" id="passwordInput" name="password" placeholder="example123 *" requiredrequired minlength="8">
        </div>
        <!-- <div class="form-group">
            <label for="profile-picture">Foto de Perfil:</label>
            <input type="file" class="form-control-file" id="profile-picture" name="profile-picture">
        </div> -->
        <button type="submit" class="boton" id="register"-button"">Registrarse</button>
        <br>
        <br>
    </form>
    </article>

</div>

                </div>
            </div>
        </div>
    </div>
</div>

<div class="navbar-divider sticky-top" style="z-index: 1;"></div>



            </div>
            </div>
        </div>
    </div>


    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>

    <style>
        #scrollToTopBtn {
            transition: transform 0.3s; 
        }

        #scrollToTopBtn:hover {
            transform: scale(1.5); 
        }
    </style>

<button id="scrollToTopBtn" class="btn btn- rounded-circle position-fixed" 
        style="bottom: 20px; right: 20px; display: none; background-color: #1e5c54;">
        <i class="fas fa-arrow-up"></i>
    </button>

  <script src="{{ asset('js/Plantillanav.js') }}"></script>




</body>
</html>
