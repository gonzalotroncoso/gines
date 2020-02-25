<?php 
require_once "../../clases/Conexion.php";
$c = new conectar();
$dbh = $c->conexion();
$id = $_POST['id'];
$st = $dbh->prepare("SELECT * FROM clientes c inner join condiciontributaria con on c.id_cliente = con.id_cliente inner join monotributo m on m.id_condicion = con.id_condicion where c.id_cliente=:id");
$st->bindValue('id',$id,PDO::PARAM_INT);
$st->execute();
$cliente = $st->fetch();
echo json_encode ($cliente);


 ?>