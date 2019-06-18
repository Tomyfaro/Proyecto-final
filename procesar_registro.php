<?php
#Entrada

$nom =$_POST["nombres"];
$ape =$_POST["apellidos"];
$dni =$_POST["dni"];
$fech =$_POST["fechanac"];
$dir =$_POST["direccion"];
$tel =$_POST["telefono"];
$cor =$_POST["correo"];
$p1 =$_POST["password1"];
$p2 =$_POST["password2"];


#Proceso 

$validacion = true;

if($p1 != $p2){
    $validacion = false;
    
}
else{
    $pdo = new PDO('mysql:host=localhost;dbname=dameunapata;charset=utf8mb4','root','');
    $sql = "INSERT INTO usuarios VALUES (null, '$nom', '$ape', '$dni','$fech', '$dir', '$tel', '$cor', '$p1',sysdate())";
    $pdo->query($sql);
}

#Salida

if($validacion == false) {
    header("Location: registrar_usuario.php?error1=ddgg");

}
else{
    header("Location: confirmacion_usuario.php");
}

?>