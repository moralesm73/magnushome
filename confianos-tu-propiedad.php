<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<title>Confíanos tu Propiedad | Magnus Home</title>

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

		<script src="https://www.google.com/recaptcha/api.js?render=6LeW4eIUAAAAAP5oWqgMWsF54QGYYjldCQ0BefW1"></script>

	</head>
	<body>

		<!-- <div id="overlay"></div>
		<div id="loader">
			<div>
				<img src="images/logo_magnus_min.png" class="img-fluid">
			</div>
		</div> -->

		<?php 
			if( !empty($_GET['e']) ){
		?>
			<script type="text/javascript">
				$(document).ready( function() {
					$('#modalError').modal('show');
				});
			</script>
			<div id="modalError" class="modal fade bd-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
				<div class="modal-dialog modal-sm">
					<div class="modal-warning bg-warning">
						<div class="modal-header">
							<button type="button" class="close text-white" data-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">×</span>
							</button>
						</div>
						<div class="modal-body text-white">
							Hubo un error en el envío del formulario. Inténtalo nuevamente.
						</div>
					</div>
				</div>
			</div>
		<?php
			};
		?>

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
							<li class="nav-item active">
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
			<div id="somos" class="contieneBG">
				<div class="container">
					<div class="row no-gutters align-items-center ">
						<div class="col">
							<h1 class="titPage text-white">RÁPIDO, FÁCIL Y SEGURO<br>TE ENTREGAMOS LO QUE NECESITAS.</h1>
						</div>
					</div>
				</div>
			</div>
		</section>

		<section id="default">
			<div class="container">
				<h1 class="acentuado text-center">CONFÍANOS TU PROPIEDAD</h1>
				<form id="formPropiedad" action="assets/guardarPropiedad.php" method="POST">
					<p>Ingresa tus datos y te contactaremos a la brevedad.</p>
					<div class="form-group row">
						<label for="tipo" class="col-sm-3 col-form-label">Quiero</label>
						<div class="col-sm-9">
							<select class="form-control" id="tipo" name="tipo" required>
								<option>Elige una opción...</option>
								<option value="Venta">Vender mi propiedad</option>
								<option value="Arriendo">Arrendar mi propiedad</option>
							</select>
						</div>
					</div>
					<div class="form-group row">
						<label for="propiedad" class="col-sm-3 col-form-label">Mi propiedad es</label>
						<div class="col-sm-9">
							<select class="form-control" id="propiedad" name="propiedad" required>
								<option>Elige una opción...</option>
								<option value="Casa">Casa</option>
								<option value="Depto">Departamento</option>
								<option value="Terreno/Parcela">Terreno o Parcela</option>
								<option value="Oficina">Oficina</option>
							</select>
						</div>
					</div>
					<div class="form-group row">
						<label for="propiedad" class="col-sm-3 col-form-label">Región</label>
						<div class="col-sm-9">
							<select class="form-control" id="region" name="region" required>
								<option value="">Elige una opción...</option>
								<option value="1">I Región de Tarapacá</option>
								<option value="2">II Región de Antofagasta</option>
								<option value="3">III Región de Atacama</option>
								<option value="4">IV Región de Coquimbo</option>
								<option value="5">V Región de Valparaíso</option>
								<option value="6">VI Región del Libertador General Bernardo O'Higgins</option>
								<option value="7">VII Región del Maule</option>
								<option value="8">VIII Región del Biobío</option>
								<option value="9">IX Región de la Araucanía</option>
								<option value="10">X Región de Los Lagos</option>
								<option value="11">XI Región de Aysén del General Carlos Ibañez del Campo</option>
								<option value="12">XII Región de Magallanes y de la Antártica Chilena</option>
								<option value="13">XIII Región Metropolitana de Santiago</option>
								<option value="14">XIV Región de Los Ríos</option>
								<option value="15">XV Región de Arica y Parinacota</option>
								<option value="16">XVI Región del Ñuble</option>
							</select>
						</div>
					</div>
					<div class="form-group row">
						<label for="comuna" class="col-sm-3 col-form-label">Comuna</label>
						<div class="col-sm-9">
							<input type="text" class="form-control" id="comuna" name="comuna" maxlength="100" required>
						</div>
					</div>
					<div class="form-group row">
						<label for="nombre" class="col-sm-3 col-form-label">Nombre</label>
						<div class="col-sm-9">
							<input type="text" class="form-control" id="nombre" name="nombre" maxlength="80" required>
						</div>
					</div>
					<div class="form-group row">
						<label for="fono" class="col-sm-3 col-form-label">Fono</label>
						<div class="col-sm-9">
							<div class="input-group">
								<div class="input-group-prepend">
									<div class="input-group-text">+56 9</div>
								</div>
								<input type="text" class="form-control" id="fono" name="fono" maxlength="20" required>
							</div>
						</div>
					</div>
					<div class="form-group row">
						<label for="email" class="col-sm-3 col-form-label">Email</label>
						<div class="col-sm-9">
							<input type="email" class="form-control" id="email" name="email" maxlength="80" required>
						</div>
					</div>
					<div class="form-group row">
						<label for="mensaje" class="col-sm-3 col-form-label">Información adicional</label>
						<div class="col-sm-9">
							<textarea class="form-control" id="mensaje" maxlength="500" name="mensaje" rows="3"></textarea>
						</div>
					</div>
					<input type="hidden" class="form-control g-recaptcha" name="g-recaptcha-response" id="g-recaptcha-response">
					<div class="form-group row">
						<div class="col text-center">
							<button type="submit" class="btn btn-enviar">Quiero ser contactado</button>
						</div>
					</div>
				</form>
			</div>
		</section>

		<?php include 'footer.php'; ?>

		<script>
          grecaptcha.ready(function() {
            grecaptcha.execute('6LeW4eIUAAAAAP5oWqgMWsF54QGYYjldCQ0BefW1', {action: 'confiaProp'}).then(function(token) {
              document.getElementById('g-recaptcha-response').value=token;
            });
          });
        </script>
	</body>
</html>