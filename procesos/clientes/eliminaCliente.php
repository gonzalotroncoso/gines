<?php 

require_once"../../clases/Conexion.php";
require_once "../../clases/Clientes.php";


   
$id = $_POST['id_cliente'];

$obj = new clientes();
echo   $obj->eliminarCliente($id);



 ?>