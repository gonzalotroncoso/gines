<?php 
require_once"../../clases/Conexion.php";
$id_cliente = $_POST['id'];
$c = new conectar();
$dbh = $c->conexion();
$stmt = $dbh->prepare("SELECT * FROM clientes c inner join cliente_usuario  d on c.id_cliente = d.id_cliente where d.id_usuario=:id");
$stmt->bindValue(':id',$id_cliente,PDO::PARAM_INT);
$c = array();

if($stmt->execute()){
	while ($cliente = $stmt->fetch()){
		$cliente['denominacion'] = utf8_decode($cliente['denominacion']);
		$c[]=$cliente;
	}

 echo json_encode($c);	
}else{
	print_r($dbh->errorInfo());
}


 ?>