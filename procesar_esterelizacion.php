<?php
    $nom =$_POST["nombres"];
    $ape =$_POST["apellidos"];
    $dni =$_POST["dni"];
    $tel =$_POST["telefono"];
    $dir =$_POST["direccion"];
    $tm =$_POST["tipo_mascota"];
    $nom_m =$_POST["nombre_mascota"];
    $raza =$_POST["raza"];
    $color =$_POST["color"];
    $edad =$_POST["edad"];
    $sexo =$_POST["sexo"];

    $pdo = new PDO('mysql:host=localhost;dbname=dup;charset=utf8mb4','root','');    
    $sql = "INSERT INTO esterilizacion VALUES (null, '$nom', '$ape', '$dni', '$tel','$dir', '$tm', '$nom_m', '$raza', '$color', '$edad', '$sexo',sysdate())";
    $pdo->query($sql);

    header("Location: confirmacion_esterelizacion.php")
?>