<?php 
error_reporting(E_ALL ^ E_DEPRECATED);
header('Content-Type: text/html; Charset=UTF-8');


$db = new SQLite3("../data/catalogos.db");

$cs = $db -> query("SELECT * FROM tiposApoyoCat WHERE tipoApoyo LIKE '%$_GET[term]%' ;");
	    
while($resul = $cs->fetchArray()) {
  $return_arr[] =  $resul['tipoApoyo'];
}
echo json_encode($return_arr);

$db -> close();



 ?>