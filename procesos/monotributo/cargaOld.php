<?php 

require_once"../../clases/Conexion.php";
$c = new conectar();
$dbh = $c->conexion();

$id = $_POST['id'];

$sql = "SELECT * FROM old_monotributo where id_condicion= :id and total>0";
$st = $dbh->prepare($sql);
$st->bindValue(':id',$id,PDO::PARAM_INT);
$st->execute();
$data = array();
while($r = $st->fetch() ){
	$data[]= $r;
}
echo json_encode ($data);
 ?>