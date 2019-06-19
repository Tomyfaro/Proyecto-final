<?php
  $pdo = new PDO("mysql:host=localhost;dbname=dup;charset=utf8","root","");
  $sql = "SELECT * FROM esterilizacion";
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
    <?php include 'header.php';?>
<h1>Lista de esterelizacion</h1>

<table class="tabla">
<tr class="titulo">
    <th>Nombre completo</th>
    <th>DNI</th>
    <th>Telefono</th>
    <th>Dirección</th>
    <th>Tipo de mascota</th>
    <th>Nombre de mascota</th>
    <th>Raza</th>
    <th>Color</th>
    <th>Edad</th>
    <th>Sexo</th>
    <th>Operaciones</th>
</tr>
    <?php foreach ($pdo->query($sql) as $fila) { ?>
    <tr>
        <td><?php echo $fila["nombres"] ?>  <?php echo $fila["apellidos"] ?></td>
        <td><?php echo $fila["dni"] ?></td>
        <td><?php echo $fila["telefono"] ?></td>
        <td><?php echo $fila["direccion"] ?></td>
        <td><?php echo $fila["tipo_mascota"] ?></td>
        <td><?php echo $fila["nombre_mascota"] ?></td>
        <td><?php echo $fila["raza"] ?></td>
        <td><?php echo $fila["color"] ?></td>
        <td><?php echo $fila["edad"] ?></td>
        <td><?php echo $fila["sexo"] ?></td>
        <td>
            <div class="btn">
                <form action="borrar_esterelizacion.php" method="post" >
                <input type="hidden" name="id" value="<?php echo $fila["id"] ?>">
                <button type="submit" class="btn50">Borrar</button>
                </form>
        </div>
        </td>
    </tr>


<?php } ?>



</table>
</body>
</html>