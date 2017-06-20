<?php 

error_reporting(E_ALL ^ E_DEPRECATED);
header("Content-Type: text/html; Charset=UTF-8");
session_start();


if (isset($_POST['txtFolio']) && !empty($_POST['txtFolio'])) {

$vartxtFolio = "";
$vartxtFecha = "";
$vartxtHora = "";
$vartxtSecc = "";
$vartxtOnomastic = "";
$vartxtNombre = "";
$vartxtDom = "";
$vartxtTelP = "";
$vartxtTelCelu = "";
$vartxtCorreo = "";
$vartxtAsunto = "";
$vartxtArea = "";
$vartxtUsuario = "";

$vartxtFolio = $_POST['txtFolio'];
$vartxtFecha = $_POST['txtFecha'];
$vartxtHora = $_POST['txtHora'];
$vartxtSecc = $_POST['txtSecc'];
$vartxtOnomastic = $_POST['txtOnomastic'];
$vartxtNombre = mb_strtoupper($_POST['txtNombre'], 'UTF-8');
$vartxtDom = mb_strtoupper($_POST['txtDom'], 'UTF-8');
$vartxtTelP = $_POST['txtTelP'];
$vartxtTelCelu = $_POST['txtTelCelu'];
$vartxtCorreo = $_POST['txtCorreo'];
$vartxtAsunto = mb_strtoupper($_POST['txtAsunto'], 'UTF-8');
$vartxtArea = mb_strtoupper($_POST['txtArea'], 'UTF-8');
$vartxtUsuario = mb_strtoupper($_POST['txtUsuario'], 'UTF-8');

$_SESSION['folioX'] = $_POST['txtFolio'];

	$con = new SQLite3("../data/aten.db") or die("Problemas para conectar");
	$cs = $con -> query("INSERT INTO datosAtension (folioAten,fechaAten,horaAten,seccionAten,onomasticoAten,nombreAten,domicilioAten,telParticularAten,telCelularAten,correoAten,asuntoAten,areaAten,atendioAten) VALUES ('$vartxtFolio','$vartxtFecha','$vartxtHora','$vartxtSecc','$vartxtOnomastic','$vartxtNombre','$vartxtDom', '$vartxtTelP','$vartxtTelCelu','$vartxtCorreo','$vartxtAsunto','$vartxtArea','$vartxtUsuario')");


	$con -> close();


	echo '
<html>
	<head>
		<meta http-equiv="REFRESH" content="0; url=impresion.php">
	</head>
</html>

	';

}else{
	echo "<script> alert('Faltan Datos'); </script>";
	// echo "<script> window.location='index.php'; </script>";
}






 ?>