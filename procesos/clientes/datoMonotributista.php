<?php 
require_once"../../clases/Conexion.php";
$idcon = $_POST['idcon'];
$c = new conectar();
$dbh = $c->conexion();
$stmt = $dbh->prepare("SELECT * from monotributo c where c.id_condicion=:id");
$stmt->bindValue(':id',$idcon,PDO::PARAM_INT);
$cliente = array();

if($stmt->execute()){
$cliente = $stmt->fetch();
 echo json_encode($cliente);	
}else{
	print_r($dbh->errorInfo());
}





 ?>