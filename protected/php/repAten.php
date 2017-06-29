<?php 

error_reporting(E_ALL ^ E_DEPRECATED);
header("Content-Type: text/html; Charset=UTF-8");

if (isset($_POST['txtDiaUno']) && !empty($_POST['txtDiaUno'])) {
	

	$anoUno = substr($_POST['txtDiaUno'], 0,4);
	$mesUno = substr($_POST['txtDiaUno'], 5,2);
	$diaUno = substr($_POST['txtDiaUno'], 8,2);

	$anoDos = substr($_POST['txtDiaDos'], 0,4);
	$mesDos = substr($_POST['txtDiaDos'], 5,2);
	$diaDos = substr($_POST['txtDiaDos'], 8,2);

	$diaUnoC = $diaUno."-".$mesUno."-".$anoUno;
	$diaDosC = $diaDos."-".$mesDos."-".$anoDos;
	$cuantosFolios = "";


	$con = new SQLite3("../data/aten.db") or die("Problemas para conectar");
	$cs = $con -> query("SELECT COUNT(folioAten) AS cuantosFolios FROM datosAtension WHERE fechaAten BETWEEN '$diaUnoC' AND '$diaDosC'");
	while ($resulCuantos = $cs -> fetchArray()) {
		$cuantosFolios = $resulCuantos['cuantosFolios'];
	}

	if ($cuantosFolios == "") {
		$cuantosFolios = "No tengo registros";
	}

	$con -> close();
}else{
	echo "<script> alert('No puedes ver esta pagina!'); </script>";
	echo "<script> window.location='reportes.php'; </script>";
}


 ?>

 <?php 

error_reporting(E_ALL ^ E_DEPRECATED);
header("Content-Type: text/html; Charset=UTF-8");

include("seguridad.php");

date_default_timezone_set('America/Mexico_City');
$prinDeMes = date("Y-m-01");
$diaActual = date("Y-m-d");

 ?>


<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
	<title>Anteción Ciudadana</title>
	<link rel="stylesheet" href="../../css/bootstrap.css">
	<link rel="stylesheet" href="../../css/bootstrap-theme.css">

	<link rel="stylesheet" href="../../css/jquery-ui.css">
	<script src="../../js/jquery.min.js"></script>
	<script src="../../js/jquery-ui.min.js"></script>

	<script type="text/javascript" src="../../js/bootstrap.js"></script>
	
	<!-- este es el delay de la pagina -->
	<?php include("../../inc/displayDelay.inc"); ?>
	<!-- este es el delay de la pagina -->
	<style>
		
		input[type=text],[type=number],[type=hidden]{
			text-transform: uppercase;
		}
		textarea{
			text-transform: uppercase;
		}
		.resBtn{
			background-color: #562CDF;
			color: #FFF;
		}
		.resBtn:hover{
			background-color: #3B008B;
			color: #FFF;
		}

		.btnVerdeF{
			background-color: #88c441;
			color: #FFF;
			width: 50%;
		}
		.btnVerdeF:hover{
			background-color: #6FA232;
			color: #FFF;
		}
		.txtRosa{
			color: #eb1561;
		}
		.txtVerde{
			color: #009687;
		}
		.panel{
            border-color: #009687;
        }
        .panelTop{
            background-color: #009687;
            color: #fff;
        }
        .btnVerde{
            background-color: #009687;
            color: #FFF;
        }
        .btnVerde:hover{
            background-color: #006D62;
            color: #FFF;
        }
        .btnAzul{
            background-color: #45d0e3;
            color: #FFF;
            width: 100%;
        }
        .btnAzul:hover{
            background-color: #36A2B1;
            color: #FFF;
        }
        .btnRojo{
        	background-color: #e64759;
            color: #FFF;
        }
        .btnRojo:hover{
        	background-color: #932c38;
            color: #FFF;
        }
        .backGrey{
        	background-color: #D4D4D4;
        	-webkit-border-radius: 8px;
        	        border-radius: 8px;
        	padding: 0px 13px;
        }
	</style>

</head>
<body>
<div class="container">
	<div class="row">
		<div class="col-lg-12 panel panel-success">
		<br>
		<h3>Total General: Atención Ciudadana</h3>
		<br>

			<div class="table-responsive">
			  <table class="table table-bordered">
			  		<thead class="panelTop">
				 		<tr>
				 			<th>De la Fecha:</th>
				 			<th>A la Fecha:</th>
				 			<th>Totales:</th>
				 		</tr>
			 		</thead>
				 		<tr>
				 			<td><?php echo $diaUnoC; ?></td>
				 			<td><?php echo $diaDosC; ?></td>
				 			<td><?php echo $cuantosFolios; ?></td>
				 		</tr>
			  </table>
			  <br>
			  <table class="table table-bordered">
			  		<thead class="panelTop">
				 		<tr>
				 			<th>Folio:</th>
				 			<th>Fecha:</th>
				 			<th>Hora:</th>
				 			<th>Sección:</th>
				 			<th>Onomastico:</th>
				 			<th>Nombre:</th>
				 			<th>Domicilio:</th>
				 			<th>Tel Casa:</th>
				 			<th>Tel Celular:</th>
				 			<th>Correo:</th>
				 			<th>Asunto:</th>
				 			<th>Area:</th>
				 			<th>Atendio:</th>
				 		</tr>
			 		</thead>
			 		<?php 
						$conR = new SQLite3("../data/aten.db") or die("Problemas para conectar");
						$csR = $conR -> query("SELECT * FROM datosAtension WHERE fechaAten BETWEEN '$diaUnoC' AND '$diaDosC'");
						while ($rAtension = $csR -> fetchArray()) {
							$folioAtenR = $rAtension['folioAten'];
							$fechaAtenR = $rAtension['fechaAten'];
							$horaAtenR = $rAtension['horaAten'];
							$seccionAtenR = $rAtension['seccionAten'];
							$onomasticoAtenR = $rAtension['onomasticoAten'];
							$nombreAtenR = $rAtension['nombreAten'];
							$domicilioAtenR = $rAtension['domicilioAten'];
							$telParticularAtenR = $rAtension['telParticularAten'];
							$telCelularAtenR = $rAtension['telCelularAten'];
							$correoAtenR = $rAtension['correoAten'];
							$asuntoAtenR = $rAtension['asuntoAten'];
							$areaAtenR = $rAtension['areaAten'];
							$atendioAtenR = $rAtension['atendioAten'];


echo '

						<tr>
				 			<th>'.$folioAtenR.'</th>
				 			<th>'.$fechaAtenR.'</th>
				 			<th>'.$horaAtenR.'</th>
				 			<th>'.$seccionAtenR.'</th>
				 			<th>'.$onomasticoAtenR.'</th>
				 			<th>'.$nombreAtenR.'</th>
				 			<th>'.$domicilioAtenR.'</th>
				 			<th>'.$telParticularAtenR.'</th>
				 			<th>'.$telCelularAtenR.'</th>
				 			<th>'.$correoAtenR.'</th>
				 			<th>'.$asuntoAtenR.'</th>
				 			<th>'.$areaAtenR.'</th>
				 			<th>'.$atendioAtenR.'</th>
				 		</tr>

';


						}

						$conR -> close();

			 		 ?>
				 		
			  </table>
			  <br>
			  <br>
			</div>
			
		</div>
	</div>
</div>


</body>
</html>