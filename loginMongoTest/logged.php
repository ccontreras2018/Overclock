<?php
session_start();
/*SI LA SESION NO ES VALIDA COMO USER SE LE DEVUELVE AL INICIO*/
if($_SESSION['state'] != "USER") {
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
                    <li><a href="logged.php">Inicio</a></li>
                    <li><a>Boton inutil</a></li>
                    <li><a href="logout.php">Cerrar Sesion</a></li>
                </ul>
			</nav>
			
			
			<section>
				<h4>Usuario normal</h4>
                <p>

Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed dignissim aliquam condimentum. Integer pretium finibus est sed facilisis. Aenean ullamcorper elit nec aliquam posuere. Ut non ornare risus. In justo ante, tincidunt nec sodales et, rhoncus eget justo. Aenean non iaculis dui. Donec leo est, blandit at scelerisque a, facilisis non odio.

Praesent tristique sapien a tempus commodo. Proin ante massa, efficitur eget urna ut, gravida aliquam nibh. Sed finibus bibendum leo, vel semper risus. Vestibulum ultrices quis erat sit amet luctus. Nam nec cursus nisl, condimentum iaculis nibh. Quisque ultricies est augue, quis consequat nulla volutpat in. Mauris dictum consequat sem, sit amet condimentum dolor mollis vitae. Aliquam quis erat est. Aliquam eget nibh ut ipsum elementum feugiat id molestie libero. </p>

			
				
			</section>
			
			<footer>
				<p>Copyright</p>
				<p>Contacto</p>
			</footer>
			
		</main>
		
		
	
	</body>
</html>