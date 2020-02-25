<?php 
session_start();

if (isset($_SESSION['usuario'])){
require_once "dependencias.php"; 
require_once '../clases/Conexion.php';
$c = new conectar();
$dbh = $c->conexion();
$sql = "SELECT DISTINCT c.denominacion, c.nro_cliente, c.id_cliente FROM clientes c inner join empleador e on c.id_cliente = e.id_cliente";
$stmt = $dbh->prepare($sql);
$stmt->execute();



?>
<!DOCTYPE html>
<html>
<head>
<title>Empleados</title>
	<?php require_once "menu.php" ?>
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
	<center><label><h3>Empleados</h3></label></center>
	<br>
	<table  class="table table-responsive table-hover table-condensed table-border" style ="text-align: center;">
	 <tr>		
		<td class="active">Numero cliente</td>
		<td class="active">Denominacion</td>
		<td class="active">Ver</td>
	</tr>

	<?php while($unaFila = $stmt->fetch() ): ?>	
			<tr>
		<td><?php echo ($unaFila['nro_cliente']) ?></td>
		<td><?php echo ($unaFila['denominacion']) ?></td>
		<td>
				<a href="datosEmpleado.php?id_cliente=<?php echo $unaFila['id_cliente'] ?>"> <span class="btn btn-warning btn-xs"data-toggle="modal">
				<span class="glyphicon glyphicon-pencil"></span>
				</span></a>
		</td>
	</tr>
		<?php endwhile; ?>
	
	</table>
	</div>
		</div>
</div>


<!-- ----------------------------------------------------------------------------------------------------- -->



</body>
</html>
<?php 
}else{
	header("location:../index.php");
}

 ?>