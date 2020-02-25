<?php 
require_once"../../clases/Conexion.php";
require_once "../../clases/pagos.php";

	$c = new conectar();
	$dbh = $c->conexion();

	$id =$_POST['id'];
	$mes =$_POST['mes'];
	$anio = $_POST['anio'];
	

	$sql = "SELECT * from clientes c, pagos p where c.id_cliente=:id and p.id_cliente=:idpago order by fecha desc";
	$stmt = $dbh->prepare($sql);
	$stmt->bindValue(':id',$id,PDO::PARAM_INT);
	$stmt->bindValue(':idpago',$id,PDO::PARAM_INT);
	$stmt->execute();
	$cliente = array();
	while($pagos = $stmt->fetch()){
		$fecha =strtotime($pagos['fecha']);
		$m =date ('m', $fecha);	
		$a = date('Y',$fecha);	
		if($mes == $m && $a==$anio){	
		$cliente[] = $pagos;
		}
	}
	


	echo json_encode ($cliente);
 ?>