<?php 
require_once"../../clases/Conexion.php";
$c = new conectar();
$dbh = $c->conexion();
$id = $_POST['id'];
$fecha = $_POST['fecha'];
$st = $dbh->prepare('SELECT * FROM clientes c inner join liquidacionmensual li on c.id_cliente=li.id_cliente where li.fecha=:fecha and c.id_cliente=:id');
$st->bindValue(':id',$id, PDO::PARAM_INT);
$st->bindValue(':fecha',$fecha,PDO::PARAM_STR);
if($st->execute()){
$cliente  = $st->fetch();
echo json_encode($cliente);
}else{
	print_r($dbh->errorInfo());
}

 ?>