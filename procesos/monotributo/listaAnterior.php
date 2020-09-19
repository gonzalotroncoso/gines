<?php 
require_once"../../clases/Conexion.php";
$c = new conectar();
$dbh = $c->conexion();

$sql = "SELECT  DISTINCT c.denominacion, con.id_condicion FROM clientes c inner join condiciontributaria con on c.id_cliente = con.id_cliente inner join old_monotributo old on con.id_condicion = old.id_condicion where old.total>0 ";
$st = $dbh->prepare($sql);
$st->execute();
$cliente = $st->fetchAll(PDO::FETCH_ASSOC);	
echo json_encode($cliente);

 ?>