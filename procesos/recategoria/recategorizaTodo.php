<?php 
require_once"../../clases/Conexion.php";
require_once "../../clases/clientes.php";
$cliente = new clientes();
$c = new conectar();
$dbh = $c->conexion();
$id = $_POST['idcliente'];
$catA = $_POST['catA'];
$catS = $_POST['catS'];
$observacion = $_POST['observacion'];
$brutos_nuevo = $_POST['ingresos'];

$s = "SELECT * FROM monotributo m inner join condiciontributaria con on 
		m.id_condicion = con.id_condicion where con.id_cliente = :id";
$stmt = $dbh->prepare($s);
$stmt->bindValue(':id',$id,PDO::PARAM_INT);
$stmt->execute();
$mono = $stmt->fetch();

$cliente->monotributoAnterior($mono['id_monotributo']);
$cliente->actualizarMontoMonotributo($catA, $id);



$sql = "UPDATE monotributo SET asigna=:asigna, observacion=:observacion, ingresos_brutos=:ingresos_brutos where id_monotributo = :id";
$st = $dbh->prepare($sql);
$st->bindValue('ingresos_brutos',$brutos_nuevo,PDO::PARAM_INT);
$st->bindValue(':asigna',$catS, PDO::PARAM_STR);
$st->bindValue(':observacion',$observacion, PDO::PARAM_STR);
$st->bindValue(':id',$mono['id_monotributo'], PDO::PARAM_INT);
$st->execute();
echo 1;




 ?>