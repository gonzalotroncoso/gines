<?php 
class liquidacion{
public function tablaLiquidacion($id){
	$c= new conectar();
	$dbh= $c->conexion();
	$sql = "SELECT * FROM clientes c, datosfiscales d where c.id_cliente=:id and c.id_cliente=d.id_cliente";
	$stmt = $dbh->prepare($sql);
	$stmt->bindValue('id',$id,PDO::PARAM_INT);
	$stmt->execute();
	$cliente = $stmt->fetch();
	$datos=array("id"=>$cliente['nro_cliente'],
				"denominacion"=>utf8_decode($cliente['denominacion']),
				"tipo"=>$cliente['tipo_persona'],
				"estado"=>$cliente['estado'],
				"cuit"=>$cliente['cuit']);
	return $datos;
}


public function cargarLiquidacion($datos){
	$c =  new conectar();
	$dbh = $c->conexion();
	$sql ="INSERT INTO liquidacionmensual(afip, ater, municipalidad, empleador, sindicato, siager, sicore, ob, fecha, id_cliente,fin) VALUES (:afip, :ater, :municipalidad, :empleador, :sindicato, :siager, :sicore, :ob, :fecha,:id_cliente,:fin)";
	$stmt =$dbh->prepare($sql);
	$stmt->bindValue(':afip',$datos[2],PDO::PARAM_STR);
	$stmt->bindValue(':ater',$datos[3],PDO::PARAM_STR);
	$stmt->bindValue(':municipalidad',$datos[4],PDO::PARAM_STR);
	$stmt->bindValue(':empleador',$datos[5],PDO::PARAM_STR);
	$stmt->bindValue(':sindicato',$datos[6],PDO::PARAM_STR);
	$stmt->bindValue(':siager',$datos[7],PDO::PARAM_STR);
	$stmt->bindValue(':sicore',$datos[8],PDO::PARAM_STR);
	$stmt->bindValue(':ob',$datos[9],PDO::PARAM_STR);
	$stmt->bindValue(':fecha',$datos[1],PDO::PARAM_STR);
	$stmt->bindValue(':id_cliente',$datos[0],PDO::PARAM_INT);
	$stmt->bindValue(':fin',$datos[10],PDO::PARAM_STR);
	if($stmt->execute()){
		return 1;
	}else{
		return "no paso";
	}

	}
}



 ?>