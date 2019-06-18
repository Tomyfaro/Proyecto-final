<?php
#Entrada

$cor = $_POST["correo"];
$p = $_POST["password"];

#Proceso

$validacion = false;
$pdo = new PDO('mysql:host=localhost;dbname=dup;charset=utf8mb4','root','');
$resultado= $pdo->query("SELECT * FROM usuarios WHERE correo='$cor' AND password='$p'");
echo 
$fila = $resultado->fetchAll();


if(count($fila)==1){
    $validacion = true;
    session_start();
    $fila= $fila[0];
    $_SESSION["correo"] = $fila["correo"];
    $_SESSION["nombres"] = $fila["nombres"];
    $_SESSION["apellidos"] = $fila["apellidos"];

}   



#Salida

if($validacion){
    header("Location: index.php");
}
else{
    header("Location: login.php?error=1");
}



?>_