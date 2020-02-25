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
<title>Baja de clientes</title>
	<?php require_once "menu.php" ?>
</head>
<body>
	<div class="container">
		<center><b><h3>Baja de Clientes</h3></b></center>
		<div class="panel  panel-info">
  							<div class="panel-heading">Baja de cliente</div>
  								<div class="panel-body">
		<form id='empleador'>
		<div class="row">
			<div class="col-sm-12">

        

				</select>
					<label>Seleccionar Cliente</label>
						<select class="form-control input-sm" id="id_cliente" name="id_cliente">
			
						<?php
							$estado = "Activo";
							$sql ="SELECT * FROM clientes c, datosfiscales d  where d.estado=:estado and c.id_cliente = d.id_cliente ORDER BY nro_cliente DESC";			
							$stmt = $dbh->prepare($sql);
							$stmt->bindValue(':estado',$estado,PDO::PARAM_STR);
							$stmt->execute();
							while ($cliente = $stmt->fetch()):            ?>
              
							<option value="<?php echo $cliente['id_cliente'] ?>"><?php echo utf8_decode($cliente['denominacion'])?></option>
							<?php endwhile; ?>
						</select> </br>

    			</div> 
	     </div>
	     <hr/>
	     	<div class="panel  panel-info">
  							
  								<div class="panel-body">
  									<label class="col-sm-2">Fecha de Egreso</label>	
  								<div class="col-sm-10">
  								<input type="date" class="form-control" id="fecha_egreso" name="fecha_egreso" value="<?php echo date("Y-m-d");?>"><br>
  								</div>
  			</div>
  		</div>
  			<button type="button" class="btn btn-primary btn-lg btn-block" id="btn_cargar">Cargar</button>	
	    </form> 
	</div>
</div>
</div>
</body>
</html>
<script type="text/javascript">
	$('#btn_cargar').click(function(){
		

		datos=$('#empleador').serialize();
		$.ajax({
			type:"POST",
			data:datos,
			url:"../procesos/clientes/bajaClientes.php",					
			success:function(r){
							
				if(r==1){					
					$('#empleador')[0].reset();					
					alertify.success("Cliente dado de baja");
				}else{					
					alertify.error("No se pudo dar de baja al cliente");
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
	header("location:index.php");
}

 ?>