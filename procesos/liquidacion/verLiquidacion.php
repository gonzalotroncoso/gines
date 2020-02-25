<?php 
require_once"../../clases/Conexion.php";
	$c = new conectar();
	$dbh = $c->conexion();
	$id = $_POST['idcliente'];
	$sql = "SELECT * FROM liquidacionmensual l, clientes c WHERE l.id_cliente=:id and l.id_cliente = c.id_cliente";
	$query = $dbh->prepare($sql);
	$query->bindValue(':id',$id,PDO::PARAM_INT);
	$query->execute();
	$cliente = array();
	$i = 0;
	while($clientes=$query->fetch()){
		$i++;
	$cliente[] = $clientes;
	 }

	echo json_encode($cliente);
 ?>