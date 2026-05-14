<?php 

$nombre = $_POST['nombre'];
$email = $_POST['email'];
$telefono = $_POST['telefono'];
$ayuda = $_POST['ayuda'];
$mensaje = $_POST['mensaje'];

if (empty($nombre) || empty($email) || empty($telefono) || empty($ayuda) ) {
    echo '<script>
    alert("Favor de llenar todos los campos");
    window.history.back();
    </script>';
  }
/*
    $headers = 'From: '.$email."\r \n";
    $para = 'sugerencias@casareca.com';
    $para = 'hola@casareca.com';
    $asunto = 'STARGUD';
    
    $mensaje = "Nombre: ".$nombre;
    $mensaje = "Email: ".$email;
    $mensaje = "Teléfono: ".$telefono;
    $mensaje = "¿Cómo podemos ayudarte? ".$ayuda;
    $mensaje = "Déjanos tu mensaje: ".$mensaje;
    
    mail($para, $asunto, utf8_decode($mensaje), $headers);
   /*/ 
   echo '<div class="alert alert-success alert-dismissible fade show d-block m-auto" role="alert" style="width:300px; border-radius:20px">
    Mensaje enviado con éxito.
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
  </div>';