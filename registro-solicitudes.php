<?php
$tipo = $_POST["tipo"];
$nombre = $_POST["nombre"];
$raza = $_POST["raza"];
$color = $_POST["color"];
$edad = $_POST["edad"];
$sexo = $_POST["sexo"];
$imagen = addslashes(file_get_contents($_FILES["imagen"]["tmp_name"]));
$descripcion = $_POST["descripcion"];

$pdo = new PDO("mysql:host=localhost;dbname=dup;charset=utf8","root","");

$sql = "INSERT INTO informacion VALUES (NULL, '$tipo','$nombre','$raza', '$color', '$edad', '$sexo', '$imagen', '$descripcion')";

$pdo->query($sql);

header("Location: conocer_mascota.php");

?>