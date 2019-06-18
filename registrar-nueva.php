<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Registrar nueva mascota</title>
    <link rel="stylesheet" href="styls/styleR.css">
</head>
<body>
<form action="registro-solicitudes.php" method="post" class="form-register" enctype="multipart/form-data">
        <h2 class="titulo-reg">Registrar una mascota</h2>
        <div class="registrar">
                
                <div class="datos">
                        <h3>Datos de la mascota : </h3>
                </div>
                <div class="contenedor-mascota">
                    <input type="text" name="tipo" placeholder="Tipo de mascota" required class="input48">
                    <input type="text" name="nombre" placeholder="Nombre" required class="input48">
                    <input type="text" name="raza" placeholder="Raza" required class="input48">
                    <input type="text" name="edad" placeholder="Edad" required class="input48">
                    <input type="text" name="color" placeholder="Color" required class="input48">
                    <input type="text" name="sexo" placeholder="Sexo de la mascota" required class="input48">
                </div>
                <div class="datos">
                    <h3>Descripción :</h3>
                </div>
                <div class="mascota-des">
                    <input type="file" name="imagen">
                    <textarea name="descripcion" id="descripcion" cols="30" rows="10"></textarea>
                </div>
                <input type="submit" value="Registrar" class="btn-enviar">
        </div>
        
    </form>

</body>
</html>