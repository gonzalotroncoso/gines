<?php 
require_once"../../clases/Conexion.php";
	$c = new conectar();
	$dbh = $c->conexion();

$sql5= "SELECT distinct(c.denominacion) as denominacion, (c.nro_cliente) as nro_cliente, (c.id_cliente) as id_cliente FROM clientes c inner join liquidacionmensual l on l.id_cliente = c.id_cliente and l.fin = 0";
$stmt5 = $dbh->prepare($sql5);

$cliente = array();
if($stmt5->execute()){	
	while($clientes=$stmt5->fetch()){
		$clientes['denominacion']=utf8_decode($clientes['denominacion']);

	$cliente[] = $clientes;
	}

	 
	}else{
		$cliente = $dbh->errorInfo();
	}

	echo json_encode($cliente);




 ?>