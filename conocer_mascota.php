<?php 
$pdo = new PDO("mysql:host=localhost;dbname=dup;charset=utf8","root","");
$sql = "SELECT * FROM informacion";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Adopcion</title>
    <link rel="stylesheet" href="styls/estilo.css">
</head>
<body>
<?php include 'header.php';?>
    <h1>Adopta un DUP</h1>
    <pre>¡Encuentra a tu compañero ideal!                                          <img class="rescatado" src="imagen1.PNG" alt="Rescatado" >  Rescatado  <img class="seguro" src="imagen2.PNG" alt="Seguro"> Seguro <img class="unico" src="imagen3.PNG
        " alt="Único">  Único <img class="noble" src="imagen4.PNG" alt="Noble"> Noble </pre>
    <table>
        <tr>
            <th>TIPO</th>
            <th>NOMBRE</th>
            <th>RAZA</th>
            <th>COLOR</th>
            <th>EDAD</th>
            <th>SEXO</th>
            <th>IMAGEN</th>
            <th>DESCRIPCIÓN</th>
            <th>ADOPTA</th>
        </tr>
        <tr>
            <?php foreach($pdo->query($sql) as $fila ) { ?> 
            <td><?php  echo $fila["tipo"] ?></td>           
            <td><?php  echo $fila["nombre"] ?></td>
            <td><?php  echo $fila["raza"] ?></td>
            <td><?php  echo $fila["color"] ?></td>
            <td><?php  echo $fila["edad"] ?></td>
            <td><?php  echo $fila["sexo"] ?></td>
            <td><img height="50%" src="data:image/jpg;base64,<?php  echo base64_encode($fila["imagen"]) ?>" ></td>
            <td><?php  echo $fila["descripcion"] ?></td>
            <td><a href="adoptame.php">¡QUIERO ADOPTARLO!</a></td>
    
        </tr>
            <?php } ?>
    </table>
    <button><a href="borrar_fila.php?id=<?php echo $fila["id"] ?>"> BORRAR</a></button>
    <?php include 'footer.php';?>
</body>
</html>