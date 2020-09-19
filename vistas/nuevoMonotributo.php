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
	<title>Carga de ingresos brutos - monotributo</title>
	<?php require_once "menu.php" ?>
</head>
<body>
	<div class="container">
		<form id='empleador'>
		<div class="row">
			<div class="col-sm-12">

        
				
					<label>Seleccionar Cliente</label>
						<select class="form-control input-sm" id="id_cliente" name="id_cliente">
			
						<?php
							$afip = "Monotributista";
							$sql ="SELECT * FROM clientes c inner join condiciontributaria con on c.id_cliente = con.id_cliente inner join monotributo m on m.id_condicion=con.id_condicion where m.ingresos_brutos=0";			
							$stmt = $dbh->prepare($sql);
							
							$stmt->execute();
							while ($cliente = $stmt->fetch()):
							            ?>
              
							<option value="<?php echo $cliente['id_cliente'] ?>"><?php echo utf8_decode($cliente['denominacion'])?></option>
							<?php endwhile; ?>
						</select> </br>

    			</div> 
	     </div>
	     <hr/>
	     	<div class="panel  panel-info">
  							<div class="panel-heading">Monto periodo de montrotributo</div>
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
  								<input type="text" class="form-control" id="monto" name="monto" ><br>
  								</div>
  			</div>
  		</div>
  			<button type="button" class="btn btn-primary btn-lg btn-block" id="btn_cargar">Cargar</button>	
	    </form> 
</div>
</body>
</html>
<script type="text/javascript">
	$('#btn_cargar').click(function(){
		

		datos=$('#empleador').serialize();
		$.ajax({
			type:"POST",
			data:datos,
			url:"../procesos/clientes/cargaMonotributo.php",					
			success:function(r){				
				if(r==1){					
					$('#empleador')[0].reset();					
					alertify.success("Ingresos brutos cargados");
				}else{					
					
					alertify.error("No se pudo cargar");
				}

			}
		})		
		
	});

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