<?php 
require_once"../../clases/Conexion.php";
$idater = $_POST['idater'];
$c = new conectar();
$dbh = $c->conexion();
$stmt = $dbh->prepare("SELECT * from convenio_multilateral c where c.id_ater=:id");
$stmt->bindValue(':id',$idater,PDO::PARAM_INT);
$cliente = array();

if($stmt->execute()){
$cliente = $stmt->fetch();
 echo json_encode($cliente);	
}else{
	print_r($dbh->errorInfo());
}





 ?>