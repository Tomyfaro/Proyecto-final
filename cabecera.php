<h1>Dame una pata</h1>
    <nav>  
        
        
        <?php if(isset($_SESSION["correo"])) {?>
            
            <a href="index.php">Portada</a>
            <a href="usuarios.php">Usuarios</a>
            <a href="logout.php">Cerrar sesion</a>
        
        <?php }else{ ?>
        <a href="registrar_usuario.php">Registrar usuario</a>
        <a href="login.php">Iniciar Sesion</a>
        <?php } ?>
    </nav>