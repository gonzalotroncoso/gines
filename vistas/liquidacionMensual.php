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
	<title>Cargar liquidación mensual</title>
	<?php require_once "menu.php" ?>
</head>
<body>
	<div class="container">
		<CENTER><b>	<h3>Liquidaciones</h3></b></CENTER>
		<hr/>
		<form id="liquidacion">
		  <div class="row">
			<div class="col-sm-12">   							
					<label class="col-sm-2">Seleccionar Cliente</label>
					<div class="col-sm-4">

						<select class="form-control input-sm" id="condicion" name="condicion">
							<option value="0">Condicion Tributaria</option>	
							<option value="1">Monotributista</option>
							<option value="2">Responsable Inscripto</option>
							<option value="3">Exento</option>
							<option value="4">No Inscripto</option>
						</select>
						<br>
						<select class="form-control input-sm" id="id_cliente" name="id_cliente">
						<option value="0"> Seleccionar cliente</option>
						<?php
							$estado = "inactivo";
							$sql ="SELECT * FROM clientes c, datosfiscales d  where c.id_cliente = d.id_cliente ORDER BY nro_cliente ASC";			
							$stmt = $dbh->prepare($sql);	
							$stmt->execute();
							while ($cliente = $stmt->fetch()):            ?>
              
							<option value="<?php echo $cliente['id_cliente'] ?>"><?php echo utf8_decode($cliente['denominacion'])?></option>
							<?php endwhile; ?>
						</select> </br>
					</div>	
	    	 
	    	  <label class="col-sm-1">Fecha</label>    			    			    			
	    		      <div class="col-sm-5"><input class="form-control" type="date" name="fecha" id="fecha" value="<?php echo date("Y-m-d");?>"><br></div>
	     </div>
	 </div>
	    <div class="row">
	    	<div class="col-sm-12">
	    		<div class="panel panel-primary">
	    			<div class="panel-heading">Datos</div>
	    			<div class="panel-body">
	    				<table class="table table-responsive table-hover table-condensed table-border " style ="text-align: center;" class="grilla" id="tablajson" >
	    					<thead class="active">
	    						<th class="active">Numero de cliente</th>
	    						<th class="active">Denominación</th>
	    						<th class="active">Tipo Persona</th>
	    						<th class="active">Estado</th>
	    						<th class="active">Cuit</th>	    						
	    						<th class="active">Afip</th>	    						
	    					</thead>
	    					<tbody  style ="text-align: center;" >
	    						
	    					</tbody>
	    				</table>
	    			</div>
	    		</div>
	    	</div>	  	    		
	    	<div class="col-sm-6">
				<div class="panel panel-primary">
	    			<div class="panel-heading">Base Imponible</div>
	    			<div class="panel-body">

	    			  <label class="col-sm-4">AFIP</label>    			    			    			
	    		      <div class="col-sm-8"><input class="form-control" type="afip" name="afip" id="afip"><br></div>

	    			  <label class="col-sm-4">ATER</label>    			    			    			    
	    		      <div class="col-sm-8"><input class="form-control" type="text" name="ater" id="ater"><br></div>

	    		      <label class="col-sm-4" >Municipalidad</label>		    			    			    
	    		      <div class="col-sm-8"><input class="form-control" type="text" name="municipalidad" id="municipalidad"></div>	

	    			</div>
	    		</div>
	    	</div>	

	    	<div class="col-sm-3">

	    		<div class="panel panel-primary">
	    			<div class="panel-heading">Remunerativo</div>
	    			<div class="panel-body">

	    			  <label>Empleador</label>    			    			    			    
	    		      <input class="form-control" type="text" name="empleador" id="empleador"><br>
	    		      <label >Sindicato</label>    			    			    			    
	    		      <input class="form-control" type="text" name="sindicato" id="sindicato">

	    			</div>
	    		</div>
	    	</div>

	    	<div class="col-sm-3">
	    		<div class="panel panel-primary">
	    			<div class="panel-heading">Monto Retenido</div>
	    			<div class="panel-body">
	    				<label>Siager</label>    			    			    			    
	    		      <input class="form-control" type="text" name="siager" id="siager"><br>
	    		      <label >Sicore</label>    			    			    			    
	    		      <input class="form-control" type="text" name="sicore" id="sicore">	
	    			</div>
	    		</div>
	    	</div>

		<div class="col-sm-12">
	    		<label class="col-sm-2">Observaciones</label>	    			    			    			   

	    		<div class="col-sm-10"><input type="text" class="form-control" name="observaciones" id="observaciones"></div>	
	    </div>
	    	  	
	    </div><!--row -->
	    <br>
	      
  					<h4><p><label class="form-check-label bg-success " for="defaultCheck1"> 
    				Finzalizar liquidación 
  					
  					
	    		    <input class="form-check-input bg-success" type="checkbox"  id="fin" name="fin"   >
	    			</label></p></h4>
	    		<div class="col-sm-6">
				<button type="button" class="btn btn-success btn-lg btn-block" id="btn_cargar">Cargar</button>
				</div>

				<div class="col-sm-6">
				<button type="button" onclick="history.back()"  class="btn btn-danger btn-lg btn-block" id="btn_cancelar">Cancelar</button>		
				</div>
		</form>
	</div>
