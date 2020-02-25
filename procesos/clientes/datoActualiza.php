<?php 
require_once"../../clases/Conexion.php";
$id_cliente = $_POST['id'];
$c = new conectar();
$dbh = $c->conexion();
$stmt = $dbh->prepare("SELECT * from clientes c inner join datosfiscales d on c.id_cliente = d.id_cliente inner join condiciontributaria con on c.id_cliente = con.id_cliente inner join ater a on a.id_condicion = con.id_condicion inner join regimenretencion re on re.id_condicion = con.id_condicion inner join facturacion f on f.id_condicion = con.id_condicion where c.id_cliente =:id");
$stmt->bindValue(':id',$id_cliente,PDO::PARAM_INT);
$cliente = array();

if($stmt->execute()){
$cliente = $stmt->fetch();
$cliente['denominacion']  =utf8_decode($cliente['denominacion']);
 echo json_encode($cliente);	
}else{
	print_r($dbh->errorInfo());
}





 ?>