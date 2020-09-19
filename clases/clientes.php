<?php 
header('Content-Type: text/html; charset=utf-8');
ini_set('max_execution_time', 300);
class clientes{
	public function ingresosAnuales($datos){
		$c=new conectar();
		$dbh = $c->conexion();
		$ingresos_brutos = $datos[3];
		$id_cliente = $datos[0];
		$sql = "UPDATE condiciontributaria  set ingresos_brutos = :ingresos where id_cliente = :id";
		$st = $dbh->prepare($sql);
		$st->bindValue(':id',$id_cliente,PDO::PARAM_INT);
		$st->bindValue(':ingresos',$ingresos_brutos,PDO::PARAM_INT);
		if ($st->execute()){
			return true;
		}else{
			return $dbh->errorInfo();
		}
	}

	public function recAll($id){
		$c=new conectar();
		$dbh = $c->conexion();
		$sql = "SELECT * from clientes c, condiciontributaria con, monotributo m, monotributomensual mo where  c.id_cliente = :id and c.id_cliente = con.id_cliente AND con.id_condicion = m.id_condicion AND m.id_monotributo = mo.id_monotributo order by mo.mes desc limit 12";
		$stmt1 =$dbh->prepare($sql);
		$stmt1->bindValue(':id',$id,PDO::PARAM_INT);
		$stmt1->execute();
		$monto = 0;
		while($cliente = $stmt1->fetch()){
			$monto = $monto+$cliente['monto'];
		
		}
		
		if(self::actualizarMontoMonotributo($monto,$id)){
				return 1;
		}else{
			return $dbh->errorInfo();
		}
	}

