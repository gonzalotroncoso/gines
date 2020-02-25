<?php 
require_once"../../clases/Conexion.php";
require_once "../../clases/pagos.php";
$pagos= new pagos();


	$id=$_POST['id_cliente'];	

	$fecha=$_POST['fecha'];	

if(isset($_REQUEST['monotributo']) && $_REQUEST['monotributo']){ 
	$monotributo=$_POST['monotributo'];
	 
	}else{
	$monotributo = 0;	
	}	

if(isset($_REQUEST['ater']) && $_REQUEST['ater']){ 
	$ater=$_POST['ater'];	 
	}else{
	$ater = 0;
	}

if(isset($_REQUEST['municipalidad']) && $_REQUEST['municipalidad']){ 
	 $municipalidad=$_POST['municipalidad'];
	}else{
		$municipalidad = 0;		
	}

if(isset($_REQUEST['aportes']) && $_REQUEST['aportes']){ 
	 $aportes=$_POST['aportes'];
	}else{
		$aportes = 0;		
	}

if(isset($_REQUEST['empleador']) && $_REQUEST['empleador']){ 
	$empleador=$_POST['empleador'];	 
	}else{
		$empleador = 0;
		
	}

if(isset($_REQUEST['sindicato']) && $_REQUEST['sindicato']){ 
	 $sindicato=$_POST['sindicato'];
	}else{
		$sindicato = 0;
		
	}


if(isset($_REQUEST['iva']) && $_REQUEST['iva']){ 
	 $iva=$_POST['iva'];
	}else{
		$iva = 0;
		
	}


if(isset($_REQUEST['sicore']) && $_REQUEST['sicore']){ 
	 $sicore=$_POST['sicore'];
	}else{
		$sicore = 0;
		
	}

if(isset($_REQUEST['ganancias']) && $_REQUEST['ganancias']){ 
	$ganancias=$_POST['ganancias'];
	 
	}else{
	$ganancias = 0;	
	}

if(isset($_REQUEST['autonomos']) && $_REQUEST['autonomos']){ 
	 $autonomos=$_POST['autonomos'];
	}else{
		$autonomos = 0;
		
	}

if(isset($_REQUEST['caja']) && $_REQUEST['caja']){ 
	 $caja=$_POST['caja'];
	}else{
		$caja = 0;
		
	}

if(isset($_REQUEST['CPCEER']) && $_REQUEST['CPCEER']){ 
	$CPCEER=$_POST['CPCEER'];
	 
	}else{
		$CPCEER = 0;
		
	}

if(isset($_REQUEST['SUSS']) && $_REQUEST['SUSS']){ 
	 $SUSS=$_POST['SUSS'];
	}else{
		$SUSS = 0;
		
	}

if(isset($_REQUEST['ley']) && $_REQUEST['ley']){ 
	 $ley=$_POST['ley'];
	}else{
		$ley = 0;
		
	}


if(isset($_REQUEST['honorarios']) && $_REQUEST['honorarios']){ 
	 $honorarios=$_POST['honorarios'];
	}else{
		$honorarios = 0;
		
	}

if(isset($_REQUEST['total']) && $_REQUEST['total']){ 
			$total=$_POST['total'];
	 
	}else{
			$total = 0;
	}

if(isset($_REQUEST['matricula']) && $_REQUEST['matricula']){ 
	 $matricula=$_POST['matricula'];
	}else{
		$matricula = 0;
		
	}

$datos=array($id,
			$fecha,
 			$monotributo,
 			$ater,
 			$municipalidad,
 			$empleador,
 			$sindicato,
 			$iva,
 			$sicore,
 			$ganancias,
 			$autonomos,
 			$caja,
 			$aportes,
 			$CPCEER,
 			$SUSS,
 			$ley,
 			$honorarios,
 			$total,
 					
 			$matricula);
	

echo $pagos->cargarPago($datos);



 ?>