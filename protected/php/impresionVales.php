<?php 

error_reporting(E_ALL ^ E_DEPRECATED);
header("Content-Type: text/html; Charset=UTF-8");
session_start();

$folioX = $_SESSION['folioX'];

	$con = new SQLite3("../data/aten.db") or die("Problemas para conectar");
	$cs = $con -> query("SELECT * FROM datosVales WHERE folioVales = '$folioX'");

	while ($resultado = $cs -> fetchArray()) {
		$folioVales = $resultado['folioVales'];
		$fechaVales = $resultado['fechaVales'];
		$horaVales = $resultado['horaVales'];
		$seccionVales = $resultado['seccionVales'];
		$nombreVales = $resultado['nombreVales'];
		$domicilioVales = $resultado['domicilioVales'];
		$telParticularVales = $resultado['telParticularVales'];
		$telCelularVales = $resultado['telCelularVales'];
		$tipoApoyoVales = $resultado['tipoApoyoVales'];
		$cantidadVales = $resultado['cantidadVales'];
		$tipMedVales = $resultado['tipMedVales'];
		$observaVales = $resultado['observaVales'];
		$atendioVales = $resultado['atendioVales'];
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
							<div class="cRTexto"><?php echo $folioVales; ?></div>
						</div>
						<div class="ctxtCuadros">
							<div class="cTexto"><i class="colorGris fa fa-calendar" aria-hidden="true"></i> Fecha:</div>
							<div class="cRTextoDos"><?php echo $fechaVales; ?></div>
							<div class="cTexto"><i class="colorGris fa fa-clock-o" aria-hidden="true"></i> Hora:</div>
							<div class="cRTextoDos"><?php echo $horaVales; ?></div>
						</div>
						<div class="ctxtCuadros">
							<div class="cTexto"><i class="colorGris fa fa-map-o" aria-hidden="true"></i> Sección:</div>
							<div class="cRTextoDos"><?php echo $seccionVales; ?></div>
						</div>
						<div class="ctxtCuadros">
							<div class="cTexto"><i class="colorGris fa fa-user-o" aria-hidden="true"></i> Nombre:</div>
							<div class="cRTexto"><?php echo $nombreVales; ?></div>
						</div>
						<div class="ctxtCuadros">
							<div class="cTexto"><i class="colorGris fa fa-globe" aria-hidden="true"></i> Domicilio:</div>
							<div class="cRTexto"><?php echo $domicilioVales; ?></div>
						</div>
						<div class="ctxtCuadros">
							<div class="cTexto"><i class="colorGris fa fa-phone" aria-hidden="true"></i> Tel. Particular:</div>
							<div class="cRTextoDos"><?php echo $telParticularVales; ?></div>
							<div class="cTexto"><i class="colorGris fa fa-mobile" aria-hidden="true"></i> Tel. Celular:</div>
							<div class="cRTextoDos"><?php echo $telCelularVales; ?></div>
						</div>
						<div class="ctxtCuadros">
							<div class="cTexto"><i class="colorGris fa fa-cube" aria-hidden="true"></i> Tipo de Apoyo:</div>
							<div class="cRTexto"><?php echo $tipoApoyoVales; ?></div>
						</div>
						<div class="ctxtCuadros">
							<div class="cTexto"><i class="colorGris fa fa-cube" aria-hidden="true"></i> Cantidad:</div>
							<div class="cRTexto"><?php echo $cantidadVales.' '.$tipMedVales; ?></div>
						</div>
						<div class="ctxtCuadros">
							<div class="cTextoDos"><i class="colorGris fa fa-exclamation-circle" aria-hidden="true"></i> Observaciones:</div>
							<div class="cRTextoTres"><?php echo $observaVales; ?></div>
						</div>
						<div class="ctxtCuadros">
							<div class="cTexto"><i class="colorGris fa fa-american-sign-language-interpreting" aria-hidden="true"></i> Atendió:</div>
							<div class="cRTexto"><?php echo $atendioVales; ?></div>
						</div>
					</div>
				</div>

				
			</div>
</div>	
</body>
</html>