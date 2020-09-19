<?php 
require_once"../../clases/Conexion.php";	
$c = new conectar();
$dbh = $c->conexion();

$condicion = $_POST['condicion'];

switch ($condicion) {
	case 1:
		$afip ="Monotributista";
		break;
	case 2:
		$afip="R.I";
		break;
	case 3:
		$afip="Exento";
		break;
	case 4:
		$afip="No Inscripto";
		break;
}
$categoria = $_POST['mono'];
$riesgo = $_POST['riesgo'];



if($_POST['estadof']==1){
	$estado = "Activo";
	}else{
		$estado = "Inactivo";
	};


if ($_POST['tipof']==0){
	$tipo ="fisica";
}else{
	$tipo = "juridica";
}

if($_POST['liberal']==0){
	$liberal_simplificado = 0;
	$liberal_general = 0;
}else if ($_POST['liberal']==1){
	$liberal_simplificado = 1;
	$liberal_general = 0;
}else{
	$liberal_simplificado = 0;
	$liberal_general = 1;
}

if($_POST['bruto']==0){
	$ingresos_brutos_simplificado = 0;
	$ingresos_brutos_general = 0;
}else if ($_POST['bruto']==1){
	$ingresos_brutos_simplificado = 1;
	$ingresos_brutos_general = 0;
}else{
	$ingresos_brutos_simplificado = 0;
	$ingresos_brutos_general = 1;
}
if ($riesgo == 0){
	if($afip == "Monotributista"){
	if ($categoria == "0"){
		$stmt = $dbh->prepare("SELECT * from clientes c INNER join condiciontributaria con on c.id_cliente = con.id_cliente inner join datosfiscales d on c.id_cliente = d.id_cliente inner join monotributo m on m.id_condicion = con.id_condicion inner join ater a on a.id_condicion = con.id_condicion where d.estado=:estado and
		a.liberal_simplificado =:liberal_simplificado and
		a.liberal_general =:liberal_general and
		a.ingresos_brutos_simplificado =:ingresos_brutos_simplificado and
		a.ingresos_brutos_general =:ingresos_brutos_general ");	
	$stmt->bindValue(':estado',$estado,PDO::PARAM_STR);		
	$stmt->bindValue(':liberal_simplificado',$liberal_simplificado,PDO::PARAM_INT);	
	$stmt->bindValue(':liberal_general',$liberal_general,PDO::PARAM_INT);	
	$stmt->bindValue(':ingresos_brutos_simplificado',$ingresos_brutos_simplificado,PDO::PARAM_INT);	
	$stmt->bindValue(':ingresos_brutos_general',$ingresos_brutos_general,PDO::PARAM_INT);	

	if($stmt->execute()){	
		$cliente = $stmt->fetchAll(PDO::FETCH_ASSOC);	
		echo json_encode($cliente);
		}

	}else{

		$stmt = $dbh->prepare("SELECT * from clientes c 
			 INNER join condiciontributaria con on c.id_cliente = con.id_cliente
			 inner join datosfiscales d on c.id_cliente = d.id_cliente 
			 inner join monotributo m on m.id_condicion = con.id_condicion
			 inner join ater a on a.id_condicion = con.id_condicion
			 where m.categoria = :categoria and d.estado=:estado and
		a.liberal_simplificado =:liberal_simplificado and
		a.liberal_general =:liberal_general and
		a.ingresos_brutos_simplificado =:ingresos_brutos_simplificado and
		a.ingresos_brutos_general =:ingresos_brutos_general");
	$stmt->bindValue(':categoria',$categoria,PDO::PARAM_STR);		
	$stmt->bindValue(':estado',$estado,PDO::PARAM_STR);	
	$stmt->bindValue(':liberal_simplificado',$liberal_simplificado,PDO::PARAM_INT);	
	$stmt->bindValue(':liberal_general',$liberal_general,PDO::PARAM_INT);	
	$stmt->bindValue(':ingresos_brutos_simplificado',$ingresos_brutos_simplificado,PDO::PARAM_INT);	
	$stmt->bindValue(':ingresos_brutos_general',$ingresos_brutos_general,PDO::PARAM_INT);	

	if($stmt->execute()){	
		$cliente = $stmt->fetchAll(PDO::FETCH_ASSOC);	
		echo json_encode($cliente);
		}
	}
}else{
	$stmt = $dbh->prepare("SELECT * from clientes c INNER join condiciontributaria con on c.id_cliente = con.id_cliente inner join datosfiscales d on c.id_cliente = d.id_cliente inner join ater a on a.id_condicion = con.id_condicion where d.estado=:estado and
		a.liberal_simplificado =:liberal_simplificado and
		a.liberal_general =:liberal_general and
		a.ingresos_brutos_simplificado =:ingresos_brutos_simplificado and
		a.ingresos_brutos_general =:ingresos_brutos_general and
		con.afip = :afip and
		d.tipo_persona = :tipo");		
	$stmt->bindValue(':estado',$estado,PDO::PARAM_STR);	
	$stmt->bindValue(':liberal_simplificado',$liberal_simplificado,PDO::PARAM_INT);	
	$stmt->bindValue(':liberal_general',$liberal_general,PDO::PARAM_INT);	
	$stmt->bindValue(':ingresos_brutos_simplificado',$ingresos_brutos_simplificado,PDO::PARAM_INT);	
	$stmt->bindValue(':ingresos_brutos_general',$ingresos_brutos_general,PDO::PARAM_INT);	
	$stmt->bindValue(':afip',$afip,PDO::PARAM_STR);	
	$stmt->bindValue(':tipo',$tipo,PDO::PARAM_STR);	
	if($stmt->execute()){	
		$cliente = $stmt->fetchAll(PDO::FETCH_ASSOC);	
		echo json_encode($cliente);
	}else{
		print_r($stmt->errorInfo());
	}
}

}else{
	if($afip == "Monotributista"){
	if ($categoria == "0"){
		$stmt = $dbh->prepare("SELECT * from clientes c INNER join condiciontributaria con on c.id_cliente = con.id_cliente inner join datosfiscales d on c.id_cliente = d.id_cliente inner join monotributo m on m.id_condicion = con.id_condicion inner join ater a on a.id_condicion = con.id_condicion where d.estado=:estado and
		a.liberal_simplificado =:liberal_simplificado and
		a.liberal_general =:liberal_general and
		a.ingresos_brutos_simplificado =:ingresos_brutos_simplificado and
		a.ingresos_brutos_general =:ingresos_brutos_general and
		d.riesgo = :riesgo");	
	$stmt->bindValue(':estado',$estado,PDO::PARAM_STR);	
	$stmt->bindValue(':riesgo',$riesgo,PDO::PARAM_INT);	
	$stmt->bindValue(':liberal_simplificado',$liberal_simplificado,PDO::PARAM_INT);	
	$stmt->bindValue(':liberal_general',$liberal_general,PDO::PARAM_INT);	
	$stmt->bindValue(':ingresos_brutos_simplificado',$ingresos_brutos_simplificado,PDO::PARAM_INT);	
	$stmt->bindValue(':ingresos_brutos_general',$ingresos_brutos_general,PDO::PARAM_INT);	

	if($stmt->execute()){	
		$cliente = $stmt->fetchAll(PDO::FETCH_ASSOC);	
		echo json_encode($cliente);
		}

	}else{
		$stmt = $dbh->prepare("SELECT * from clientes c INNER join condiciontributaria con on c.id_cliente = con.id_cliente inner join datosfiscales d on c.id_cliente = d.id_cliente inner join monotributo m on m.id_condicion = con.id_condicion inner join ater a on a.id_condicion = con.id_condicion where m.categoria = :categoria and d.estado=:estado and
		a.liberal_simplificado =:liberal_simplificado and
		a.liberal_general =:liberal_general and
		a.ingresos_brutos_simplificado =:ingresos_brutos_simplificado and
		a.ingresos_brutos_general =:ingresos_brutos_general and
		d.riesgo = :riesgo");
	$stmt->bindValue(':categoria',$categoria,PDO::PARAM_STR);	
	$stmt->bindValue(':riesgo',$riesgo,PDO::PARAM_INT);	
	$stmt->bindValue(':estado',$estado,PDO::PARAM_STR);	
	$stmt->bindValue(':liberal_simplificado',$liberal_simplificado,PDO::PARAM_INT);	
	$stmt->bindValue(':liberal_general',$liberal_general,PDO::PARAM_INT);	
	$stmt->bindValue(':ingresos_brutos_simplificado',$ingresos_brutos_simplificado,PDO::PARAM_INT);	
	$stmt->bindValue(':ingresos_brutos_general',$ingresos_brutos_general,PDO::PARAM_INT);	

	if($stmt->execute()){	
		$cliente = $stmt->fetchAll(PDO::FETCH_ASSOC);	
		echo json_encode($cliente);
		}
	}
}else{
	$stmt = $dbh->prepare("SELECT * from clientes c INNER join condiciontributaria con on c.id_cliente = con.id_cliente inner join datosfiscales d on c.id_cliente = d.id_cliente inner join ater a on a.id_condicion = con.id_condicion where d.estado=:estado and
		a.liberal_simplificado =:liberal_simplificado and
		a.liberal_general =:liberal_general and
		a.ingresos_brutos_simplificado =:ingresos_brutos_simplificado and
		a.ingresos_brutos_general =:ingresos_brutos_general and
		con.afip = :afip and
		d.tipo_persona = :tipo and
		d.riesgo = :riesgo");		
	$stmt->bindValue(':estado',$estado,PDO::PARAM_STR);	
	$stmt->bindValue(':riesgo',$riesgo,PDO::PARAM_INT);	
	$stmt->bindValue(':liberal_simplificado',$liberal_simplificado,PDO::PARAM_INT);	
	$stmt->bindValue(':liberal_general',$liberal_general,PDO::PARAM_INT);	
	$stmt->bindValue(':ingresos_brutos_simplificado',$ingresos_brutos_simplificado,PDO::PARAM_INT);	
	$stmt->bindValue(':ingresos_brutos_general',$ingresos_brutos_general,PDO::PARAM_INT);	
	$stmt->bindValue(':afip',$afip,PDO::PARAM_STR);	
	$stmt->bindValue(':tipo',$tipo,PDO::PARAM_STR);	
	if($stmt->execute()){	
		$cliente = $stmt->fetchAll(PDO::FETCH_ASSOC);	
		echo json_encode($cliente);
	}else{
		print_r($stmt->errorInfo());
	}
}
}





 ?>
