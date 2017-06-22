<?php 

error_reporting(E_ALL ^ E_DEPRECATED);
header("Content-Type: text/html; Charset=UTF-8");
session_start();


if (isset($_POST['txtFolio']) && !empty($_POST['txtFolio']) &&
	isset($_POST['txtNombre']) && !empty($_POST['txtNombre'])) {

	$conX = new SQLite3("../data/aten.db") or die("Problemas para conectar");
	$csX = $conX -> query("SELECT COUNT(folioVales) AS cuantosFolios FROM datosVales WHERE folioVales = '$_POST[txtFolio]'");
	while ($resulCuantos = $csX -> fetchArray()) {
		$cuantosFolios = $resulCuantos['cuantosFolios'];
	}
	$conX -> close();

	if ($cuantosFolios == 0) {
		$vartxtFolio = "";
		$vartxtFecha = "";
		$vartxtHora = "";
		$vartxtSecc = "";
		$vartxtNombre = "";
		$vartxtDom = "";
		$vartxtTelP = "";
		$vartxtTelCelu = "";
		$vartxtTipAp = "";
		$vartxtCantidad = "";
		$vartxtMed = "";
		$vartxtObserva = "";
		$vartxtUsuario = "";

		$vartxtFolio = $_POST['txtFolio'];
		$vartxtFecha = $_POST['txtFecha'];
		$vartxtHora = $_POST['txtHora'];
		$vartxtSecc = $_POST['txtSecc'];
		$vartxtNombre = mb_strtoupper($_POST['txtNombre'], 'UTF-8');
		$vartxtDom = mb_strtoupper($_POST['txtDom'], 'UTF-8');
		$vartxtTelP = $_POST['txtTelP'];
		$vartxtTelCelu = $_POST['txtTelCelu'];
		$vartxtTipAp = mb_strtoupper($_POST['txtTipApoyo'], 'UTF-8');
		$vartxtCantidad = $_POST['txtCantidad'];
		$vartxtMed = mb_strtoupper($_POST['txtTipMed'], 'UTF-8');
		$vartxtObserva = mb_strtoupper($_POST['txtObservaciones'], 'UTF-8');
		$vartxtUsuario = mb_strtoupper($_POST['txtUsuario'], 'UTF-8');

		$_SESSION['folioX'] = $_POST['txtFolio'];

			$con = new SQLite3("../data/aten.db") or die("Problemas para conectar");
			$cs = $con -> query("INSERT INTO datosVales (folioVales,fechaVales,horaVales,seccionVales,nombreVales,domicilioVales,telParticularVales,telCelularVales,tipoApoyoVales,cantidadVales,tipMedVales,observaVales,atendioVales) VALUES ('$vartxtFolio','$vartxtFecha','$vartxtHora','$vartxtSecc','$vartxtNombre','$vartxtDom', '$vartxtTelP','$vartxtTelCelu','$vartxtTipAp','$vartxtCantidad','$vartxtMed','$vartxtObserva','$vartxtUsuario')");


			$con -> close();


			echo '
		<html>
			<head>
				<meta http-equiv="REFRESH" content="0; url=impresionVales.php">
			</head>
		</html>

			';
	}else{
		echo "<script> alert('Datos Duplicados!'); </script>";
		// echo "<script> window.location='vales.php'; </script>";
	}

	




}else{
	echo "<script> alert('Faltan Datos'); </script>";
	echo "<script> window.location='vales.php'; </script>";
}






 ?>