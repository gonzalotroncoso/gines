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
	<title>Editar fecha de monotributo</title>
	<?php require_once "menu.php" ?>
</head>
<body>
	<div class="container">
		<center><b><h3>Editar Monto</h3></b></center>
	 <div class="panel panel-primary">
  	  <div class="panel-heading">Datos Fiscales</div>
  		<div class="panel-body">
			<div class="row">
				<div class="col-sm-12">
				 <div class="row">
					<label class="col-sm-2 col-form-label">Seleccionar Cliente</label>
					 <div class="col-sm-10">
					 	<form id="montoMono">
							<select class="form-control input-sm" id="id_cliente" name="id_cliente">
				
							<?php
								$afip = 1;
								$sql ="SELECT * FROM clientes c inner join condiciontributaria con on c.id_cliente = con.id_cliente inner join monotributo m on m.id_condicion=con.id_condicion where m.ingresos_brutos>0";			
								$stmt = $dbh->prepare($sql);
								$stmt->bindValue(':afip',$afip,PDO::PARAM_INT);
								$stmt->execute();
								while ($cliente = $stmt->fetch()):
								            ?>
	              
								<option value="<?php echo $cliente['id_cliente'] ?>"><?php echo utf8_decode( $cliente['denominacion'])?></option>
								<?php endwhile; ?>
							</select> 
						</div>
				</div><br>
				<div class="row">
						<label class="col-sm-2 col-form-label">Mes</label>
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
						<label class="col-sm-2 col-form-label">Año</label>
						<div class="col-sm-3">
							<select  class="form-control" id="anio" name="anio">            	<?php $year = date("Y");
	                 			for ($i= $year; $i >= 1945 ; $i--) { //quitarle el +1 Aver ? ?><option VALUE="<?php echo $i ?>"><?php echo $i ?></option>';
	                 			<?php } ?>
							</select>
						</div>
						<div class="col-sm-2">
							<input type="button" name="" value="filtar por fecha" id="btn_fecha" > 
						</div>
					</div><br>
					<div class="row">
						<label  class="col-sm-2 ">Monto:</label>
  						<div class="col-sm-10">
  							<input type="text" class="form-control" id="monto" name="monto" >
  						</div>
  					</div>	<br> 
  					<div class="row">
  						<div class="col-sm-12">
  						<button type="button" class="btn btn-primary btn-lg btn-block" id="btn_cargar">Cargar</button>
  						</div>
  						</form>
  					</div>
			</div>
		</div>
	</div>
  </div>
</div> 
</body>
</html>
<script type="text/javascript">
	$(document).ready(function(){	
		$('#btn_fecha').click(function(){
			var id = "";
		    var mes = "";
    		var anio = "";

    if ($("#mes").val() != null) {
        mes = $("#mes").val();
    } 

    if ($("#anio").val() != null) {
        anio = $("#anio").val();
    }			
    if ($("#id_cliente").val() != null) {
        id = $("#id_cliente").val();
    }			
			$.ajax({
				type:"POST",
				data:{
  					"mes": mes,
    				"anio": anio,
    				"id":id
					},
				url:"../procesos/clientes/llenarMonto.php",
				success:function(r){	
					
					dato=jQuery.parseJSON(r);

					if(dato['monto']!= 0){
					$('#monto').val(dato['monto']);
				}else{					
					$('#monto').val("");
				}
						

				}

			});

		});	
})
</script>

<script type="text/javascript">
	$('#btn_cargar').click(function(){
		console.log( $("#anio").val());
		console.log( $("#id_cliente").val());

		datos= $('#montoMono').serialize();
		$.ajax({
			type:"POST",
			data:datos,
			url:"../procesos/clientes/modificarMonto.php",					
			success:function(r){				
				if(r==1){				
									
					alertify.success("Monto Modificado");
				}else{	
						;
					alertify.error("Monto no modificado");
				}

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