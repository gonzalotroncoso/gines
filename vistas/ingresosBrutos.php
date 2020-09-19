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
	<title>Ingresos Brutos</title>
	<?php require_once "menu.php" ?>
</head>
<body>
	<div id="carga" style="display:none;"><img src="../img/tenor.gif"></div>
	<br>
	<div class="container">
		<div class="row">
			<div class="col-sm-12">	
			<form id="empleador">
				<br>
					<label>Condicion Tributaria</label>
					<select id="condicion" class="form-control input-sm">
						<option value="0">Seleccionar</option>
						<option value="1">Monotributo</option>
						<option value="2">Responsable Inscripto</option>
						<option value="3">Exento</option>
						<option value="4">No Inscripto</option>
					</select>
					<br>
					<label>Seleccionar Cliente </label>
					<select class="form-control input-sm" id="id_cliente" 
					>			
					
					</select>

			</div><!-- fin col -->
		</div><!-- fin row -->
		<div class="row">
			<div class="col-sm-12">
				   	<div class="panel  panel-info">
  					<div class="panel-heading">Ingreso Bruto Anual</div>
  					<div class="panel-body">
  						<label class="col-sm-2">Fecha inicio de periodo</label>	
  					<div class="col-sm-10">
  						<input type="date" class="form-control" id="fecha_inicio" name="fecha_inicio" value="<?php echo date("Y-m-d");?>"><br>
  					</div>
  						<label class="col-sm-2">Fecha fin de periodo</label>	
  					<div class="col-sm-10">
  						<input type="date" class="form-control" id="fecha_fin" name="fecha_fin" value="<?php echo date("Y-m-d");?>"><br>
  					</div>
  					<label class="col-sm-2">Monto total</label>	
  					<div class="col-sm-10">
  						<input type="text" class="form-control" id="monto" name="monto" required ><br>
  					</div>
  					<label class="col-sm-2">Categoria</label>	
  					<div class="col-sm-10">
  						<select  id="categoria" class="form-control input-sm">
  							<option value="-"></option>
  							<option value="A">A</option>
  							<option value="B">B</option>
  							<option value="C">C</option>
  							<option value="D">D</option>
  							<option value="E">E</option>
  							<option value="F">F</option>
  							<option value="G">G</option>
  							<option value="H">H</option>
  							<option value="I">I</option>
  							<option value="J">J</option>
  							<option value="K">K</option>
  						</select>
  					</div>
  			</div>
  			
  		</div>
  			<button type="button" class="btn btn-primary btn-lg btn-block" id="btn_cargar">Cargar</button>	
			</div>
		</div>
			</form>			
	</div><!-- fin container -->
</body>
</html>
<script type="text/javascript">
  $(document).ready(function(){
  	$('#categoria').attr("readonly", true); 
    $('#id_cliente').select2();
    
  })
</script>
<script type="text/javascript">
	$("#condicion").change(function(){
		var id_condicion = document.getElementById('condicion').value;
		if(id_condicion == '1'){
			
			$('#categoria').attr("readonly", false); 
		}else{
			$('#categoria').attr("readonly", true); 
		}
		
					$.ajax({
						type:"POST",
						data:"id_condicion="+id_condicion,
						url:"../procesos/clientes/filtro.php",
						success:function(r){		
							
							 dato = jQuery.parseJSON(r);						
							 $("#id_cliente").html("");							 
							  dato.forEach(function(data, index) {
							  								  	
							  	newRow =
							  	'<option value="'+data.id_cliente+'">'+utf8to16(data.denominacion)+'</option>';
							  	$(newRow).appendTo("#id_cliente"); 
							  	
							  })
							
							
						}
					})
		
});
</script>
<script type="text/javascript">
	$('#btn_cargar').click(function(){
		var id_cliente = $('#id_cliente').val();
		var fecha_inicio= $('#fecha_inicio').val();
		var fecha_fin= $('#fecha_fin').val();
		var	monto= $('#monto').val();
		var categoria= $('#categoria').val();

		
  		// use moment() with input value and a string format pattern as arguments
 		var a = new Date(document.getElementById('fecha_inicio').value);
		var b = new Date(document.getElementById('fecha_fin').value);

		var c = b - a ;
		var days = c/( 60 * 60 * 24 * 1000);
		var months = Math.ceil(days/31);
		console.log(days);
		console.log(months);
		datos = $('#empleador').serialize();
		if (months>=12 && ($('#monto').val()!= '')){
			$("#carga").show();
				
			$.ajax({
			type:"POST",
			data:{
				"id_cliente":id_cliente,
				"fecha_inicio":fecha_inicio,
				"fecha_fin":fecha_fin,
				"monto":monto,
				"categoria":categoria
			},
			url:"../procesos/clientes/cargaIngresosBrutos.php",					
			success:function(r){
					alert(r);
			 $("#carga").hide();
				if(r==1){					
						$('#empleador')[0].reset();					
						alertify.success("Ingresos brutos cargados");
					}else{			
					
						alertify.error("No se pudo cargar");
					}

				}
			})	
		}else{
			alertify.error("Debe haber una diferencia de 12 meses");
		}
			

	})
		
</script>
<script type="text/javascript">
	function utf8to16(str) {
    var out, i, len, c;
    var char2, char3;

    out = "";
    len = str.length;
    i = 0;
    while(i < len) {
    c = str.charCodeAt(i++);
    switch(c >> 4)
    { 
      case 0: case 1: case 2: case 3: case 4: case 5: case 6: case 7:
        // 0xxxxxxx
        out += str.charAt(i-1);
        break;
      case 12: case 13:
        // 110x xxxx   10xx xxxx
        char2 = str.charCodeAt(i++);
        out += String.fromCharCode(((c & 0x1F) << 6) | (char2 & 0x3F));
        break;
      case 14:
        // 1110 xxxx  10xx xxxx  10xx xxxx
        char2 = str.charCodeAt(i++);
        char3 = str.charCodeAt(i++);
        out += String.fromCharCode(((c & 0x0F) << 12) |
                       ((char2 & 0x3F) << 6) |
                       ((char3 & 0x3F) << 0));
        break;
    }
    }

    return out;
}
</script>

<?php 
}else{
	header("location:../index.php");
}

 ?>