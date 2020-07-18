<?php 
class liquidacion{
public function tablaLiquidacion($id){
	$c= new conectar();
	$dbh= $c->conexion();
	$q = "SELECT * FROM clientes c, condiciontributaria con where c.id_cliente = con.id_cliente and c.id_cliente = :id"	;
	$s  = $dbh->prepare($q);
	$s->bindValue(':id', $id,PDO::PARAM_INT);
	$s->execute();
	$r = $s->fetch();
	if($r['afip']=='Monotributista'){
		$sql = "SELECT * FROM clientes c, datosfiscales d, monotributo m, condiciontributaria con where c.id_cliente=:id and c.id_cliente=d.id_cliente and m.id_condicion = con.id_condicion and con.id_cliente = c.id_cliente ";		
		$stmt = $dbh->prepare($sql);
		$stmt->bindValue('id',$id,PDO::PARAM_INT);
		$stmt->execute();
		$cliente = $stmt->fetch();
		$id_condicion = $id;
		$montopg = self::cargarPagoAter($id_condicion);

		$query ="SELECT * from pago_simplificado ps where ps.id_condicion = :id";
		$st = $dbh->prepare($query);
		$st->bindValue(':id', $cliente['id_condicion'], PDO::PARAM_INT);
		
		$st->execute();		
		$ps = $st->fetch();
		if($ps['montoSimplificado']!= "null"){
			$pagops=$ps['montoSimplificado'];		
		}else{
			$pagops = 0;
		}
		

	if ($cliente['tipo_persona']=='fisica'){
		$cuit = $cliente['cuit'];
	}else{
		$cuit = $cliente['cuit_juridico'];
	}
	$datos=array("id"=>$cliente['nro_cliente'],
				"denominacion"=>utf8_decode($cliente['denominacion']),
				"tipo"=>$cliente['tipo_persona'],
				"estado"=>$cliente['estado'],
				"monto"=>$cliente['totalpagar'],
				"afip"=>$cliente['afip'],
				"montopg"=>$pagops,
				"cuit"=>$cuit);
	return $datos;

	}else{
		$sql = "SELECT * FROM clientes c, datosfiscales d, condiciontributaria con, pago_simplificado pg where c.id_cliente=:id and c.id_cliente=d.id_cliente and con.id_cliente = c.id_cliente  ";
	$stmt = $dbh->prepare($sql);
	$stmt->bindValue('id',$id,PDO::PARAM_INT);
	$stmt->execute();
	$cliente = $stmt->fetch();
	$id_condicion = $id;
	$montopg = self::cargarPagoAter($id_condicion);
$pagops =5;
		$query ="SELECT * from pago_simplificado ps where ps.id_condicion = :id";
		$st = $dbh->prepare($query);
		$st->bindValue(':id', $cliente['id_condicion'], PDO::PARAM_INT);
		$st->execute();		
		$ps = $st->fetch();
		if($ps['montoSimplificado']!= null){			
			$pagops=$ps['montoSimplificado'];
		}else{
			$pagops = 0;
		}

	if ($cliente['tipo_persona']=='fisica'){
		$cuit = $cliente['cuit'];
	}else{
		$cuit = $cliente['cuit_juridico'];
	}
	$datos=array("id"=>$cliente['nro_cliente'],
				"denominacion"=>utf8_decode($cliente['denominacion']),
				"tipo"=>$cliente['tipo_persona'],
				"estado"=>$cliente['estado'],	
				"monto"=>0,	
				"montopg"=>$pagops,	
				"afip"=>$cliente['afip'],
				"cuit"=>$cuit);
	return $datos;

	}











	
}

public function cargarPagoAter($id){	
	$c = new conectar();
	$dbh = $c->conexion();
	$sql = "SELECT * from pago_simplificado pg, clientes c, condiciontributaria con where pg.id_condicion = con.id_condicion and c.id_cliente =:id and c.id_cliente = con.id_cliente";
	$stmt = $dbh->prepare($sql);
	$stmt->bindValue(':id',$id, PDO::PARAM_STR);
	$stmt->execute();
	$r = $stmt->fetch();
	if($r['montoSimplificado']){
		return $r['montoSimplificado'];
	}else{
		return 0;
	}
	

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
			self::controlMonotributo($datos);
			return 1;
	}else{
		return "no paso";
	}

	

	}
