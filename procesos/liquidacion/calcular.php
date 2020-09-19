<?php 
require_once"../../clases/Conexion.php";
$c = new conectar();
$dbh = $c->conexion();

$inicio = $_POST['inicio'];
$fin = $_POST['fin'];
$id = $_POST['id'];

$sql = "SELECT * FROM liquidacionmensual where id_cliente =:id and fecha Between :inicio and :fin";
$stmt = $dbh->prepare($sql);
$stmt->bindValue('id',$id,PDO::PARAM_INT);
$stmt->bindValue('inicio',$inicio,PDO::PARAM_STR);
$stmt->bindValue('fin',$fin,PDO::PARAM_STR);
$stmt->execute();
$total = 0;
while($r = $stmt->fetch()){
	$total= $r['afip']+$total;
}

echo ($total)


 ?>
