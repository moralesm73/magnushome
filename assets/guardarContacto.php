<?php
	
	include 'conn.php';

	$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

	if (!$conn) {
		die("Connection failed: " . mysqli_connect_error());
	};
	
	
	// Datos del Formulario
	$nombre 		= test_input($_POST['nombre']);
	$email 			= test_input($_POST['email']);
	$telefono 		= test_input($_POST['fono']);
	$mensaje 		= test_input($_POST['mensaje']);
	$time 			= date("Y-m-d", time());

	$verificador = getCaptcha($_POST['g-recaptcha-response']);

	if ($verificador->success == true && $verificador->score >= 0.5) {
		mysqli_query($conn, "INSERT INTO contactoweb (nombre, email, telefono, mensaje, fecha) VALUES ('$nombre', '$email', '$telefono', '$mensaje', '$time')");

		require("PHPmailer/class.phpmailer.php");
		require("PHPmailer/class.smtp.php");

		$smtpHost = "ssl://mail.magnushome.cl";
		$correo1 = "info@magnushome.cl";
		$pass1 = "InfoMagnus2019";

		$mailUsuario 	= new PHPMailer();
		$mailUsuario->From = $correo1;
		$mailUsuario->FromName = 'Contacto Magnus Home';
		$mailUsuario->AddAddress('cristofher.pereira@magnushome.cl');
		//$mailUsuario->AddAddress('moralesmatias193@gmail.com');
		$mailUsuario->IsHTML(true); 
		$mailUsuario->Subject = "Nuevo Contacto Magnus Home";
		$mailUsuario->Body = '
					<html>
						<head>
							<title>Información Contacto Magnus Home</title>
						</head>
						<body style="color:#ffffff;">
							<table style="background:#ffffff;color:#000000;" align="center">
								<tr>
									<td style="width:700px;">
										<div style="width:700px;"><h3 style="margin:0;color:#000000;font-family:Arial;"><strong>Buenos días/tardes:</strong></h3></div>
									</td>
								<tr>
								<tr>
									<td style="width:700px;">
										<div style="width:700px;">
											<p style="margin:0 0 5px 0;color:#000000;font-family:Arial;">Por favor, responder a la brevedad</p>
										</div>
									</td>
								</tr>
								<tr>
									<td style="width:700px;">
										<div style="width:700px;">
											<u style="margin:0 0 10px 0;color:#000000;font-family:Arial;">Datos Contacto</u><br>
											<p style="margin:0 0 5px 10px;color:#000000;font-family:Arial;"><strong>Nombre:</u></strong> '. utf8_encode($nombre) .'</p>
											<p style="margin:0 0 5px 10px;color:#000000;font-family:Arial;"><strong>Email:</strong> '. utf8_encode($email) .'</p>
											<p style="margin:0 0 5px 10px;color:#000000;font-family:Arial;"><strong>Telefono:</strong> '. utf8_encode($telefono) .'</p>
											<p style="margin:0 0 30px 10px;color:#000000;font-family:Arial;"><strong>Mensaje:</strong><br>'. utf8_encode($mensaje) .'</p>
											<p style="margin:0 0 30px 10px;color:#000000;font-family:Arial;"><strong>Fecha:</strong> '. $time .'</p>
										</div>
									</td>
								</tr>
								<tr>
									<td style="width:700px;">
										<div style="width:700px;">
											<span style="color: #ff0000; font-size: 11px;"><strong><em>Correo automático, favor no responder a este correo.</em></strong></span>
										</div>
									</td>
								</tr>
							</table>
						</body>
					</html>
		';
		$mailUsuario->CharSet = "utf-8";
		
		$mailUsuario->Mailer = "smtp";
		$mailUsuario->Host = $smtpHost; 
		$mailUsuario->Port = 465;
	    $mailUsuario->SMTPAuth = true;
		$mailUsuario->Username = $correo1; 
		$mailUsuario->Password = $pass1;

		$mailUsuario->Send();
			
		echo '<script language="javascript">window.location="https://magnushome.cl/gracias.php"</script>';
	}else{
		echo '<script language="javascript">window.location="https://magnushome.cl/propiedades.php?e=1"</script>';
	};
		
	function test_input($data) {
		$data = trim($data);
		$data = stripslashes($data);
		$data = htmlspecialchars($data);
		$data = utf8_decode($data);
		$data = strtoupper($data);
		$data = preg_replace("/[\r\n|\n|\r]+/", " ", $data);
		return $data;
	};

	function getCaptcha($secretKey){
		$Response = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=6LeW4eIUAAAAAEQZITPqpfLrwtKOdaI695-x9G0r&response={$secretKey}");
		$Return = json_decode($Response);
		return $Return;
	};
?>







