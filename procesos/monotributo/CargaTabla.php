<?php 
require_once"../../clases/Conexion.php";
require_once "../../clases/clientes.php";
$c = new conectar();
$dbh = $c->conexion();

$cliente = new clientes();

$categoria = $_POST['categoria'];
$ingresos = $_POST['ingresos'];
$servicio = $_POST['servicios'];
$bienes = $_POST['bienes'];
$sipa = $_POST['sipa'];
$obra_social = $_POST['obra_social'];

$sql = "UPDATE tabla_monotributo set ingresos = :ingresos, impuesto_servicio = :servicio, impuesto_bienes = :bienes, sipa = :sipa, obra_social = :obra where categoria = :categoria";
$st = $dbh->prepare($sql);
$st->bindValue(':categoria',$categoria, PDO::PARAM_STR);
$st->bindValue(':ingresos',$ingresos, PDO::PARAM_INT);
$st->bindValue(':servicio',$servicio, PDO::PARAM_INT);
$st->bindValue(':bienes',$bienes, PDO::PARAM_INT);
$st->bindValue(':sipa',$sipa, PDO::PARAM_INT);
$st->bindValue(':obra',$obra_social, PDO::PARAM_INT);
if($st->execute()){
	$stmt = $dbh->prepare("SELECT * from clientes c inner join condiciontributaria con on c.id_cliente=con.id_cliente inner join monotributo m on m.id_condicion = con.id_condicion");
		
		if($stmt->execute()){
		while($dato = $stmt->fetch()){
				$cliente->recAll($dato['id_cliente']);
				}
		echo 1;
		}else{
			print_r( $dbh->errorInfo());
		}	
}




 ?>