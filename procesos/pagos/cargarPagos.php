

<?php 
require_once"../../clases/Conexion.php";
require_once "../../clases/pagos.php";
$pagos= new pagos();


$id_cliente = $_POST['id_clienteF'];
$fecha =$_POST['fechafF'];
$pagocl =0;
$disponible = 0;

$monotributo = $_POST['monotributo'];

if(isset($_REQUEST['monotributoPago']) && $_REQUEST['monotributoPago']){ 
	$monotributoPago =$_POST['monotributoPago'];	 
	}else{
	$monotributoPago = 0;	
	}	
if(isset($_REQUEST['monotributoSaldo']) && $_REQUEST['monotributoSaldo']){ 
	$monotributoSaldo = $_POST['monotributoSaldo'];
	 
	}else{
	$monotributoSaldo = 0;	
	}




$ater = $_POST['ater'];

if(isset($_REQUEST['aterPago']) && $_REQUEST['aterPago']){ 
	$aterPago = $_POST['aterPago'];	 
	}else{
	$aterPago = 0;	
	}	
if(isset($_REQUEST['aterSaldo']) && $_REQUEST['aterSaldo']){ 
	$aterSaldo = $_POST['aterSaldo'];	 
	}else{
	$aterSaldo = 0;	
	}	





$municipalidad = $_POST['municipalidad'];

if(isset($_REQUEST['municipalidadPago']) && $_REQUEST['municipalidadPago']){ 
	$municipalidadPago = $_POST['municipalidadPago'];
	}else{
	$municipalidadPago = 0;	
	}	
if(isset($_REQUEST['municipalidadSaldo']) && $_REQUEST['municipalidadSaldo']){ 
	$municipalidadSaldo = $_POST['municipalidadSaldo'];
	}else{
	$municipalidadSaldo = 0;	
	}	





$empleador = $_POST['empleador'];

if(isset($_REQUEST['empleadorPago']) && $_REQUEST['empleadorPago']){ 
	$empleadorPago = $_POST['empleadorPago'];
	}else{
	$empleadorPago = 0;	
	}	
if(isset($_REQUEST['empleadorSaldo']) && $_REQUEST['empleadorSaldo']){ 
	$empleadorSaldo = $_POST['empleadorSaldo'];
	}else{
	$empleadorSaldo = 0;	
	}	



$sindicato = $_POST['sindicato'];
if(isset($_REQUEST['sindicatoPago']) && $_REQUEST['sindicatoPago']){ 
	$sindicatoPago = $_POST['sindicatoPago'];
	}else{
	$sindicatoPago = 0;	
	}	
if(isset($_REQUEST['sindicatoSaldo']) && $_REQUEST['sindicatoSaldo']){ 
	$sindicatoSaldo = $_POST['sindicatoSaldo'];
	}else{
	$sindicatoSaldo = 0;	
	}


$iva = $_POST['iva'];
if(isset($_REQUEST['ivaPago']) && $_REQUEST['ivaPago']){ 
	$ivaPago = $_POST['ivaPago'];
	}else{
	$ivaPago = 0;	
	}	
if(isset($_REQUEST['ivaSaldo']) && $_REQUEST['ivaSaldo']){ 
	$ivaSaldo = $_POST['ivaSaldo'];
	}else{
	$ivaSaldo = 0;	
	}	



$sicore = $_POST['sicore'];
if(isset($_REQUEST['sicorePago']) && $_REQUEST['sicorePago']){ 
	$sicorePago = $_POST['sicorePago'];
	}else{
	$sicorePago = 0;	
	}	
if(isset($_REQUEST['sicoreSaldo']) && $_REQUEST['sicoreSaldo']){ 	
	$sicoreSaldo = $_POST['sicoreSaldo'];
	}else{
	$sicoreSaldo = 0;	
	}	





$ganancias = $_POST['ganancias'];
if(isset($_REQUEST['gananciasPago']) && $_REQUEST['gananciasPago']){ 
	$gananciasPago = $_POST['gananciasPago'];
	}else{
	$gananciasPago = 0;	
	}	
if(isset($_REQUEST['gananciasSaldo']) && $_REQUEST['gananciasSaldo']){ 
	$gananciasSaldo = $_POST['gananciasSaldo'];
	}else{
	$gananciasSaldo = 0;	
	}	



$autonomo = $_POST['autonomo'];
if(isset($_REQUEST['autonomoPago']) && $_REQUEST['autonomoPago']){ 
	$autonomoPago = $_POST['autonomoPago'];
	}else{
	$autonomoPago = 0;	
	}	
if(isset($_REQUEST['autonomoSaldo']) && $_REQUEST['autonomoSaldo']){ 
	$autonomoSaldo = $_POST['autonomoSaldo'];
	}else{
	$autonomoSaldo = 0;	
	}	





$caja = $_POST['caja'];

