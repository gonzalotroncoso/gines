<?php 
	require_once "../../clases/Conexion.php";
	require_once "../../clases/clientes.php";
	$id =$_POST['id'];
	$mes =$_POST['mes'];
	$anio = $_POST['anio'];
	$clientes = new clientes();
	echo json_encode ($clientes->obtenMonto($id,$mes,$anio));



 ?>