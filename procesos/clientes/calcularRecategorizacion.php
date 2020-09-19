<?php 
require_once"../../clases/Conexion.php";
require_once "../../clases/pagos.php";
require_once "../../clases/clientes.php";
$cliente = new clientes();
$id =$_POST['id'];
$c=new conectar();
		$dbh = $c->conexion();

$sql = "SELECT * from monotributo m inner join condiciontributaria con 	on m.id_condicion = con.id_condicion where con.id_cliente = :id";
$st = $dbh->prepare($sql);
$st->bindValue(':id',$id,PDO::PARAM_INT);
$st->execute();
$mono= $st->fetch();
$id_monotributo = $mono['id_monotributo'];

$s = "SELECT * FROM monotributomensual me where me.id_monotributo=:id_mono order by me.mes desc limit 12";
$stmt = $dbh->prepare($s);
$stmt->bindValue('id_mono',$id_monotributo,PDO::PARAM_INT);
$stmt->execute();
$ingresos_brutos = 0;
while ($me = $stmt->fetch()){
	$ingresos_brutos = $me['monto']+$ingresos_brutos;
}




$a = $cliente->AsignarCategoria("A");
$b = $cliente->AsignarCategoria("B");
$c = $cliente->AsignarCategoria("C");
$d = $cliente->AsignarCategoria("D");
$e = $cliente->AsignarCategoria("E");
$f = $cliente->AsignarCategoria("F");
$g = $cliente->AsignarCategoria("G");
$h = $cliente->AsignarCategoria("H");
$i = $cliente->AsignarCategoria("I");
$j = $cliente->AsignarCategoria("J");
$k = $cliente->AsignarCategoria("K");

if($ingresos_brutos<=$a){
		$categoria = "A";
	}elseif ($ingresos_brutos>$a && $ingresos_brutos<=$b) {
		$categoria = "B";
	}elseif ($ingresos_brutos>$b && $ingresos_brutos<= $c) {
		$categoria = "C";
	}elseif ($ingresos_brutos>$c && $ingresos_brutos<= $d) {
		$categoria = "D";
	}elseif ($ingresos_brutos>$d && $ingresos_brutos<= $e) {
		$categoria = "E";
	}elseif ($ingresos_brutos>$e && $ingresos_brutos<=$f) {
		$categoria = "F";
	}elseif ($ingresos_brutos>$f && $ingresos_brutos<= $g) {
		$categoria = "G";
	}elseif ($ingresos_brutos>$g && $ingresos_brutos<= $h) {
		$categoria = "H";
	}elseif ($ingresos_brutos>$h && $ingresos_brutos<= $i) {
		$categoria = "I";
	}elseif ($ingresos_brutos>$i && $ingresos_brutos<= $j) {
		$categoria = "J";
	}elseif ($ingresos_brutos>$j && $ingresos_brutos<= $k) {
		$categoria = "K";
	}else $categoria ="K";

	echo($categoria );

 ?>