	public function registroClientes($datos,$provincias){
		$c = new conectar();
		$dbh = $c->conexion();
		



			$consulta = 'INSERT INTO clientes';
			$consulta .= ' (denominacion, celular, mail, fecha_nac, fecha_ingreso, observaciones)';
			$consulta .= ' VALUES ';
			$consulta .= '(	:denominacion, :celular, :mail, :fecha_nac, :fecha_ingreso, :observaciones)';
			$stmt = $dbh->prepare($consulta);
			
			$stmt->bindValue(':denominacion', $datos[0], PDO::PARAM_STR);		
			$stmt->bindValue(':celular', $datos[1], PDO::PARAM_STR);		
			$stmt->bindValue(':mail', $datos[2], PDO::PARAM_STR);		
			$stmt->bindValue(':fecha_nac', $datos[3], PDO::PARAM_STR);		
			$stmt->bindValue(':fecha_ingreso', $datos[4], PDO::PARAM_STR);		
			$stmt->bindValue(':observaciones', $datos[5], PDO::PARAM_STR);		


			 
			 if ($stmt->execute()){	
			 	$lastId = $dbh->LastInsertID();
			 	self::agregarNroCliente($datos[0],$lastId,$datos);	
			 	self::agregarDatosFiscales($lastId,$datos);
			 	self::agregarCondicionTributaria($lastId,$datos,$provincias);
			 	return 1 ;

			 }else{
			 	return $dbh->errorInfo();
			 }

}
		

	

	
public function cargarMonotributo($id,$datos){
			$c = new conectar();
			$dbh = $c->conexion();
			$consulta ='INSERT INTO monotributo';
			$consulta .='(id_condicion, actividad, adicional,ingresos_brutos)';
			$consulta .='VALUES';
			$consulta .='(:id_condicion, :actividad, :adicional,:ingresos_brutos)';
			$stmt = $dbh->prepare($consulta);
			$stmt->bindValue('id_condicion',$id,PDO::PARAM_INT);			
			$stmt->bindValue('actividad',$datos[32],PDO::PARAM_STR);			
			$stmt->bindValue('adicional',$datos[33],PDO::PARAM_INT);
			$stmt->bindValue('ingresos_brutos',0,PDO::PARAM_INT);
			$stmt->execute();
}	
public function agregarAter($id_condicion,$datos,$provincias){
			$c = new conectar();
			$dbh = $c->conexion();
			$consulta = 'INSERT INTO ater';
			$consulta .= ' (id_condicion, liberal_simplificado, liberal_general, ingresos_brutos_simplificado, ingresos_brutos_general, convenio_multilateral)';
			$consulta .= ' VALUES ';
			$consulta .= '(	:id_condicion, :liberal_simplificado, :liberal_general, :ingresos_brutos_simplificado, :ingresos_brutos_general, :convenio_multilateral)';
			$stmt = $dbh->prepare($consulta);			
			$stmt->bindValue(':id_condicion', $id_condicion, PDO::PARAM_INT);					
			$stmt->bindValue(':liberal_simplificado', $datos[24], PDO::PARAM_BOOL);					
			$stmt->bindValue(':liberal_general', $datos[25], PDO::PARAM_BOOL);		
			$stmt->bindValue(':ingresos_brutos_simplificado', $datos[27], PDO::PARAM_BOOL);		
			$stmt->bindValue(':ingresos_brutos_general', $datos[26], PDO::PARAM_BOOL);		
			$stmt->bindValue(':convenio_multilateral', $datos[28], PDO::PARAM_BOOL);	
			
			$stmt->execute();
			if ($datos[28]==1) {
			 	$id_ater = $dbh->LastInsertID();				 	
				self::cargarProvincias($id_ater,$provincias);				
			}


}	



public function cargarProvincias($id_ater,$provincias){
	
			$c = new conectar();
			$dbh = $c->conexion();
			$consulta = 'INSERT INTO convenio_multilateral';
			$consulta .= ' (id_ater,caba,bs_as, cordoba, santa_fe, misiones, chaco, entre_rios, tucuman, mendoza, tierra_del_fuego, la_pampa, santa_cruz, rio_negro, corrientes, san_luis, salta, jujuy, san_juan, chubut, neuquen, la_rioja, santiago_estero, formosa, catamarca)';
			$consulta .= ' VALUES ';
			$consulta .= '(	:id_ater,:caba, :bs_as, :cordoba, :santa_fe, :misiones, :chaco, :entre_rios, :tucuman, :mendoza, :tierra_del_fuego, :la_pampa, :santa_cruz, :rio_negro, :corrientes, :san_luis, :salta, :jujuy, :san_juan, :chubut, :neuquen, :la_rioja, :santiago_estero, :formosa, :catamarca )';
			$stmt = $dbh->prepare($consulta);		

			$stmt->bindValue(':id_ater', $id_ater, PDO::PARAM_INT);
			$stmt->bindValue(':caba', $provincias[0], PDO::PARAM_BOOL);
			$stmt->bindValue(':bs_as', $provincias[1], PDO::PARAM_BOOL);
			$stmt->bindValue(':cordoba', $provincias[6], PDO::PARAM_BOOL);
			$stmt->bindValue(':santa_fe', $provincias[21], PDO::PARAM_BOOL);
			$stmt->bindValue(':misiones', $provincias[13], PDO::PARAM_BOOL);
			$stmt->bindValue(':chaco', $provincias[4], PDO::PARAM_BOOL);
			$stmt->bindValue(':entre_rios', $provincias[8], PDO::PARAM_BOOL);
			$stmt->bindValue(':tucuman', $provincias[14], PDO::PARAM_BOOL);
			$stmt->bindValue(':mendoza', $provincias[2], PDO::PARAM_BOOL);
			$stmt->bindValue(':tierra_del_fuego', $provincias[23], PDO::PARAM_BOOL);
			$stmt->bindValue(':la_pampa', $provincias[11], PDO::PARAM_BOOL);
			$stmt->bindValue(':santa_cruz', $provincias[20], PDO::PARAM_BOOL);
			$stmt->bindValue(':rio_negro', $provincias[15], PDO::PARAM_BOOL);
			$stmt->bindValue(':corrientes', $provincias[7], PDO::PARAM_BOOL);
			$stmt->bindValue(':san_luis', $provincias[19], PDO::PARAM_BOOL);
			$stmt->bindValue(':salta', $provincias[16], PDO::PARAM_BOOL);
			$stmt->bindValue(':jujuy', $provincias[10], PDO::PARAM_BOOL);
			$stmt->bindValue(':san_juan', $provincias[18], PDO::PARAM_BOOL);
			$stmt->bindValue(':chubut', $provincias[5], PDO::PARAM_BOOL);
			$stmt->bindValue(':neuquen', $provincias[17], PDO::PARAM_BOOL);
			$stmt->bindValue(':la_rioja', $provincias[12], PDO::PARAM_BOOL);
			$stmt->bindValue(':santiago_estero', $provincias[22], PDO::PARAM_BOOL);
			$stmt->bindValue(':formosa', $provincias[9], PDO::PARAM_BOOL);
			$stmt->bindValue(':catamarca', $provincias[3], PDO::PARAM_BOOL);
			$stmt->execute();
			
			





}

public function agregarRegimenRetencion($id_condicion,$datos){
			$c = new conectar();
			$dbh = $c->conexion();
			
			$consulta = 'INSERT INTO regimenretencion';
			$consulta .= ' (id_condicion, sicore_iva, sicore_ganancia, siager_liberales, siager_ingresos_brutos)';
			$consulta .= ' VALUES ';
			$consulta .= '(	:id_condicion, :sicore_iva, :sicore_ganancia, :siager_liberales, :siager_ingresos_brutos)';
			$stmt = $dbh->prepare($consulta);			
			$stmt->bindValue(':id_condicion', $id_condicion, PDO::PARAM_INT);					
			$stmt->bindValue(':sicore_iva', $datos[20], PDO::PARAM_BOOL);					
			$stmt->bindValue(':sicore_ganancia', $datos[21], PDO::PARAM_BOOL);		
			$stmt->bindValue(':siager_liberales', $datos[22], PDO::PARAM_BOOL);		
			$stmt->bindValue(':siager_ingresos_brutos', $datos[23], PDO::PARAM_BOOL);		
			
			$stmt->execute();
			
			



}	


public function agregarFacturacion($id_condicion,$datos){
			$c = new conectar();
			$dbh = $c->conexion();	
			$consulta = 'INSERT INTO facturacion';
			$consulta .= '(id_condicion, manual, electronica, controlador_fiscal, web_service, factura_linea)';
			$consulta .= ' VALUES ';
			$consulta .= '(	:id_condicion, :manual, :electronica, :controlador_fiscal, :web_service, :factura_linea)';

			$stmt = $dbh->prepare($consulta);			
			$stmt->bindValue(':id_condicion', $id_condicion, PDO::PARAM_INT);					
			$stmt->bindValue(':manual', $datos[15], PDO::PARAM_BOOL);					
			$stmt->bindValue(':electronica', $datos[17], PDO::PARAM_BOOL);		
			$stmt->bindValue(':controlador_fiscal', $datos[16], PDO::PARAM_BOOL);		
			$stmt->bindValue(':web_service', $datos[18], PDO::PARAM_BOOL);		
			$stmt->bindValue(':factura_linea', $datos[19], PDO::PARAM_BOOL);		
			$stmt->execute();
			
			



}	
public function agregarCondicionTributaria($id_cliente,$datos,$provincias){
				$c = new conectar();
				$dbh = $c->conexion();
				$consulta = 'INSERT INTO condicionTributaria';
				$consulta .= ' (id_cliente, afip)';
				$consulta .= ' VALUES ';
				$consulta .= '(	:id_cliente, :afip)';
				$stmt = $dbh->prepare($consulta);			
				$stmt->bindValue(':id_cliente', $id_cliente, PDO::PARAM_INT);					
				$stmt->bindValue(':afip', $datos['29'], PDO::PARAM_STR);					
				$stmt->execute();
				$lastId = $dbh->LastInsertID();
				self::agregarFacturacion($lastId,$datos);
				self::agregarRegimenRetencion($lastId,$datos);
				self::agregarAter($lastId,$datos,$provincias);
				if($datos[29]=="Monotributista"){
			 		self::cargarMonotributo($lastId,$datos);
			 	}
			 	


}
public function agregarDatosFiscales($id_cliente,$datos){	
	$estado =$datos[8] ;	
	$tipo = $datos[9];
	$riesgo = $datos[10];	
	
	$c = new conectar();
	$dbh = $c->conexion();
	$consulta ="INSERT INTO datosfiscales";
	$consulta .="(id_cliente, estado, tipo_persona, cuit, cuit_juridico, riesgo, clave_afim, clave_dpt, clave_sindicato, clave_fiscal, cuit_titular)";
	$consulta .= "VALUES";
	$consulta .="(:id_cliente,:estado, :tipo_persona, :cuit, :cuit_juridico, :riesgo, :clave_afim, :clave_dpt, :clave_sindicato, :clave_fiscal, :cuit_titular)";
	$stmt = $dbh->prepare($consulta);
	$stmt->bindValue(':id_cliente', $id_cliente, PDO::PARAM_INT);		
	$stmt->bindValue(':estado', $estado, PDO::PARAM_STR);	
	$stmt->bindValue(':tipo_persona', $tipo, PDO::PARAM_STR);	
	$stmt->bindValue(':cuit', $datos[6], PDO::PARAM_STR);	
	$stmt->bindValue(':cuit_juridico', $datos[7], PDO::PARAM_STR);	
	$stmt->bindValue(':riesgo', $riesgo, PDO::PARAM_STR);	
	$stmt->bindValue(':clave_afim', $datos[11], PDO::PARAM_STR);	
	$stmt->bindValue(':clave_dpt', $datos[12], PDO::PARAM_STR);
	$stmt->bindValue(':clave_fiscal', $datos[13], PDO::PARAM_STR);	
	$stmt->bindValue(':clave_sindicato', $datos[14], PDO::PARAM_STR);
	$stmt->bindValue(':cuit_titular', $datos[34], PDO::PARAM_STR);

	$stmt->execute();
	 	


}

public function agregarNroCliente($denominacion,$id){
			$c = new conectar();
			$dbh = $c->conexion();						
			$primerLetra = $denominacion[0];
 			$sql = "SELECT count(*) from clientes where denominacion like '$primerLetra%'";
			$stmt2 = $dbh->prepare($sql);
			$stmt2->execute();
			$nro = $stmt2->fetchColumn();
			$nro_cliente = $nro;
			$nro_cliente_fin = strtoupper($primerLetra)."-".$nro_cliente;
			$sql1 ="UPDATE clientes set nro_cliente=:nro_cliente where id_cliente=:id_cliente";
			$stmt1 = $dbh->prepare($sql1);
			$stmt1->bindValue(':nro_cliente',$nro_cliente_fin,PDO::PARAM_STR);
			$stmt1->bindValue(':id_cliente',$id,PDO::PARAM_INT);
			$stmt1->execute();


}

	



public function obtenDatosCliente($id)	{
	$c =  new conectar();
	$dbh = $c->conexion();

	$sql = "SELECT * FROM clientes where id_cliente = :id";
	$stmt = $dbh->prepare($sql);	
	$stmt->bindValue(':id' ,$id , PDO::PARAM_INT);
	$stmt->execute();						
	$cliente = $stmt->fetch();

	$sql1 ="SELECT * FROM datosfiscales where id_cliente =:id";
	$stmt1 = $dbh->prepare($sql1);	
	$stmt1->bindValue(':id' ,$id , PDO::PARAM_INT);
	$stmt1->execute();						
	$datos_fiscales = $stmt1->fetch();

	$sql2 ="SELECT * FROM condiciontributaria where id_cliente =:id";
	$stmt2 = $dbh->prepare($sql2);	
	$stmt2->bindValue(':id' ,$id , PDO::PARAM_INT);
	$stmt2->execute();						
	$condicionTributaria = $stmt2->fetch();

	$id_condicion = $condicionTributaria['id_condicion'];
	
	$queryFacturacion ="SELECT * FROM facturacion where id_condicion =:id";
	$stmtF = $dbh->prepare($queryFacturacion);	
	$stmtF->bindValue(':id' ,$id_condicion , PDO::PARAM_INT);
	$stmtF->execute();						
	$facturacion = $stmtF->fetch();	

	$queryAter ="SELECT * FROM ater where id_condicion =:id";
	$stmtA = $dbh->prepare($queryAter);	
	$stmtA->bindValue(':id' ,$id_condicion , PDO::PARAM_INT);
	$stmtA->execute();						
	$ater = $stmtA->fetch();

	$queryRegimen ="SELECT * FROM regimenretencion where id_condicion = :id";	
	$stmtR = $dbh->prepare($queryRegimen);	
	$stmtR->bindValue(':id' ,$id_condicion , PDO::PARAM_INT);
	$stmtR->execute();						
	$regimen = $stmtR->fetch();

	$queryMonotributo ="SELECT * FROM monotributo where id_condicion = :id";	
	$stmtM = $dbh->prepare($queryMonotributo);	
	$stmtM->bindValue(':id' ,$id_condicion , PDO::PARAM_INT);
	$stmtM->execute();						
	$monotributo = $stmtM->fetch();

	$id_ater = $ater['id_ater'];
	$queryProvincia ="SELECT * FROM convenio_multilateral where id_ater =:id_ater";
	$stmtAt = $dbh->prepare($queryProvincia);	
	$stmtAt->bindValue(':id_ater' ,$id_ater , PDO::PARAM_INT);
	$stmtAt->execute();						
	$prov = $stmtAt->fetch();


	$dato=array(				
		"denominacion"=>utf8_decode($cliente['denominacion']),

		"cuit"=>$datos_fiscales['cuit'],
		"cuit_juridico"=>$datos_fiscales['cuit_juridico'],
		"cuit_titular"=>$datos_fiscales['cuit_titular'],

		"estado"=>$datos_fiscales['estado'],		
		"tipo_persona"=>$datos_fiscales['tipo_persona'],		
		"riesgo"=>$datos_fiscales['riesgo'],		
		"clave_fiscal"=>$datos_fiscales['clave_fiscal'],		
		"clave_dpt"=>$datos_fiscales['clave_dpt'],		
		"clave_sindicato"=>$datos_fiscales['clave_sindicato'],		
		"clave_afim"=>$datos_fiscales['clave_afim'],		

		"facturacion_manual"=>$facturacion['manual'],
		"facturacion_electronica"=>$facturacion['electronica'],
		"facturacion_fiscal"=>$facturacion['controlador_fiscal'],
		"facturacion_web"=>$facturacion['web_service'],
		"facturacion_linea"=>$facturacion['factura_linea'],

		"liberal_simplificado"=>$ater['liberal_simplificado'],
		"liberal_general"=>$ater['liberal_general'],
		"brutos_simplificado"=>$ater['ingresos_brutos_simplificado'],
		"brutos_general"=>$ater['ingresos_brutos_general'],
		"convenio_multilateral"=>$ater['convenio_multilateral'],
		"provincias"=>0,

		"sicore_iva"=>$regimen['sicore_iva'],
		"sicore_ganancia"=>$regimen['sicore_ganancia'],
		"siager_liberales"=>$regimen['siager_liberales'],
		"siager_ingresos_brutos"=>$regimen['siager_ingresos_brutos'],

		"afip"=>$condicionTributaria['afip'],
		"actividad"=>$monotributo['actividad'],
		"adicional"=>$monotributo['adicional'],
		"ingresos_brutos"=>$monotributo['ingresos_brutos'],
		"categoria"=>$monotributo['categoria'],

		"celular"=>$cliente['celular'],
		"mail"=>$cliente['mail'],
		"fecha_nac"=>$cliente['fecha_nac'],
		"fecha_ingreso"=>$cliente['fecha_ingreso'],
		"fecha_egreso"=>$cliente['fecha_egreso'],
		"observaciones"=>$cliente['observaciones'],

		'caba' =>$prov['caba'],
		'bs_as'=>$prov['bs_as'], 
		'cordoba'=>$prov['cordoba'],
		'santa_fe'=>$prov['santa_fe'],
		'misiones' =>$prov['misiones'],
		'chaco'=>$prov['chaco'],
		'entre_rios'=>$prov['entre_rios'],
		'tucuman'=>$prov['tucuman'],
		'mendoza'=>$prov['mendoza'],
		'tierra_del_fuego'=>$prov['tierra_del_fuego'],
		'la_pampa'=>$prov['la_pampa'], 
		'santa_cruz'=>$prov['santa_cruz'],			      
		'rio_negro'=>$prov['rio_negro'], 
		'corrientes'=>$prov['corrientes'], 
		'san_luis'=>$prov['san_luis'], 
		'salta'=>$prov['salta'], 
		'jujuy'=>$prov['jujuy'], 
		'san_juan'=>$prov['san_juan'],
		'chubut'=>$prov['chubut'], 
		'neuquen'=>$prov['neuquen'],
		'la_rioja'=>$prov['la_rioja'],
		'santiago_estero'=>$prov['santiago_estero'],
		'formosa'=>$prov['formosa'], 
		'catamarca'=>$prov['catamarca']
			);



		
	
	return $dato;

}


public function ActualizaCliente($id_cliente,$datos,$provincias){
	$c =  new conectar();
	$dbh = $c->conexion();
	$sql = "UPDATE clientes SET 
	denominacion =:denominacion, celular=:celular, mail=:mail, fecha_nac=:fecha_nac, fecha_ingreso=:fecha_ingreso, observaciones=:observaciones, fecha_egreso=:fecha_egreso	where id_cliente =:id_cliente";
	$stmt = $dbh->prepare($sql);
	$stmt->bindValue(':id_cliente', $id_cliente, PDO::PARAM_STR);		
	$stmt->bindValue(':denominacion', $datos[0], PDO::PARAM_STR);		
	$stmt->bindValue(':celular', $datos[1], PDO::PARAM_STR);		
	$stmt->bindValue(':mail', $datos[2], PDO::PARAM_STR);		
	$stmt->bindValue(':fecha_nac', $datos[4], PDO::PARAM_STR);		
	$stmt->bindValue(':fecha_ingreso', $datos[3], PDO::PARAM_STR);		
	$stmt->bindValue(':fecha_egreso', $datos[35], PDO::PARAM_STR);		
	$stmt->bindValue(':observaciones', $datos[5], PDO::PARAM_STR);						
	if ($stmt->execute()){
		self::ActualizaDatosFiscales($id_cliente,$datos);
		self::ActualizaCondicionTributaria($id_cliente,$datos,$provincias);			 	
		return 1;
		}else{
			return $dbh->errorInfo();
			}

}

public function ActualizaDatosFiscales($id_cliente,$datos){
	$estado =$datos[8] ;	
	$tipo = $datos[9];
	$riesgo = $datos[10];	
	
	$c = new conectar();
	$dbh = $c->conexion();
	$consulta ="UPDATE datosfiscales SET ";
	$consulta .="estado=:estado, tipo_persona=:tipo_persona, cuit=:cuit, cuit_juridico=:cuit_juridico, riesgo=:riesgo, clave_afim=:clave_afim, clave_dpt=:clave_dpt, clave_sindicato=:clave_sindicato, clave_fiscal=:clave_fiscal, cuit_titular=:cuit_titular ";
	$consulta .="WHERE id_cliente = :id_cliente";	
	$stmt = $dbh->prepare($consulta);
	$stmt->bindValue(':id_cliente', $id_cliente, PDO::PARAM_INT);		
	$stmt->bindValue(':estado', $estado, PDO::PARAM_STR);	
	$stmt->bindValue(':tipo_persona', $tipo, PDO::PARAM_STR);	
	$stmt->bindValue(':cuit', $datos[6], PDO::PARAM_STR);	
	$stmt->bindValue(':cuit_juridico', $datos[7], PDO::PARAM_STR);	
	$stmt->bindValue(':riesgo', $riesgo, PDO::PARAM_STR);	
	$stmt->bindValue(':clave_afim', $datos[11], PDO::PARAM_STR);	
	$stmt->bindValue(':clave_dpt', $datos[12], PDO::PARAM_STR);
	$stmt->bindValue(':clave_fiscal', $datos[13], PDO::PARAM_STR);	
	$stmt->bindValue(':clave_sindicato', $datos[14], PDO::PARAM_STR);
	$stmt->bindValue(':cuit_titular', $datos[34], PDO::PARAM_STR);
	
	if($stmt->execute()){
		return 1;
	}else{
		$dbh->errorInfo();
	}
	
	 	

}

public function ActualizaCondicionTributaria($id_cliente,$datos,$provincias){
				$c = new conectar();
				$dbh = $c->conexion();
				$query = "Select * from condiciontributaria where id_cliente = :id_cliente";
				$stmt = $dbh->prepare($query);			
				$stmt->bindValue(':id_cliente', $id_cliente, PDO::PARAM_INT);									
				$stmt->execute();
				$condicion = $stmt->fetch();
				$id_condicion = $condicion['id_condicion'];


				$consulta = 'UPDATE condiciontributaria set';
				$consulta .= ' afip=:afip';
				$consulta .= ' where id_cliente =:id_cliente';
				
				$stmt1 = $dbh->prepare($consulta);			
				$stmt1->bindValue(':id_cliente', $id_cliente, PDO::PARAM_INT);					
				$stmt1->bindValue(':afip', $datos['29'], PDO::PARAM_STR);					
				if($stmt1->execute()){
				self::ActualizaFacturacion($id_condicion,$datos);				
				self::ActualizaRegimenRetencion($id_condicion,$datos);
				self::ActualizaAter($id_condicion,$datos,$provincias);
				if($datos[29]=="Monotributista"){					
			 		self::ActualizaMonotributo($id_condicion,$datos);
			 		return 1;
			 	}
			 }else{
			 	return $dbh->errorInfo();
			 }
			 	


}
public function ActualizaMonotributo($id_condicion,$datos){
	
			$c = new conectar();
			$dbh = $c->conexion();

			$st = $dbh->prepare("Select * from monotributo m where m.id_condicion=:id");
			$st->bindValue(':id',$id_condicion,PDO::PARAM_INT);
			$st->execute();
			$result = $st->fetch();
			if($result['ingresos_brutos']>0){
				$st1 = $dbh->prepare("SELECT * FROM tabla_monotributo t where t.categoria = :categoria");
				$st1->bindValue(':categoria',$result['categoria'],PDO::PARAM_STR);
				$st1->execute();
				$tabla = $st1->fetch();
				if($datos[32]=='Servicios'||$datos[32]=='A-S'){
				$os=$tabla['obra_social']*$datos[33];
					$montototal = $os+$tabla['impuesto_servicio']+$tabla['sipa'];

				}else{
					$os=$tabla['obra_social']*$datos[33];
					$montototal = $os+$tabla['impuesto_bienes']+$tabla['sipa'];
				}

				$sql2 = "UPDATE monotributo SET actividad=:actividad, adicional=:adicional, totalpagar=:totalpagar where id_condicion=:id_condicion";
					$stmt2 = $dbh->prepare($sql2);					
					$stmt2->bindValue(':totalpagar',$montototal,PDO::PARAM_STR);
					$stmt2->bindValue('actividad',$datos[32],PDO::PARAM_STR);			
					$stmt2->bindValue(':id_condicion',$id_condicion,PDO::PARAM_INT);
					$stmt2->bindValue('adicional',$datos[33],PDO::PARAM_INT);
					$stmt2->execute();
					
				}


			$consulta ='UPDATE monotributo SET actividad=:actividad, adicional=:adicional where id_condicion=:id_condicion';


			
			$stmt = $dbh->prepare($consulta);
			$stmt->bindValue('id_condicion',$id_condicion,PDO::PARAM_INT);
			
			$stmt->bindValue('actividad',$datos[32],PDO::PARAM_STR);
			
			$stmt->bindValue('adicional',$datos[33],PDO::PARAM_INT);

			if($stmt->execute()){
			return 1;
				
			}else{
				return $dbh->errorInfo();
			}
			 				 



}
public function ActualizaAter($id_condicion,$datos,$provincias){

	$c = new conectar();
	$dbh = $c->conexion();
	$queryAter = "select * from ater where id_condicion =:id_condicion";
	$stmtater =$dbh->prepare($queryAter);
	$stmtater->bindValue(':id_condicion',$id_condicion,PDO::PARAM_INT);
	$stmtater->execute();
	$ater = $stmtater->fetch();
	$id_ater =$ater['id_ater'];
			


			$consulta = 'UPDATE ater SET
			 			liberal_simplificado=:liberal_simplificado,
			 			 liberal_general=:liberal_general,
			 			  ingresos_brutos_simplificado=:ingresos_brutos_simplificado,
			 			   ingresos_brutos_general=:ingresos_brutos_general,
			 			    convenio_multilateral=:convenio_multilateral
						 where id_condicion=:id_condicion';			
			$stmt = $dbh->prepare($consulta);			
			$stmt->bindValue(':id_condicion', $id_condicion, PDO::PARAM_INT);					
			$stmt->bindValue(':liberal_simplificado', $datos[24], PDO::PARAM_BOOL);					
			$stmt->bindValue(':liberal_general', $datos[25], PDO::PARAM_BOOL);		
			$stmt->bindValue(':ingresos_brutos_simplificado', $datos[27], PDO::PARAM_BOOL);		
			$stmt->bindValue(':ingresos_brutos_general', $datos[26], PDO::PARAM_BOOL);		
			$stmt->bindValue(':convenio_multilateral', $datos[28], PDO::PARAM_BOOL);	
		if($stmt->execute()){			
		self::ActualizarProvincias($id_ater,$provincias);
		if($datos[27]==1){
			self::pagoSimplificado($id_condicion);
		}
		return 1	;			
			}else{
				return ($dbh->errorInfo());
			}


}

public function pagoSimplificado($id_condicion){
		$c = new conectar();
		$dbh = $c->conexion();
		$sql = "Select m.ingresos_brutos from monotributo m Where m.id_condicion = :id";
		$stmt = $dbh->prepare($sql);
		$stmt->bindValue(':id',$id_condicion,PDO::PARAM_INT);
		$stmt->execute();
		$r = $stmt->fetch();
		
	
}

public function calcularPagoSimplificado($monto,$id_condicion){
	$c = new conectar();
	$dbh = $c->conexion();
	$monto = 0;	
	$a = self::AsignarCategoria_Simplificado("A");
	$b = self::AsignarCategoria_Simplificado("B");
	$c = self::AsignarCategoria_Simplificado("C");
	$d = self::AsignarCategoria_Simplificado("D");
	$e = self::AsignarCategoria_Simplificado("E");
	$f = self::AsignarCategoria_Simplificado("F");
	$g = self::AsignarCategoria_Simplificado("G");
	$h = self::AsignarCategoria_Simplificado("H");
	$i = self::AsignarCategoria_Simplificado("I");
	$j = self::AsignarCategoria_Simplificado("J");
	$k = self::AsignarCategoria_Simplificado("K");

	if($monto<=$a){
		$categoria = "A";
	}elseif ($monto>$a && $monto<=$b) {
		$categoria = "B";
	}elseif ($monto>$b && $monto<= $c) {
		$categoria = "C";
	}elseif ($monto>$c && $monto<= $d) {
		$categoria = "D";
	}elseif ($monto>$d && $monto<= $e) {
		$categoria = "E";
	}elseif ($monto>$e && $monto<=$f) {
		$categoria = "F";
	}elseif ($monto>$f && $monto<= $g) {
		$categoria = "G";
	}elseif ($monto>$g && $monto<= $h) {
		$categoria = "H";
	}elseif ($monto>$h && $monto<= $i) {
		$categoria = "I";
	}elseif ($monto>$i && $monto<= $j) {
		$categoria = "J";
	}elseif ($monto>$j && $monto<= $k) {
		$categoria = "K";
	}else $categoria ="K";
	if($monto!= 0){
	$sql = "INSERT INTO pago_simplificado (id_condicion, monto) VALUES (:id_condicion, :monto)";
	$stmt = $dbh->prepare($sql);
	$stmt->bindValue(':id_condicion',$id_condicion,PDO::PARAM_INT);
	$stmt->bindValue(':monto',$monto,PDO::PARAM_INT);
	if($stmt->execute()){
		return true;
	}else{
		return $stmt->errorInfo();
	}
	}
}

public function ActualizarProvincias($id_ater,$provincias){
	
		$c = new conectar();
			$dbh = $c->conexion();
			$consulta = 'UPDATE convenio_multilateral SET
		
		caba=:caba,
			              bs_as=:bs_as,
			              cordoba=:cordoba,
			              santa_fe=:santa_fe,
			              misiones=:misiones,
			              chaco=:chaco,
			              entre_rios=:entre_rios,
			              tucuman=:tucuman, 
			              mendoza=:mendoza, 
			              tierra_del_fuego=:tierra_del_fuego,
			               la_pampa=:la_pampa,
			                santa_cruz=:santa_cruz,
			                 rio_negro=:rio_negro,
			                  corrientes=:corrientes,
			                   san_luis=:san_luis,
			                    salta=:salta,
			                     jujuy=:jujuy,
			                      san_juan=:san_juan, 
			                      chubut=:chubut,
			                       neuquen=:neuquen,
			                        la_rioja=:la_rioja,
			                         santiago_estero=:santiago_estero,
			                          formosa=:formosa,
			                           catamarca=:catamarca WHERE id_ater=:id_ater';
					
			$stmt = $dbh->prepare($consulta);		

			$stmt->bindValue(':id_ater', $id_ater, PDO::PARAM_INT);
			$stmt->bindValue(':caba', $provincias[0], PDO::PARAM_BOOL);
			$stmt->bindValue(':bs_as', $provincias[1], PDO::PARAM_BOOL);
			$stmt->bindValue(':cordoba', $provincias[6], PDO::PARAM_BOOL);
			$stmt->bindValue(':santa_fe', $provincias[21], PDO::PARAM_BOOL);
			$stmt->bindValue(':misiones', $provincias[13], PDO::PARAM_BOOL);
			$stmt->bindValue(':chaco', $provincias[4], PDO::PARAM_BOOL);
			$stmt->bindValue(':entre_rios', $provincias[8], PDO::PARAM_BOOL);
			$stmt->bindValue(':tucuman', $provincias[14], PDO::PARAM_BOOL);
			$stmt->bindValue(':mendoza', $provincias[2], PDO::PARAM_BOOL);
			$stmt->bindValue(':tierra_del_fuego', $provincias[23], PDO::PARAM_BOOL);
			$stmt->bindValue(':la_pampa', $provincias[11], PDO::PARAM_BOOL);
			$stmt->bindValue(':santa_cruz', $provincias[20], PDO::PARAM_BOOL);
			$stmt->bindValue(':rio_negro', $provincias[15], PDO::PARAM_BOOL);
			$stmt->bindValue(':corrientes', $provincias[7], PDO::PARAM_BOOL);
			$stmt->bindValue(':san_luis', $provincias[19], PDO::PARAM_BOOL);
			$stmt->bindValue(':salta', $provincias[16], PDO::PARAM_BOOL);
			$stmt->bindValue(':jujuy', $provincias[10], PDO::PARAM_BOOL);
			$stmt->bindValue(':san_juan', $provincias[18], PDO::PARAM_BOOL);
			$stmt->bindValue(':chubut', $provincias[5], PDO::PARAM_BOOL);
			$stmt->bindValue(':neuquen', $provincias[17], PDO::PARAM_BOOL);
			$stmt->bindValue(':la_rioja', $provincias[12], PDO::PARAM_BOOL);
			$stmt->bindValue(':santiago_estero', $provincias[22], PDO::PARAM_BOOL);
			$stmt->bindValue(':formosa', $provincias[9], PDO::PARAM_BOOL);
			$stmt->bindValue(':catamarca', $provincias[3], PDO::PARAM_BOOL);
			 if ($stmt->execute()){
			 	return 1;
			 }else{
			 	return $dbh->errorInfo();
			 }

}
public function ActualizaRegimenRetencion($id_condicion,$datos){
		$c = new conectar();
		$dbh = $c->conexion();
		
			
			$consulta = 'UPDATE regimenretencion SET sicore_iva=:sicore_iva, sicore_ganancia=:sicore_ganancia, siager_liberales=:siager_liberales, siager_ingresos_brutos=:siager_ingresos_brutos where id_condicion=:id_condicion';
			
			$stmt = $dbh->prepare($consulta);			
			$stmt->bindValue(':id_condicion', $id_condicion, PDO::PARAM_INT);					
			$stmt->bindValue(':sicore_iva', $datos[20], PDO::PARAM_BOOL);					
			$stmt->bindValue(':sicore_ganancia', $datos[21], PDO::PARAM_BOOL);		
			$stmt->bindValue(':siager_liberales', $datos[22], PDO::PARAM_BOOL);		
			$stmt->bindValue(':siager_ingresos_brutos', $datos[23], PDO::PARAM_BOOL);		
			
			if($stmt->execute()){
				return 1;
			}else{
				return $dbh->errorInfo();
			}
			

}
public function ActualizaFacturacion($id_condicion,$datos){
	$c = new conectar();
	$dbh = $c->conexion();			
    $consulta = 'UPDATE facturacion SET manual=:manual, electronica=:electronica, controlador_fiscal=:controlador_fiscal, web_service=:web_service, factura_linea=:factura_linea Where id_condicion=:id_condicion';				
	$stmt = $dbh->prepare($consulta);			
	$stmt->bindValue(':id_condicion', $id_condicion, PDO::PARAM_INT);					
	$stmt->bindValue(':manual', $datos[15], PDO::PARAM_BOOL);							
	$stmt->bindValue(':electronica', $datos[17], PDO::PARAM_BOOL);							
	$stmt->bindValue(':controlador_fiscal', $datos[16], PDO::PARAM_BOOL);							
	$stmt->bindValue(':web_service', $datos[18], PDO::PARAM_BOOL);							
	$stmt->bindValue(':factura_linea', $datos[19], PDO::PARAM_BOOL);							
	if($stmt->execute()){
		return 1;
	}else{
		return $dbh->errorInfo();
	}


}

public function eliminarCliente($id){

		$c = new conectar();
		$dbh = $c->conexion();
		$consulta = "DELETE FROM clientes
					 WHERE id_cliente = :id_cliente";
		$stmt = $dbh->prepare($consulta);
		$stmt->bindValue(':id_cliente', $id, PDO::PARAM_INT);
		if($stmt->execute()){
			return 1;
		}else{
			return $dbh->errorInfo();
		}

		

	

}


public function registroEmpleado($datos){
	$c = new conectar();
	$dbh = $c->conexion();

	if($datos[3]==2){
		$sanidad = 1;
	}else{
		$sanidad = 0;
	}
	if($datos[3]==3){
		$smata = 1;
	}else{
		$smata = 0;
	}
	if($datos[3]==4){
		$uom = 1;
	}else{
		$uom = 0;
	}
	if($datos[3]==5){
		$gastronomico = 1;
	}else{
		$gastronomico = 0;
	}
	if($datos[3]==6){
		$utedyc = 1;
	}else{
		$utedyc = 0;
	}
	if($datos[3]==7){
		$comercio = 1;
	}else{
		$comercio = 0;
	}


	if ($datos[3]!=1) {
			$sindicato = $datos[3];
			$stmt=$dbh->prepare("INSERT INTO empleador (id_cliente, casa_particular, convenio_sindical) VALUES (:id_cliente, :casa_particular, :convenio_sindical)");	
			$stmt->bindValue(':id_cliente', $datos[0], PDO::PARAM_INT);
			$stmt->bindValue(':casa_particular',0,PDO::PARAM_BOOL);
			$stmt->bindValue(':convenio_sindical',1,PDO::PARAM_BOOL);
			if($stmt->execute()){
				$id_empleador = $dbh->LastInsertID();
				$stmt1 = $dbh->prepare("INSERT INTO conveniosindical (id_empleador, comercio, sanidad, smata, uom, gastronomico, utedyc) values(:id_empleador, :comercio, :sanidad, :smata, :uom, :gastronomico, :utedyc)");
				$stmt1->bindValue(':id_empleador',$id_empleador,PDO::PARAM_INT);
				$stmt1->bindValue(':comercio',$comercio,PDO::PARAM_STR);
				$stmt1->bindValue(':sanidad',$sanidad,PDO::PARAM_STR);
				$stmt1->bindValue(':smata',$smata,PDO::PARAM_STR);
				$stmt1->bindValue(':uom', $uom ,PDO::PARAM_STR);
				$stmt1->bindValue(':gastronomico',$gastronomico,PDO::PARAM_STR);
				$stmt1->bindValue(':utedyc',$utedyc,PDO::PARAM_STR);
				if($stmt1->execute()){
					return 1;
				}else{
					return $dbh->errorInfo();
				}


			}



		
	}else{


	$edad = $datos[1];
	$horario =$datos[2];
	$menos12 = false;

	if($edad != "1"){
	if($edad =="+18"){
		$mas18 =true;
	}else{
		$mas18 =false;
	}
	if($edad =="-18"){
		$menos18 =true;
	}else{
		$menos18 =false;
	}
	if($edad =="jubilado"){
		$jubilado =true;
	}else{
		$jubilado =false;
	}

	if($horario =="-12"){
		$menos12=true;
	}else{
		$mmenos12=false;
	}
	if($horario =="-16"){
		$menos16=true;
	}else{
		$menos16=false;
	}

	if($horario =="+16"){
		$mas16=true;
	}else{
		$mas16=false;
	}

	$queryEmpleador = "INSERT INTO empleador (id_cliente, casa_particular, convenio_sindical) VALUES (:id_cliente, :casa_particular, :convenio_sindical)";
	$stmtE = $dbh->prepare($queryEmpleador);
	$stmtE->bindValue(':id_cliente', $datos[0], PDO::PARAM_INT);
	$stmtE->bindValue(':casa_particular',true,PDO::PARAM_BOOL);
	$stmtE->bindValue(':convenio_sindical',false,PDO::PARAM_BOOL);
	$stmtE->execute();
	
	$id_empleador = $dbh->LastInsertID();

	$sql = "INSERT INTO casaparticular (id_empleador, mayor_edad, menor_edad, jubilado, menos_12, menos_16, mayor_16) VALUES (:id_empleador, :mayor_edad, :menor_edad, :jubilado, :menos_12, :menos_16, :mayor_16)";
	$stmt = $dbh->prepare($sql);
	$stmt->bindValue(':id_empleador', $id_empleador, PDO::PARAM_INT);
	$stmt->bindValue(':mayor_edad',$mas18,PDO::PARAM_BOOL);
	$stmt->bindValue(':menor_edad',$menos18,PDO::PARAM_BOOL);
	$stmt->bindValue(':jubilado',$jubilado,PDO::PARAM_BOOL);
	$stmt->bindValue(':menos_12',$menos12,PDO::PARAM_BOOL);
	$stmt->bindValue(':menos_16',$menos16,PDO::PARAM_BOOL);
	$stmt->bindValue(':mayor_16',$mas16,PDO::PARAM_BOOL);
	if($stmt->execute()){
		return 1;

	
	}

}




}


}


public function bajaClientes($datos){
	$c = new conectar();
	$dbh = $c->conexion();
	$id_cliente =$datos[0];
	$estado ="Inactivo";
	$fecha=$datos[1];
	$sql = "UPDATE datosfiscales set estado=:estado where id_cliente=:id_cliente";
	$stmt = $dbh->prepare($sql);
	$stmt->bindValue('id_cliente',$id_cliente,PDO::PARAM_INT);
	$stmt->bindValue('estado',$estado,PDO::PARAM_STR);
	$stmt->execute();

	$sql = "UPDATE clientes set fecha_egreso=:fecha_egreso where id_cliente=:id_cliente";
	$stmt1 = $dbh->prepare($sql);
	$stmt1->bindValue(':id_cliente',$id_cliente,PDO::PARAM_INT);
	$stmt1->bindValue(':fecha_egreso',$fecha,PDO::PARAM_STR);
	if($stmt1->execute()){
		return 1;
	}else{
		return $dbh->errorInfo();


	}
}



public function cargaIngresosBrutos($datos){
	$c = new conectar();
	$dbh = $c->conexion();

	$s = "UPDATE condiciontributaria set ingresos_brutos=:ingresos_brutos where id_cliente = :id";
	$st = $dbh->prepare($s);
	$st->bindValue(':ingresos_brutos', $datos[3],PDO::PARAM_STR);
	$st->bindValue(':id', $datos[0],PDO::PARAM_INT);
	if($st->execute()){	
		$q = "SELECT * FROM condiciontributaria con where con.id_cliente = :id";
		$stmt = $dbh->prepare($q);
		$stmt->bindValue(':id',$datos[0],PDO::PARAM_INT);
		$stmt->execute();
		$r = $stmt->fetch();
		if($r['afip'] == "Monotributista"){
		
				$monto = self::CalculaAter($r['ingresos_brutos']);
				$id_condicion = $r['id_condicion'];
				$sql = "INSERT INTO pago_simplificado (id_condicion, montoSimplificado) VALUES (:id_condicion, :monto)";
				$stmt1 = $dbh->prepare($sql);
				$stmt1->bindValue(':id_condicion',$id_condicion,PDO::PARAM_INT);
				$stmt1->bindValue(':monto',$monto,PDO::PARAM_INT);
				if($stmt1->execute()){
										return true;
									}else{
										$s = print_r($stmt1->errorInfo());
										return $s;
									}
			}else{
				return true;
			}
		
	}else{
		return 0;
	}
}

public function CalculaAter($monto){
	$c = new conectar();
	$dbh = $c->conexion();

	$a = self::AsignarCategoria_Simplificado("A");
	$b = self::AsignarCategoria_Simplificado("B");
	$c = self::AsignarCategoria_Simplificado("C");
	$d = self::AsignarCategoria_Simplificado("D");
	$e = self::AsignarCategoria_Simplificado("E");
	$f = self::AsignarCategoria_Simplificado("F");
	$g = self::AsignarCategoria_Simplificado("G");
	$h = self::AsignarCategoria_Simplificado("H");
	$i = self::AsignarCategoria_Simplificado("I");
	$j = self::AsignarCategoria_Simplificado("J");
	$k = self::AsignarCategoria_Simplificado("K");

	if($monto<=$a){
		$categoria = "A";
	}elseif ($monto>$a && $monto<=$b) {
		$categoria = "B";
	}elseif ($monto>$b && $monto<= $c) {
		$categoria = "C";
	}elseif ($monto>$c && $monto<= $d) {
		$categoria = "D";
	}elseif ($monto>$d && $monto<= $e) {
		$categoria = "E";
	}elseif ($monto>$e && $monto<=$f) {
		$categoria = "F";
	}elseif ($monto>$f && $monto<= $g) {
		$categoria = "G";
	}elseif ($monto>$g && $monto<= $h) {
		$categoria = "H";
	}elseif ($monto>$h && $monto<= $i) {
		$categoria = "I";
	}elseif ($monto>$i && $monto<= $j) {
		$categoria = "J";
	}elseif ($monto>$j && $monto<= $k) {
		$categoria = "K";
	}

	if($monto!= 0){
	$sql = "SELECT * FROM tabla_simplificado where categoria = :categoria";
	$stmt = $dbh->prepare($sql);
	
	$stmt->bindValue(':categoria',$categoria,PDO::PARAM_STR);
	if($stmt->execute()){
		$ater = $stmt->fetch();
		return $ater['impuesto'];
		}
		return 0;

	}



}
public function cargarPagoSimplificado($categoria,$id_condicion){
	$c = new conectar();
		$dbh = $c->conexion();
	$sql = "SELECT * FROM tabla_simplificado where categoria = :categoria";
	$st =$dbh->prepare($sql);
	$st->bindValue(':categoria',$categoria,PDO::PARAM_STR);
	$st->execute();
	$tabla =$st->fetch();

	$s = "INSERT INTO pago_simplificado (id_condicon, montoSimplificado) values(:id_condicion, :montoSimplificado)";
	$stmt = $dbh->prepare($s);
	$stmt->bindValue(':montoSimplificado',$tabla['impuesto'],PDO::PARAM_INT);
	$stmt->bindValue(':id_condicion',$id_condicion,PDO::PARAM_INT);
	if ($stmt->execute()){
		return true;
	}else{
		return $dbh->errorInfo();
	}
}

public function cargarMontoMonotributo($datos){

		$diferencia = self::diferenciames($datos[1],$datos[2]);	
		$m = $datos[3]	;
		$monto=$datos[3];
		$categoria = $datos[4];
		$montoMes = $monto/($diferencia+1);		

		$c = new conectar();
		$dbh = $c->conexion();

		$sql = "SELECT * FROM clientes c inner join condiciontributaria con on c.id_cliente = con.id_cliente inner join monotributo m on m.id_condicion = con.id_condicion where c.id_cliente = :id_cliente";
		$stmt = $dbh->prepare($sql);
		$stmt->bindValue(':id_cliente',$datos[0],PDO::PARAM_INT);
		$stmt->execute();

		$mono = $stmt->fetch();
		$id_mono =$mono['id_monotributo'];
		self::cargarPagoSimplificado($categoria,$mono['id_condicion']);
		$sql4 = "UPDATE monotributo set ingresos_brutos=:ingresos_brutos where id_monotributo=:id_monotributo";
		$stmt4 = $dbh->prepare($sql4);
		$stmt4->bindValue(':id_monotributo',$id_mono,PDO::PARAM_INT);
		$stmt4->bindValue(':ingresos_brutos',$m,PDO::PARAM_STR);
		$stmt4->execute();

		self::actualizarMontoMonotributo($categoria, $datos[0]);

		

		$sql9 = "UPDATE condiciontributaria set ingresos_brutos=:ingresos_brutos where id_cliente=:id";
		$stmt9 = $dbh->prepare($sql9);
		$stmt9->bindValue(':id',$datos[0],PDO::PARAM_INT);
		$stmt9->bindValue(':ingresos_brutos',$m,PDO::PARAM_STR);
		$stmt9->execute();

		$sqlm="INSERT INTO monotributomensual 
				(mes, monto, id_monotributo	)
				VALUES (:mes, :monto, :id_monotributo)";
		$stmt2=$dbh->prepare($sqlm);
		$stmt2->bindValue(':mes',$datos[1],PDO::PARAM_STR);
		$stmt2->bindValue(':monto',$montoMes,PDO::PARAM_STR);
		$stmt2->bindValue(':id_monotributo',$id_mono,PDO::PARAM_INT);
		$stmt2->execute();
		$dif= $diferencia;
		for ($i=1; $i <$dif ; $i++) { 
		$mesactual=$datos[1];	
		$mes = date('Y-m-d', strtotime("+".$i." months", strtotime($mesactual)));

		

		$sqlmw="INSERT INTO monotributomensual 
				(mes, monto, id_monotributo	)
				VALUES (:mes, :monto, :id_monotributo)";
		$stmt3=$dbh->prepare($sqlmw);
		$stmt3->bindValue(':mes',$mes,PDO::PARAM_STR);
		$stmt3->bindValue(':monto',$montoMes,PDO::PARAM_STR);
		$stmt3->bindValue(':id_monotributo',$id_mono,PDO::PARAM_INT);
		$stmt3->execute();
		
		}

		$sqlmq="INSERT INTO monotributomensual 
				(mes, monto, id_monotributo	)
				VALUES (:mes, :monto, :id_monotributo)";
		$stmt3=$dbh->prepare($sqlmq);
		$stmt3->bindValue(':mes',$datos[2],PDO::PARAM_STR);
		$stmt3->bindValue(':monto',$montoMes,PDO::PARAM_STR);
		$stmt3->bindValue(':id_monotributo',$id_mono,PDO::PARAM_INT);
		if ($stmt3->execute()){
			self::actualizarMontoMonotributo($datos[4],$datos[0]);
			self::cargaIngresosBrutos($datos);	
			return true;
		}else{
			return $dbh->errorInfo();
		}
		
		
		
		}

		
	

public function diferenciames($fecha_ingreso,$fecha_egreso){
		$fechainicial = strtotime($fecha_ingreso);
		$fechafinal = strtotime($fecha_egreso);

		$anioinicial = date("Y", $fechainicial);
 		$mesinicial = date("m", $fechainicial);
 		$diainicial = date("d", $fechainicial);

 		$aniofinal  =  date("Y", $fechafinal);
 		$mesfinal =  date("m", $fechafinal);
 		$diafinal =  date("d", $fechafinal);

 		$fechai = new DateTime();
		$fechai->setDate($anioinicial, $mesinicial, 15);

		$fechaf = new DateTime();
		$fechaf->setDate($aniofinal, $mesfinal, 15);

		$diferencia = $fechai->diff($fechaf);

		$meses = ( $diferencia->y * 12 ) + $diferencia->m;

		return $meses;



	}




public function mesMonotributo($datos){
		$c = new conectar();
		$dbh = $c->conexion();

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
		
		return true;

}


public function AsignarCategoria_Simplificado($letra){
	$c= new conectar();
	$dbh = $c->conexion();	

	$s = "SELECT * FROM tabla_simplificado where categoria =:categoria";	
	$st = $dbh->prepare($s);
	$st->bindValue(':categoria',$letra,PDO::PARAM_STR);	
	$st->execute();	
	$tabla = $st->fetch();
	return $tabla['ingresos_anuales'];
}



public function AsignarCategoria($letra){
	$c= new conectar();
	$dbh = $c->conexion();	

	$s = "SELECT * FROM tabla_monotributo where categoria =:categoria";	
	$st = $dbh->prepare($s);
	$st->bindValue(':categoria',$letra,PDO::PARAM_STR);	
	$st->execute();	
	$tabla = $st->fetch();
	return $tabla['ingresos'];
}

public function actualizarSimplificado($monto, $id_cliente){
	$c= new conectar();
	$dbh = $c->conexion();	
	$a = self::AsignarCategoria_Simplificado("A");
	$b = self::AsignarCategoria_Simplificado("B");
	$c = self::AsignarCategoria_Simplificado("C");
	$d = self::AsignarCategoria_Simplificado("D");
	$e = self::AsignarCategoria_Simplificado("E");
	$f = self::AsignarCategoria_Simplificado("F");
	$g = self::AsignarCategoria_Simplificado("G");
	$h = self::AsignarCategoria_Simplificado("H");
	$i = self::AsignarCategoria_Simplificado("I");
	$j = self::AsignarCategoria_Simplificado("J");
	$k = self::AsignarCategoria_Simplificado("K");

	if($monto<=$a){
		$categoria = "A";
	}elseif ($monto>$a && $monto<=$b) {
		$categoria = "B";
	}elseif ($monto>$b && $monto<= $c) {
		$categoria = "C";
	}elseif ($monto>$c && $monto<= $d) {
		$categoria = "D";
	}elseif ($monto>$d && $monto<= $e) {
		$categoria = "E";
	}elseif ($monto>$e && $monto<=$f) {
		$categoria = "F";
	}elseif ($monto>$f && $monto<= $g) {
		$categoria = "G";
	}elseif ($monto>$g && $monto<= $h) {
		$categoria = "H";
	}elseif ($monto>$h && $monto<= $i) {
		$categoria = "I";
	}elseif ($monto>$i && $monto<= $j) {
		$categoria = "J";
	}elseif ($monto>$j && $monto<= $k) {
		$categoria = "K";
	}else $categoria ="K";

	$sql2= "SELECT * FROM tabla_simplificado where categoria =:categoria";
	$stmt2 = $dbh->prepare($sql2);	
	$stmt2->bindValue(':categoria',$categoria,PDO::PARAM_STR);
	$stmt2->execute();
	$simplificado = $stmt2->fetch();	

	$sql3 = "UPDATE pago_simplificado set montoSimplificado=:monto where id_condicion = :id";
	$stmt3 = $dbh->prepare($sql3);
	$stmt3->bindValue(':monto',$simplificado['impuesto'],PDO::PARAM_INT);
	$stmt3->bindValue(':id',$id_cliente,PDO::PARAM_INT);
	if($stmt3->execute()){
		return true;
	}else{
		return $stmt3->$db->errorInfo();
	}
	


	

}

public function actualizarMontoMonotributo($categoria, $id_cliente){
	$c= new conectar();
	$dbh = $c->conexion();	

	$sql2= "SELECT * FROM tabla_monotributo where categoria =:categoria";
	$stmt2 = $dbh->prepare($sql2);	
	$stmt2->bindValue(':categoria',$categoria,PDO::PARAM_STR);
	$stmt2->execute();
	$monotributo = $stmt2->fetch();	

	
	$montoBienes = $monotributo['impuesto_bienes'];
	$montoServicio = $monotributo['impuesto_servicio'];
	$sipa = $monotributo['sipa'];
	$obraSocial =$monotributo['obra_social'];
	
	$datomono= array($categoria, $montoBienes, $montoServicio, $sipa, $obraSocial);
	
	self::CargaUpdateMono($datomono,$id_cliente);
	return true;

	
	}
	
	


	

public function MonotributoAnterior($id){
	$c = new conectar();
	$dbh = $c->conexion();	
	$sql = "SELECT * FROM monotributo where id_monotributo = :id";
	$st = $dbh->prepare($sql);
	$st->bindValue(':id',$id,PDO::PARAM_STR);
	$st->execute();
	$monotributo = $st->fetch();

	$consulta ='INSERT INTO old_monotributo';
			$consulta .='(id_condicion, actividad, adicional,ingresos_brutos, total, categoria)';
			$consulta .='VALUES';
			$consulta .='(:id_condicion, :actividad, :adicional,:ingresos_brutos, :total, :categoria)';
	$stmt = $dbh->prepare($consulta);
	$stmt->bindValue(':id_condicion',$monotributo['id_condicion'],PDO::PARAM_INT);
	$stmt->bindValue(':actividad',$monotributo['actividad'],PDO::PARAM_STR);
	$stmt->bindValue(':adicional',$monotributo['adicional'],PDO::PARAM_INT);
	$stmt->bindValue(':categoria',$monotributo['categoria'],PDO::PARAM_STR);
	$stmt->bindValue(':ingresos_brutos',$monotributo['ingresos_brutos'],PDO::PARAM_INT);
	$stmt->bindValue(':total',$monotributo['totalpagar'],PDO::PARAM_STR);
	$stmt->execute();


}

public function CargaUpdateMono($datos,$id_cliente){
	$c = new conectar();
	$dbh = $c->conexion();	
	$sql = "SELECT * FROM clientes c, condiciontributaria con, monotributo m
			WHERE c.id_cliente=:id_cliente AND con.id_cliente = c.id_cliente 
			AND con.id_condicion = m.id_condicion";
	$stmt = $dbh->prepare($sql);
	$stmt->bindValue(':id_cliente',$id_cliente,PDO::PARAM_INT);
	$stmt->execute();
	$result = $stmt->fetch();
	$adicional = $result['adicional'];
	$id_monotributo = $result['id_monotributo'];
	//self::MonotributoAnterior($id_monotributo);
	$actividad = $result['actividad'];
	if($actividad=='Servicios' || $actividad=='A-S'){
	$os=$datos[4]*$adicional;
	$montototal = $os+$datos[3]+$datos[2];
	}else{
		$os=$datos[4]*$adicional;
		$montototal = $os+$datos[3]+$datos[1];

	}

	$sql2 = "UPDATE monotributo set categoria=:categoria, totalpagar=:totalpagar 
			WHERE id_monotributo=:id_monotributo ";
	$stmt2 = $dbh->prepare($sql2);
	$stmt2->bindValue(':categoria',$datos[0],PDO::PARAM_STR);
	$stmt2->bindValue(':totalpagar',$montototal,PDO::PARAM_STR);
	$stmt2->bindValue(':id_monotributo',$id_monotributo,PDO::PARAM_INT);
	$stmt2->execute();
	return true;

}
public function obtenMonto($id,$mes,$anio){
	$c = new conectar();
	$dbh = $c->conexion();
	$sql = "select * from clientes c, condiciontributaria con, monotributo m, monotributomensual me
			where 
			c.id_cliente = :id_cliente AND
			c.id_cliente=con.id_cliente AND
			con.id_condicion = m.id_condicion AND
			m.id_monotributo = me.id_monotributo";
	$stmt = $dbh->prepare($sql);
	$stmt->bindValue(':id_cliente',$id,PDO::PARAM_INT);
	$stmt->execute();
	while($cliente = $stmt->fetch()){
		$fecha =strtotime($cliente['mes']);
		$m =date ('m', $fecha);	
		$a = date('Y',$fecha);	
		if($mes == $m && $a==$anio){	
		$monto = $cliente['monto'];
		}
	}
	if(empty($monto)){
		$monto = 0;
	}
	$dato=array("monto"=>$monto);


return $dato;

}

public function ModificarMontoMono($datos){
	$c = new conectar();
	$dbh = $c->conexion();
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
		$m =date ('m', $fecha);	
		$a = date('Y',$fecha);	
		if($datos[1] == $m && $a==$datos[2]){	
		$sql = "UPDATE monotributomensual SET monto=:monto where id_monotributoMensual=:id";	
		$stmt2 = $dbh->prepare($sql);
		$stmt2->bindValue(':monto',$datos[3],PDO::PARAM_STR);
		$stmt2->bindValue(':id',$cliente['id_monotributoMensual'],PDO::PARAM_STR);		
		}
	}
	if($stmt2->execute()){
		return 1;
	}

}

}



 ?>
