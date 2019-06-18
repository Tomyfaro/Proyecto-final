<?php
    $pdo = new PDO("mysql:host=localhost;dbname=dup;charset=utf8","root","");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="styls/style_registrar_usuarios.css">
</head>
<body>
<h2>Formulario de registro de usuarios</h2>
    <?php if(isset($_GET["error1"])) { ?>
        <p style= "color:red ;">Confirme correctamente su contraseña.</p>
    <?php } ?>
    <form action="procesar_registro.php" method="post" class="form_registrar_usuario">
        <h2 class="form__titulo">Registrar Usuario</h2>
        <div class="registro">
            <div class="contenedor_inputs">
                <input type="text" name="nombres" placeholder="Nombres" class="input48">
                <input type="text" name="apellidos" placeholder="Apellidos" class="input48">
                <input type="text" name="dni" placeholder="DNI" class="input48">
                <input type="date" name="fechanac" placeholder="Fecha de nacimiento" class="input48">
                <input type="text" name="direccion" placeholder="Dirección" class="input100">
                <input type="text" name="telefono" placeholder="Telefono" class="input48">
                <input type="email" name="correo" placeholder="Correo" class="input48">
                <input type="password" name="password1" placeholder="Contraseña" class="input48">
                <input type="password" name="password2" placeholder="Repetir contraseña" class="input48">
            </div>
        </div>
    
        <button type="submit" class="btn-enviar">Registrarse</button>
    </form>
</body>
</html>