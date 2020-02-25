<?php 
require_once"../../clases/Conexion.php";
$c = new conectar();
	$dbh = $c->conexion();


	$afip =$_POST['afip'];	
	$id = $_POST['idf'];
	$fecha =$_POST['fechaf'];
	$ater = $_POST['ater'];	
	$siager = $_POST['siager'];
	$sicore = $_POST['sicore'];
	$empleador = $_POST['empleador'];
	$sindicato =$_POST['sindicato'];
	$municipalidad =$_POST['municipalidad'];
	$observaciones = $_POST['observaciones'];
	$fin = $_POST['fin'];

	

	$st =$dbh->prepare("UPDATE liquidacionmensual l set afip=:afip, ater=:ater, siager=:siager, sicore=:sicore, empleador=:empleador, sindicato=:sindicato, municipalidad=:municipalidad, ob=:observaciones,fin=:fin where l.id_cliente=:id and l.fecha=:fecha ");
	$st->bindValue(':id',$id,PDO::PARAM_INT);
	$st->bindValue(':fecha',$fecha,PDO::PARAM_STR);
	$st->bindValue(':afip',$afip,PDO::PARAM_STR);
	$st->bindValue(':ater',$ater,PDO::PARAM_STR);
	$st->bindValue(':siager',$siager,PDO::PARAM_STR);
	$st->bindValue(':sicore',$sicore,PDO::PARAM_STR);
	$st->bindValue(':empleador',$empleador,PDO::PARAM_STR);
	$st->bindValue(':municipalidad',$municipalidad,PDO::PARAM_STR);
	$st->bindValue(':sindicato',$sindicato,PDO::PARAM_STR);
	$st->bindValue(':observaciones',$observaciones,PDO::PARAM_STR);
	$st->bindValue(':fin',$fin,PDO::PARAM_STR);
	if($st->execute()){
		echo 1;
	}else{
		echo $dbh->errorInfo();

	}




 ?>