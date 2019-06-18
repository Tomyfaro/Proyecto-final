<?php
$nombres = $_POST["no"];
$apellidos = $_POST["ap"];
$direccion = $_POST["di"];
$telefono = $_POST["te"];
$fecha = $_POST["fe"];
$dni = $_POST["dni"];
$correo = $_POST["co"];
$escivil = $_POST["es"];
$ocupacion = $_POST["oc"];
$centrotra = $_POST["ce"];

$pdo = new PDO("mysql:host=localhost; dbname=dup; charset=utf8", "root","");

$sql = "INSERT INTO informacion VALUES (NULL, '$nombres','$apellidos','$direccion', '$telefono', '$fecha', '$dni', '$correo', '$escivil', '$ocupacion', '$centrotra')";

$pdo->query($sql);

header("Location: lista_postulante.php");

?>