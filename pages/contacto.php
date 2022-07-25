<?php

//Defino variables para guardar información del formulario que se enviará por mail
$nombreCto = $_POST['Nombre'];
$apellidoCto = $_POST['Apellido'];
$telefonoCto = $_POST['Telefono'];
$emailCto = $_POST['Correo'];
$ConsultaCto = $_POST['Consulta'];

$header = 'From: ' . $emailCto . ",\r\n";
$header .= "X-Mailer: PHP/" . phpversion() . ",\r\n";
$header .= "Mime-Version: 1.0 \r\n";
$header .= "Content-Type: text/plain";

//Defino el cuerpo del mail
$mensajeContacto = "El nombre de quien envió el formulario es: " . $nombreCto . ",\r\n";
$mensajeContacto .= " Su apellido es: " . $apellidoCto . ",\r\n";
$mensajeContacto .= "Su teléfono es: " . $telefonoCto . ",\r\n";
$mensajeContacto .= "Su correo electrónico es: " . $emailCto . ",\r\n";
$mensajeContacto .= "La consulta realizada es: " . $_POST['Consulta'] . ",\r\n";
$mensajeContacto .= "Enviado el: " . date ('d,m,Y', time());

//Defino los datos del destinatario
$destinatario = 'mariocba150@gmail.com';
$asunto = 'Consulta realizada en Elec Córdoba';

//Ejecuto las funciones
mail ($destinatario, $asunto, utf8_decode($mensajeContacto), $header);
header("Location:mensaje.html");

?>