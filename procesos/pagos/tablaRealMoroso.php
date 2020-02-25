<?php 
require_once"../../clases/Conexion.php";
	$c = new conectar();
	$dbh = $c->conexion();
	$id = $_POST['id'];	
	$sql = "select * from clientes c, pagos p where c.id_cliente=:id and p.id_cliente=:idpago order by fecha desc";
	$query = $dbh->prepare($sql);
	$query->bindValue(':id',$id,PDO::PARAM_INT);
	$query->bindValue(':idpago',$id,PDO::PARAM_INT);
	if($query->execute()){
	$cliente = array();
	
	while($clientes=$query->fetch()){
		$clientes['denominacion']= utf8_decode($clientes['denominacion']);
	$cliente[] = $clientes;
	 }
	}else{
		$cliente = $dbh->errorInfo();
	}

	echo json_encode($cliente);
 ?>