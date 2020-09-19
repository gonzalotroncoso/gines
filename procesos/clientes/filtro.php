<?php 	
require_once"../../clases/Conexion.php";	
$c = new conectar();
$dbh = $c->conexion();

$id_condicion = $_POST['id_condicion'];

switch ($id_condicion) {
	case 1:
		$afip ="Monotributista";
		break;
	case 2:
		$afip="R.I";
		break;
	case 3:
		$afip="Exento";
		break;
	case 4:
		$afip="No Inscripto";
		break;
}


if($afip == "Monotributista"){
	$stmt = $dbh->prepare("SELECT * from clientes c INNER join condiciontributaria con on c.id_cliente = con.id_cliente inner join monotributo m on m.id_condicion = con.id_condicion where m.ingresos_brutos = 0 or m.categoria = ''");
	$stmt->bindValue(':afip',$afip,PDO::PARAM_STR);
if($stmt->execute()){	
	$cliente = $stmt->fetchAll(PDO::FETCH_ASSOC);	
	echo json_encode($cliente);
	}


}else{
$sql = "select * from clientes c inner join condiciontributaria con on c.id_cliente = con.id_cliente where con.afip = :afip";
$stmt =$dbh->prepare($sql);
$stmt->bindValue(':afip',$afip, PDO::PARAM_STR);
if($stmt->execute()){	
	$cliente = $stmt->fetchAll(PDO::FETCH_ASSOC);	
	echo json_encode($cliente);
}

}

	

 ?>