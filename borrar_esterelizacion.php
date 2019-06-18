<?php
#Entrada

$id = $_POST["id"];


#Proceso

$db = new PDO('mysql:host=localhost;dbname=dameunapata;charset=utf8mb4','root','');
$stmt =  $db ->query("DELETE FROM esterelizacion WHERE id='$id'");



#Salida

header("Location: esterelizacion.php");



?>