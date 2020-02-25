<?php 
require_once"../../clases/Conexion.php";
require_once "../../clases/Clientes.php";
$obj= new clientes();

if(isset($_POST['id_cliente'])){
	$id_cliente =$_POST['id_cliente'];
}

if(isset($_POST['fecha_inicio'])){
	$fecha_inicio = $_POST['fecha_inicio'];
	}

if(isset($_POST['monto'])){
	$monto = $_POST['monto'];
	}

$datos= array($id_cliente,$fecha_inicio,$monto);

echo($obj->mesMonotributo($datos));	
 ?>
