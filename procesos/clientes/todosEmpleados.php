<?php 
require_once"../../clases/Conexion.php";
$estado ="Activo";
$c = new conectar();
$dbh = $c->conexion();
$stmt = $dbh->prepare("SELECT DISTINCT c.denominacion, c.nro_cliente, c.id_cliente FROM clientes c inner join empleador e on c.id_cliente = e.id_cliente");

$c = array();

if($stmt->execute()){
	while ($cliente = $stmt->fetch()){
		$c[]=$cliente;
	}

 echo json_encode($c);	
}else{
	print_r($dbh->errorInfo());
}


 ?>