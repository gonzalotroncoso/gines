<?php 
require_once"../../clases/Conexion.php";
$estado ="Inactivo";
$c = new conectar();
$dbh = $c->conexion();
$stmt = $dbh->prepare("SELECT * FROM clientes c inner join datosfiscales d on c.id_cliente = d.id_cliente where
						 d.estado=:estado");
$stmt->bindValue(':estado',$estado,PDO::PARAM_STR);
$c = array();

if($stmt->execute()){
	while ($cliente = $stmt->fetch()){
		$cliente['denominacion']=utf8_decode($cliente['denominacion']);
		$c[]=$cliente;
	}

 echo json_encode($c);	
}else{
	print_r($dbh->errorInfo());
}





 ?>