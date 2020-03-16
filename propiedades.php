<?php
	session_start();
	include 'assets/conn.php';

	$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

	if (!$conn) {
	    die("Connection failed: " . mysqli_connect_error());
	};

	//cargar informacion de departamentos
	$consulta1 = mysqli_query($conn, "SELECT * FROM viviendas WHERE activo = 1 ORDER BY id DESC");
	$consulta2 = mysqli_query($conn, "SELECT * FROM viviendas WHERE activo = 1 ORDER BY nombre ASC");
	$consulta3 = mysqli_query($conn, "SELECT * FROM viviendas WHERE activo = 1 ORDER BY precio DESC");
	$consulta4 = mysqli_query($conn, "SELECT * FROM viviendas WHERE activo = 1 ORDER BY precio ASC");
	mysqli_close($conn);
	//$infoDeptos = mysqli_fetch_assoc($consulta);
?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<title>Propiedades | Magnus Home</title>

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

		<?php include "badgeFormPropiedad.php"; ?>

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
								<a class="nav-link active" href="#">PROPIEDADES</a>
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
			<div id="propiedades" class="contieneBG">
				<div class="container">
					<div class="row no-gutters align-items-center">
						<div class="col">
							<h1 class="titPage text-white">RÁPIDO, FÁCIL Y SEGURO<br>TE ENTREGAMOS LO QUE NECESITAS.</h1>
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
								<a class="nav-link active" id="filFecha" data-toggle="pill" href="#listFecha" role="tab" aria-controls="listFecha" aria-selected="true"><i class="far fa-calendar-alt"></i>&nbsp;&nbsp;&nbsp;Fecha</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" id="filOrden" data-toggle="pill" href="#listOrden" role="tab" aria-controls="listOrden" aria-selected="true"><i class="fas fa-sort-alpha-down"></i>&nbsp;&nbsp;&nbsp;Orden (A - Z)</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" id="filPrecioA" data-toggle="pill" href="#listPrecioA" role="tab" aria-controls="listPrecioA" aria-selected="true"><i class="fas fa-sort-numeric-down-alt"></i>&nbsp;&nbsp;&nbsp;Precio más alto</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" id="filPrecioB" data-toggle="pill" href="#listPrecioB" role="tab" aria-controls="listPrecioB" aria-selected="true"><i class="fas fa-sort-numeric-down"></i>&nbsp;&nbsp;&nbsp;Precio más bajo</a>
							</li>
						</ul>
						<div class="tab-content" id="pills-tabContent">
							<div class="tab-pane fade show active" id="listFecha" role="tabpanel" aria-labelledby="filFecha">
								 <?php
								 	while($infoViviendas1 = mysqli_fetch_array($consulta1)){
								 ?>
								<div class="card mb-3">
									<div class="row no-gutters align-items-center">
										<div class="col-md-5">
											<a href="ficha-vivienda.php?id=<?php echo $infoViviendas1['id'] ?>"><img src="propiedades/<?php echo utf8_encode($infoViviendas1['imagen']);?>" class="card-img"></a>
										</div>
										<div class="col-md-7 px-3">
											<div class="card-body">
												<h5 class="card-title"><?php echo mb_strtoupper(utf8_encode($infoViviendas1['nombre']),'UTF-8');?></h5>
												<p class="card-text"><?php echo utf8_encode($infoViviendas1['extracto']);?></p>
												<p><b class="acentuado">
													<?php 
														if($infoViviendas1['tipo_propiedad'] == 'Inmobiliario'){
													?>
														UF <?php echo number_format($infoViviendas1['precio'],0,".",",");?>
													<?php 
														}else{
													?>
														$ <?php echo number_format($infoViviendas1['precio'],0,".",",");?>
													<?php
														}
													?>
													</b>
												</p>
												<ul class="list-group list-group-flush bgAcentuado">
													<?php
														if ($infoViviendas1['tipo_propiedad'] == 'Parcela' || $infoViviendas1['tipo_propiedad'] == 'Inmobiliario') {
													?>
													<li class="list-group-item bgAcentuado"><i class="fas fa-expand"></i>&nbsp;&nbsp;<?php echo number_format($infoViviendas1['superficie'],0,".",",");?> m2&nbsp;&nbsp;&nbsp;&nbsp;<?php echo mb_strtoupper(utf8_encode($infoViviendas1['comuna']),'UTF-8');?></li>
													<?php
														}else{
													?>
													<li class="list-group-item bgAcentuado"><i class="fas fa-bed"></i>&nbsp;&nbsp;<?php echo $infoViviendas1['dormitorio'];?>&nbsp;&nbsp;&nbsp;&nbsp;<i class="fas fa-bath"></i>&nbsp;&nbsp;<?php echo $infoViviendas1['banho'];?>&nbsp;&nbsp;&nbsp;&nbsp;<?php echo mb_strtoupper(utf8_encode($infoViviendas1['comuna']),'UTF-8');?></li>
													<?php
														}
													?>
												</ul>
											</div>
										</div>
									</div>
								</div>
								<?php
									};
								?>
							</div>
							<div class="tab-pane fade" id="listOrden" role="tabpanel" aria-labelledby="filOrden">
								<?php
								 	while($infoViviendas2 = mysqli_fetch_array($consulta2)){
								 ?>
								<div class="card mb-3">
									<div class="row no-gutters align-items-center">
										<div class="col-md-5">
											<a href="ficha-vivienda.php?id=<?php echo $infoViviendas2['id'] ?>"><img src="propiedades/<?php echo utf8_encode($infoViviendas2['imagen']);?>" class="card-img"></a>
										</div>
										<div class="col-md-7 px-3">
											<div class="card-body">
												<h5 class="card-title"><?php echo mb_strtoupper(utf8_encode($infoViviendas2['nombre']),'UTF-8');?></h5>
												<p class="card-text"><?php echo utf8_encode($infoViviendas2['extracto']);?></p>
												<p><b class="acentuado">
													<?php 
														if($infoViviendas2['tipo_propiedad'] == 'Inmobiliario'){
													?>
														UF <?php echo number_format($infoViviendas2['precio'],0,".",",");?>
													<?php 
														}else{
													?>
														$ <?php echo number_format($infoViviendas2['precio'],0,".",",");?>
													<?php
														}
													?>
													</b>
												</p>
												<ul class="list-group list-group-flush bgAcentuado">
													<?php
														if ($infoViviendas2['tipo_propiedad'] == 'Parcela' || $infoViviendas2['tipo_propiedad'] == 'Inmobiliario') {
													?>
													<li class="list-group-item bgAcentuado"><i class="fas fa-expand"></i>&nbsp;&nbsp;<?php echo number_format($infoViviendas2['superficie'],0,".",",");?> m2&nbsp;&nbsp;&nbsp;&nbsp;<?php echo mb_strtoupper(utf8_encode($infoViviendas2['comuna']),'UTF-8');?></li>
													<?php
														}else{
													?>
													<li class="list-group-item bgAcentuado"><i class="fas fa-bed"></i>&nbsp;&nbsp;<?php echo $infoViviendas2['dormitorio'];?>&nbsp;&nbsp;&nbsp;&nbsp;<i class="fas fa-bath"></i>&nbsp;&nbsp;<?php echo $infoViviendas2['banho'];?>&nbsp;&nbsp;&nbsp;&nbsp;<?php echo mb_strtoupper(utf8_encode($infoViviendas2['comuna']),'UTF-8');?></li>
													<?php
														}
													?>
												</ul>
											</div>
										</div>
									</div>
								</div>
								<?php
									};
								?>
							</div>
							<div class="tab-pane fade" id="listPrecioA" role="tabpanel" aria-labelledby="filPrecioA">
								<?php
								 	while($infoViviendas3 = mysqli_fetch_array($consulta3)){
								?>
								<div class="card mb-3">
									<div class="row no-gutters align-items-center">
										<div class="col-md-5">
											<a href="ficha-vivienda.php?id=<?php echo $infoViviendas3['id'] ?>"><img src="propiedades/<?php echo utf8_encode($infoViviendas3['imagen']);?>" class="card-img"></a>
										</div>
										<div class="col-md-7 px-3">
											<div class="card-body">
												<h5 class="card-title"><?php echo mb_strtoupper(utf8_encode($infoViviendas3['nombre']),'UTF-8');?></h5>
												<p class="card-text"><?php echo utf8_encode($infoViviendas3['extracto']);?></p>
												<p><b class="acentuado">
													<?php 
														if($infoViviendas3['tipo_propiedad'] == 'Inmobiliario'){
													?>
														UF <?php echo number_format($infoViviendas3['precio'],0,".",",");?>
													<?php 
														}else{
													?>
														$ <?php echo number_format($infoViviendas3['precio'],0,".",",");?>
													<?php
														}
													?>
													</b>
												</p>
												<ul class="list-group list-group-flush bgAcentuado">
													<?php
														if ($infoViviendas3['tipo_propiedad'] == 'Parcela' || $infoViviendas3['tipo_propiedad'] == 'Inmobiliario') {
													?>
													<li class="list-group-item bgAcentuado"><i class="fas fa-expand"></i>&nbsp;&nbsp;<?php echo number_format($infoViviendas3['superficie'],0,".",",");?> m2&nbsp;&nbsp;&nbsp;&nbsp;<?php echo mb_strtoupper(utf8_encode($infoViviendas3['comuna']),'UTF-8');?></li>
													<?php
														}else{
													?>
													<li class="list-group-item bgAcentuado"><i class="fas fa-bed"></i>&nbsp;&nbsp;<?php echo $infoViviendas3['dormitorio'];?>&nbsp;&nbsp;&nbsp;&nbsp;<i class="fas fa-bath"></i>&nbsp;&nbsp;<?php echo $infoViviendas3['banho'];?>&nbsp;&nbsp;&nbsp;&nbsp;<?php echo mb_strtoupper(utf8_encode($infoViviendas3['comuna']),'UTF-8');?></li>
													<?php
														}
													?>
												</ul>
											</div>
										</div>
									</div>
								</div>
								<?php
									};
								?>
							</div>
							<div class="tab-pane fade" id="listPrecioB" role="tabpanel" aria-labelledby="filPrecioB">
								<?php
								 	while($infoViviendas4 = mysqli_fetch_array($consulta4)){
								?>
								<div class="card mb-3">
									<div class="row no-gutters align-items-center">
										<div class="col-md-5">
											<a href="ficha-vivienda.php?id=<?php echo $infoViviendas4['id'] ?>"><img src="propiedades/<?php echo utf8_encode($infoViviendas4['imagen']);?>" class="card-img"></a>
										</div>
										<div class="col-md-7 px-3">
											<div class="card-body">
												<h5 class="card-title"><?php echo utf8_encode($infoViviendas4['nombre']);?></h5>
												<p class="card-text"><?php echo utf8_encode($infoViviendas4['extracto']);?></p>
												<p><b class="acentuado">
													<?php 
														if($infoViviendas4['tipo_propiedad'] == 'Inmobiliario'){
													?>
														UF <?php echo number_format($infoViviendas4['precio'],0,".",",");?>
													<?php 
														}else{
													?>
														$ <?php echo number_format($infoViviendas4['precio'],0,".",",");?>
													<?php
														}
													?>
													</b>
												</p>
												<ul class="list-group list-group-flush bgAcentuado">
													<?php
														if ($infoViviendas4['tipo_propiedad'] == 'Parcela' || $infoViviendas4['tipo_propiedad'] == 'Inmobiliario') {
													?>
													<li class="list-group-item bgAcentuado"><i class="fas fa-expand"></i>&nbsp;&nbsp;<?php echo number_format($infoViviendas4['superficie'],0,".",",");?> m2&nbsp;&nbsp;&nbsp;&nbsp;<?php echo mb_strtoupper(utf8_encode($infoViviendas4['comuna']),'UTF-8');?></li>
													<?php
														}else{
													?>
													<li class="list-group-item bgAcentuado"><i class="fas fa-bed"></i>&nbsp;&nbsp;<?php echo $infoViviendas4['dormitorio'];?>&nbsp;&nbsp;&nbsp;&nbsp;<i class="fas fa-bath"></i>&nbsp;&nbsp;<?php echo $infoViviendas4['banho'];?>&nbsp;&nbsp;&nbsp;&nbsp;<?php echo mb_strtoupper(utf8_encode($infoViviendas4['comuna']),'UTF-8');?></li>
													<?php
														}
													?>
												</ul>
											</div>
										</div>
									</div>
								</div>
								<?php
									};
								?>
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
								<div class="form-group">
									<label for="mensaje" class="col-form-label">Mensaje</label>
									<textarea class="form-control" id="mensaje" name="mensaje" rows="3"></textarea>
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