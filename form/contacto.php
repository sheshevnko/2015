<?php 
$mensaje = $_POST['mensaje'];
$mensaje = "\n--------------\n";
$mensaje = "\nDe: ". $_POST['nombre'];
$mensaje = "\nE-mail: ". $_POST['email'];
$destino= "hola@lavidculiacan.com";
$remitente = $_POST['email'];
$asunto = "Mensaje enviado por: ". $_POST['nombre'];
$mensaje = "Mensaje: ". $_POST['mensaje'];
mail ($destino, $asunto, $mensaje, "FROM: $remitente");
echo "Mensaje enviado, gracias por contactarse"
?>