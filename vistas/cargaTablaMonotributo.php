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
			<label class="col-form-label">Ingresos Brutos</label>
			<input type="number" class="form-control col" id="ingresos" name="">				
			<label class="col-form-label">Locaciones y/o Prestaciones de Servicios</label>
			<input type="number" class="form-control" id="servicios" name="">
			<label class="col-form-label">Venta de Cosas Muebles</label>
			<input type="number" class="form-control" id="bienes" name="">
			<label class="col-form-label">Aportes al SIPA</label>
			<input type="number" class="form-control" name="" id="sipa">
			<label class="col-form-label">Aportes Obra Social</label>
			<input type="number" class="form-control" name="" id="obra_social">
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
			url:"../procesos/monotributo/ModificarMonotributo.php",	
			success:function(r){				
				data= jQuery.parseJSON( r );			
				$('#ingresos').val(data.ingresos);
				$('#servicios').val(data.impuesto_servicio);
				$('#bienes').val(data.impuesto_bienes);
				$('#obra_social').val(data.obra_social);
				$('#sipa').val(data.sipa);
			}
		})

	})

	$('#btn_cargar').click(function(){
		 $("#carga").show();
	var categoria = document.getElementById('categoria').value;		
	var bienes = document.getElementById('bienes').value;		
	var servicios = document.getElementById('servicios').value;		
	var ingresos = document.getElementById('ingresos').value;		
	var obra_social = document.getElementById('obra_social').value;		
	var sipa = document.getElementById('sipa').value;		
		$.ajax({
			type:"POST",
			data:{
  					"categoria": categoria,
    				"bienes": bienes,    				
    				"servicios":servicios,
    				"obra_social":obra_social,
    				"sipa":sipa,
    				"ingresos":ingresos,            
					},			
			url:"../procesos/monotributo/CargaTabla.php",					
			success:function(r){
				 $("#carga").hide();
					if(r == 1){				
				
					alertify.success("Tabla de monotributo modificada");
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