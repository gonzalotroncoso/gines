<?php 


require_once"../../clases/Conexion.php";
require_once "../../clases/pagos.php";
$obj= new pagos();

$id =$_POST['id_mono'];

		$c= new conectar();
		$dbh= $c->conexion();	
		$sql ="SELECT * FROM monotributomensual m where m.id_monotributo=:id";		
		$stmt = $dbh->prepare($sql);
		$stmt->bindValue(':id',$id, PDO::PARAM_INT);
		$stmt->execute();
		$cliente = array();		
		while($clientes=$stmt->fetch()){
		
		$cliente[] = $clientes;
	 	}
		echo json_encode($cliente);



?>