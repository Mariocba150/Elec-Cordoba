<?php

$nombrePresup = $_POST['presupuestoNombre'];
$apellidoPresup = $_POST['presupuestoApellido'];
$telefonoPresup = $_POST['presupuestoTelefono'];
$emailPresup = $_POST['presupuestoCorreo'];
$tipoInstalacion = $_POST['instalacion'];
$tipoReparacion = $_POST['reparacion'];
$tipoCertificacion = $_POST['certificacion'];
$circuitoMono = $_POST['monofasica'];
$circuitoTri = $_POST['trifasica'];
$conMateriales = $_POST['conMateriales'];
$sinMateriales = $_POST['sinMateriales'];
$trabajoDetalles = $_POST['presupuestoDetalles'];

$mensajePresupuesto = "Este mensaje fue enviado por " . $nombrePresup . $apellidoPresup . ",\r\n";
$mensajePresupuesto .= "Su teléfono es: " . $telefonoPresup . ",\r\n";
$mensajePresupuesto .= "Su correo electrónico es: " . $emailPresup . ",\r\n";
$mensajePresupuesto .= "El tipo de trabajo a realizar es una instalación?" . $tipoInstalacion . ",\r\n";
$mensajePresupuesto .= "El tipo de trabajo a realizar es una reparación?" . $tipoReparacion . ",\r\n";
$mensajePresupuesto .= "El tipo de trabajo a realizar es una certificación?" . $tipoCertificacion . ",\r\n";
$mensajePresupuesto .= "El tipo de circuito es monofásico? " . $circuitoMono . ",\r\n";
$mensajePresupuesto .= "El tipo de circuito es trifásico? " . $circuitoTri . ",\r\n";
$mensajePresupuesto .= "El cliente incluye materiales?" . $conMateriales . ",\r\n";
$mensajePresupuesto .= "El cliente no incluye materiales?" . $sinMateriales . ",\r\n";
$mensajePresupuesto .= "El trabajo a realizar es: " . $_POST['presupuestoDetalles'] . ",\r\n";
$mensajePresupuesto .= "Enviado el: " . date ('d,m,Y', time());

$destinatario = 'mariocba150@gmail.com';
$asunto = 'Solicitud de Presupuesto Elec Córdoba';

mail ($destinatario, $asunto, utf8_decode($mensajePresupuesto), header)
header('Location:../pages/mensaje.html');

?>