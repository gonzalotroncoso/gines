<?php 
header('Content-Type: text/html; charset=utf-8');
require_once"../../clases/conexion.php";
require_once"../../clases/clientes.php";
 $idcliente=$_POST['id_cliente'];
$obj = new clientes();
echo json_encode ($obj->obtenDatosCliente($idcliente));

 ?>