<?php 
require_once"../../clases/Conexion.php";
require_once "../../clases/pagos.php";

	$c = new conectar();
	$dbh = $c->conexion();

	$id =$_POST['id'];
	$mes =$_POST['mes'];
	$anio = $_POST['anio'];
	

	$sql = "SELECT * FROM clientes c inner join liquidacionmensual li on c.id_cliente=li.id_cliente where c.id_cliente =:id order by li.fecha ASC";
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