<?php 
require_once"../../clases/Conexion.php";
	$c = new conectar();
	$dbh = $c->conexion();
	$data = json_decode($_POST['data']);
	$sql = "SELECT * FROM liquidacionmensual p where p.id_cliente=:id";
	$stmt  = $dbh->prepare($sql);
	$stmt->bindValue(':id',$data[0],PDO::PARAM_INT);
	$stmt->execute();
	$r=0;
	
	while($pago = $stmt->fetch()){
		$fecha = $pago['fecha'];		
		$fechaF = $data[1];

		$fechaStr = strtotime($fecha);
		$m =  date("m", $fechaStr);

		$fechaStrF = strtotime($fechaF);
		$mf =  date("m", $fechaStrF);

		$fechaStrY = strtotime($fecha);
		$a =  date("Y", $fechaStrY);

		$fechaStrYF = strtotime($fechaF);
		$af =  date("Y", $fechaStrYF);
		

		

		if($m==$mf && $a==$af){
			$d=$pago['fecha'];
			$r= 1;
			break;
			}
		}
		
	
		echo $r;

 ?>