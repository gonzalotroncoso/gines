<?php 


require_once"../../clases/Conexion.php";
require_once "../../clases/pagos.php";
$obj= new pagos();

$id =$_POST['id_mono'];

		$c= new conectar();
		$dbh= $c->conexion();	
		$sql ="SELECT * FROM clientes c inner join condiciontributaria con on c.id_cliente = con.id_cliente inner join monotributo m on m.id_condicion=con.id_condicion inner join monotributomensual me on me.id_monotributo = m.id_monotributo where c.id_cliente=:id ORDER BY me.mes DESC limit 12 ";		
		$stmt = $dbh->prepare($sql);
		$stmt->bindValue(':id',$id, PDO::PARAM_INT);
		$stmt->execute();
		$cliente = array();		
		while($clientes=$stmt->fetch()){
		
		$cliente[] = $clientes;
	 	}
		echo json_encode($cliente);



?>