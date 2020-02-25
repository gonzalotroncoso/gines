<?php 
require_once"../../clases/Conexion.php";
require_once "../../clases/Clientes.php";
$obj= new clientes();

if(isset($_POST['id_cliente'])){
	$id_cliente =$_POST['id_cliente'];
}

if(isset($_POST['fecha_egreso'])){
	$fecha_egreso = $_POST['fecha_egreso'];
	}

$datos= array($id_cliente,$fecha_egreso);

echo $obj->bajaClientes($datos);	
 ?>
