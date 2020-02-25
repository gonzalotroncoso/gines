

<?php 
require_once"../../clases/Conexion.php";
require_once "../../clases/pagos.php";
$pagos= new pagos();


$id_cliente = $_POST['id_clienteF'];
$fecha =$_POST['fechafF'];
$pagocl =0;
$disponible = 0;

$monotributo = $_POST['monotributo'];
$monotributoPago =$_POST['monotributoPago'];
$monotributoSaldo = $_POST['monotributoSaldo'];

$ater = $_POST['ater'];
$aterPago = $_POST['aterPago'];
$aterSaldo = $_POST['aterSaldo'];

$municipalidad = $_POST['municipalidad'];
$municipalidadPago = $_POST['municipalidadPago'];
$municipalidadSaldo = $_POST['municipalidadSaldo'];

$empleador = $_POST['empleador'];
$empleadorPago = $_POST['empleadorPago'];
$empleadorSaldo = $_POST['empleadorSaldo'];

$sindicato = $_POST['sindicato'];
$sindicatoPago = $_POST['sindicatoPago'];
$sindicatoSaldo = $_POST['sindicatoSaldo'];

$iva = $_POST['iva'];
$ivaPago = $_POST['ivaPago'];
$ivaSaldo = $_POST['ivaSaldo'];

$sicore = $_POST['sicore'];
$sicorePago = $_POST['sicorePago'];
$sicoreSaldo = $_POST['sicoreSaldo'];

$ganancias = $_POST['ganancias'];
$gananciasPago = $_POST['gananciasPago'];
$gananciasSaldo = $_POST['gananciasSaldo'];

$autonomo = $_POST['autonomo'];
$autonomoPago = $_POST['autonomoPago'];
$autonomoSaldo = $_POST['autonomoSaldo'];

$caja = $_POST['caja'];
$cajaPago = $_POST['cajaPago'];
$cajaSaldo = $_POST['cajaSaldo'];

$aportes = $_POST['aportes'];
$aportesPago = $_POST['aportesPago'];
$aportesSaldo = $_POST['aportesSaldo'];

$cpceer = $_POST['cpceer'];
$cpceerPago = $_POST['cpceerPago'];
$cpceerSaldo = $_POST['cpceerSaldo'];

$matricula = $_POST['matricula'];
$matriculaPago = $_POST['matriculaPago'];
$matriculaSaldo = $_POST['matriculaSaldo'];

$suss = $_POST['suss'];
$sussPago = $_POST['sussPago'];
$sussSaldo = $_POST['sussSaldo'];

$ley4035 = $_POST['ley4035'];
$ley4035Pago = $_POST['ley4035Pago'];
$ley4035Saldo = $_POST['ley4035Saldo'];

$honorarios = $_POST['honorarios'];
$honorariosPago = $_POST['honorariosPago'];
$honorariosSaldo = $_POST['honorariosSaldo'];


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