<?php
    $id = $_GET["id"];#pedir informacion

    $pdo = new PDO('mysql:host=localhost;dbname=dup;charset=utf8mb4','root','');

    $resultado = $pdo ->query("SELECT * FROM usuarios WHERE id='$id'");

    #paso 3: Obtener los datos
    $fila = $resultado -> fetch();
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
<?php include 'cabecera.php' ?>
    <h2>Editar usuario <?php echo $fila["nombres"]?></h2>

    <form action="procesar__editar_usuario.php" method="post" class="form_registrar_usuario">
        <input type="hidden" name="id" value="<?php echo $id?>">
        <div class="registro">
            <div class="contenedor_inputs">
                <input type="text" name="nombres" value="<?php echo $fila["nombres"]?>" class="input48">
                <input type="text" name="apellidos" value="<?php echo $fila["apellidos"]?>" class="input48">
                <input type="text" name="dni" value="<?php echo $fila["dni"]?>" class="input48">
                <input type="date" name="fechanac" value="<?php echo $fila["fecha_nacimiento"]?>" class="input48">
                <input type="text" name="direccion" value="<?php echo $fila["direccion"]?>" class="input100">
                <input type="text" name="telefono" value="<?php echo $fila["telefono"]?>" class="input48">
                <input type="email" name="correo" value="<?php echo $fila["correo"]?>" class="input48">
            </div>
        </div>
        <button type="submit" class="btn-enviar">Registrarse</button>
    </form>
</body>
</html>