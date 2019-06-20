<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="styls/style_login.css">
</head>

<body>
<div>
<?php include 'header3.php' ?>
</div>
    <?php if(isset($_GET["error"])){ ?>
        <p style="color:red">Datos Incorrectos</p>
    <?php } ?>
    <form action="procesar_login.php" method="post" class="form_login">
        <h2 class="form__titulo">Iniciar sesión</h2>
        <div class="contenedor_inputs">
            
            <div>
                Correo: <input type="email" name="correo">
            </div>
            <div>
                Contraseña: <input type="password" name="password">
            </div>
        
            <button type="submit" class="btn-enviar">Inicar sesión</button>
        </div>
    </form>
    <?php include 'footer.php';?>
</body>
</html>