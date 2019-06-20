<?php
    $pdo = new PDO("mysql:host=localhost;dbname=dup;charset=utf8","root","");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Formulario de esterelizacion</title>
    <link rel="stylesheet" href="styls/estilos.css">
</head>
<body>
<?php include 'header.php';?>
    <h1>Solicitud de esterelizacion</h1>
    <form action="procesar_esterelizacion.php" method="post" class="form-register">
        <h2 class="form__titulo">Registrar Esterelizacion</h2>
        <div class="esterelizacion">
                <div class="datos">
                        <h3>Datos personales</h3>
                </div>
                <div class="contenedor-inputs_persona">
                    <input type="text" name="nombres" placeholder="Nombres" required class="input48">
                    <input type="text" name="apellidos" placeholder="Apellidos" required class="input48">
                    <input type="text" name="dni" placeholder="DNI" required class="input48">
                    <input type="text" name="telefono" placeholder="Telefono" required class="input48">
                    <input type="text" name="direccion" placeholder="Dirección" required class="input100">
                </div>
                <div class="datos">
                        <h3>Datos de la mascota</h3>
                </div>
                <div class="contenedor-inputs_mascota">
                    <select name="tipo_mascota" placeholder="Tipo de mascota" class="input48">
                        <option value="perro">Perro</option>
                        <option value="gato">Gato</option>
                    </select>
                    <input type="text" name="nombre_mascota" placeholder="Nombre" required class="input48">
                    <input type="text" name="raza" placeholder="Raza" required class="input48">
                    <input type="text" name="color" placeholder="Color" required class="input48">
                    <input type="text" name="edad" placeholder="Edad" required class="input48">
                    <input type="text" name="sexo" placeholder="Sexo" required class="input48">
                </div>
                <input type="submit" value="registrar" class="btn-enviar">
        </div>
        
    </form>
    
</body>
</html>