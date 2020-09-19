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
	<title>Importes Monotributo</title>
	<?php require_once "menu.php" ?>
</head>
<body>
	<div id="carga" style="display:none;"><img src="../img/tenor.gif"></div>
<form id="monotributo">
<div class="container">
	<div class="row">		
		<label class="col-sm-4 col-form-label">Seleccionar Categoria</label>		
		<div class="col-sm-6">		
				<select  class="form-control input-sm" id="categoria" >
					<option value="0">Seleccionar</option>
					<option value="A">Categoria A</option>
					<option value="B">Categoria B</option>
					<option value="C">Categoria C</option>
					<option value="D">Categoria D</option>
					<option value="E">Categoria E</option>
					<option value="F">Categoria F</option>
					<option value="G">Categoria G</option>
					<option value="H">Categoria H</option>
					<option value="I">Categoria I</option>
					<option value="J">Categoria j</option>
					<option value="K">Categoria K</option>
				</select>
		</div>
	</div>	
</div>	
<hr>

<div class="container">
	<div class="row">
		<div class="col-12">			
			<label class="col-form-label">Ingresos Brutos Anuales</label>
			<input type="number" class="form-control col" id="ingresos" name="">				
			<label class="col-form-label">Impuesto Mensual a Pagar</label>
			<input type="number" class="form-control" id="impuesto" name="">
			<hr>
			<button type="button" class="btn btn-primary btn-lg btn-block" id="btn_cargar">Modificar</button>
		</div>
	</div>
</div>
</form>
</body>
</html>
<script type="text/javascript">
	$('#categoria').change(function(){
			var categoria = document.getElementById('categoria').value;		
		$.ajax({
			type:"POST",
			data:"categoria="+ categoria,
			url:"../procesos/monotributo/ModificarSimplificado.php",	
			success:function(r){				
				data= jQuery.parseJSON( r );			
				$('#ingresos').val(data.ingresos_anuales);
				$('#impuesto').val(data.impuesto);				
			}
		})

	})

	$('#btn_cargar').click(function(){
		 $("#carga").show();
	var categoria = document.getElementById('categoria').value;		
	var ingresos = document.getElementById('ingresos').value;		
	var impuesto = document.getElementById('impuesto').value;			
		$.ajax({
			type:"POST",
			data:{
  					"categoria": categoria,
    				"impuesto": impuesto,    				
    				"ingresos":ingresos    				
					},			
			url:"../procesos/monotributo/CargaSimplificado.php",					
			success:function(r){
				 $("#carga").hide();
				
					if(r == 1){				
				
					alertify.success("Tabla modificada");
          	$('#monotributo').trigger("reset");
				}else{
					
					alertify.error("Error al modificar");
					
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