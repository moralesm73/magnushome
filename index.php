<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<title>Magnus Home | Rápido, Fácil y Seguro</title>

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
								<a class="nav-link" href="propiedades.php">PROPIEDADES</a>
							</li>
							<!-- <li class="nav-item">
								<a class="nav-link" href="#">BLOG</a>
							</li> -->
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
			<div id="home" class="contieneBG">
				<div class="container">
					<div class="row no-gutters align-items-center ">
						<div class="col">
							<h1 class="titPage text-white">RÁPIDO, FÁCIL Y SEGURO<br>TE ENTREGAMOS LO QUE NECESITAS.</h1>
						</div>
					</div>
				</div>
			</div>
		</section>

		<section id="buscador">
			<div class="box-search">
				<form class="form" id="formSearch">
					<div class="row justify-content-center no-gutters row-cols-lg-5 row-cols-md-4 row-cols-sm-2 row-cols-1">
						<div class="col">
							<select class="form-control">
								<option>Propiedad...</option>
								<option value="">Casas</option>
								<option value="">Departamentos</option>
								<option value="">Terrenos</option>
								<option value="">Oficinas</option>
								<option value="">Inmobiliario</option>
							</select>
						</div>
						<div class="col mt-sm-0 mt-2">
							<select class="form-control">
								<option value="">Estado...</option>
								<option value="">Usadas</option>
								<option value="">Nuevas</option>
							</select>
						</div>
						<div class="col mt-md-0 mt-2">
							<select class="form-control">
								<option value="">Tipo...</option>
								<option value="">Arriendo</option>
								<option value="">Compra</option>
							</select>
						</div>
						<div class="col mt-md-0 mt-2">
							<select class="form-control">
								<option value="">Comuna...</option>
								<option value="">Algarrobo</option>
								<option value="">Curacaví</option>
								<option value="">La Ligua</option>
								<option value="">Lo Barnechea</option>
								<option value="">Maipú</option>
								<option value="">Quinta Normal</option>
								<option value="">Santa Cruz</option>
								<option value="">Santiago Centro</option>
								<option value="">Viña del Mar</option>
							</select>
						</div>
						<div class="col mt-lg-0 mt-2">
							<a href="#" role="button" class="btn btn-buscar">BUSCAR <i class="fas fa-search"></i></a>
						</div>
					</div>
				</form>
			</div>
		</section>

		<section id="bajada_texto">
			<h2 class="acentuado">MAGNUS HOME</h2>
			<p>Con nuestra pericia en la venta y arriendo de propiedades, gestionaremos en tiempo y forma la transacción inmobiliaria de manera exitosa y rentable, beneficiando a ambas partes.</p>
			<p>Para nosotros es vital ser su aliado en todo el proceso, representándolo y asesorándolo para desarrollar un buen negocio inmobiliario con las condiciones pactadas.</p>
		</section>

		<section id="destacados">
			<div class="container">
				<div class="row justify-content-center">
					<div class="col-lg-3 col-md-6 col-sm-9 col-10 pb-lg-0 pb-3">
						<div class="card">
							<img src="propiedades/casa_01/casa_interior09.jpg" class="card-img-top" alt="">
							<div class="card-body">
								<h5 class="card-title m-0">CASA EN MAIPÚ<br><span class="acentuado">$ 12.000.000</span></h5>
							</div>
							<ul class="list-group list-group-flush bgAcentuado">
								<li class="list-group-item bgAcentuado"><i class="fas fa-bed"></i>&nbsp;&nbsp;5&nbsp;&nbsp;&nbsp;&nbsp;<i class="fas fa-bath"></i>&nbsp;&nbsp;2&nbsp;&nbsp;&nbsp;&nbsp;MAIPÚ</li>
							</ul>
						</div>
					</div>
					<div class="col-lg-3 col-md-6 col-sm-9 col-10 pb-lg-0 pb-3">
						<div class="card">
							<img src="propiedades/parcela_02/DJI_0528.jpg" class="card-img-top" alt="...">
							<div class="card-body">
								<h5 class="card-title m-0">PARCELA EN ALGARROBO<br><span class="acentuado">$ 69.000.000</span></h5>
							</div>
							<ul class="list-group list-group-flush bgAcentuado">
								<li class="list-group-item bgAcentuado"><i class="fas fa-expand"></i>&nbsp;&nbsp;376 m2&nbsp;&nbsp;&nbsp;&nbsp;ALGARROBO</li>
							</ul>
						</div>
					</div>
					<div class="col-lg-3 col-md-6 col-sm-9 col-10 pb-md-0 pb-3">
						<div class="card">
							<img src="propiedades/depto_02/DSC_0006-2.jpg" class="card-img-top" alt="...">
							<div class="card-body">
								<h5 class="card-title m-0">DEPTO EN SANTIAGO CENTRO<br><span class="acentuado">$ 75.000.000</span></h5>
							</div>
							<ul class="list-group list-group-flush bgAcentuado">
								<li class="list-group-item bgAcentuado"><i class="fas fa-bed"></i>&nbsp;&nbsp;2&nbsp;&nbsp;&nbsp;&nbsp;<i class="fas fa-bath"></i>&nbsp;&nbsp;1&nbsp;&nbsp;&nbsp;&nbsp;STGO CENTRO</li>
							</ul>
						</div>
					</div>
					<div class="col-lg-3 col-md-6 col-sm-9 col-10 pb-md-0 pb-3">
						<div class="card">
							<img src="propiedades/parcela_01/3.jpeg" class="card-img-top" alt="...">
							<div class="card-body">
								<h5 class="card-title m-0">PARCELA EN SANTA CRUZ<br><span class="acentuado">$ 30.000.000</span></h5>
							</div>
							<ul class="list-group list-group-flush bgAcentuado">
								<li class="list-group-item bgAcentuado"><i class="fas fa-expand"></i>&nbsp;&nbsp;1.500 m2&nbsp;&nbsp;&nbsp;&nbsp;SANTA CRUZ</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</section>

		<section id="categoria">
			<div class="container">
				<div class="row justify-content-center">
					<div class="col-lg-4 col-md-6 col-9">
						<div class="grid">
							<figure class="effect-layla">
								<img src="images/comercialBG.jpg" alt="img06"/>
								<figcaption>
									<h2>COMERCIAL</h2>
								</figcaption>			
							</figure>
						</div>
					</div>
					<div class="col-lg-4 col-md-6 col-9">
						<div class="grid">
							<figure class="effect-layla">
								<img src="images/residencialBG.jpg" alt="img06"/>
								<figcaption>
									<h2>RESIDENCIAL</h2>
								</figcaption>			
							</figure>
						</div>
					</div>
					<div class="col-lg-4 col-md-6 col-9">
						<div class="grid">
							<figure class="effect-layla">
								<img src="images/gestionInmobiliariaBG.jpg" alt="img06"/>
								<figcaption>
									<h2>GESTIÓN INMOBILIARIA</h2>
								</figcaption>			
							</figure>
						</div>
					</div>
				</div>
			</div>
		</section>

		<?php include 'footer.php'; ?>
	</body>
</html>