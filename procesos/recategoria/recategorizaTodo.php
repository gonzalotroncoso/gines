<?php 
require_once"../../clases/Conexion.php";
require_once "../../clases/clientes.php";
$cliente = new clientes();
$id = $_POST['idcliente'];
echo ($cliente->recAll($id));


 ?>