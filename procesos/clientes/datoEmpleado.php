<?php 
require_once"../../clases/Conexion.php";
$id_cliente = $_POST['id'];
$c = new conectar();
$dbh = $c->conexion();
$stmt = $dbh->prepare("SELECT DISTINCT c.denominacion, c.nro_cliente, c.id_cliente FROM clientes c inner join empleador e on c.id_cliente = e.id_cliente where c.id_cliente=:id LIMIT 0");
$stmt->bindValue(':id',$id_cliente,PDO::PARAM_INT);
$cliente = array();

if($stmt->execute()){
$cliente = $stmt->fetch();
 echo json_encode($cliente);	
}else{
	print_r($dbh->errorInfo());
}





 ?>