if(isset($_REQUEST['cajaPago']) && $_REQUEST['cajaPago']){ 
	$cajaPago = $_POST['cajaPago'];
	}else{
	$cajaPago = 0;	
	}	
if(isset($_REQUEST['cajaSaldo']) && $_REQUEST['cajaSaldo']){ 
	$cajaSaldo = $_POST['cajaSaldo'];
	}else{
	$cajaSaldo = 0;	
	}	




$aportes = $_POST['aportes'];
if(isset($_REQUEST['aportesPago']) && $_REQUEST['aportesPago']){ 
	$aportesPago = $_POST['aportesPago'];
	}else{
	$aportesPago = 0;	
	}	
if(isset($_REQUEST['aportesSaldo']) && $_REQUEST['aportesSaldo']){ 
	$aportesSaldo = $_POST['aportesSaldo'];
	}else{
	$aportesSaldo = 0;	
	}	





$cpceer = $_POST['cpceer'];
if(isset($_REQUEST['cpceerPago']) && $_REQUEST['cpceerPago']){ 
	$cpceerPago = $_POST['cpceerPago'];
	}else{
	$cpceerPago = 0;	
	}	
if(isset($_REQUEST['cpceerSaldo']) && $_REQUEST['cpceerSaldo']){ 
	$cpceerSaldo = $_POST['cpceerSaldo'];
	}else{
	$cpceerSaldo = 0;	
	}	




$matricula = $_POST['matricula'];
if(isset($_REQUEST['matriculaPago']) && $_REQUEST['matriculaPago']){ 
	$matriculaPago = $_POST['matriculaPago'];
	}else{
	$matriculaPago = 0;	
	}	
if(isset($_REQUEST['matriculaSaldo']) && $_REQUEST['matriculaSaldo']){ 
	$matriculaSaldo = $_POST['matriculaSaldo'];
	}else{
	$matriculaSaldo = 0;	
	}	



$suss = $_POST['suss'];
if(isset($_REQUEST['sussPago']) && $_REQUEST['sussPago']){ 
	$sussPago = $_POST['sussPago'];
	}else{
	$sussPago = 0;	
	}	
	if(isset($_REQUEST['sussSaldo']) && $_REQUEST['sussSaldo']){ 
	$sussSaldo = $_POST['sussSaldo'];
	}else{
	$sussSaldo = 0;	
	}	



$ley4035 = $_POST['ley4035'];
if(isset($_REQUEST['ley4035Pago']) && $_REQUEST['ley4035Pago']){ 
	$ley4035Pago = $_POST['ley4035Pago'];
	}else{
	$ley4035Pago = 0;	
	}	
if(isset($_REQUEST['ley4035Saldo']) && $_REQUEST['ley4035Saldo']){ 
	$ley4035Saldo = $_POST['ley4035Saldo'];
	}else{
	$ley4035Saldo = 0;	
	}



$honorarios = $_POST['honorarios'];
if(isset($_REQUEST['honorariosPago']) && $_REQUEST['honorariosPago']){ 
	$honorariosPago = $_POST['honorariosPago'];
	}else{
	$honorariosPago = 0;	
	}	
if(isset($_REQUEST['honorariosSaldo']) && $_REQUEST['honorariosSaldo']){ 
	$honorariosSaldo = $_POST['honorariosSaldo'];
	}else{
	$honorariosSaldo = 0;	
	}	



$datos = array(
				$id_cliente,//0	
				$fecha,//1
				$pagocl,//2
				$disponible,//3
				$monotributo,//4
				$monotributoPago,//5
				$monotributoSaldo,//6
				$ater,//7
				$aterPago,//8
				$aterSaldo,//9
				$municipalidad,//10
				$municipalidadPago,//11
				$municipalidadSaldo,//12
				$empleador,//13
				$empleadorPago,//14
				$empleadorSaldo,//15
				$sindicato,//16
				$sindicatoPago,//17
				$sindicatoSaldo,//18
				$iva,//19
				$ivaPago,//20
				$ivaSaldo,//21
				$sicore,//22
				$sicorePago,//23
				$sicoreSaldo,//24
				$ganancias,//25
				$gananciasPago,//26
				$gananciasSaldo,//27
				$autonomo,//28
				$autonomoPago,//29
				$autonomoSaldo,//30
				$caja,//31
				$cajaPago,//32
				$cajaSaldo,//33
				$aportes,//34
				$aportesPago,//35
				$aportesSaldo,//36
				$cpceer,//37
				$cpceerPago,//38
				$cpceerSaldo,//39
				$matricula,//40
				$matriculaPago,//41
				$matriculaSaldo,//42
				$suss,//43
				$sussPago,//44
				$sussSaldo,//45
				$ley4035,//46
				$ley4035Pago,//47
				$ley4035Saldo,//48
				$honorarios,//49
				$honorariosPago,//50
				$honorariosSaldo);//51

print_r( $pagos->pagarSaldo($datos));




 ?>