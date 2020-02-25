<?php 


require_once"../../clases/Conexion.php";
require_once "../../clases/Clientes.php";
$obj= new clientes();

$id_cliente = $_POST['id_cliente'];
$estado =$_POST['estado'];

/////////////////////////////////////////////////////////////////////////////////////
if(isset($_REQUEST['facturacion_manual']) && $_REQUEST['facturacion_manual']){ 
	 $facturacion_manual = 1;
	}else{
		 $facturacion_manual = 0;

	}

if(isset($_REQUEST['facturacion_fiscal']) && $_REQUEST['facturacion_fiscal']){ 
	 $facturacion_fiscal = 1;
	}else{
		 $facturacion_fiscal = 0;

	}

if(isset($_REQUEST['facturacion_electronica']) && $_REQUEST['facturacion_electronica']){ 
	 $facturacion_electronica = 1;
	}else{
		 $facturacion_electronica = 0;

	}

if(isset($_REQUEST['facturacion_web']) && $_REQUEST['facturacion_web']){ 
	 $facturacion_web = 1;
	}else{
		 $facturacion_web = 0;

	}
if(isset($_REQUEST['facturacion_linea']) && $_REQUEST['facturacion_linea']){ 
	 $facturacion_linea = 1;
	}else{
		 $facturacion_linea = 0;

	}


//////////////////////////////////////////////////////////////////////// 
if(isset($_REQUEST['sicore_iva']) && $_REQUEST['sicore_iva']){ 
	 $sicore_iva = 1;
	}else{
		 $sicore_iva = 0;

	}

if(isset($_REQUEST['sicore_ganancia']) && $_REQUEST['sicore_ganancia']){ 
	 $sicore_ganancia = 1;
	}else{
		 $sicore_ganancia = 0;

	}

if(isset($_REQUEST['siager_liberales']) && $_REQUEST['siager_liberales']){ 
	 $siager_liberales = 1;
	}else{
		 $siager_liberales = 0;

	}	

if(isset($_REQUEST['siager_brutos']) && $_REQUEST['siager_brutos']){ 
	 $siager_brutos = 1;
	}else{
		 $siager_brutos = 0;

	}	



/////////////////////////////////////////////////////////////////////////
if(isset($_REQUEST['liberal_simplificado']) && $_REQUEST['liberal_simplificado']){ 
	
	 $liberal_simplificado = 1;
	
	}else{
	
		 $liberal_simplificado = 0;

	}	




		if(isset($_REQUEST['liberal_general']) && $_REQUEST['liberal_general']){ 
	 $liberal_general = 1;
	}else{
		 $liberal_general = 0;

	}	
		if(isset($_REQUEST['brutos_general']) && $_REQUEST['brutos_general']){ 
	 $brutos_general = 1;
	}else{
		 $brutos_general = 0;

	}
			if(isset($_REQUEST['brutos_simplificado']) && $_REQUEST['brutos_simplificado']){ 
	 $brutos_simplificado = 1;
	}else{
		 $brutos_simplificado = 0;

	}

	if(isset($_REQUEST['convenioMultilateral']) && $_REQUEST['convenioMultilateral']){ 
	 $convenioMultilateral = 1;
	}else{
	$convenioMultilateral = 0;

	}



				if(isset($_REQUEST['provincias']) && $_REQUEST['provincias']){ 
	 $provincias = 1;
	}else{
		 $provincias = 0;

	}


/////////////////////////////////////////////////////////////////////////
/////////////////////////////////////////////////////////////////////////
	if(isset($_REQUEST['caba']) && $_REQUEST['caba']){ 
	 $caba = 1;
	}else{
		 $caba = 0;

	}

	if(isset($_REQUEST['bs_as']) && $_REQUEST['bs_as']){ 
	 $bs_as = 1;
	}else{
		 $bs_as = 0;

	}

	if(isset($_REQUEST['mendoza']) && $_REQUEST['mendoza']){ 
	 $mendoza = 1;
	}else{
		 $mendoza = 0;

	}
	if(isset($_REQUEST['catamarca']) && $_REQUEST['catamarca']){ 
	 $catamarca = 1;
	}else{
		 $catamarca = 0;

	}
	if(isset($_REQUEST['chaco']) && $_REQUEST['chaco']){ 
	 $chaco = 1;
	}else{
		 $chaco = 0;

	}
	if(isset($_REQUEST['chubut']) && $_REQUEST['chubut']){ 
	 $chubut = 1;
	}else{
		 $chubut = 0;

	}

	if(isset($_REQUEST['cordoba']) && $_REQUEST['cordoba']){ 
	 $cordoba = 1;
	}else{
		 $cordoba = 0;

	}

	if(isset($_REQUEST['corrientes']) && $_REQUEST['corrientes']){ 
	 $corrientes = 1;
	}else{
		 $corrientes = 0;

	}
		if(isset($_REQUEST['entre_rios']) && $_REQUEST['entre_rios']){ 
	 $entre_rios = 1;
	}else{
		 $entre_rios = 0;

	}
		if(isset($_REQUEST['formosa']) && $_REQUEST['formosa']){ 
	 $formosa = 1;
	}else{
		 $formosa = 0;

	}

	if(isset($_REQUEST['jujuy']) && $_REQUEST['jujuy']){ 
	 $jujuy = 1;
	}else{
		 $jujuy = 0;

	}
	if(isset($_REQUEST['la_pampa']) && $_REQUEST['la_pampa']){ 
	 $la_pampa = 1;
	}else{
		 $la_pampa = 0;

	}
	if(isset($_REQUEST['la_rioja']) && $_REQUEST['la_rioja']){ 
	 $la_rioja = 1;
	}else{
		 $la_rioja = 0;

	}
	if(isset($_REQUEST['tucuman']) && $_REQUEST['tucuman']){ 
	 $tucuman = 1;
	}else{
		 $tucuman = 0;

	}

	if(isset($_REQUEST['misiones']) && $_REQUEST['misiones']){ 
	 $misiones = 1;
	}else{
		 $misiones = 0;

	}
