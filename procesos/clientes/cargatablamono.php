<?php 
echo "entro";
require_once"../../clases/Conexion.php";
$c = new conectar();
$dbh = $c->conexion();

$ingresos_brutos = $_POST['ingresos'];
$categoria = $_POST['categoria'];
$actividad = $_POST['actividad'];
$impuesto_servicio = $_POST['impuesto_servicio'];
$impuesto_bienes = $_POST['impuesto_bienes'];
$obra = $_POST['obra_social'];
$sipa = $_POST['sipa'];

$sql = "INSERT INTO tabla_monotributo (ingresos_brutos, categoria, actividad, impuesto_servicio, impuesto_bienes, obra_social, sipa)
		VALUES (:ingresos_brutos, :categoria, :actividad, :impuesto_servicio, :impuesto_bienes, :obra_social, :sipa)";
$stmt = $dbh->prepare($sql);
$stmt->bindValue(':ingresos_brutos',$ingresos_brutos,PDO::PARAM_STR);
$stmt->bindValue(':categoria',$categoria,PDO::PARAM_STR);
$stmt->bindValue(':actividad',$actividad,PDO::PARAM_STR);
$stmt->bindValue(':impuesto_servicio',$impuesto_servicio,PDO::PARAM_STR);
$stmt->bindValue(':impuesto_bienes',$impuesto_bienes,PDO::PARAM_STR);
$stmt->bindValue(':obra_social',$obra,PDO::PARAM_STR);
$stmt->bindValue(':sipa',$sipa,PDO::PARAM_STR);
$stmt->execute();
header('Location: ../vistas/clientes/tablamono.php');

 ?>