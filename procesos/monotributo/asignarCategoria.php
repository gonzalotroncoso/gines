<?php 
require_once '../../clases/Conexion.php';
$c = new conectar();
$dbh = $c->conexion();

$categoria = $_POST['categoria'];
$id_cliente = $_POST['id_cliente'];
$observacion = $_POST['observacion'];

$s = "SELECT * FROM clientes c inner join condiciontributaria con on c.id_cliente = con.id_cliente inner join monotributo m on con.id_condicion = m.id_condicion";
$st = $dbh->prepare($s);
$st->execute();
$mono =$st->fetch();
$id = $mono['id_monotributo'];

$sql = "UPDATE monotributo set asigna=:asigna, observacion=:observacion 
			WHERE id_monotributo=:id_monotributo ";
$stmt = $dbh->prepare($sql);
$stmt->bindValue(':asigna',$categoria, PDO::PARAM_STR);
$stmt->bindValue(':observacion',$observacion, PDO::PARAM_STR);
$stmt->bindValue(':id_monotributo',$id, PDO::PARAM_INT);
if($stmt->execute()){
	echo 1;
}else{
	echo 2;
}

 ?>