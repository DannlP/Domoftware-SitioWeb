
 // Funcion para abrir el sidebar
 function openSidebar() {
  document.getElementById("mySidebar").style.width = "250px";
  document.getElementById("mySidebar").style.left = "0"; 
}

// Funcion para cerrar el sidebar
function closeSidebar() {
  document.getElementById("mySidebar").style.width = "0";
  document.getElementById("mySidebar").style.left = '-250px'; 
  document.querySelector('.open-btn').style.display = 'block';
}

// inicio de sesión y el registro

  $(document).ready(function () {
    $("#login-button").click(function () {
        var username = $("#username").val();
        var password = $("#password").val();
    });

    // registro
    $("#register-button").click(function () {
        var newUsername = $("#new-username").val();
        var newPassword = $("#new-password").val();
    });
});




function previewProfilePhoto() {
    var input = document.getElementById('profilePhoto');
    var preview = document.getElementById('profilePhotoPreview');

    if (input.files && input.files[0]) {
        var reader = new FileReader();

        reader.onload = function(e) {
            preview.src = e.target.result;
            preview.style.display = 'block';
        };

        reader.readAsDataURL(input.files[0]);
    }
}

function redirigirAVista1() {
console.log('Redirigiendo a sensores');
window.location.href = 'sensores'; 
}




 // Cuando se desplaza la página, mostrar u ocultar el botón
 window.onscroll = function () {
    scrollFunction();
  };

  function scrollFunction() {
    if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
      document.getElementById("scrollToTopBtn").style.display = "block";
    } else {
      document.getElementById("scrollToTopBtn").style.display = "none";
    }
  }

  // Cuando se hace clic en el botón, desplazarse al principio de la página
  document.getElementById("scrollToTopBtn").addEventListener("click", function () {
    document.body.scrollTop = 0; // Para Safari
    document.documentElement.scrollTop = 0; // Para Chrome, Firefox, IE y Opera
  });



  
//Funcion para buscar en el la Vista Privada_admin //

  // Función para buscar
  $("#searchBtn").click(function () {
    var value = $("#search").val().toLowerCase();
    $("table tr").filter(function () {
        $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
});


//Animacion del iniciar seccion en//
$(document).ready(function () {
  var $text = $(".animation-text");
  
  function restartAnimation() {
    $text.removeClass("typing");
    void $text[0].offsetWidth; // Reiniciar la animación
    $text.addClass("typing");
  }

  setInterval(restartAnimation, 3000); // Reiniciar cada 3 segundos
});




$(document).ready(function () {
  $('#login-tab').on('click', function () {
      $('#register').removeClass('active');
      $('#login').addClass('active');
  });

  $('#register-tab').on('click', function () {
      $('#login').removeClass('active');
      $('#register').addClass('active');
  });

  $('#login-button').on('click', function () {
      $('#loginModal').modal('hide');
  });

  $('#register-button').on('click', function () {
      $('#loginModal').modal('hide');
  });
});
