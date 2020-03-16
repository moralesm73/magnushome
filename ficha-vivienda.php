<?php
	session_start();
	include 'assets/conn.php';

	$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

	if (!$conn) {
	    die("Connection failed: " . mysqli_connect_error());
	};

	$id = $_GET['id'];

	//cargar informacion de departamentos
	$consulta1 = mysqli_fetch_array(mysqli_query($conn, "SELECT * FROM viviendas WHERE id = $id"));
	$consulta2 = mysqli_query($conn, "SELECT * FROM galeria WHERE id_propiedad = $id AND activo = 1");
	mysqli_close($conn);
	//$infoDeptos = mysqli_fetch_assoc($consulta);
?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<title><?php echo utf8_encode($consulta1['nombre']); ?> | Magnus Home</title>

		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="css/bootstrap.min.css">

		<!-- CSS Magnus Home -->
		<link rel="stylesheet" href="css/style.css">

		<!-- FontFamily Google Fonts Roboto -->
		<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet">

		<!-- Font Awesome Iconos -->
		<script src="https://kit.fontawesome.com/e3f9709de7.js"></script>

		<!-- JS Necesarios -->
		<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
		<script src="js/bootstrap.min.js"></script>

		<script type="text/javascript" src="http://code.jquery.com/jquery-2.1.3.min.js"></script>

		<link rel="stylesheet" type="text/css" href="lightview-3.5.1/css/lightview/lightview.css"/>
		
		<!-- <script type="text/javascript" src="http://code.jquery.com/jquery-3.1.0.min.js"></script> -->
		<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/swfobject/2.2/swfobject.js"></script>
		<!--[if lt IE 9]>
			<script type="text/javascript" src="lightview-3.5.1/js/excanvas/excanvas.js"></script>
		<![endif]-->
		<script type="text/javascript" src="lightview-3.5.1/js/spinners/spinners.min.js"></script>
		<script type="text/javascript" src="lightview-3.5.1/js/lightview/lightview.js"></script>
		<!-- <script type="text/javascript">
			$(window).load(function() {
				$("#loader").fadeOut("slow");
			});
		</script> -->

	</head>
	<body>

		<!-- <div id="overlay"></div>
		<div id="loader">
			<div>
				<img src="images/logo_magnus_min.png" class="img-fluid">
			</div>
		</div> -->

		<header>
			<!-- Just an image -->
			<div class="container">
				<nav class="navbar navbar-expand-lg navbar-light">
					<a class="navbar-brand" href="index.php"><img src="images/logo_magnus_min.png" class="imgLogo"></a>

					<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
						<span class="navbar-toggler-icon"></span>
					</button>

					<div class="collapse navbar-collapse justify-content-end align-items-center" id="navbarNav">
						<ul class="navbar-nav align-items-center">
							<li class="nav-item">
								<a class="nav-link" href="quienes-somos.php">SOMOS</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="propiedades.php">PROPIEDADES</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="#"><div class="rrss-menu"><i class="fab fa-facebook-f"></i></div></a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="#"><div class="rrss-menu"><i class="fab fa-twitter"></i></div></a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="#"><div class="rrss-menu"><i class="fab fa-instagram"></i></div></a>
							</li>
						</ul>
					</div>
				</nav>
			</div>
		</header>

		<section id="cabecera">
			<div id="fichas" class="contieneBG" style="background-image: url(propiedades/<?php echo utf8_encode($consulta1['cabecera']); ?>);">
				<div class="container">
					<div class="row no-gutters align-items-center">
						<div class="col">
							<h1 class="titPage text-white"><?php echo utf8_encode($consulta1['nombre']); ?></h1>
						</div>
					</div>
				</div>
			</div>
		</section>

		<section id="sectionated">
			<div class="container">
				<div class="row">
					<div class="col-lg-8">
						<ul class="nav nav-pills nav-fill mb-3" id="filtrado" role="tablist">
							<li class="nav-item">
								<a class="nav-link active" id="tabInfo" data-toggle="pill" href="#contInfo" role="tab" aria-controls="contInfo" aria-selected="true"><i class="far fa-calendar-alt"></i>&nbsp;&nbsp;&nbsp;Información</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" id="tabUbicacion" data-toggle="pill" href="#contUbicacion" role="tab" aria-controls="contUbicacion" aria-selected="true"><i class="fas fa-map-marker-alt"></i>&nbsp;&nbsp;&nbsp;Ubicación</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" id="tabGaleria" data-toggle="pill" href="#contGaleria" role="tab" aria-controls="contGaleria" aria-selected="true"><i class="far fa-images"></i>&nbsp;&nbsp;&nbsp;Galería</a>
							</li>
						</ul>
						<div class="tab-content" id="pills-tabContent">
							<div class="tab-pane fade show active" id="contInfo" role="tabpanel" aria-labelledby="tabInfo">
								<h2 class="mt-4 mb-3">
									<?php echo utf8_encode($consulta1['nombre']); ?><br>
									<small style="font-size: 60%;"><?php echo utf8_encode($consulta1['estado']); ?></small><br>
									<span class="acentuado">Precio: $ <?php echo number_format($consulta1['precio'],0,".",",") ?></span>
								</h2>

								<?php echo utf8_encode($consulta1['descripcion']); ?>

								<ul class="list-group list-group-horizontal">
									<li class="list-group-item"><?php echo utf8_encode($consulta1['tipo_propiedad']); ?></li>
									<li class="list-group-item"><?php echo utf8_encode($consulta1['tipo_publicacion']); ?></li>
									<?php if ($consulta1['dormitorio'] != NULL) {?><li class="list-group-item"><?php echo $consulta1['dormitorio']?> dormitorios</li><?php }?>
									<?php if ($consulta1['banho'] != NULL) {?><li class="list-group-item"><?php echo $consulta1['banho']?> baños</li><?php }?>
									<?php if ($consulta1['superficie'] != NULL) {?><li class="list-group-item"><?php echo number_format($consulta1['superficie'],0,".",",")?> m2</li><?php }?>
								</ul>

							</div>
							<div class="tab-pane fade" id="contUbicacion" role="tabpanel" aria-labelledby="tabUbicacion">
								
							</div>
							<div class="tab-pane fade" id="contGaleria" role="tabpanel" aria-labelledby="tabGaleria">
								<div class="row align-items-center no-gutters">
									<?php
								 		while($galeria = mysqli_fetch_array($consulta2)){
									?>
									<div class="col-sm-6 p-2"><a href="<?php echo $galeria['url_imagen']?>" class="lightview" data-lightview-group="galeria"><img src="<?php echo $galeria['url_imagen']?>" class="img-fluid"></a></div>
									<?php
										};
									?>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-4 bgGray p-4">
						<div>
							<h1>CONTACTO</h1>
							<p>Ingresa tus datos y nos contactaremos a la brevedad.</p>
							<form id="formContacto">
								<div class="form-group">
									<label for="nombre" class="col-form-label">Nombre</label>
									<input type="text" class="form-control" id="nombre" name="nombre">
								</div>
								<div class="form-group">
									<label for="email" class="col-form-label">Email</label>
									<input type="email" class="form-control" id="email" name="email">
								</div>
								<div class="form-group">
									<label for="fono" class="col-form-label">Fono</label>
									<div class="input-group">
										<div class="input-group-prepend">
											<div class="input-group-text">+56 9</div>
										</div>
										<input type="text" class="form-control" id="fono" name="fono">
									</div>
								</div>
								<input type="hidden" class="form-control" id="vivienda" name="propiedad" value="<?php echo $consulta1['id']; ?>">
								<div class="form-group">
									<label for="mensaje" class="col-form-label">Mensaje</label>
									<textarea class="form-control" id="mensaje" rows="3" name="mensaje"></textarea>
								</div>
								<div class="form-group">
									<div class="col text-center">
										<button type="submit" class="btn btn-enviar">Enviar</button>
									</div>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</section>

		<?php include 'footer.php'; ?>
	</body>
</html>