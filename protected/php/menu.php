<?php 

include("seguridad.php");

 ?>

<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
	<title>Avonn</title>
	<link rel="stylesheet" href="../../css/bootstrap.css">
	<link rel="stylesheet" href="../../css/bootstrap-theme.css">
	<link rel="stylesheet" href="../../css/jquery-ui.css">
	<link rel="stylesheet" href="../../css/inicio.css">
	<script type="text/javascript" src="../../js/bootstrap.js"></script>
	<script type="text/javascript" src="../../js/jquery.min.js"></script>
	<script type="text/javascript" src="../../js/jquery-ui.min.js"></script>

	<!-- este es el delay de la pagina -->
	<?php include("../../inc/displayDelay.inc"); ?>
	<!-- este es el delay de la pagina -->

</head>
<body>
	<div id="main-wrapper">
		<div class="container">
			<div class="cuadroCentrado">
			<div class="c1">
				<a href="aten.php">
				<img src="../../img/atencion.svg" class="imgBtn">
				</a>
			</div>
			<div class="c1">
				<a href="vales.php">
					<img src="../../img/vales.svg" class="imgBtn">
				</a>
			</div>
			</div>
		</div>
	</div>
</body>
</html>