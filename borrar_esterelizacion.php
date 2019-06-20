<?php
#Entrada

$id = $_POST["id"];


#Proceso

$db = new PDO('mysql:host=localhost;dbname=dup;charset=utf8mb4','root','');
$stmt =  $db ->query("DELETE FROM esterilizacion WHERE id='$id'");



#Salida

header("Location: lista_esterelizacion.php");



?>