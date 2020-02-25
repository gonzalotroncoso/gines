<?php 
require_once"../../clases/Conexion.php";
require_once "../../clases/pagos.php";

	$c = new conectar();
	$dbh = $c->conexion();

	$id =$_POST['id'];
	$mes =$_POST['mes'];
	$anio = $_POST['anio'];
	

	$sql = "SELECT * FROM condiciontributaria con inner join monotributo m on con.id_condicion = m.id_condicion inner join monotributomensual me on m.id_monotributo= me.id_monotributo where con.id_cliente=:id";
	$stmt = $dbh->prepare($sql);
	$stmt->bindValue(':id',$id,PDO::PARAM_INT);	
	$stmt->execute();
	$cliente =null ;
	while($pagos = $stmt->fetch()){
		$fecha =strtotime($pagos['fecha']);
		$m =date ('m', $fecha);	
		$a = date('Y',$fecha);	
		if($mes == $m && $a==$anio){
		
		$cliente = $pagos;
		}
	}
	
echo json_encode ($cliente);	

	
 ?>