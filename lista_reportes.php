<?php 
$pdo = new PDO("mysql:host=localhost;dbname=dup;charset=utf8","root","");
$sql = "SELECT * FROM repotar";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Lista de casos reportados</title>
    <link rel="stylesheet" href="styls/estilo.css">
</head>
<body>
    <h1>Lista de Reportes</h1>
    <table>
        <tr>
            <th>TIPO</th>
            <th>NOMBRE</th>
            <th>COLOR</th>
            <th>SEXO</th>
            <th>DIRECCION</th>
            <th>DESCRIPCIÓN</th>
        </tr>
        <tr>
            <?php foreach($pdo->query($sql) as $fila ) { ?> 
            <td><?php  echo $fila["tipo"] ?></td>           
            <td><?php  echo $fila["nombre"] ?></td>
            <td><?php  echo $fila["color"] ?></td>
            <td><?php  echo $fila["sexo"] ?></td>
            <td><?php  echo $fila["direccion"]?></td>
            <td><?php  echo $fila["descripcion"] ?></td>
    
        </tr>
            <?php } ?>
    </table>
</body>
</html>