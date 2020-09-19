<?php 
require_once"../../clases/Conexion.php";
require_once "../../clases/clientes.php";
$c = new conectar();
$dbh = $c->conexion();

$cliente = new clientes();

$categoria = $_POST['categoria'];
$ingresos = $_POST['ingresos'];
$impuesto = $_POST['impuesto'];


$sql = "UPDATE tabla_simplificado set ingresos_anuales = :ingresos, impuesto = :impuesto where categoria = :categoria";
$st = $dbh->prepare($sql);
$st->bindValue(':categoria',$categoria, PDO::PARAM_STR);
$st->bindValue(':ingresos',$ingresos, PDO::PARAM_INT);
$st->bindValue(':impuesto',$impuesto, PDO::PARAM_INT);
if($st->execute()){
	$stmt = $dbh->prepare("SELECT * from clientes c inner join condiciontributaria con on c.id_cliente=con.id_cliente inner join monotributo m on m.id_condicion = con.id_condicion");		
		if($stmt->execute()){
		while($dato = $stmt->fetch()){
				$cliente->actualizarSimplificado($dato['ingresos_brutos'], $dato['id_condicion']);
				}
		echo 1;
		}else{
			print_r( $dbh->errorInfo());
		}	
}




 ?>