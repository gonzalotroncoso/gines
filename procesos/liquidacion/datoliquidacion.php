<?php 
require_once"../../clases/Conexion.php";
$c = new conectar();
$dbh = $c->conexion();
 $id = json_decode($_POST['id']);
 $sql = "SELECT * FROM clientes c inner join liquidacionmensual l on c.id_cliente = l.id_cliente where c.id_cliente=:id";
 $stmt = $dbh->prepare($sql);
 $stmt->bindValue(':id',$id,PDO::PARAM_INT); 
 $stmt->execute();
 $p = array();
  while($pago = $stmt->fetch()){
  	$pago['denominacion']=utf8_decode($pago['denominacion']);
  	$p[]=$pago;
  }
 
 echo json_encode($p);


 ?>
