<?php 
require_once"../../clases/Conexion.php";
require_once "../../clases/Clientes.php";
$obj= new clientes();
$c = new conectar();
	$dbh = $c->conexion();
if(isset($_POST['id_cliente'])){
	$id_cliente =$_POST['id_cliente'];
}

if(isset($_POST['fecha_inicio'])){
	$fecha_inicio = $_POST['fecha_inicio'];
	}
	if(isset($_POST['fecha_fin'])){
	$fecha_fin = $_POST['fecha_fin'];
	}
if(isset($_POST['monto'])){
	$monto = $_POST['monto'];
	}
if(isset($_POST['categoria'])){
	$categoria = $_POST['categoria'];
	}

$datos= array($id_cliente,$fecha_inicio,$fecha_fin,$monto,$categoria);

$sql = "SELECT * from condiciontributaria con where con.id_cliente = :id";
$s = $dbh->prepare($sql);
$s->bindValue(':id',$id_cliente,PDO::PARAM_INT);
$s->execute();
$r = $s->fetch();


	if($r['afip'] == 'Monotributista'){
		 print_r($obj->cargarMontoMonotributo($datos));			
		
	}else{
		print_r($obj->ingresosAnuales($datos));	
		
		}
	
			
	


 ?>
