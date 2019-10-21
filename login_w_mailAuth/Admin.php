<?php
session_start();
/*SI LA SESION NO ES VALIDA COMO ADMIN SE LE DEVUELVE AL INICIO*/
if($_SESSION['state'] != "ADMIN") {
  header("Location: index.html");
}
?>

<!DOCTYPE html>

<html lang="es">
	<head>
		
		<title>Titulo Pendiente</title>
		<meta charset="utf-8">
        
        <!--Bootstrap & JQuery-->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
		<link rel="stylesheet" type="text/css" href="styles.css">
		
	</head>
	<body>
		<main>
			<nav>
				<h1>Bienvenido <?php echo $_SESSION['name']; ?></h1>
                <ul class="menu">
                    <li><a href="Admin.php">Inicio</a></li>
                    <li><a>Boton inutil</a></li>
                    <li><a>Boton inutil</a></li>
                    <li><a>Boton inutil</a></li>
                    <li><a>Boton inutil</a></li>
                    <li><a>Boton inutil</a></li>
					<li><a href="logout.php">Cerrar Sesion</a></li>
                </ul>
            </nav>
			<section>
				<h4>ADMIN IS HERE</h4>				
			</section>
			<footer>
				<p>Copyright</p>
				<p>Contacto</p>
			</footer>
		</main>
	</body>
</html>
