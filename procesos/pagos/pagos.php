<?php  

require_once"../../clases/Conexion.php";
require_once "../../clases/pagos.php";
$obj= new pagos();

if(isset($_POST['idcl'])){
	$idcl =$_POST['idcl'];
}

if(isset($_POST['mes'])){
	$mes = $_POST['mes'];
	}

if(isset($_POST['importe'])){
	$importe = $_POST['importe'];
	}

$datos= array($idcl,$mes,$importe);

echo($obj->saldoDeuda($datos));	





?>