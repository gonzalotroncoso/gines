<?php 

session_start();

if (isset($_SESSION['usuario'])){
require_once "dependencias.php"; 
require_once '../clases/Conexion.php';
$c = new conectar();
$dbh = $c->conexion();

$sql5= "Select DISTINCT c.denominacion, sum(p.total) as totalp, c.nro_cliente, c.id_cliente From pagos p inner join clientes c on c.id_cliente = p.id_cliente group by c.id_cliente, p.id_cliente";
$stmt5 = $dbh->prepare($sql5);
$stmt5->execute();

?>

<!DOCTYPE html>
<html>
<head>
	<title>Pago de deudas</title>
	<?php require_once "menu.php" ?>
</head>
<body>
	<div class="container">
		<div class="panel panel-primary">
			<div class="panel-heading">Datos</div>
  								<div class="panel-body">
		<form id="morosos" name="morosos">		
		  <div class="row">			
		  	<label class="col-sm-1">Buscar Cliente</label>
					<div class="col-sm-4">
						<select class="form-control input-sm" id="id_cliente" name="id_cliente">
					<option value="0"> Seleccionar cliente</option>
						<?php
							
							$sql ="Select DISTINCT c.denominacion, sum(p.total) as totalp, c.nro_cliente, c.id_cliente From pagos p inner join clientes c on c.id_cliente = p.id_cliente group by c.id_cliente, p.id_cliente";			
							$stmt = $dbh->prepare($sql);	
							$stmt->execute();
							while ($cliente = $stmt->fetch()):            ?>
              
							<option value="<?php echo $cliente['id_cliente'] ?>"> <?php echo utf8_decode($cliente['denominacion'])?></option>
							<?php endwhile; ?>
						</select> 
					</div>
					<div class="col-sm-7">
							<div class="checkbox">
					  			<label><input type="checkbox" id="chkcliente" value="">Clientes sin liquidar</label>
							</div>
					</div>
			</div>
			<hr/>
		  <div class="row">
		  	<div class="col-sm-12">
		  			<div class="scrollable1">
		  		<table style="overflow-y:scroll"  id="clientestb" class="table table-responsive table-hover table-condensed table-border ">
		  			<thead>
		  				<th class="active">Nro de cliente</th>
		  				<th class="active">Denominacion</th>
		  				<th class="active">Total a Pagar</th>		  				
		  				<th class="active" align="center">Ver meses</th>		  				
		  			</thead>
		  			<tbody>
		  				<?php while ($unaFila1 = $stmt5->fetch()): ?>		  					
		  					<?php  if($unaFila1['totalp']>0){?>		  					
		  					<tr class="danger">
								<td><?php echo $unaFila1['nro_cliente'] ?></td>
								<td><?php echo utf8_decode($unaFila1['denominacion']) ?></td>
								<td><?php echo $unaFila1['totalp'] ?></td>								
								<td align="center"><a hidden="true" href=""><?php echo $unaFila1['id_cliente']  ?></a><span class="glyphicon glyphicon-zoom-in

								"></span></td>
							</tr>
						<?php }else{ ?>							
		  					<tr class="success">
								<td><?php echo $unaFila1['nro_cliente'] ?></td>
								<td><?php echo $unaFila1['denominacion'] ?></td>
								<td><?php echo $unaFila1['totalp'] ?></td>	
								<td align="center"><a hidden="true" href=""><?php echo $unaFila1['id_cliente']  ?></a><span class="glyphicon glyphicon-zoom-in

								"></span></td>
															
								
							</tr>
						<?php } ?>
						<?php endwhile; ?>
		  			</tbody>
		  		</table>
		  	</div>
		  		</br>
<hr/>

		  	</div>
		  </div>


	

		<div class="row">
			<div class="col-sm-4">
				<label>Cliente: </label> <label id="denominacionB"></label>
			</div>
			<div class="col-sm-3">
				
				
						<select  class="form-control" id="mes" name="mes">
							<option value="01">Enero</option>
							<option value="02">Febrero</option>
							<option value="03">Marzo</option>
							<option value="04">Abril</option>
							<option value="05">Mayo</option>
							<option value="06">Junio</option>
							<option value="07">Julio</option>
							<option value="08">Agosto</option>
							<option value="09">Septiembre</option>
							<option value="10">Octubre</option>
							<option value="11">Noviembre</option>
							<option value="12">Diciembre</option>

						</select>					
				</div>
			<div class="col-sm-3">
				
				<select  class="form-control" id="anio" name="anio">					         

            <?php 
               $year = date("Y");
                 for ($i= $year; $i >= 1945 ; $i--) { //quitarle el +1 Aver ?
             ?>    	

                 <option VALUE="<?php echo $i ?>"><?php echo $i ?></option>';

              <?php 
                     }

                ?>
					</select>
			</div>
			<div class="col-sm-2">
				<input type="button" name="" value="filtar por fecha" id="btn_fecha" > 
			</div>
		</div>
		

		<hr/>
						<div class="scrollable">
		  				<table style="overflow-y:scroll" class="table table-responsive table-hover table-condensed table-border " style ="text-align: center;" class="tablajsons" id="tablajson" >
	    					<thead class="active">	    							    						
	    						<th class="active" style="text-align: center">Total a Pagar</th>
	    						<th class="active" style="text-align: center">Pagos del cliente</th>
	    						<th class="active" style="text-align: center">Monto a saldar</th>	    						
	    						<th class="active" style="text-align: center">Fecha</th>	
	    						<th class="active" style="text-align: center">Pagar</th>	
	    						<th class="active" style="text-align: center">Imprimir Factura</th>	
	    					</thead>
	    					<tbody  style ="text-align: center;" >
	    						
	    					</tbody>
	    				</table>
	    				</div>
	    		    	
		</form>
		</div>
	</div>

</div>	
</div>


<!--|||||||||||||||||||||||||||||||||||FORM MODAL BUTTON|||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||| -->
<div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document" >
    <div class="modal-content">
      <div class="modal-header">
       <center><b> <h3 class="modal-title" id="exampleModalLongTitle">Asignar pagos</h3></b></center>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body" id="modalbody">    
      		<form id="liquidacionF" name="liquidacionF">
      			<input type="text" name="id_clienteF" id="id_clienteF" hidden="true">
      			<input type="date" name="fechafF" id="fechafF" hidden="true">
      			<input type="date" name="id_pago" id="id_pago" hidden="true">
      		
     			<hr/>
     			<div class="table-responsive-sm ">
	     			<table class="table table-responsive table-hover table-condensed table-border " style ="text-align: center;">
	     				<thead>
	     					<tr>
		     				
		     					<th class="active">Concepto</th>
		     					<th class="active">Total a abonar</th>
		     					<th class="active">Abonado</th>
		     					<th class="active">Saldo</th>
		     				</tr>
		     			</thead>
	     				
	     				<tbody>
		     				<tr>
		     					<td>Monotributo: </td>
		     					<td><input type="number" name="monotributo" id="monotributo" class="form-control" readonly></td>
		     					<td><input type="" name="monotributoPago" id="monotributoPago" class="form-control" onKeyUp="monotributoF()"></td>
		     					<td><input type="" name="monotributoSaldo" id="monotributoSaldo" class="form-control" readonly></td>
		     				</tr>
		     					<tr>
		     					<td>Ater: </td>
		     					<td><input type="" name="ater" id="ater" class="form-control" readonly></td>
		     					<td><input type="" name="aterPago" id="aterPago" class="form-control" onKeyUp="aterF()"></td>
		     					<td><input type="" name="aterSaldo" id="aterSaldo" class="form-control" readonly></td>
		     				</tr>
		     				</tr>
		     					<tr>
		     					<td>Municipalidad: </td>
		     					<td><input type="" name="municipalidad" id="municipalidad" class="form-control" readonly></td>
		     					<td><input type="" name="municipalidadPago" id="municipalidadPago" class="form-control" onKeyUp="municipalidadF()"></td>
		     					<td><input type="" name="municipalidadSaldo" id="municipalidadSaldo" class="form-control" readonly></td>
		     				</tr>
		     				<tr>
		     					<td><hr/></td>
		     					<td><hr/></td>
		     					<td><hr/></td>
		     					<td><hr/></td>
		     				</tr>
		     					<tr>
		     					<td>Empleador: </td>
		     					<td><input type="" name="empleador" id="empleador" class="form-control" readonly></td>
		     					<td><input type="" name="empleadorPago" id="empleadorPago" class="form-control" onKeyUp="empleadorF()"></td> 
		     					<td><input type="" name="empleadorSaldo" id="empleadorSaldo" class="form-control" readonly></td>
		     				</tr>
		     					<tr>
		     					<td>Sindicato: </td>
		     					<td><input type="" name="sindicato" id="sindicato" class="form-control" readonly></td>
		     					<td><input type="" name="sindicatoPago" id="sindicatoPago" class="form-control" onKeyUp="sindicatoF()"></td>
		     					<td><input type="" name="sindicatoSaldo" id="sindicatoSaldo" class="form-control" readonly></td>
		     				</tr>
		     					<tr>
		     					<td><hr/></td>
		     					<td><hr/></td>
		     					<td><hr/></td>
		     					<td><hr/></td>
		     				</tr>
		     				<tr>
		     					<td>IVA: </td>
		     					<td><input type="" name="iva" id="iva" class="form-control" readonly></td>
		     					<td><input type="" name="ivaPago" id="ivaPago" class="form-control" onKeyUp="ivaF()"></td>
		     					<td><input type="" name="ivaSaldo" id="ivaSaldo" class="form-control" readonly></td>
		     				</tr>
		     					<tr>
		     					<td>Sicore: </td>
		     					<td><input type="" name="sicore" id="sicore" class="form-control" readonly></td>
		     					<td><input type="" name="sicorePago" id="sicorePago" class="form-control" onKeyUp="sicoreF()"></td>
		     					<td><input type="" name="sicoreSaldo" id="sicoreSaldo" class="form-control" readonly></td>
		     				</tr>
		     					<tr>
		     					<td><hr/></td>
		     					<td><hr/></td>
		     					<td><hr/></td>
		     					<td><hr/></td>
		     				</tr>
		     					</tr>
		     					<tr>
		     					<td>Ganancias: </td>
		     					<td><input type="" name="ganancias" id="ganancias" class="form-control" readonly></td>
		     					<td><input type="" name="gananciasPago" id="gananciasPago" class="form-control" onKeyUp="gananciasF()"></td>
		     					<td><input type="" name="gananciasSaldo" id="gananciasSaldo" class="form-control" readonly></td>
		     				</tr>
		     					</tr>
		     					<tr>
		     					<td>Autonomos: </td>
		     					<td><input type="" name="autonomo" id="autonomo" class="form-control" readonly></td>
		     					<td><input type="" name="autonomoPago" id="autonomoPago" class="form-control" onKeyUp="autonomoF()"></td>
		     					<td><input type="" name="autonomoSaldo" id="autonomoSaldo" class="form-control" readonly></td>
		     				</tr>
		     					</tr>
		     					<tr>
		     					<td>Caja de prevision social: </td>
		     					<td><input type="" name="caja" id="caja" class="form-control" readonly></td>
		     					<td><input type="" name="cajaPago" id="cajaPago" class="form-control" onKeyUp="cajaF()"></td>
		     					<td><input type="" name="cajaSaldo" id="cajaSaldo" class="form-control" readonly></td>
		     				</tr>
		     					</tr>
		     					<tr>
		     					<td>Aportes: </td>
		     					<td><input type="" name="aportes" id="aportes" class="form-control" readonly></td>
		     					<td><input type="" name="aportesPago" id="aportesPago" class="form-control" onKeyUp="aportesF()"></td>
		     					<td><input type="" name="aportesSaldo" id="aportesSaldo" class="form-control" readonly></td>
		     				</tr>
		     					</tr>
		     					<tr>
		     					<td>Legalizados CPCEER: </td>
		     					<td><input type="" name="cpceer" id="cpceer" class="form-control" readonly></td>
		     					<td><input type="" name="cpceerPago" id="cpceerPago" class="form-control" onKeyUp="cpceerF()"></td>
		     					<td><input type="" name="cpceerSaldo" id="cpceerSaldo" class="form-control" readonly></td>
		     				</tr>
		     					</tr>
		     					<tr>
		     					<td>Matricula: </td>
		     					<td><input type="" name="matricula" id="matricula" class="form-control" readonly></td>
		     					<td><input type="" name="matriculaPago" id="matriculaPago" class="form-control" onKeyUp="matriculaF()"></td>
		     					<td><input type="" name="matriculaSaldo" id="matriculaSaldo" class="form-control" readonly></td>
		     				</tr>
		     					</tr>
		     					<tr>
		     					<td>SUSS - F 931: </td>
		     					<td><input type="" name="suss" id="suss" class="form-control" readonly></td>
		     					<td><input type="" name="sussPago" id="sussPago" class="form-control" onKeyUp="sussF()"></td>
		     					<td><input type="" name="sussSaldo" id="sussSaldo" class="form-control" readonly></td>
		     				</tr>
		     					</tr>
		     					<tr>
		     					<td>LEY 4035: </td>
		     					<td><input type="" name="ley4035" id="ley4035" class="form-control" readonly></td>
		     					<td><input type="" name="ley4035Pago" id="ley4035Pago" class="form-control" onKeyUp="ley4035F()"></td>
		     					<td><input type="" name="ley4035Saldo" id="ley4035Saldo" class="form-control" readonly></td>
		     				</tr>
		     					</tr>
		     					<tr>
		     					<td>Honorarios: </td>
		     					<td><input type="" name="honorarios" id="honorarios" class="form-control" readonly></td>
		     					<td><input type="" name="honorariosPago" id="honorariosPago" class="form-control" onKeyUp="honorariosF()"></td>
		     					<td><input type="" name="honorariosSaldo" id="honorariosSaldo" class="form-control" readonly></td>
		     				</tr>
		     			</tbody>
	     			</table>
     			</div>
     			<button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
        		<button type="button" class="btn btn-primary" id="btn_ssaldo" data-dismiss="modal">Guardar cambios</button>
      		</form>

      </div>
    </div>
  </div>
 </div> 

</body>
</html>
<script type="text/javascript">

	function monotributoF(){
		var monotributo = document.liquidacionF.monotributo.value;
		var monotributoPago = document.liquidacionF.monotributoPago.value;
		try{
			monotributo = (isNaN(parseFloat(monotributo)))? 0 : parseFloat(monotributo);
			monotributoPago = (isNaN(parseFloat(monotributoPago)))? 0 : parseFloat(monotributoPago);
			saldo = monotributo - monotributoPago;
			
			$('#monotributoSaldo').val(saldo);

		} catch(e) {}
	}


	function aterF(){
		var ater = document.liquidacionF.ater.value;
		var aterPago = document.liquidacionF.aterPago.value;
		try{
			ater = (isNaN(parseFloat(ater)))? 0 : parseFloat(ater);
			aterPago = (isNaN(parseFloat(aterPago)))? 0 : parseFloat(aterPago);
			aterSaldo = ater - aterPago;
			
			$('#aterSaldo').val(aterSaldo);

		} catch(e) {}
	}

	function municipalidadF(){
		var municipalidad = document.liquidacionF.municipalidad.value;
		var municipalidadPago = document.liquidacionF.municipalidadPago.value;
		try{
			municipalidad = (isNaN(parseFloat(municipalidad)))? 0 : parseFloat(municipalidad);
			municipalidadPago = (isNaN(parseFloat(municipalidadPago)))? 0 : parseFloat(municipalidadPago);
			municipalidadSaldo = municipalidad - municipalidadPago;
			
			$('#municipalidadSaldo').val(municipalidadSaldo);

		} catch(e) {}
	}

	function empleadorF(){
		var empleador = document.liquidacionF.empleador.value;
		var empleadorPago = document.liquidacionF.empleadorPago.value;
		try{
			empleador = (isNaN(parseFloat(empleador)))? 0 : parseFloat(empleador);
			empleadorPago = (isNaN(parseFloat(empleadorPago)))? 0 : parseFloat(empleadorPago);
			empleadorSaldo = empleador - empleadorPago;
			
			$('#empleadorSaldo').val(empleadorSaldo);

		} catch(e) {}
	}

	function sindicatoF(){
		var sindicato = document.liquidacionF.sindicato.value;
		var sindicatoPago = document.liquidacionF.sindicatoPago.value;
		try{
			sindicato = (isNaN(parseFloat(sindicato)))? 0 : parseFloat(sindicato);
			sindicatoPago = (isNaN(parseFloat(sindicatoPago)))? 0 : parseFloat(sindicatoPago);
			sindicatoSaldo = sindicato - sindicatoPago;
			
			$('#sindicatoSaldo').val(sindicatoSaldo);

		} catch(e) {}
	}
	function ivaF(){
		var iva = document.liquidacionF.iva.value;
		var ivaPago = document.liquidacionF.ivaPago.value;
		try{
			iva = (isNaN(parseFloat(iva)))? 0 : parseFloat(iva);
			ivaPago = (isNaN(parseFloat(ivaPago)))? 0 : parseFloat(ivaPago);
			ivaSaldo = iva - ivaPago;
			
			$('#ivaSaldo').val(ivaSaldo);

		} catch(e) {}
	}
	function sicoreF(){
		var sicore = document.liquidacionF.sicore.value;
		var sicorePago = document.liquidacionF.sicorePago.value;
		try{
			sicore = (isNaN(parseFloat(sicore)))? 0 : parseFloat(sicore);
			sicorePago = (isNaN(parseFloat(sicorePago)))? 0 : parseFloat(sicorePago);
			sicoreSaldo = sicore - sicorePago;
			
			$('#sicoreSaldo').val(sicoreSaldo);

		} catch(e) {}
	}
	function gananciasF(){
		var ganancias = document.liquidacionF.ganancias.value;
		var gananciasPago = document.liquidacionF.gananciasPago.value;
		try{
			ganancias = (isNaN(parseFloat(ganancias)))? 0 : parseFloat(ganancias);
			gananciasPago = (isNaN(parseFloat(gananciasPago)))? 0 : parseFloat(gananciasPago);
			gananciasSaldo = ganancias - gananciasPago;
			
			$('#gananciasSaldo').val(gananciasSaldo);

		} catch(e) {}
	}
	function autonomoF(){
		var autonomo = document.liquidacionF.autonomo.value;
		var autonomoPago = document.liquidacionF.autonomoPago.value;
		try{
			autonomo = (isNaN(parseFloat(autonomo)))? 0 : parseFloat(autonomo);
			autonomoPago = (isNaN(parseFloat(autonomoPago)))? 0 : parseFloat(autonomoPago);
			autonomoSaldo = autonomo - autonomoPago;
			
			$('#autonomoSaldo').val(autonomoSaldo);

		} catch(e) {}
	}
	function cajaF(){
		var caja = document.liquidacionF.caja.value;
		var cajaPago = document.liquidacionF.cajaPago.value;
		try{
			caja = (isNaN(parseFloat(caja)))? 0 : parseFloat(caja);
			cajaPago = (isNaN(parseFloat(cajaPago)))? 0 : parseFloat(cajaPago);
			cajaSaldo = caja - cajaPago;
			
			$('#cajaSaldo').val(cajaSaldo);

		} catch(e) {}
	}
	function aportesF(){
		var aportes = document.liquidacionF.aportes.value;
		var aportesPago = document.liquidacionF.aportesPago.value;
		try{
			aportes = (isNaN(parseFloat(aportes)))? 0 : parseFloat(aportes);
			aportesPago = (isNaN(parseFloat(aportesPago)))? 0 : parseFloat(aportesPago);
			aportesSaldo = aportes - aportesPago;
			
			$('#aportesSaldo').val(aportesSaldo);

		} catch(e) {}
	}
	function ley4035F(){
		var ley4035 = document.liquidacionF.ley4035.value;
		var ley4035Pago = document.liquidacionF.ley4035Pago.value;
		try{
			ley4035 = (isNaN(parseFloat(ley4035)))? 0 : parseFloat(ley4035);
			ley4035Pago = (isNaN(parseFloat(ley4035Pago)))? 0 : parseFloat(ley4035Pago);
			ley4035Saldo = ley4035 - ley4035Pago;
			
			$('#ley4035Saldo').val(ley4035Saldo);

		} catch(e) {}
	}
	function cpceerF(){
		var cpceer = document.liquidacionF.cpceer.value;
		var cpceerPago = document.liquidacionF.cpceerPago.value;
		try{
			cpceer = (isNaN(parseFloat(cpceer)))? 0 : parseFloat(cpceer);
			cpceerPago = (isNaN(parseFloat(cpceerPago)))? 0 : parseFloat(cpceerPago);
			cpceerSaldo = cpceer - cpceerPago;
			
			$('#cpceerSaldo').val(cpceerSaldo);

		} catch(e) {}
	}
	function matriculaF(){
		var matricula = document.liquidacionF.matricula.value;
		var matriculaPago = document.liquidacionF.matriculaPago.value;
		try{
			matricula = (isNaN(parseFloat(matricula)))? 0 : parseFloat(matricula);
			matriculaPago = (isNaN(parseFloat(matriculaPago)))? 0 : parseFloat(matriculaPago);
			matriculaSaldo = matricula - matriculaPago;
			
			$('#matriculaSaldo').val(matriculaSaldo);

		} catch(e) {}
	}
	function sussF(){
		var suss = document.liquidacionF.suss.value;
		var sussPago = document.liquidacionF.sussPago.value;
		try{
			suss = (isNaN(parseFloat(suss)))? 0 : parseFloat(suss);
			sussPago = (isNaN(parseFloat(sussPago)))? 0 : parseFloat(sussPago);
			sussSaldo = suss - sussPago;
			
			$('#sussSaldo').val(sussSaldo);

		} catch(e) {}
	}
	function honorariosF(){
		var honorarios = document.liquidacionF.honorarios.value;
		var honorariosPago = document.liquidacionF.honorariosPago.value;
		try{
			honorarios = (isNaN(parseFloat(honorarios)))? 0 : parseFloat(honorarios);
			honorariosPago = (isNaN(parseFloat(honorariosPago)))? 0 : parseFloat(honorariosPago);
			honorariosSaldo = honorarios - honorariosPago;
			
			$('#honorariosSaldo').val(honorariosSaldo);

		} catch(e) {}
	}



		


	</script>
<script type="text/javascript">
	
	function cargar(fecha){
		$('#fechafF').val(fecha);
		id = $('#id_cliente').val();
		$('#id_clienteF').val($('#id_cliente').val());

		var id = $('#id_cliente').val();
			 var fecha = fecha;	
			var data=[id,fecha];
			$.ajax({
				type:"POST",
				data: {'data': JSON.stringify(data)},
				url:"../procesos/pagos/datosPagos.php",	
				success:function(r){	
					data= jQuery.parseJSON( r );
					$('#monotributo').val(data['monotributo']);
					$('#iva').val(data['iva']);
					$('#autonomo').val(data['autonomo']);
					$('#caja').val(data['caja']);
					$('#aportes').val(data['aportes']);
					$('#cpceer').val(data['cpceer']);
					$('#matricula').val(data['matricula']);
					$('#suss').val(data['suss']);
					$('#ley4035').val(data['ley4035']);
					$('#honorarios').val(data['honorarios']);
					$('#ater').val(data['ater']);
					$('#municipalidad').val(data['municipalidad']);
					$('#sindicato').val(data['sindicato']);
					$('#empleador').val(data['empleador']);
					$('#sicore').val(data['sicore']);
					$('#ganancias').val(data['ganancias']);

				}
			})
		

	}
</script>

<script type="text/javascript">
	$('#btn_cobrar').click(function(){
	datos=$('#pago').serialize();
		$.ajax({
			type:"POST",
			data: datos,
			url: "../procesos/pagos/pagos.php",
			success:function(r){
				if(r==1){
					alertify.success("Pago realizado");
						$.ajax({
				type:"POST",
				data:"id="+ $('#id_cliente').val(),
				url:"../procesos/pagos/tablaRealMoroso.php",	
				
				success:function(r){
					
				data= jQuery.parseJSON( r );
				var total = 0;
				var newRow;
				$("#tablajson tbody").html("");
				data.forEach(function(data, index) { 
					$('#idcl').val(data.id_cliente);	
 					$('#nombre').val(data.denominacion);
 					total = parseFloat(total)+parseFloat(data.saldoIntegrar);
					 newRow =
					"<tr>"												
						+"<td>"+data.total+"</td>"				
						+"<td>"+data.pagoCliente+"</td>"				
						+"<td>"+data.saldoIntegrar+"</td>"						
						+"<td>"+data.fecha+"</td>"					
					+"</tr>";					
					$(newRow).appendTo("#tablajson tbody");	
					

					});

				$('#totalPagar').val(total);
				
				}
			});

				}else{
					
					alertify.error("No se pudo realizar el pago")
				}
			}




		})
	})

</script>


<script type="text/javascript">
	$('#btn_cargar').click(function(){
		var id = $('#id_cliente').val();
		var fi = $('#fi').val();
		var ff = $('#ff').val();

		var data =[id,fi,ff];
				$.ajax({
				type:"POST",
				data: {'data': JSON.stringify(data)},
				url:"../procesos/pagos/fecha.php",	
				
				success:function(r){
					
				data= jQuery.parseJSON( r );
				var total = 0;
				var newRow;
				$("#tablajson tbody").html("");
				data.forEach(function(data, index) { 

			
					$('#idcl').val(data.id_cliente);
 			
 					total = parseFloat(total)+parseFloat(data.saldoIntegrar);
					 newRow =
					"<tr>"												
						+"<td>"+data.total+"</td>"				
						+"<td>"+data.pagoCliente+"</td>"				
						+"<td>"+data.saldoIntegrar+"</td>"						
						+"<td id='fecha'>"+data.fecha+"</td>"
						+'<td>'+
							'<div class="row">'+
								'<div class="col-sm-12">'+
									'<button type="button" id="btn_pagar" name="btn_pagar" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalLong" onclick="cargar();">'+
									'Cargar pagos'+
									'</button>'+
								'</div>'+
								'</div>'+
							"</td>";						
					+"</tr>";					
					$(newRow).appendTo("#tablajson tbody");	
					

					});

				
				
			
				
				}
			});
})
</script>


<script type="text/javascript">
	$(document).ready(function(){		
		$('#id_cliente').change(function(){			
		
			$("#nombre").val("No se han cargado pagos");
			$.ajax({
				type:"POST",
				data:"id="+ $('#id_cliente').val(),
				url:"../procesos/pagos/tablaRealMoroso.php",	
				
				success:function(r){
					
				data= jQuery.parseJSON( r );
				var total = 0;
				var newRow;

				$("#tablajson tbody").html("");
				data.forEach(function(data, index) { 
					$('#idcl').val(data.id_cliente);	
 					$('#nombre').val(data.denominacion);
 					$('#denominacionB').text(data.denominacion);
 					total = parseFloat(total)+parseFloat(data.saldoIntegrar);
 					if(data.total>0){
					 newRow =
 					
					"<tr class='danger'>"												
						+"<td class='table-success'>"+data.total+"</td>"				
						+"<td class='table-success'>"+data.pagoCliente+"</td>"				
						+"<td class='table-success'>"+data.saldoIntegrar+"</td>"						
						+"<td class='table-success'  id='fecha' >"+data.fecha+"</td>"
						+'<td>'+
							'<div class="row">'+
								'<div class="col-sm-12">'+
									'<button type="button"  id="btn_pagar" name="btn_pagar"  class="btn btn-primary" data-toggle="modal" data-target="#exampleModalLong" onclick="cargar('+"'"+data.fecha+"'"+');">'+
									'Pagar'+
									'</button>'+
								'</div>'+
								'</div>'+
							"</td>"+
							"<td class='table-success'>"+'<a href="../procesos/pagos/generarPdf.php?id_cliente='+data.id_cliente+'&id_pago='+data.id_pago+'"  target="_blank" >Imprimir</a>'+"</td>"							
					+"</tr>";					
					$(newRow).appendTo("#tablajson tbody");	
					}else{
					newRow =
 					
					"<tr class='success'>"												
						+"<td class='table-success'>"+data.total+"</td>"				
						+"<td class='table-success'>"+data.pagoCliente+"</td>"				
						+"<td class='table-success'>"+data.saldoIntegrar+"</td>"						
						+"<td class='table-success'  id='fecha' >"+data.fecha+"</td>"
						+'<td>'+
							'<div class="row">'+
								'<div class="col-sm-12">'+
									'<button type="button"  id="btn_pagar" name="btn_pagar"  class="btn btn-primary" data-toggle="modal" data-target="#exampleModalLong" onclick="cargar('+"'"+data.fecha+"'"+');">'+
									'Pagar'+
									'</button>'+
								'</div>'+
								'</div>'+
							"</td>"+
							"<td class='table-success'>"+'<a href="../procesos/pagos/generarPdf.php?id_cliente='+data.id_cliente+'&id_pago='+data.id_pago+'"  target="_blank" >Imprimir</a>'+"</td>"							
					+"</tr>";					
					$(newRow).appendTo("#tablajson tbody");	

					}

					});

				$('#totalPagar').val(total);
				
				}
			});

		});	
	});	
</script>
<script type="text/javascript">
	$(document).ready(function(){
		$('#id_cliente').select2();
		
	})
</script>

<script type="text/javascript">
	$('#btn_ssaldo').click(function(){
		vacios=validarFormVacio('liquidacion');
			if(vacios>0){
			alertify.alert("Debes llenar todos los campos");
			return false;
		}
	dato = $('#liquidacionF').serialize();

	$.ajax({
		type:"POST",
		data : dato,
		url : "../procesos/pagos/cargarPagos.php",
		success:function(r){
			
			if (r==1){
				alertify.success("Pago cargado");
			}else{
				alertify.error("Falló la carga");
			}
		}
	})
	
	$("#liquidacionF")[0].reset();


	})
</script>


<script type="text/javascript">

</script>
<script type="text/javascript">
	 $("#clientestb").on("click", "td", function() {
     var id = ($( this ).text());
     	$("#nombre").val("No se han cargado pagos");
			$.ajax({
				type:"POST",
				data:"id="+ id,
				url:"../procesos/pagos/tablaRealMoroso.php",	
				
				success:function(r){
					
				data= jQuery.parseJSON( r );
				var total = 0;
				var newRow;
				$("#tablajson tbody").html("");
				data.forEach(function(data, index) { 
					$('#id_cliente').val(id);
					$('#denominacionB').text(data.denominacion);
					$('#idcl').val(data.id_cliente);	
 					$('#nombre').val(data.denominacion);
 					total = parseFloat(total)+parseFloat(data.saldoIntegrar);
 					if(data.total>0){
					 newRow =
 					
					"<tr class='danger'>"												
						+"<td class='table-success'>"+data.total+"</td>"				
						+"<td class='table-success'>"+data.pagoCliente+"</td>"				
						+"<td class='table-success'>"+data.saldoIntegrar+"</td>"						
						+"<td class='table-success'  id='fecha' >"+data.fecha+"</td>"
						+'<td>'+
							'<div class="row">'+
								'<div class="col-sm-12">'+
									'<button type="button"  id="btn_pagar" name="btn_pagar"  class="btn btn-primary" data-toggle="modal" data-target="#exampleModalLong" onclick="cargar('+"'"+data.fecha+"'"+');">'+
									'Pagar'+
									'</button>'+
								'</div>'+
								'</div>'+
							"</td>"+
							"<td class='table-success'>"+'<a href="../procesos/pagos/generarPdf.php?id_cliente='+data.id_cliente+'&id_pago='+data.id_pago+'"  target="_blank" >Imprimir</a>'+"</td>"			
					+"</tr>";					
					$(newRow).appendTo("#tablajson tbody");	
					}else{
					newRow =
 					
					"<tr class='success'>"												
						+"<td class='table-success'>"+data.total+"</td>"				
						+"<td class='table-success'>"+data.pagoCliente+"</td>"				
						+"<td class='table-success'>"+data.saldoIntegrar+"</td>"						
						+"<td class='table-success'  id='fecha' >"+data.fecha+"</td>"
						+'<td>'+
							'<div class="row">'+
								'<div class="col-sm-12">'+
									'<button type="button"  id="btn_pagar" name="btn_pagar"  class="btn btn-primary" data-toggle="modal" data-target="#exampleModalLong" onclick="cargar('+"'"+data.fecha+"'"+');">'+
									'Pagar'+
									'</button>'+
								'</div>'+
								'</div>'+
							"</td>"+
							"<td class='table-success'>"+'<a href="../procesos/pagos/generarPdf.php?id_cliente='+data.id_cliente+'&id_pago='+data.id_pago+'"  target="_blank" >Imprimir</a>'+"</td>"
					+"</tr>";					
					$(newRow).appendTo("#tablajson tbody");	

					}

					});

				$('#totalPagar').val(total);
				
				}
			});

		});	
  
</script>

<script type="text/javascript">
	$('#chkcliente').click (function (){		
			
			if ($('#chkcliente').is (':checked'))
			{
				$.ajax({
					method: 'POST',
					url:"../procesos/pagos/tabladeudores.php",	

					success:function(r){
						
						data= jQuery.parseJSON( r );
						var newRow;
						$("#clientestb tbody").html("");	
						data.forEach(function(data, index) { 
							 newRow ="<tr class='danger'>"+
								"<td>"+data.nro_cliente+"</td>"+
								"<td>"+data.denominacion+"</td>"+
								"<td>"+data.totalp+"</td>"+								
								"<td align='center'><a hidden='true' >"+data.id_cliente+"</a><span class='glyphicon glyphicon-zoom-in'></span></td>"+
							"</tr>";
						$(newRow).appendTo("#clientestb tbody");	
						})

					}
				})

			}else{
					$.ajax({
					method: 'POST',
					url:"../procesos/pagos/todos.php",	

					success:function(r){
						
						data= jQuery.parseJSON( r );
						var newRow;
						$("#clientestb tbody").html("");	
						data.forEach(function(data, index) { 
						if(data.totalp>0){
							 newRow ="<tr class='danger'>"+
								"<td>"+data.nro_cliente+"</td>"+
								"<td>"+data.denominacion+"</td>"+
								"<td>"+data.totalp+"</td>"+								
								"<td align='center'><a hidden='true' >"+data.id_cliente+"</a><span class='glyphicon glyphicon-zoom-in'></span></td>"+
							"</tr>";
						$(newRow).appendTo("#clientestb tbody");	
						}else{
								 newRow ="<tr class='success'>"+
								"<td>"+data.nro_cliente+"</td>"+
								"<td>"+data.denominacion+"</td>"+
								"<td>"+data.totalp+"</td>"+								
								"<td align='center'><a hidden='true' >"+data.id_cliente+"</a><span class='glyphicon glyphicon-zoom-in'></span></td>"+
							"</tr>";
						$(newRow).appendTo("#clientestb tbody");	
						}
						})

					}
				})

			}
});
</script>

<script type="text/javascript">
	$('#btn_fecha').click(function(){
		id = $('#id_cliente').val();		
		mes  = $('#mes').val();
		anio = $('#anio').val();
		
		
		$.ajax({

			url:'../procesos/pagos/fecha.php',
			method: 'POST',
			data:{
  					"mes": mes,
    				"anio": anio,
    				"id":id
					},
			success:function(r){
				
				data= jQuery.parseJSON( r );
				var total = 0;
				var newRow;
				$("#tablajson tbody").html("");
				data.forEach(function(data, index) { 

					$('#id_pago').val(data.id_pago);
					$('#idcl').val(data.id_cliente);
 			
 					total = parseFloat(total)+parseFloat(data.saldoIntegrar);
 					if(data.total>0){
					 newRow =
 					
					"<tr class='danger'>"												
						+"<td class='table-success'>"+data.total+"</td>"				
						+"<td class='table-success'>"+data.pagoCliente+"</td>"				
						+"<td class='table-success'>"+data.saldoIntegrar+"</td>"						
						+"<td class='table-success'  id='fecha' >"+data.fecha+"</td>"
						+'<td>'+
							'<div class="row">'+
								'<div class="col-sm-12">'+
									'<button type="button"  id="btn_pagar" name="btn_pagar"  class="btn btn-primary" data-toggle="modal" data-target="#exampleModalLong" onclick="cargar('+"'"+data.fecha+"'"+');">'+
									'Pagar'+
									'</button>'+
								'</div>'+
								'</div>'+
							"</td>"+
							"<td class='table-success'>"+'<a href="../procesos/pagos/generarPdf.php?id_cliente='+data.id_cliente+'&id_pago='+data.id_pago+'"  target="_blank" >Imprimir</a>'+"</td>"						
					+"</tr>";					
					$(newRow).appendTo("#tablajson tbody");	
					}else{
					newRow =
 					
					"<tr class='success'>"												
						+"<td class='table-success'>"+data.total+"</td>"				
						+"<td class='table-success'>"+data.pagoCliente+"</td>"				
						+"<td class='table-success'>"+data.saldoIntegrar+"</td>"						
						+"<td class='table-success'  id='fecha' >"+data.fecha+"</td>"
						+'<td>'+
							'<div class="row">'+
								'<div class="col-sm-12">'+
									'<button type="button"  id="btn_pagar" name="btn_pagar"  class="btn btn-primary" data-toggle="modal" data-target="#exampleModalLong" onclick="cargar('+"'"+data.fecha+"'"+');">'+
									'Pagar'+
									'</button>'+
								'</div>'+
								'</div>'+
							"</td>"+
							"<td class='table-success'>"+'<a href="../procesos/pagos/generarPdf.php?id_cliente='+data.id_cliente+'&id_pago='+data.id_pago+'"  target="_blank" >Imprimir</a>'+"</td>"							
					+"</tr>";					
					$(newRow).appendTo("#tablajson tbody");	

					}

					});

				
				
			
				

			}




		})


	})
</script>
<script type="text/javascript">
	function imprimir(){
		
		id_cliente = $('#id_cliente').val();		
		id_pago = $('#id_pago').val();
		alert(id_pago);
		$.ajax({

			url:'../procesos/pagos/generarPdf.php',
			method: 'POST',
			data:{
  					"id_cliente": id_cliente,
    				"id_pago": id_pago    				
					},
			success:function(r){	
				if(r==1){
					alert("algo");
				}
				}


		
	})
	}
		
		

</script>
<?php 
}else{
  header("location:index.php");
}

 ?>