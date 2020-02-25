<?php 
require_once"../../clases/Conexion.php";
$c= new conectar();
require_once "../../clases/clientes.php";
$cliente = new clientes();



$dbh= $c->conexion();	
$stmt = $dbh->prepare("SELECT c.id_cliente from clientes c inner join condiciontributaria con on c.id_cliente=con.id_cliente inner join monotributo m on m.id_condicion = con.id_condicion");
$id=array();
if($stmt->execute()){
	while($id_cliente = $stmt->fetch()){
		$cliente->recAll($id_cliente);
	}
	echo 1;
}else{
	print_r( $dbh->errorInfo());
}

      


 ?>