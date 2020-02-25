<?php 
require_once"../../clases/Conexion.php";
$c = new conectar();
$dbh = $c->conexion();

$stmt = $dbh->prepare("SELECT * from clientes c INNER join condiciontributaria con on c.id_cliente = con.id_cliente INNER join monotributo m on m.id_condicion = con.id_condicion INNER JOIN tabla_monotributo t on m.categoria = t.categoria");
$c = array();
if($stmt->execute()){
	while($cliente = $stmt->fetch()){
		$cliente['denominacion']=utf8_decode($cliente['denominacion']);
		$c[]=$cliente;
	}
	
	echo json_encode($c);
}




 ?>