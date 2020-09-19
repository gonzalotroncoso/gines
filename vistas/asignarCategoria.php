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
<title>Asignar Categoria</title>
	<?php require_once "menu.php" ?>
</head>
	<body>
		<div class="container">
			<b><h3><center>Asignar Categoria</center></h3></b>
			<div class="row">
				<div class="col-sm-12">
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
									
				</div>
			</div>
			
		<hr>
		<div class="row">
			<div class="col-sm-12">
							<label class="col-sm-2">Categoria:</label>
					<div class="col-sm-4">
						<input type="text" name="categoria" id="categoria" class="form-control" >
					</div>		
			</div>
		</div>
		<div class="row">
			<div class="col-sm-12">
				<label class="col-sm-2">Observaciones:</label>
					<div class="col-sm-4">
				<input type="text" name="observacion" id="observacion" class="form-control" >
			</div>		
			</div>
		</div>
		<hr>
		<div class="row">
			<div class="col-sm-12">
				<span 
				 	class="btn btn-primary" id="btn_cargar">Recategorizar todos los clientes</span>
			</div>
		</div>
	</div>
		</form>	
	</body>
</html>
<script type="text/javascript">
	$('#btn_cargar').click(function(){
		var categoria = $('#categoria').val();
		var observacion = $('#observacion').val();
		datos=$('#rec').serialize();
		$.ajax({
			type:"POST",
			data:datos,
			url:"../procesos/monotributo/asignarCategoria.php",
			success:function(r){
				alert(r);
			}
		})
	})
	
</script>

<?php 
}else{
	header("location:../index.php");
}
 ?>