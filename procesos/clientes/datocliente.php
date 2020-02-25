<?php 
require_once"../../clases/Conexion.php";
$id_cliente = $_POST['id'];
$c = new conectar();
$dbh = $c->conexion();
$stmt = $dbh->prepare("SELECT c.id_cliente, c.denominacion, c.nro_cliente, p.cuit, p.estado FROM clientes c  INNER JOIN datosfiscales p on p.id_cliente = c.id_cliente where c.id_cliente=:id");
$stmt->bindValue(':id',$id_cliente,PDO::PARAM_INT);
$cliente = array();

if($stmt->execute()){
$cliente = $stmt->fetch();
$cliente['denominacion'] = utf8_decode($cliente['denominacion']);
 echo json_encode($cliente);	
}else{
	print_r($dbh->errorInfo());
}





 ?>