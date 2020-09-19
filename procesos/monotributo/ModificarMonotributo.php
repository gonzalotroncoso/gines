<?php 
require_once"../../clases/Conexion.php";
$c = new conectar();
$dbh = $c->conexion();
$categoria = $_POST['categoria'];

$sql = "SELECT * FROM tabla_monotributo where categoria = :categoria";
$st = $dbh->prepare($sql);
$st->bindValue(':categoria',$categoria, PDO::PARAM_STR);


if($st->execute()){
	$m =$st->fetch();	
	
	echo json_encode($m);
}else{
	echo json_encode($st->errorInfo());
}


 ?>