<?php 

session_start();

if (isset($_SESSION['usuario'])){
require_once "dependencias.php"; 
require_once '../clases/Conexion.php';
$c = new conectar();
$dbh = $c->conexion();
$st = $dbh->prepare("SELECT * FROM tabla_monotributo");
$st->execute();
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8"/>
<title>Inicio</title>
	<?php require_once "menu.php" ?>
</head>
<body>
	<div class="container">
		<center><h3><b>Tabla de valores de monotributo</b></h3></center>
		<hr/>
		<div class="row">
			<div class="col-sm-12">
				<table id="tablaCliente" class="table table-responsive table-hover table-condensed table-border " style ="text-align: center;">
  <thead class="active">
  <tr>
    <th class="active">Ingresos Brutos</th>
    <th class="active">Categoria</th>
    
    <th class="active">Impuesto Servicio</th>    
    <th class="active">Impuesto Bienes</th>  
    <th class="active">Obra Social</th>
    <th class="active">SIPA</th>

  </tr>
  </thead>    
  <tbody>
  	<?php  
  	$i = 1;
  	while ($unaFila = $st->fetch()): ?> 

  	<tr>
  		<td><input type="text" name="<?php echo('ingresos_brutos'.$i) ?>" id="<?php echo('ingresos_brutos'.$i) ?>" readonly="true" value="<?php echo $unaFila['ingresos_brutos'] ?>"></td>
  		<td><?php echo $unaFila['categoria'] ?></td>
  		<td><input type="text" name="<?php echo('impuesto_servicio'.$i) ?>" id="<?php echo('impuesto_servicio'.$i) ?>"readonly="true" value="<?php echo $unaFila['impuesto_servicio'] ?>"></td>
  		<td><input type="text" name="<?php echo('impuesto_bienes'.$i) ?>" id="<?php echo('impuesto_bienes'.$i) ?>" readonly="true" value="<?php echo $unaFila['impuesto_bienes'] ?>"></td>
  		<td><input type="text" name="<?php echo('obra_social'.$i) ?>" id="<?php echo('obra_social'.$i) ?>" readonly="true" value="<?php echo $unaFila['obra_social'] ?>"></td>
  		<td><input type="text" name="<?php echo('sipa'.$i) ?>" id="<?php echo('sipa'.$i) ?>" readonly="true" value="<?php echo $unaFila['sipa'] ?>"></td>
</tr>
<?php $i = $i+1; ?>
<?php endwhile; ?>
  </tbody>
  </table>	
			</div>
		</div>
<hr/>
		<div class="row">
			<div class="col-sm-1">
				
				<span class="btn btn-success " onclick="guardar('')" style="float: right;">
				Guardar
				</span>
			</div>
				<div class="col-sm-1">
				<span class="btn btn-warning " onclick="modificar()" style="float: right;">
				Editar
				</span>
			</div>
			
		</div>
		<br>
	</div>
</body>
</html>
<script type="text/javascript">
	function modificar(){
		for (var i = 1 ; i <= 11; i++) {
		document.getElementById("ingresos_brutos"+i).readOnly = false;	
		document.getElementById("impuesto_servicio"+i).readOnly = false;	
		document.getElementById("impuesto_bienes"+i).readOnly = false;	
		document.getElementById("obra_social"+i).readOnly = false;	
		document.getElementById("sipa"+i).readOnly = false;	


		}
		

	}
</script>

<script type="text/javascript">
	function guardar(){
		for (var i = 1 ; i <= 11; i++) {
		document.getElementById("ingresos_brutos"+i).readOnly = false;	
		document.getElementById("impuesto_servicio"+i).readOnly = false;	
		document.getElementById("impuesto_bienes"+i).readOnly = false;	
		document.getElementById("obra_social"+i).readOnly = false;	
		document.getElementById("sipa"+i).readOnly = false;	
	}

</script>


<?php 
}else{
  header("location:index.php");
}

 ?>