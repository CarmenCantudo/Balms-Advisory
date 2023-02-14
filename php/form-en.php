<?php
header("Content-type: text/html;charset=\"utf-8\"");
$nombre = $_POST['name'];
$apellido = $_POST['surname'];
$email = $_POST['email'];
$compañia = $_POST['company'];
$posicion = $_POST['jobposition'];
$telefono = $_POST['telefono'];
$direccion = $_POST['address'];
$localidad = $_POST['city'];
$provincia = $_POST['county'];
$codigopostal = $_POST['postcode'];
$pais = $_POST['country'];
$mensajeweb = $_POST['mensaje'];

$header = 'From: ' . $email . " \r\n";
$header .= "X-Mailer: PHP/" . phpversion() . " \r\n";
$header .= "Mime-Version: 1.0 \r\n";
$header .= "Content-Type: text/plain";

$mensaje = "Formulario de contacto - Balms Advisory:\n\n";
$mensaje .= "Nombre: " . $nombre . "\n";
$mensaje .= "Apellido: " . $apellido . "\n";
$mensaje .= "Email: " . $email . "\n";
$mensaje .= "Compania / Organizacion: " . $compañia . "\n";
$mensaje .= "Cargo: " . $posicion . "\n";
$mensaje .= "Telefono: " . $telefono . "\n";
$mensaje .= "Dirección: " . $direccion . "\n";
$mensaje .= "Localidad: " . $localidad . "\n";
$mensaje .= "Provincia: " . $provincia . "\n";
$mensaje .= "Codigo postal: " . $codigopostal . "\n";
$mensaje .= "Pais: " . $pais . "\n";
$mensaje .= "Mensaje: " . $mensajeweb . " \r\n";
$mensaje .= "Enviado el " . date('d/m/Y', time());

$para = 'mail@balmsadvisory.com';
$asunto = 'Mensaje web Balms Advisory';

if (mail($para, $asunto, utf8_decode($mensaje), $header))
echo "<script type='text/javascript'>alert('Your message has been sent successfully');</script>";
echo "<script type='text/javascript'>window.location.href='http://www.balmsadvisory.com/en';</script>";


?>