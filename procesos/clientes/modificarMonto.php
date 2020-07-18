<?php 


require_once"../../clases/Conexion.php";
require_once "../../clases/Clientes.php";
$obj= new clientes();

$id = $_POST['id_cliente'];
$mes = $_POST['mes'];
$anio = $_POST['anio'];
$monto = $_POST['monto'];


$datos = array($id, $mes, $anio, $monto);


echo $obj->ModificarMontoMono($datos);




?>