</body>
</html>	
<script type="text/javascript">	
	
		$('#id_cliente').change(function(){		
			console.log($('#id_cliente').val())
			$.ajax({
				type:"POST",
				data:"idcliente="+ $('#id_cliente').val(),
				url:"../procesos/liquidacion/cargarTablaLiquidacion.php",								
				success:function(r){
				
				data= jQuery.parseJSON( r );	
					
				if(data['denominacion']!=null){
				$("#tablajson tbody").html("");
				var newRow =
				"<tr>"
				+"<td>"+data['id']+"</td>"				
				+"<td>"+data['denominacion']+"</td>"				
				+"<td>"+data['tipo']+"</td>"				
				+"<td>"+data['estado']+"</td>"				
				+"<td>"+data['cuit']+"</td>"				
				+"<td>"+data['afip']+"</td>"				
				+"</tr>";
				$(newRow).appendTo("#tablajson tbody");
				}else{
				$("#tablajson tbody").html("");
				var newRow =
				"<tr>"
				+"<td>"+""+"</td>"				
				+"<td>"+""+"</td>"				
				+"<td>"+""+"</td>"				
				+"<td>"+""+"</td>"				
				+"<td>"+""+"</td>"				
				+"<td>"+""+"</td>"
				+"</tr>";

				}


					
				}
				

			});

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
			

			var id = $('#id_cliente').val();
			 var fecha = $('#fecha').val();	
			var data=[id,fecha];		
			$.ajax({
				type:"POST",
				data: {'data': JSON.stringify(data)},
				url:"../procesos/pagos/validarFechaLiquidacion.php",				
				success:function(r){
					
						if (r==1){

						alertify.alert("Ya se han cargado pagos en este mes");
						return false;
						}else{
				datos=$('#liquidacion').serialize();
				$.ajax({
					type:"POST",
					data:datos,
					url:"../procesos/liquidacion/agregaLiquidacion.php",					
					success:function(r){		
							
					if(r==1){									
					
					alertify.success("Liquidación cargada");
					   $('#liquidacion').trigger("reset");
					   $('#id_cliente').val("0");
				}else{			
					  $('#liquidacion').trigger("reset");
					alertify.error("No se pudo cargar liquidacion");
				}
			}
		})
			}
		}
})			

	  })
	})
</script>

<script type="text/javascript">
	$("#condicion").change(function(){
		var id_condicion = document.getElementById('condicion').value;
		
		
					$.ajax({
						type:"POST",
						data:"id_condicion="+id_condicion,
						url:"../procesos/liquidacion/filtroCliente.php",
						success:function(r){		

							
							 dato = jQuery.parseJSON(r);							
							 $("#id_cliente").html("");							 
							 var i = 0;
							  dato.forEach(function(data, index) {
							  	if (i==0){
							  	newRow =
							  	"<option value=''>seleccionar cliente</option>";
							  	$(newRow).appendTo("#id_cliente"); 	
							  	}							  	
							  	newRow =
							  	'<option value="'+data.id_cliente+'">'+data.denominacion+'</option>';
							  	$(newRow).appendTo("#id_cliente"); 
							  	i++;
							  })
							
							
						}
					})
		
});
</script>



<?php 
}else{
  header("location:index.php");
}

 ?>