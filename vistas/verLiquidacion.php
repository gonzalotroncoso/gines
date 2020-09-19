<?php 

session_start();

if (isset($_SESSION['usuario'])){
require_once "dependencias.php"; 
require_once '../clases/Conexion.php';
$c = new conectar();
$dbh = $c->conexion();

?>
<!DOCTYPE html>
<html>
<head>
	<title>Liquidaciones</title>
	<?php require_once "menu.php" ?>
</head>
<body>
	<div class="container">
		<form id="liquidacion">
		  <div class="row">
			<div class="col-sm-12">   							
					<label class="col-sm-2">Seleccionar Cliente</label>
					<div class="col-sm-4">
						<select class="form-control input-sm" id="id_cliente" name="id_cliente" >
					<option value="0"> Seleccionar cliente</option>
						<?php
							$estado = "inactivo";
							$sql ="SELECT distinct(c.denominacion) as denominacion, c.id_cliente FROM clientes c inner join liquidacionmensual l on l.id_cliente = c.id_cliente inner join datosfiscales d on d.id_cliente = c.id_cliente";			
							$stmt = $dbh->prepare($sql);	
							$stmt->execute();
							while ($cliente = $stmt->fetch()):            ?>
              
							<option value="<?php echo $cliente['id_cliente'] ?>"><?php echo utf8_decode( $cliente['denominacion'])?></option>
							<?php endwhile; ?>
						</select> 
					</div>	
	<div class="col-sm-6">
							<div class="checkbox">
					  			<label><input type="checkbox" id="chkcliente" value="">Clientes sin liquidar</label>
							</div>
					</div>
				</div>
			</div>

			<hr/>

	<div class="row">
		
				<div class="col-sm-12" id="tablaLiquidacionLoad"></div>
		  	

		
	</div>		
<hr/>

<div class="row">
	<div class="col-sm-12">
		<label class="col-sm-1">Cliente: </label>
		<div class="col-sm-2">
		<input type="text" name="d" id="d" readonly="true" class="form-control">
		</div>
		<div class="row">
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
		

	</div>
</div>
<hr/>
<div class="row">
	<div class="col-sm-12">
		<label class="col-sm-4"></label>
		<div class="col-sm-4">
			<input type="" id="ib" name="" hidden="true">
		</div>
	</div>
</div>
<hr/>
 <div  class="row">
 	<div class="col-sm-12">
 		<label class="col-sm-4">Calcular Ingresos Bruto</label>
 		<input type="date" id="inicio" name="">
 		<input type="date"id="fin" name="">
 		  <button type="button" class="btn btn-success"  id="btn_calcula" >calcular</button>
 	
 		<input type="text" readonly="true" id="estimado" name="">
 	</div>
 </div>
<hr/>
	

		<div class="row">
	    	<div class="col-sm-12">
	    	<input type="text" name="idcl" id="idcl" hidden="true">
	    		<div class="col-sm-12" id="tablames"></div>	
	    			</div>
	    </div>
	    	
		</form>
	</div>
<!--/////////////////////////////////////////////////////////////////////////
	///////////////////////////////////////////////////////////////////////
	///////////////////////////////////////////////////////////////////-->

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
      <form id="liquida">
      	<div class="row">
      		<div class="col-sm-12">
      			<center><h3><p class="bg-primary">Base imponible</p></h3></center>		
	      			 <label class="col-sm-4">AFIP</label>
	      			 <div class="col-sm-8">    		      		
				    	 <input class="form-control" type="text" name="af" id="af">
				     </div>
				     <label class="col-sm-4">ATER</label>    		    			    
	    		     <div class="col-sm-8">
	    		      	<input class="form-control" type="text" name="ater" id="ater">
	    		     </div>
	    		     <label class="col-sm-4" >Municipalidad</label>		    			   
	    		      <div class="col-sm-8">
	    		      	<input class="form-control" type="text" name="municipalidad" id="municipalidad">
	    		      </div>	
	    		      <div class="col-sm-12">
	    		    	<hr/>
	    		    </div>
	    		     <div class="row">
	    		 	 	<div class="col-sm-12"> 
	    		 		  <center><h3><p class="bg-primary">Remunerativo</p></h3></center>
	    		 		</div>
	    		  	</div>
	    		  	<label class="col-sm-4">Empleador</label>    			    	
	    		  	<div class="col-sm-8">			    
	    		      <input class="form-control" type="text" name="empleador" id="empleador">
	    		  	</div>
	    		  	<label class="col-sm-4" >Sindicato</label>    			    	
	    		    <div class="col-sm-8">		    			    
	    		      <input class="form-control" type="text" name="sindicato" id="sindicato">
					</div>
					 <div class="col-sm-12">
	    		    	<hr/>
	    		    </div>
	    		    <div class="row">
	    		  		<div class="col-sm-12"> 
	    		 		 <center><h3><p class="bg-primary">Monto retenido</p></h3></center>
	    		 		</div>
	    		  </div>
	    		  <label class="col-sm-4" >Siager</label> 
	    		  <div class="col-sm-8">	  			    
	    		     <input class="form-control" type="text" name="siager" id="siager"><br>
	    		  </div>
	    		  <label class="col-sm-4">Sicore</label>
	    		  <div class="col-sm-8">		    			    
	    		    <input class="form-control" type="text" name="sicore" id="sicore">
	    		  </div>	
	    		  <div class="col-sm-12">
	    		    	<hr/>
	    		   </div>
	    		   <label class="col-sm-2">Observaciones</label>	    			    
	    			<div class="col-sm-10">
	    				<input type="text" class="form-control" name="observaciones" id="observaciones">
	    			</div>
	    		    <div class="col-sm-12">
	    		    	<hr/>
	    		    </div>
	    		    <label class="form-check-label bg-success " for="defaultCheck1"> 
    				Finzalizar liquidación   					
  					
	    		    <input class="form-check-input bg-success" type="checkbox"  id="fin" name="fin"   >
	    			</label>
	    			<div class="col-sm-12">
	    		    	<hr/>
	    		    </div>
	    		    <input type="text" name="idf" id="idf" hidden="true" >
	    		    <input type="text" name="fechaf" id="fechaf" hidden="true">
	    		    <button type="button" class="btn btn-success btn-lg btn-block" id="btn_cargaliquida" class="btn_cargaliquida">Cargar</button>

      		</div>
      	</div>      	
      </form>
      </div>
    </div>
  </div>
 </div> 


<!--/////////////////////////////////////////////////////////////////////////
	///////////////////////////////////////////////////////////////////////
	///////////////////////////////////////////////////////////////////-->

</body>
</html>
<script type="text/javascript">	
		
		$('#id_cliente').change(function(){			
			$.ajax({
				type:"POST",
				data:"idcliente="+ $('#id_cliente').val(),
				url:"../procesos/liquidacion/verLiquidacion.php",	
				
				success:function(r){				
				data= jQuery.parseJSON( r );
				var newRow;
				
				$("#tablajson tbody").html("");
				data.forEach(function(data, index) { 
				if(data.fin==0){
					if(data.afip==0){
						var af = "danger";
					}else{
						var af = "success";
					};
					
								     			   	
 				 $('#d').val(data.denominacion); 	
					 newRow = "<tr class='danger'>"+			 
			 "<td>"+data.fecha+"</td>"+
			 "<td class='"+af+"''>"+data.afip+"</td>"+	
			 "<td>"+data.ater+"</td>"+
			 "<td>"+data.sindicato+"</td>"+
			 "<td>"+data.municipalidad+"</td>"+
			 "<td>"+data.empleador+"</td>"+
			 
			 "<td>"+data.siager+"</td>"+
			 "<td>"+data.sicore+"</td>"+
			 
			 "<td>"+data.ob+"</td>"
			 
			 +'<td>'+
							'<div class="row">'+
								'<div class="col-sm-12">'+
									'<button type="button"  id="btn_pagar" name="btn_pagar"  class="btn btn-primary" data-toggle="modal" data-target="#exampleModalLong" onclick="cargar('+"'"+data.fecha+"'"+');">'+
									'Liquidar'+
									'</button>'+
								'</div>'+
								'</div>'+
							"</td>"+
			 "</tr>";
					
					$(newRow).appendTo("#tablajson tbody");	
				}else{
				
						     			   	
 				 $('#d').val(data.denominacion); 	
					 newRow = "<tr class='success'>"+			 
			 "<td>"+data.fecha+"</td>"+
			 "<td>"+data.afip+"</td>"+	
			 "<td>"+data.ater+"</td>"+
			 "<td>"+data.sindicato+"</td>"+
			 "<td>"+data.municipalidad+"</td>"+
			 "<td>"+data.empleador+"</td>"+
			 
			 "<td>"+data.siager+"</td>"+
			 "<td>"+data.sicore+"</td>"+
			 
			 "<td>"+data.ob+"</td>"
			 
			 +'<td>'+
							'<div class="row">'+
								'<div class="col-sm-12">'+
									'<button type="button"  id="btn_pagar" name="btn_pagar"  class="btn btn-primary" data-toggle="modal" data-target="#exampleModalLong" onclick="cargar('+"'"+data.fecha+"'"+');">'+
									'Liquidar'+
									'</button>'+
								'</div>'+
								'</div>'+
							"</td>"+
			 "</tr>";
					
					$(newRow).appendTo("#tablajson tbody");	

				}
					});
				}

			});
			$.ajax({
				type:"POST",
				data:"idcliente="+ $('#id_cliente').val(),
				url:"../procesos/liquidacion/ingresosbruto.php",	
				success:function(r){					
					$('#ib').val(r);
				}

			})

		});	
		


</script>

<script type="text/javascript">
	$(document).ready(function(){
		$('#id_cliente').select2();
		
	})
</script>

<script type="text/javascript">
	$(document).ready(function(){
		$('#btn_cargar').click (function(){
				datos=$('#liquidacion').serialize();
				$.ajax({
					type:"POST",
					data:datos,
					url:"../procesos/liquidacion/agregaLiquidacion.php",					
					success:function(r){				
					if(r==1){									
					
					alertify.success("Liquidación cargada");
						$('#tablaLiquidacionLoad').load("Liquidacion/tablaliquidacion.php");
	$('#tablames').load("Liquidacion/tablames.php");
				}else{			
							
					alertify.error("No se pudo cargar liquidacion");
				}
			}
		})
	  })
	})
</script>
<script type="text/javascript">
	function meses(id){
		$.ajax({
			type:'POST',
			data: 'id='+id,
			url: '../procesos/liquidacion/datoliquidacion.php',
			success:function(r){

				data = jQuery.parseJSON(r);
			
				
				var newRow;
				 $("#tablajson tbody").html("");
			 data.forEach(function(data, index) {
			 	if(data.fin==0){
			 	$('#id_cliente').val(data.id_cliente);
			 $('#d').val(data.denominacion); 
			 newRow = "<tr class='danger'>"+			 
			 "<td>"+data.fecha+"</td>"+
			 "<td>"+data.afip+"</td>"+	
			 "<td>"+data.ater+"</td>"+
			 "<td>"+data.sindicato+"</td>"+
			 "<td>"+data.municipalidad+"</td>"+
			 "<td>"+data.empleador+"</td>"+
			 
			 "<td>"+data.siager+"</td>"+
			 "<td>"+data.sicore+"</td>"+
			 
			 "<td>"+data.ob+"</td>"
			 
			 +'<td>'+
							'<div class="row">'+
								'<div class="col-sm-12">'+
									'<button type="button"  id="btn_pagar" name="btn_pagar"  class="btn btn-primary" data-toggle="modal" data-target="#exampleModalLong" onclick="cargar('+"'"+data.fecha+"'"+');">'+
									'Liquidar'+
									'</button>'+
								'</div>'+
								'</div>'+
							"</td>"+
			 "</tr>";
			 $(newRow).appendTo("#tablajson tbody"); 
			}else{
				 	$('#id_cliente').val(data.id_cliente);
			 $('#d').val(data.denominacion); 
			 newRow = "<tr class='success'>"+			 
			 "<td>"+data.fecha+"</td>"+
			 "<td>"+data.afip+"</td>"+	
			 "<td>"+data.ater+"</td>"+
			 "<td>"+data.sindicato+"</td>"+
			 "<td>"+data.municipalidad+"</td>"+
			 "<td>"+data.empleador+"</td>"+
			 
			 "<td>"+data.siager+"</td>"+
			 "<td>"+data.sicore+"</td>"+
			 
			 "<td>"+data.ob+"</td>"
			 
			 +'<td>'+
							'<div class="row">'+
								'<div class="col-sm-12">'+
									'<button type="button"  id="btn_pagar" name="btn_pagar"  class="btn btn-primary" data-toggle="modal" data-target="#exampleModalLong" onclick="cargar('+"'"+data.fecha+"'"+');">'+
									'Liquidar'+
									'</button>'+
								'</div>'+
								'</div>'+
							"</td>"+
			 "</tr>";
			 $(newRow).appendTo("#tablajson tbody"); 

			}

			 })

		
			}
		})
		$.ajax({
				type:"POST",
				data:"idcliente="+ $('#id_cliente').val(),
				url:"../procesos/liquidacion/ingresosbruto.php",	
				success:function(r){					
					$('#ib').val(r);
				}

			})
	}
</script>
<script type="text/javascript">
	$('#btn_cargaliquida').click(function(){
	var afip = $('#af').val();
	var	idf = $('#idf').val();
	var	fechaf = $('#fechaf').val();
	var	ater = $('#ater').val();
	var	siager = $('#siager').val();
	var	sicore = $('#sicore').val();
	var	empleador = $('#empleador').val();
	var	sindicato = $('#sindicato').val();
	var	municipalidad = $('#municipalidad').val();
	var	observaciones = $('#observaciones').val();
	var f = document.getElementById('fin');

	var	fin;
	if(f.checked==true){fin=1}else{fin=0}
	
	
		 datos=$('#liquida').serialize();
		 $.ajax({
		 	type:'POST',
		 	data:{"idf":idf,
		 			"afip":afip,
				"fechaf":fechaf,
				"ater":ater,
				"siager":siager,
				"sicore":sicore,
				"empleador":empleador,
				"sindicato":sindicato,
				"municipalidad":municipalidad,
				"observaciones":observaciones,
				"fin":fin},
		 	url:'../procesos/liquidacion/modificaLiquidacion.php',
		 	success:function(r){

		 		if(r==1){
		 			alertify.success('Carga exitosa')
		 				$('#tablaLiquidacionLoad').load("Liquidacion/tablaliquidacion.php");
	$('#tablames').load("Liquidacion/tablames.php");
		 		}else{
		 			alertify.error('Falló la carga')
		 		}

		 	}
		 })
	})
</script>
<script type="text/javascript">
	function cargar(fecha){
		
		var id =$('#id_cliente').val();
		var mes=fecha;
		$.ajax({
			type:'POST',
			data:{
  					"fecha": mes,
    				"id":id
					},
			url:'../procesos/liquidacion/tablaliquida.php',
			success:function(r){
				
				data=jQuery.parseJSON(r);
				$('#idf').val(data.id_cliente);
				$('#fechaf').val(data.fecha);
				$('#af').val(data.afip);
				$('#ater').val(data.ater);
				$('#municipalidad').val(data.municipalidad);
				$('#empleador').val(data.empleador);
				$('#sindicato').val(data.sindicato);
				$('#siager').val(data.siager);
				$('#sicore').val(data.sicore);
				$('#observaciones').val(data.ob);
				if (data.fin=="0") {
            document.getElementById("fin").checked = false;          
          }else{
            document.getElementById("fin").checked = true;
          }

			}
		})

	}	
</script>
<script type="text/javascript">
		$('#btn_fecha').click(function(){
		id = $('#id_cliente').val();		
		mes  = $('#mes').val();
		anio = $('#anio').val();
		
		
		$.ajax({

			url:'../procesos/liquidacion/fecha.php',
			method: 'POST',
			data:{
  					"mes": mes,
    				"anio": anio,
    				"id":id
					},
			success:function(r){
			
					data = jQuery.parseJSON(r);
			
				if(data!=null){
				var newRow;
				 $("#tablajson tbody").html("");
			
			 	if(data.fin==0){
			 	$('#id_cliente').val(data.id_cliente);
			 $('#d').val(data.denominacion); 
			 newRow = "<tr class='danger'>"+			 
			 "<td>"+data.fecha+"</td>"+
			 "<td>"+data.afip+"</td>"+	
			 "<td>"+data.ater+"</td>"+
			 "<td>"+data.sindicato+"</td>"+
			 "<td>"+data.municipalidad+"</td>"+
			 "<td>"+data.empleador+"</td>"+
			 
			 "<td>"+data.siager+"</td>"+
			 "<td>"+data.sicore+"</td>"+
			 
			 "<td>"+data.ob+"</td>"
			 
			 +'<td>'+
							'<div class="row">'+
								'<div class="col-sm-12">'+
									'<button type="button"  id="btn_pagar" name="btn_pagar"  class="btn btn-primary" data-toggle="modal" data-target="#exampleModalLong" onclick="cargar('+"'"+data.fecha+"'"+');">'+
									'Liquidar'+
									'</button>'+
								'</div>'+
								'</div>'+
							"</td>"+
			 "</tr>";
			 $(newRow).appendTo("#tablajson tbody"); 
			}else{
				 	$('#id_cliente').val(data.id_cliente);
			 $('#d').val(data.denominacion); 
			 newRow = "<tr class='success'>"+			 
			 "<td>"+data.fecha+"</td>"+
			 "<td>"+data.afip+"</td>"+	
			 "<td>"+data.ater+"</td>"+
			 "<td>"+data.sindicato+"</td>"+
			 "<td>"+data.municipalidad+"</td>"+
			 "<td>"+data.empleador+"</td>"+
			 
			 "<td>"+data.siager+"</td>"+
			 "<td>"+data.sicore+"</td>"+
			 
			 "<td>"+data.ob+"</td>"
			 
			 +'<td>'+
							'<div class="row">'+
								'<div class="col-sm-12">'+
									'<button type="button"  id="btn_pagar" name="btn_pagar"  class="btn btn-primary" data-toggle="modal" data-target="#exampleModalLong" onclick="cargar('+"'"+data.fecha+"'"+');">'+
									'Liquidar'+
									'</button>'+
								'</div>'+
								'</div>'+
							"</td>"+
			 "</tr>";
			 $(newRow).appendTo("#tablajson tbody"); 

			}

		
				
			
				
				
			
			}else{
				var newRow;
				 $("#tablajson tbody").html("");
			
			 	
			 newRow = "<tr class='danger'>"+			 
			 "<td>"+""+"</td>"+
			 "<td>"+""+"</td>"+	
			 "<td>"+""+"</td>"+
			 "<td>"+""+"</td>"+
			 "<td>"+""+"</td>"+
			 "<td>"+""+"</td>"+
			 
			 "<td>"+""+"</td>"+
			 "<td>"+""+"</td>"+
			 
			 "<td>"+""+"</td>"
			 
			 +'<td>'+
							'<div class="row">'+
								'<div class="col-sm-12">'+
									'<button type="button"  id="btn_pagar" name="btn_pagar"  class="btn btn-primary" data-toggle="modal" data-target="#exampleModalLong" onclick="cargar('+"'"+""+"'"+');">'+
									'Liquidar'+
									'</button>'+
								'</div>'+
								'</div>'+
							"</td>"+
			 "</tr>";
			 $(newRow).appendTo("#tablajson tbody"); 
			}	

			}




		})


	})
</script>
<script type="text/javascript">
		$('#chkcliente').click (function (){		
			
			if ($('#chkcliente').is (':checked'))
			{
				$.ajax({
					method: 'POST',
					url:"../procesos/liquidacion/tabladeudores.php",	

					success:function(r){
					
					data = jQuery.parseJSON(r);	
					var newRow;
				 $("#tablacliente tbody").html("");

				  data.forEach(function(data, index) {
				 
				   newRow ="<tr class='danger'>"+
								"<td>"+data.nro_cliente+"</td>"+
								"<td>"+data.denominacion+"</td>"+
				  	"<td align='center'>"+
					"<span class='btn btn-warning btn-xs'  onclick='meses("+data.id_cliente+")'>"+
				"<span class='glyphicon glyphicon-pencil'></span>"+
				"</span></td>"+
				"</tr>";

				$(newRow).appendTo("#tablacliente tbody");	
				
				  })

					}
				})
			}else{
					$.ajax({
					method: 'POST',
					url:"../procesos/liquidacion/todo.php",	

					success:function(r){
						
					data = jQuery.parseJSON(r);	
					var newRow;
				 $("#tablacliente tbody").html("");

				  data.forEach(function(data, index) {
				  	if(data.fin==0){
				   newRow ="<tr class='danger'>"+
								"<td>"+data.nro_cliente+"</td>"+
								"<td>"+data.denominacion+"</td>"+
				  	"<td align='center'>"+
					"<span class='btn btn-warning btn-xs'  onclick='meses("+data.id_cliente+")'>"+
				"<span class='glyphicon glyphicon-pencil'></span>"+
				"</span></td>"+
				"</tr>";

				$(newRow).appendTo("#tablacliente tbody");	
				
			}else{
				   newRow ="<tr class='success'>"+
								"<td>"+data.nro_cliente+"</td>"+
								"<td>"+data.denominacion+"</td>"+
				  	"<td align='center'>"+
					"<span class='btn btn-warning btn-xs'  onclick='meses("+data.id_cliente+")'>"+
				"<span class='glyphicon glyphicon-pencil'></span>"+
				"</span></td>"+
				"</tr>";

				$(newRow).appendTo("#tablacliente tbody");	
				
			}
				  })

					}
				})

			}
		})
</script>
<script type="text/javascript">
		$(document).ready(function(){
	$('#tablaLiquidacionLoad').load("Liquidacion/tablaliquidacion.php");
	$('#tablames').load("Liquidacion/tablames.php");
})
</script>

<script type="text/javascript">
	$('#btn_calcula').click(function(){
		var inicio = $('#inicio').val();
		var fin = $('#fin').val();
		var id = $('#id_cliente').val();
		$.ajax({
			method:"POST",
			data:{"inicio":inicio,
					"fin":fin,
					"id":id
					},
			url:"../procesos/liquidacion/calcular.php",
			success:function(r){
				$('#estimado').val(r);
			}

		})


	})
</script>

<?php 
}else{
  header("location:index.php");
}

 ?>
	
