<?php 


require_once"../../clases/Conexion.php";
require_once "../../clases/Clientes.php";
$obj= new clientes();

if (isset($_POST['clienteVenta'])){
	$id_cliente = $_POST['clienteVenta'];	
}
if(isset($_POST['edad'])){
	$edad = $_POST['edad'];
}else{
	$edad = 1;
}
if(isset($_POST['horario'])){
	$horario = $_POST['horario'];
}else{
	$horario = 1;
}

if(isset($_POST['sindicato'])){
	$sindicato = $_POST['sindicato'];
}else{
	$sindicato = 1;
}

$datos = array($id_cliente, $edad, $horario, $sindicato );

echo ($obj->registroEmpleado($datos));

?>