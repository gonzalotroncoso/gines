<?php 

session_start();

if (isset($_SESSION['usuario'])){
require_once "dependencias.php"; 
require_once '../clases/Conexion.php';
$c = new conectar();
$dbh = $c->conexion();

$id = $_GET['id_cliente'];
$fecha =$_GET['fecha'];
?>

<!DOCTYPE html>
<html>
<head>
	<title>Modificar liquidación</title>
	<?php require_once "menu.php" ?>
</head>
<body>
	

	<div class="container">
		<form id="liquidacion">
			<input type="hidden" name="fcliente" value="<?php echo $id ?>" id="fcliente">
	<input type="hidden" name="ffecha" value="<?php echo $fecha ?>" id="ffecha">

		  <div class="row">
			<div class="col-sm-12">   											

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
	    						<th class="active">Responsable Estudio</th>
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

</script>

<script type="text/javascript">
	$(document).ready(function(){
		$('#id_cliente').select2();
		
	})
</script>

<script type="text/javascript">
$(document).ready(function(){
		$('#btn_cargar').click (function(){
			vacios=validarFormVacio('liquidacion');
			if(vacios>0){
			alertify.alert("Debes llenar todos los campos");
			return false;
		}

			
				datos=$('#liquidacion').serialize();
				$.ajax({
					type:"POST",
					data:datos,
					url:"../procesos/liquidacion/modificaLiquidacion.php",					
					success:function(r){				
					if(r==1){									
					
					alertify.success("Liquidación cargada");
				}else{			
						
					alertify.error("No se pudo cargar liquidacion");
				}
			}
			
		})
			})
	})
			

	
</script>
<script type="text/javascript">
	$(document).ready(function(){
		var id = $('#fcliente').val();
		var fecha = $('#ffecha').val();
		
		$.ajax({
			type:"POST",
			data:{
  					"id": id,
    				"fecha": fecha    				
					},			
			url:"../procesos/liquidacion/VerTablaLiquidacion.php",								
				success:function(r){
				
				data= jQuery.parseJSON( r );	
				
				if(data['denominacion']!=null){
				$("#tablajson tbody").html("");
				var newRow =
				"<tr>"
				+"<td>"+data['nro_cliente']+"</td>"				
				+"<td>"+data.denominacion+"</td>"				
				+"<td>"+data['tipo_persona']+"</td>"				
				+"<td>"+data['estado']+"</td>"				
				+"<td>"+data['cuit']+"</td>"				
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
				+"</tr>";

				}
				$('#afip').val(data['afip']);
				$('#ater').val(data['ater']);
				$('#municipalidad').val(data['municipalidad']);
				$('#empleador').val(data['empleador']);
				$('#sindicato').val(data['sindicato']);
				$('#siager').val(data['siager']);
				$('#sicore').val(data['sicore']);
				$('#observaciones').val(data['ob']);
			}
		})
	})
</script>


<?php 
}else{
  header("location:index.php");
}

 ?>