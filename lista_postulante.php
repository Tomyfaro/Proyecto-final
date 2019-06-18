<?php 
$pdo = new PDO("mysql:host=localhost;dbname=dup;charset=utf8","root","");
$sql = "SELECT * FROM adoptar";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Lista de postulantes</title>
    <link rel="stylesheet" href="styls/estilo.css">
</head>
<body>
    <h1>Lista de personas </h1>
    <table>
        <tr>
            <th>Nombres</th>
            <th>Apellidos</th>
            <th>Dirección</th>
            <th>Teléfono</th>
            <th>Fecha de nacimiento</th>
            <th>DNI</th>
            <th>Correo</th>
            <th>Estado civil</th>
            <th>Ocupación</th>
            <th>Centro de trabajo</th>
        </tr>
        <tr>
            <?php foreach($pdo->query($sql) as $fila ) { ?> 
            <td><?php  echo $fila["nombres"] ?></td>           
            <td><?php  echo $fila["apellidos"] ?></td>
            <td><?php  echo $fila["direccion"] ?></td>
            <td><?php  echo $fila["telefono"] ?></td>
            <td><?php  echo $fila["fecha"] ?></td>
            <td><?php  echo $fila["dni"] ?></td>
            <td><?php  echo $fila["correo"] ?></td>
            <td><?php  echo $fila["escivil"] ?></td>
            <td><?php  echo $fila["ocupacion"] ?></td>
            <td><?php  echo $fila["centrotra"] ?></td>
        <tr>
            <?php } ?>    
    
    </table>
    <button><a href="borrar_fila.php?id=<?php echo $fila["id"] ?>"> BORRAR</a></button>
</body>
</html>