<?php
$id = $_GET["id"];
$pdo = new PDO("mysql:host=localhost;dbname=dup;charset=utf8","root","");
$pdo -> query("DELETE FROM informacion WHERE id='$id'");
header("Location: conocer_mascota.php");
?>