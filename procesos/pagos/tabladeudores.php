<?php 
require_once"../../clases/Conexion.php";
	$c = new conectar();
	$dbh = $c->conexion();

$sql5= "Select DISTINCT c.denominacion, sum(p.total) as totalp, c.nro_cliente, c.id_cliente From pagos p inner join clientes c on c.id_cliente = p.id_cliente group by c.id_cliente, p.id_cliente";
$stmt5 = $dbh->prepare($sql5);

$cliente = array();
if($stmt5->execute()){	
	while($clientes=$stmt5->fetch()){		
	 if($clientes['totalp']>0){
	$cliente[] = $clientes;
	}

	 }
	}else{
		$cliente = $dbh->errorInfo();
	}

	echo json_encode($cliente);




 ?>