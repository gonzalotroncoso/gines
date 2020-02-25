<?php 
require_once"../../clases/Conexion.php";

$id_cliente = $_POST['id_cliente'];
$id_usuario = $_POST['id_usuario'];

$c = new conectar();
$dbh = $c->conexion();
$stmt = $dbh->prepare("INSERT INTO cliente_usuario (id_cliente, id_usuario) values (:id_cliente, :id_usuario)");
$stmt->bindValue(':id_cliente',$id_cliente,PDO::PARAM_INT);
$stmt->bindValue(':id_usuario',$id_usuario,PDO::PARAM_INT);
if($stmt->execute()){
	echo 1;
	
}else{
	echo 2;
}


 ?>