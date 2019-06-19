<?php
$tipo = $_POST["tipo"];
$color = $_POST["color"];
$sexo = $_POST["sexo"];
$direccion = $_POST["direccion"]
$descripcion = $_POST["descripcion"];

$pdo = new PDO("mysql:host=localhost;dbname=dup;charset=utf8","root","");

$sql = "INSERT INTO reportar VALUES (NULL, '$tipo', '$color', '$sexo', '$direccion', '$descripcion')";

$pdo->query($sql);

header("Location: lista_reportes.php")