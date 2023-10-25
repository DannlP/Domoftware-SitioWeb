<!DOCTYPE html>
<html lang="es">

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contactos</title>


@include('plantillas.navinicio')

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<link rel="stylesheet" href="{{ asset('css/contact.css') }}">


    
<div class="container contact-form-container">
    <div class="row">
        <div class="col-md-6">
            <div class="text-center">
                <div class="contact-form-image" style="margin-top: -20px;">
                    <img src="{{ asset('png/cohete.png') }}" alt="rocket_contact" style="width: 100px; height: 100px;" />
                </div>
                <form method="post">
                    <h3>Envíanos un mensaje</h3>
                    <div class="form-group">
                        <input type="text" name="txtName" class="form-control" placeholder="Tu nombre *" value="" />
                    </div>
                    <div class="form-group">
                        <input type="text" name="txtEmail" class="form-control" placeholder="Tu email *" value="" />
                    </div>
                    <div class="form-group">
                        <input type="text" name="txtPhone" class="form-control" placeholder="Tu número telefónico *" value="" />
                    </div>
                    <div class="form-group">
                        <textarea name="txtMsg" class="form-control" placeholder="Tu mensaje *" style="width: 100%; height: 150px;"></textarea>
                    </div>
                    <div class="form-group">
                        <input type="submit" name="btnSubmit" class="btnContact" value="Enviar mensaje" />
                    </div>
                </form>
            </div>
        </div>
        <div class="col-md-6">
            <br>
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3986.194412545675!2d-76.60535142624508!3d2.4422072570939672!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e30030589955553%3A0xd69716d2be93c1df!2sSENA%20Centro%20De%20Comercio%20Y%20Servicios!5e0!3m2!1ses-419!2sco!4v1697755290355!5m2!1ses-419!2sco" width="530" height="530" style="border:0; border-radius: 15px;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                <h2 class="text-center">Horario de Atención</h2>
             <p class="text-center">Lunes a Sábado: 9:00 AM - 6:00 PM</p>       
    </div>
  </div>
</div>
    @include('plantillas.fooster')
    @include('plantillas.Animacion')


