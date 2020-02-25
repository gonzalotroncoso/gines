<?php 
require_once"../../clases/Conexion.php";
$c = new conectar();
$dbh = $c->conexion();
$id = $_POST['id'];
$stmt = $dbh->prepare("SELECT * from clientes c INNER join condiciontributaria con on c.id_cliente = con.id_cliente INNER join monotributo m on m.id_condicion = con.id_condicion INNER JOIN tabla_monotributo t on m.categoria = t.categoria where c.id_cliente = :id");
$stmt->bindValue(':id',$id,PDO::PARAM_INT);
if($stmt->execute()){
	$cliente = $stmt->fetch();
	$cliente['denominacion']=utf8_decode($cliente['denominacion']);
	echo json_encode($cliente);
}




 ?>