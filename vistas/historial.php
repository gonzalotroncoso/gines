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
<title>Monotributistas</title>
	<?php require_once "menu.php" ?>
</head>
<body>
	<div class="container">
	<div class="well">	<center><b>	<h1>Historial de categorias</h1></b></center></div>
	<div class="row">
		<div class="col-sm-12">
			<select class="form-control input-sm" id="id_cliente" name="id_cliente">
			</select>	
		</div>
	</div>
	<hr>
	<div class="row">
		<div class="col-sm-12">			
			 <table class="table table-responsive table-hover table-condensed table-border"  id="tablaCliente" >
	 				<thead>
	 								
							<th>Categoria</th>
							<th>Actividad</th>
							<th>Adicionales</th>	
							<th>Ing. Brutos</th>
							<th>Total</th>	
	 						<th>Fecha</th>	
					 	</thead>
					 	<tbody>
					 	
					 	</tbody>
					 </table>
						</div>		
					</div>
		</div>	
		<div id="carga" style="display:none; color: green;"><img src="../img/tenor.gif"></div>
</body>
</html>
<script type="text/javascript">
	 $(document).ready(function(){
	 	$.ajax({
	 		 method: 'POST',
          	 url:"../procesos/monotributo/listaAnterior.php", 
          	 success:function(r){
    
              data= jQuery.parseJSON( r );
              var newRow;            
				$("#id_cliente").html("");	
				newRow = "<option value='0'>Selecionar cliente</option>"+
					$(newRow).appendTo("#id_cliente");				
				data.forEach(function(data, index) { 
				
					newRow = "<option value="+data.id_condicion+">"+data.denominacion+"</option>";
					$(newRow).appendTo("#id_cliente");					 
				})

          	}
	 	})
	 })
	
	
</script>

<script type="text/javascript">
	$('#id_cliente').change(function(){
		 var id = $('#id_cliente').val();
		  $("#carga").show();
		 $.ajax({
		 	type:'POST',
			data:'id='+id,
			url:'../procesos/monotributo/cargaOld.php',
			success:function(r){
			 	 $("#carga").hide();
					data = jQuery.parseJSON(r);

					$("#tablaCliente tbody").html("");
					data.forEach(function(data, index) { 
					newRow = "<tr>"+	
							"<td>"+data.categoria+"</td>"+
							"<td>"+data.actividad+"</td>"+
							"<td>"+data.adicional+"</td>"+
							"<td>"+data.ingresos_brutos+"</td>"+
							"<td>"+data.total+"</td>"+
							"<td>"+data.fecha+"</td>"+
							"</tr>";
					$(newRow).appendTo("#tablaCliente tbody"); 
			})
		 }
	})
})
</script>

<script type="text/javascript">
  $(document).ready(function(){
    $('#id_cliente').select2();
    
  })
</script>





<?php 
}else{
	header("location:../index.php");
}

 ?>