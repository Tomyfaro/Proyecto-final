<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Reportar mascota </title>
    <link rel="stylesheet" href="styls/styleR.css">
</head>
<body>
<?php include 'header.php';?>
    <form action="" method="POST" class="form-register">
        <h2 class="titulo-reg">Reportat un animal en mal estado</h2>
        <div class="contenedor-mascota">
            <input type="text" name="tipo" placeholder="Tipo de Animal" required class="input48">
            <input type="text" name="color" placeholder="Color" required class="input48">
            <input type="text" name="sexo" placeholder="Sexo de la mascota" required class="input48">
            <input type="text" name="direccion" placeholder="Dirección" required class="input48">
            <input type="text" name="descripcion" placeholder="Breve descripción" required class="input 48">
        </div>
        <input type="submit" value="Reportar" class="btn-enviar">
    </form>
</body>
</html>