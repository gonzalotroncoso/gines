<?php 
require_once"../../clases/Conexion.php";
$c= new conectar();
require_once "../../clases/clientes.php";
$cliente = new clientes();



$dbh= $c->conexion();	
$stmt = $dbh->prepare("SELECT * FROM clientes c inner join condiciontributaria con on c.id_cliente = con.id_cliente inner join monotributo m on m.id_condicion=con.id_condicion where m.ingresos_brutos>0");

if($stmt->execute()){
	while($dato = $stmt->fetch()){		
		$cliente->recAll($dato['id_cliente']);
		
	}
	echo 1;
}else{
	print_r( $dbh->errorInfo());
}

      


 ?>