//Acá se carga el monotributo desde el formulario de carga de liquidaciones, se utiliza el input de AFIP
//se verifica si ya hay cargado en esa fecha si no carga
public function controlMonotributo($datos){

		$c = new conectar();
		$dbh = $c->conexion();
		$sql = "SELECT * from monotributomensual me, monotributo m , condiciontributaria con, clientes c where
		me.id_monotributo = m.id_monotributo AND
		m.id_condicion = con.id_condicion AND
		con.id_cliente = c.id_cliente AND
		c.id_cliente = :id AND
		me.mes = :fecha";
		$sql ="SELECT me.id_monotributoMensual from monotributomensual me, monotributo m , condiciontributaria con, clientes c where
		me.id_monotributo = m.id_monotributo AND
		m.id_condicion = con.id_condicion AND
		con.id_cliente = c.id_cliente AND
		c.id_cliente = :id AND
		me.mes = :fecha";		
		$stmt = $dbh->prepare($sql);
		$stmt->bindValue(':id',$datos[0],PDO::PARAM_INT);
		$stmt->bindValue(':fecha',$datos[1],PDO::PARAM_STR);
		$stmt->execute();
		$r = $stmt->rowCount();
		if($r==1){
					$sql = "select * from clientes c, condiciontributaria con, monotributo m, monotributomensual me
							where 
							c.id_cliente = :id_cliente AND
							c.id_cliente=con.id_cliente AND
							con.id_condicion = m.id_condicion AND
							m.id_monotributo = me.id_monotributo";
					$stmt = $dbh->prepare($sql);
					$stmt->bindValue(':id_cliente',$datos[0],PDO::PARAM_INT);
					$stmt->execute();
					while($cliente = $stmt->fetch()){
					$fecha =strtotime($cliente['mes']);
					$fechaf = strtotime($datos[1]);
					$mf = date('m',$fechaf);
					$af = date('Y',$fechaf);
					$m =date ('m', $fecha);	
					$a = date('Y',$fecha);	
					if($mf == $m && $a==$af){	
		$sql = "UPDATE monotributomensual SET monto=:monto where id_monotributoMensual=:id";	
		$stmt2 = $dbh->prepare($sql);
		$stmt2->bindValue(':monto',$datos[2],PDO::PARAM_STR);
		$stmt2->bindValue(':id',$cliente['id_monotributoMensual'],PDO::PARAM_STR);		
		}
	}
	if($stmt2->execute()){
		return 1;
	}
																
						
		}else{
				$sql = "SELECT * from clientes c, condiciontributaria con, monotributo m where c.id_cliente=:id_cliente and c.id_cliente=con.id_cliente and con.id_condicion=m.id_condicion";
		$stmt = $dbh->prepare($sql);
		$stmt->bindValue(':id_cliente',$datos[0],PDO::PARAM_INT);
		$stmt->execute();

		$mono = $stmt->fetch();
		$id_mono =$mono['id_monotributo'];

		$sqlm="INSERT INTO monotributomensual 
				(mes, monto, id_monotributo	)
				VALUES (:mes, :monto, :id_monotributo)";
		$stmt2=$dbh->prepare($sqlm);
		$stmt2->bindValue(':mes',$datos[1],PDO::PARAM_STR);
		$stmt2->bindValue(':monto',$datos[2],PDO::PARAM_STR);
		$stmt2->bindValue(':id_monotributo',$id_mono,PDO::PARAM_INT);
		$stmt2->execute();
		
		return 1;


		}
		
		}



public function console_log( $data ){
  echo '<script>';
  echo 'console.log('. json_encode( $data ) .')';
  echo '</script>';
  	return 1;
	}
}
 ?>