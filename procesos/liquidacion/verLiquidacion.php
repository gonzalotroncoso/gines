<?php 
require_once"../../clases/Conexion.php";
	$c = new conectar();
	$dbh = $c->conexion();
	$id = $_POST['idcliente'];
	$sql = "SELECT * FROM liquidacionmensual l inner join clientes c on c.id_cliente = l.id_cliente WHERE l.id_cliente=:id ";
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