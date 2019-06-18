<?php
#Entrada
$id = $_post["id"];
$nom =$_POST["nombres"];
$ape =$_POST["apellidos"];
$dni =$_POST["dni"];
$fech =$_POST["fechanac"];
$dir =$_POST["direccion"];
$tel =$_POST["telefono"];
$cor =$_POST["correo"];

#Proceso
$pdo = new PDO('mysql:host=localhost;dbname=dup;charset=utf8mb4','root','');
$pdo -> query("UPDATE usuarios SET nombres = '$nom', apellidos = '$ape', dni = '$dni', fecha_nacimiento = '$fech', direccion = '$dir', telefono = '$tel', correo = '$cor' WHERE id = '$id'");

#Salida
header("Location: usuarios.php");