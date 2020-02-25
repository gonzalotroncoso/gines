<?php 
require_once"../../clases/Conexion.php";
	$c = new conectar();
	$dbh = $c->conexion();
	$id = $_POST['id'];
	$fecha =$_POST['fecha'];
	

	$query = $dbh->prepare("SELECT * FROM clientes c inner join datosfiscales d on c.id_cliente=d.id_cliente inner join liquidacionmensual l on l.id_cliente=c.id_cliente where l.id_liquidacion=:id and l.fecha=:fecha");
	$query->bindValue(':id',$id,PDO::PARAM_INT);
	$query->bindValue(':fecha',$fecha,PDO::PARAM_STR);
	$query->execute();
	$cliente = $query->fetch();
	

	echo json_encode($cliente);
 ?>