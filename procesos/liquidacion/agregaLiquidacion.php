<?php 
require_once"../../clases/Conexion.php";
require_once "../../clases/liquidacion.php";
$liquidacion= new liquidacion();
if(isset($_REQUEST['fin']) && $_REQUEST['fin']){ 
	 $fin = 1;
	}else{
		 $fin = 0;

	}

if(isset($_REQUEST['afip']) && $_REQUEST['afip']){ 
		$afip=$_POST['afip'];
	
	}else{
		 $afip = 0;
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


if(isset($_REQUEST['empleador']) && $_REQUEST['empleador']){ 
	$empleador=$_POST['empleador'];
	}else{
		 $empleador = 0;
		
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

if(isset($_REQUEST['siager']) && $_REQUEST['siager']){ 
	$siager=$_POST['siager'];
	}else{
	 $siager = 0;	
	}	

if(isset($_REQUEST['sicore']) && $_REQUEST['sicore']){ 
	$sicore=$_POST['sicore'];	 
	}else{
		$sicore = 0;		
	}	

if(isset($_REQUEST['observaciones']) && $_REQUEST['observaciones']){ 
	$observaciones=$_POST['observaciones'];	 
	}else{
		$observaciones = 0;		
	}	


$id=$_POST['id_cliente'];
$fecha=$_POST['fecha'];



$datos=array($id,
			$fecha,
			$afip,
			$ater,
			$municipalidad,
			$empleador,
			$sindicato,
			$siager,
			$sicore,
			$observaciones,
			$fin);

echo $liquidacion->cargarLiquidacion($datos);



 ?>