<?php 
require_once"../../clases/Conexion.php";
$c = new conectar();
$dbh = $c->conexion();
$id = json_decode($_POST['idcliente']);

$s = "SELECT * FROM condiciontributaria con where con.id_cliente = :id";
$st = $dbh->prepare($s);
$st->bindValue(':id',$id,PDO::PARAM_INT);
$st->execute();
$con = $st->fetch();
 if($con['afip']=='Monotributista'){
 	$sql = "SELECT * from monotributo where id_condicion = :id";
 	$stmt = $dbh->prepare($sql);
 	$stmt->bindValue(':id',$con['id_condicion'],PDO::PARAM_INT);
 	$stmt->execute();
 	$mono = $stmt->fetch();
 	echo $mono['ingresos_brutos'];
 }else{
 	echo $con['ingresos_brutos'];
 }



 ?>