<?php 
require_once"../../clases/Conexion.php";
require_once "../../clases/pagos.php";
$pagos= new pagos();
$id=$_POST['id_clienteF'];	

	$fecha=$_POST['fechafF'];	



	$monotributo=$_POST['monotributoF'];	



	$ater=$_POST['aterF'];	



	$municipalidad=$_POST['municipalidadF'];	



	$aportes=$_POST['aportesF'];	



	$empleador=$_POST['empleadorF'];	



	$sindicato=$_POST['sindicatoF'];	



	$iva=$_POST['ivaF'];	



	$sicore=$_POST['sicoreF'];	





	$ganancias=$_POST['gananciasF'];	



	$autonomos=$_POST['autonomosF'];	



	$caja=$_POST['cajaF'];	



	$CPCEER=$_POST['CPCEERF'];	





	$SUSS=$_POST['SUSSF'];	



	$ley=$_POST['leyF'];	



	$honorarios=$_POST['honorariosF'];	



	



	
	$matricula=$_POST['matriculaF'];	







$datos=array($id,//0
			$fecha,//1
 			$monotributo,//2
 			$ater,//3
 			$municipalidad,//4
 			$empleador,//5
 			$sindicato,//6
 			$iva,//7
 			$sicore,//8
 			$ganancias,//9
 			$autonomos,//10
 			$caja,//11
 			$aportes,//12
 			$CPCEER,//13
 			$SUSS,//14
 			$ley,//15
 			$honorarios,//16 			
 			$matricula//17
 			);//18
			

echo($pagos->cargarSaldo($datos));


?>