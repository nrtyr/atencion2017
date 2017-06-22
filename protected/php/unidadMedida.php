<?php 
error_reporting(E_ALL ^ E_DEPRECATED);
header('Content-Type: text/html; Charset=UTF-8');


$db = new SQLite3("../data/catalogos.db");

$cs = $db -> query("SELECT * FROM tipoUnidades WHERE tipoMed LIKE '%$_GET[term]%' ;");
	    
while($resul = $cs->fetchArray()) {
  $return_arr[] =  $resul['tipoMed'];
}
echo json_encode($return_arr);

$db -> close();



 ?>