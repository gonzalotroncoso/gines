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
<title>Recategorización</title>
	<?php require_once "menu.php" ?>
</head>
<body>
	
	<div class="container">
		<b><h3><center>Recategorización de clientes</center></h3></b>
		<div class="row">
			<div class="col-sm-12">
				<div class="panel panel-primary">  							
  								<div class="panel-body">
<span style="float: right;" class="btn btn-primary" id="todos">Recategorizar todos los clientes</span>
  									<form name="rec" id="rec">  
  									<label class="col-sm-2">Seleccionar Cliente</label>
  										<div class="col-sm-4">
										<select class="form-control input-sm" id="id_cliente" name="id_cliente">
										<option value="0"> Seleccionar cliente</option>
										<?php
										
										$sql ="SELECT * FROM clientes c inner join condiciontributaria con on c.id_cliente = con.id_cliente inner join monotributo m on m.id_condicion=con.id_condicion where m.ingresos_brutos>0";			
										$stmt = $dbh->prepare($sql);	
										$stmt->execute();
										while ($cliente = $stmt->fetch()):            ?>
										           
										<option value="<?php echo $cliente['id_cliente'] ?>"><?php echo utf8_decode($cliente['denominacion'])?></option>
										<?php endwhile; ?>
										
										</select>
									

										</div>
									</form>	
									
									
									
								</div>
  				</div>
  			</div>				
		</div>
<div class="panel panel-primary">  							
  								<div class="panel-body">
		<div class="row">
			<div class="col-sm-12">
				<div class="panel panel-primary">  							
  								<div class="panel-body">
  									<div class="row">
  										<div class="col-sm-12">			
  										
		  									<label class="col-sm-2">Denominacion:</label>
		  									<div class="col-sm-4">
		  									<input type="text" name="denominacion" id="denominacion" class="form-control" readonly="true">
		  									</div>
		  									<label class="col-sm-2">Categoria:</label>
		  									<div class="col-sm-4">
		  									<input type="text" name="categoria" id="categoria" class="form-control" readonly="true">
		  									</div>
										</div>
  									</div>

  									<div class="row">
  										<div class="col-sm-12">
  											<label class="col-sm-2">Ingresos Brutos:</label>
  											<div class="col-sm-4">
  											<input type="text" name="ingresos" id="ingresos" class="form-control" readonly="true">
  											</div>
  											<label class="col-sm-2">Total a Pagar:</label>
  											<div class="col-sm-4">
  											<input type="text" name="totalpagar" id="totalpagar" class="form-control" readonly="true">
  											</div>
  										</div>
  									</div>
  									<hr/>

  									
								</div>
  								</div>
				</div>
			</div>
			<div class="row">
				<div class="col-sm-12">
					<div class="panel panel-primary">  							
  								<div class="panel-body">
  										<table name="tablajson" id="tablajson" class="table table-responsive table-hover table-condensed table-border" style ="text-align: center;">
										<thead class="thead-dark" >
										<tr>
										<th>Mes</th>
									<th>Monto</th>		

	</tr>
	</thead>
	<tbody>
		 
	</tbody>
</table>
  									

					
				</div>
			</div>



		</div>
	</div>
	<input type="submit" id="btn_r" value="Recateorizar Cliente" name="">

</div>
</div>
	</div>
</body>
</html>
<script type="text/javascript">
	$('#id_cliente').change(function(){
		var id = $('#id_cliente').val();
		$.ajax({
			type:'POST',
			data: "id="+id,
			url:"../procesos/recategoria/clientes.php",
			success:function(r){
				data=jQuery.parseJSON(r);

				$('#denominacion').val(data.denominacion);
				$('#categoria').val(data.categoria);
				$('#totalpagar').val(data.totalpagar);
				$('#ingresos').val(data.ingresos_brutos);

			}
		})
	})
</script>
<script type="text/javascript">
		$(document).ready(function(){
		
		$('#btn_r').click(function(){
			
			$.ajax({
			type:"POST",
			data:"idcliente="+ $('#id_cliente').val(),
			url:"../procesos/recategoria/recategorizaTodo.php",
			success:function(r){
				if(r==1){
					$('#tablaMonoLoad').load("monotributo/tablaMono.php");
					alertify.success("recategorización con exito");
				}else{
					
					alertify.error("No se pudo recategorizar")
				}
			}
		})

	})
	})
</script>


<script type="text/javascript">
	$('#id_cliente').change(function(){
		id_mono=$('#id_cliente').val();
	$.ajax({
				type:"POST",
				data:"id_mono= "+ id_mono,
				url:"../procesos/clientes/tablaMonotributoMensual.php",
				success:function(r){												
					data=jQuery.parseJSON(r);

					var newRow;
				$("#tablajson tbody").html("");
				data.forEach(function(data, index) { 			     			   	
 					
					 newRow =
					"<tr>"
						+"<td>"+data.mes+"</td>"
						+"<td>"+data.monto+"</td>"										
					+"</tr>";

					
					$(newRow).appendTo("#tablajson tbody");	
					});
						
					


				}
			});
	})
		
</script>

<script type="text/javascript">
  $(document).ready(function(){
    $('#id_cliente').select2();
    
  })
</script>

<script type="text/javascript">
	$('#todos').click(function(){
		$.ajax({
			Type: 'POST',
			url:"../procesos/clientes/recTodos.php",
			success:function(r){
				
				
				if(r==1){
					alertify.success("Todos los clientes han sido recategorizados");
				}

			}
		})
	})
</script>
<?php 
}else{
  header("location:index.php");
}

 ?>

