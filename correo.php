<?php 
$nombre=$_POST['nombre'];
$email=$_POST['email'];
$asunto=$_POST['asunto'];
$mensaje=$_POST['message'];

$texto_mail="Nombre: ".$nombre."\r\n"."email: ".$email."\r\n"."Asunto: ".$asunto."\r\n"."Mensaje: ".$mensaje;
$respuesta="From: $nombre $asunto <$email>";    

@mail("Javiercba_07@hotmail.com", "Mensaje enviado desde https://adp256.000webhostapp.com/Proyecto/index.php", $texto_mail, $respuesta);
$datos_bd=mysqli_connect("localhost", "root", "", "consultas");
mysqli_query($datos_bd, "INSERT INTO consultas VALUES(DEFAULT, '$nombre','$email','$asunto','$mensaje')");

header("Location: index.php?REE=ok#direct");
?>