if(isset($_REQUEST['rio_negro']) && $_REQUEST['rio_negro']){ 
	 $rio_negro = 1;
	}else{
		 $rio_negro = 0;

	}
if(isset($_REQUEST['salta']) && $_REQUEST['salta']){ 
	 $salta = 1;
	}else{
		 $salta = 0;

	}
if(isset($_REQUEST['neuquen']) && $_REQUEST['neuquen']){ 
	 $neuquen = 1;
	}else{
		 $neuquen = 0;

	}
if(isset($_REQUEST['san_juan']) && $_REQUEST['san_juan']){ 
	 $san_juan = 1;
	}else{
		 $san_juan = 0;

	}
if(isset($_REQUEST['san_luis']) && $_REQUEST['san_luis']){ 
	 $san_luis = 1;
	}else{
		 $san_luis = 0;

	}
if(isset($_REQUEST['santa_cruz']) && $_REQUEST['santa_cruz']){ 
	 $santa_cruz = 1;
	}else{
		 $santa_cruz = 0;

	}
if(isset($_REQUEST['santa_fe']) && $_REQUEST['santa_fe']){ 
	 $santa_fe = 1;
	}else{
		 $santa_fe = 0;

	}
if(isset($_REQUEST['santiago_estero']) && $_REQUEST['santiago_estero']){ 
	 $santiago_estero = 1;
	}else{
		 $santiago_estero = 0;

	}
if(isset($_REQUEST['tierra_fuego']) && $_REQUEST['tierra_fuego']){ 
	 $tierra_fuego = 1;
	}else{
		 $tierra_fuego = 0;

	}






/////////////////////////////////////////////////////////////////////////////
/////////////////////////////////////////////////////////////////////////////
$Ifafip =$_POST['afip'];
if ($Ifafip ==1){
	$afip = "Monotributista";
}
if ($Ifafip ==2){
	$afip = "R.I";
}
if ($Ifafip ==3){
	$afip = "Exento";
}
if ($Ifafip ==4){
	$afip = "No Inscripto";
}




if($Ifafip !=1){						
			$actividad_monotributo="-";
			$adicional=0;

}else{
	$actividad_monotributo = isset($_POST['actividad_monotributo']) ? $_POST['actividad_monotributo'] : '';
	$adicional=isset($_POST['adicional']) ? $_POST['adicional'] : '1';
}


/////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////
$riesgo = isset($_POST['riesgo']) ? $_POST['riesgo'] : 1;

$cuit = isset($_POST['cuit']) ? $_POST['cuit'] : '';
$cuitjuridico = isset($_POST['cuitjuridico']) ? $_POST['cuitjuridico'] : '';
$cuitdueño = isset($_POST['cuitdueño']) ? $_POST['cuitdueño'] : '';
///////////////////////////////////////////////////////////////////////////
/////////////////////////////////////////////////////////////////////////
$provincias = array($caba,//0
					$bs_as,//1
					$mendoza,//2
					$catamarca,//3
					$chaco,//4
					$chubut,//5
					$cordoba,//6
					$corrientes,//8
					$entre_rios,//9
					$formosa,//10
					$jujuy,//11
					$la_pampa,//12
					$la_rioja,//13					
					$misiones,//14
					$tucuman,//15
					$rio_negro,//16
					$salta,//17
					$neuquen,//18
					$san_juan,//19
					$san_luis,//20
					$santa_cruz,//21
					$santa_fe,//22
					$santiago_estero,//23
					$tierra_fuego//24					
					);

$fecha_ingreso = $_POST["fecha_ingreso"];
$fecha_egreso = $_POST['fecha_egreso'];

$fecha_cumple = $_POST["fecha_cumple"];
$monotributo_ingreso = 0;
$categoria_monotributo = '';

$datos = array(			
			$_POST['denominacion'],//0
			$_POST['telefono'],//1
			$_POST['mail'],//2
			$fecha_ingreso,//3
			$fecha_cumple,//4						
			$_POST['observaciones'],//5
			$cuit,//6						
			$cuitjuridico,	//7
			$estado,//8
			$_POST['tipo'],	//9
			$riesgo,//10	
			$_POST['clave_afim'],//11
			$_POST['clave_siprod'],//12
			$_POST['clave_fiscal'],//13
			$_POST['clave_sindicato'],//14
			$facturacion_manual,//15
			$facturacion_fiscal,//16
			$facturacion_electronica,//17
			$facturacion_web,//18
			$facturacion_linea,//19
			$sicore_iva,//20
			$sicore_ganancia,//21
			$siager_liberales,//22
			$siager_brutos,//23
			$liberal_simplificado,//24
			$liberal_general,//25
			$brutos_general,//26
			$brutos_simplificado,//27	
			$convenioMultilateral,//28
			$afip,//29
			$monotributo_ingreso,//30
			$categoria_monotributo,//31
			$actividad_monotributo,//32
			$adicional,//33
			$cuitdueño,					//34
			$fecha_egreso//35
			);



echo $obj->ActualizaCliente($id_cliente,$datos,$provincias);


 ?>

