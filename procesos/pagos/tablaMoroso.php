<?php 


require_once"../../clases/Conexion.php";
require_once "../../clases/pagos.php";
$obj= new pagos();

$id =$_POST['idcliente'];
if ($id==0) {
		$c= new conectar();
		$dbh= $c->conexion();	
		$sql ="SELECT * FROM clientes c, pagos p, datosfiscales d where c.id_cliente=p.id_cliente and c.id_cliente=d.id_cliente";
		$stmt = $dbh->prepare($sql);
		$stmt->execute();
		$cliente = array();
		$i = 0;
		while($clientes=$stmt->fetch()){
		$i++;
		$cliente[] = $clientes;
	 	}
		echo json_encode($cliente);
		}else{
		echo json_encode ($obj->tablaMorosos($id));
		}


?>