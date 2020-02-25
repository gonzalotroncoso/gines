<?php 


require_once"../../clases/Conexion.php";
require_once "../../clases/liquidacion.php";
$obj= new liquidacion();

$id =$_POST['idcliente'];

echo json_encode ($obj->tablaLiquidacion($id));


?>