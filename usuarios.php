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
</head>
<body>
    <style>
        *{
            box-sizing: border-box;
            }
        body{
            font-family: arial;
            font-size: 1.2em;
            background: rgb(25, 27, 34);
            }
        h1 {
            color: #b0f4e6;
            text-align: center;
            }
        .titulo {
            background: yellow;
            color: #454d66;
        }
        nav{
            display: flex;
            justify-content: center;
            }
        nav a {
            padding: 10px;
        }

        .tabla{
            width: 100%;
            border-collapse: collapse;
            }
        .tabla th, .tabla td{
            border: 1px solid #ccc;
            padding: 6px;
            color: green;
            }
        .btn {
            padding: 10px 30px;
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
        }
        
    </style>
<h1>Usuarios</h1>

<table class="tabla">
<tr class="titulo">
    <th>Nombre completo</th>
    <th>DNI</th>
    <th>Fecha de nacimiento</th>
    <th>Dirección</th>
    <th>Telefono</th>
    <th>Correo</th>
    <th>Contraseña</th>
    <th>Operaciones</th>
</tr>
<?php foreach ($pdo->query("SELECT * FROM usuarios") as $fila) { ?>
    <tr>
        <td><?php echo $fila["nombres"] ?>  <?php echo $fila["apellidos"] ?></td>
        <td><?php echo $fila["dni"] ?></td>
        <td><?php echo $fila["fecha_nacimiento"] ?></td>
        <td><?php echo $fila["direccion"] ?></td>
        <td><?php echo $fila["telefono"] ?></td>
        <td><?php echo $fila["correo"] ?></td>
        <td><?php echo $fila["password"] ?></td>
        <td>
            <div class="btn">
                <form action="borrar_usuario.php" method="post" >
                <input type="hidden" name="id" value="<?php echo $fila["id"] ?>">
                <button type="submit" class="btn50">Borrar</button>
                </form>
                <form action="editar_usuario.php" method="get">
                    <input type="hidden" name="id" value="<?php echo $fila["id"]?>">
                    <button type="submit" class="btn50">Editar</button>
                </form>
                <form action="cambiar_password.php" method="get">
                    <input type="hidden" name="id" value="<?php echo $fila["id"]?>">
                    <button type="submit" class="btn100">Cambiar contraseña</button>
                </form>
        </div>
        </td>
    </tr>


<?php } ?>



</table>
</body>
</html>