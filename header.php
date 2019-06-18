<style>
#main-header {
	background: BLACK;
	color: white;
	height: 80px;
}	
#main-header a {
	color: white;
	font-size: 18px;
}

#logo-header {
	float: left;
	padding: 15px 0 0 20px;
	text-decoration: none;
}
#logo-header:hover {
	color: #0b76a6;
}
	
#logo-header .site-name {
	display: block;
	font-weight: 700;
	font-size: 1.7em;
}
	
#logo-header .site-desc {
		display: block;
		font-weight: 500;
		font-size: 0.8em;
		color: #999;
}
nav {
	float: right;
}
nav ul {
	margin: 0;
	padding: 0;
	list-style: none;
	padding-right: 20px;
}
	
nav ul li {
	display: inline-block;
	line-height: 80px;
}
			
nav ul li a {
	display: block;
	padding: 0 10px;
	text-decoration: none;
}
			
nav ul li a:hover {
background: #0b76a6;
	}
</style>

<header id="main-header">
		
		<a id="logo-header" href="index.php">
			<span class="site-name">DUP</span>
			<span class="site-desc">DAME UNA PATA</span>
		</a> 
 
		<nav>
			<ul>
				<li><a href="dup.php">¿Qué es DUP?</a></li>
				<li><a href="conocer_mascota.php">Adopta</a></li>
				<li><a href="esterelizacion.php">Esterelización de mascotas</a></li>
				<li><a href="registrar_mascota.php">Reporta un animal</a></li>
			</ul>
		</nav>
</header>
