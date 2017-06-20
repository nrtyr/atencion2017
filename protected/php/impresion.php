<?php 

error_reporting(E_ALL ^ E_DEPRECATED);
header("Content-Type: text/html; Charset=UTF-8");
session_start();

$folioX = $_SESSION['folioX'];

	$con = new SQLite3("../data/aten.db") or die("Problemas para conectar");
	$cs = $con -> query("SELECT * FROM datosAtension WHERE folioAten = '$folioX'");

	while ($resultado = $cs -> fetchArray()) {
		$folioAten = $resultado['folioAten'];
		$fechaAten = $resultado['fechaAten'];
		$horaAten = $resultado['horaAten'];
		$seccionAten = $resultado['seccionAten'];
		$onomasticoAten = $resultado['onomasticoAten'];
		$nombreAten = $resultado['nombreAten'];
		$domicilioAten = $resultado['domicilioAten'];
		$telParticularAten = $resultado['telParticularAten'];
		$telCelularAten = $resultado['telCelularAten'];
		$correoAten = $resultado['correoAten'];
		$asuntoAten = $resultado['asuntoAten'];
		$areaAten = $resultado['areaAten'];
		$atendioAten = $resultado['atendioAten'];
	}
	$con -> close();

 ?>

<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=devicewidth, minimal-ui">
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="css/bootstrap-theme.css">
	<link rel="stylesheet" href="css/font-awesome.css">
	<link rel="stylesheet" href="css/impre.css">
	<script type="text/javascript" src="js/bootstrap.js"></script>
	<title>Impresión</title>
</head>
<body>
<div id="main-wrapper">

			<div class="cHojaMem">
				<div class="cuadroUno">
					<img src="css/img/fondo.svg" class="fondo" alt="">
					<div class="capaDos">
						<div class="ctxtCuadros">
							<div class="cTexto"><i class="colorGris fa fa-folder-open-o" aria-hidden="true"></i> Folio:</div>
							<div class="cRTexto"><?php echo $folioAten; ?></div>
						</div>
						<div class="ctxtCuadros">
							<div class="cTexto"><i class="colorGris fa fa-calendar" aria-hidden="true"></i> Fecha:</div>
							<div class="cRTextoDos"><?php echo $fechaAten; ?></div>
							<div class="cTexto"><i class="colorGris fa fa-clock-o" aria-hidden="true"></i> Hora:</div>
							<div class="cRTextoDos"><?php echo $horaAten; ?></div>
						</div>
						<div class="ctxtCuadros">
							<div class="cTexto"><i class="colorGris fa fa-map-o" aria-hidden="true"></i> Sección:</div>
							<div class="cRTextoDos"><?php echo $seccionAten; ?></div>
							<div class="cTexto"><i class="colorGris fa fa-birthday-cake" aria-hidden="true"></i> Onomástico:</div>
							<div class="cRTextoDos"><?php echo $onomasticoAten; ?></div>
						</div>
						<div class="ctxtCuadros">
							<div class="cTexto"><i class="colorGris fa fa-user-o" aria-hidden="true"></i> Nombre:</div>
							<div class="cRTexto"><?php echo $nombreAten; ?></div>
						</div>
						<div class="ctxtCuadros">
							<div class="cTexto"><i class="colorGris fa fa-globe" aria-hidden="true"></i> Domicilio:</div>
							<div class="cRTexto"><?php echo $domicilioAten; ?></div>
						</div>
						<div class="ctxtCuadros">
							<div class="cTexto"><i class="colorGris fa fa-phone" aria-hidden="true"></i> Tel. Particular:</div>
							<div class="cRTextoDos"><?php echo $telParticularAten; ?></div>
							<div class="cTexto"><i class="colorGris fa fa-mobile" aria-hidden="true"></i> Tel. Celular:</div>
							<div class="cRTextoDos"><?php echo $telCelularAten; ?></div>
						</div>
						<div class="ctxtCuadros">
							<div class="cTexto"><i class="colorGris fa fa-envelope-o" aria-hidden="true"></i> Correo Electronico:</div>
							<div class="cRTexto"><?php echo $correoAten; ?></div>
						</div>
						<div class="ctxtCuadros">
							<div class="cTextoDos"><i class="colorGris fa fa-exclamation-circle" aria-hidden="true"></i> Asunto:</div>
							<div class="cRTextoTres"><?php echo $asuntoAten; ?></div>
						</div>
						<div class="ctxtCuadros">
							<div class="cTextoTres"><i class="colorGris fa fa-users" aria-hidden="true"></i> Area o Dependencia a la que se Canalizo:</div>
							<div class="cRTextoCuatro"><?php echo $areaAten; ?></div>
						</div>
						<div class="ctxtCuadros">
							<div class="cTexto"><i class="colorGris fa fa-american-sign-language-interpreting" aria-hidden="true"></i> Atendió:</div>
							<div class="cRTexto"><?php echo $atendioAten; ?></div>
						</div>
					</div>
				</div>

				
			</div>
</div>	
</body>
</html>