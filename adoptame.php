<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Formulario de adopción</title>
    <link rel="stylesheet" href="styls/styleR.css">
</head>
<body class="fichaP">
    
            <form action="registro_adopcion.php" method="post" class="form-register2">
                 <h2 >Ficha de postulación de adopción</h2>
                <div class="registrar">
                    <div class="contenedor-persona">
                        <input type="text" name="no" placeholder="Nombre" required class="input48">
                        <input type="text" name="ap" placeholder="Apellidos" required class="input48">
                        <input type="text" name="di" placeholder="Dirección" required class="input48">
                        <input type="number" name="te" placeholder="Teléfono" required class="input48">
                        <input type="date" name="fe" placeholder="Fecha de nacimiento" required class="input48">
                        <input type="number" name="dni" placeholder="DNI" required class="input48">
                        <input type="email" name="co" placeholder="Correo" required class="input48">
                        <input type="text" name="es" placeholder="Estado civil" required class="input48">
                        <input type="text" name="oc" placeholder="Ocupación" required class="input48">
                        <input type="text" name="ce" placeholder="Centro de trabajo" required class="input48">
                    <div>

                    <input type="submit" value="Registrar" class="btn-enviar">
                </div>
            </form>
        

</body>
</html>