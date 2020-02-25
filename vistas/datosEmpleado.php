<?php 
session_start();

if (isset($_SESSION['usuario'])){
require_once "dependencias.php"; 
require_once '../clases/Conexion.php';
$id_cliente = $_GET['id_cliente'];
$c = new conectar();
$dbh = $c->conexion();

$sql = "SELECT * FROM empleador WHERE id_cliente=:id_cliente and casa_particular=:casa_particular";
$stmt = $dbh->prepare($sql);
$stmt->bindValue(':id_cliente',$id_cliente,PDO::PARAM_INT);
$stmt->bindValue(':casa_particular',true,PDO::PARAM_BOOL);
$stmt->execute();

$sql1 = "SELECT * FROM empleador WHERE id_cliente=:id_cliente and convenio_sindical=:convenio_sindical";
$stmt1 = $dbh->prepare($sql1);
$stmt1->bindValue(':id_cliente',$id_cliente,PDO::PARAM_INT);
$stmt1->bindValue(':convenio_sindical',1,PDO::PARAM_BOOL);
$stmt1->execute();


?>

<!DOCTYPE html>
<html>
<head>
<title>Datos de empleados</title>
	<?php require_once "menu.php" ?>
</head>
	<body>
		<div class="container">
			<center><h3>Empleados</h3></center>

			<div class="row">
				<div class="col-sm-12">
		<label><h4>Casa particular</h4></label>
		<table class="table table-responsive table-hover table-condensed table-border" style ="text-align: center;">
			<tr>
				<td>Mayor de edad</td>
				<td>Menor de edad</td>
				<td>Jubilado</td>
				<td>Menos de 12 horas semanales</td>
				<td>Menos de 16 horas semanales</td>
				<td>Mas de 16 horas semanales</td>
			</tr>
			<?php while ($unaFila = $stmt->fetch()): ?>
				<tbody>

				<?php 
					$id_empleador = $unaFila['id_empleador'];
					$query = "Select * from casaparticular where id_empleador=:id_empleador";
					$stmtE = $dbh->prepare($query);
					$stmtE->bindValue(':id_empleador',$id_empleador,PDO::PARAM_INT);
					$stmtE->execute();
					$casa = $stmtE->fetch();

					if($casa['mayor_edad']){ ?>
				 	<td class="success">
				 		<span class="btn btn-success btn-xs">
				 		<span class="glyphicon  glyphicon-ok">
				 			
				 		</span></td>
					<?php }else{ ?>
				 	<td class="danger"><span class="btn btn-danger btn-xs"><span class="glyphicon  glyphicon-remove"></span></td>
				 <?php } ?>

				 <?php if($casa['menor_edad']){ ?>
				 	<td class="success"><span class="btn btn-success btn-xs">
				 		<span class="glyphicon  glyphicon-ok"></span></td>
				 <?php }else{ ?>
				 	<td class="danger"><span class="btn btn-danger btn-xs"><span class="glyphicon  glyphicon-remove"></span></td>
				 <?php } ?>
				 	


				 <?php if($casa['jubilado']){ ?>
				 	<td class="success"><span class="btn btn-success btn-xs"><span class="glyphicon  glyphicon-ok"></span></td>
				 <?php }else{ ?>
				 	<td class="danger"><span class="btn btn-danger btn-xs"><span class="glyphicon  glyphicon-remove"></span></td>
				 <?php } ?>

				 <?php if($casa['menos_12']){ ?>
				 	<td class="success"><span class="btn btn-success btn-xs"><span class="glyphicon  glyphicon-ok"></span></td>
				 <?php }else{ ?>
				 	<td class="danger"><span class="btn btn-danger btn-xs"><span class="glyphicon  glyphicon-remove"></span></td>	
				 <?php } ?>

				 <?php if($casa['menos_16']){ ?>
				 	<td class="success"><span class="btn btn-success btn-xs"><span class="glyphicon  glyphicon-ok"></span></td>
				 <?php }else{ ?>
				 	<td class="danger"><span class="btn btn-danger btn-xs"><span class="glyphicon  glyphicon-remove"></span></td>
				 <?php } ?>
				 <?php if($casa['mayor_16']){ ?>
				 	<td class="success"><span class="btn btn-success btn-xs"><span class="glyphicon  glyphicon-ok"></span></td>
				 <?php }else{ ?>
				 	<td class="danger"> <span class="btn btn-danger btn-xs"><span class="glyphicon  glyphicon-remove"></span></td>	
				 
				<?php } ?>
				<?php endwhile; ?>
				</tbody>
		</table>
		</div>
	</div>
	<br>
	<th/>
			
			<div class="row">
				<div class="col-sm-12">
					<label><h4>Convenio Sindical</h4></label>
					<table class="table table-responsive table-hover table-condensed table-border" style ="text-align: center;">
			<tr>
				<td>Sanidad</td>
				<td>SMATA</td>
				<td>Gastronomico</td>
				<td>UOM</td>
				<td>Comercio</td>
				<td>UTEDYC</td>
			</tr>
			<?php while ($una = $stmt1->fetch()): ?>				
			<tbody>
				
				<?php 
					
					$id_empleador = $una['id_empleador'];

					$query = "Select * from conveniosindical where id_empleador=:id_empleador";
					$stmtC = $dbh->prepare($query);
					$stmtC->bindValue(':id_empleador',$id_empleador,PDO::PARAM_INT);
					$stmtC->execute();
					$convenio = $stmtC->fetch();
					if($convenio['sanidad'] == 1){?>
					<td class="success"><span class="btn btn-success btn-xs"><span class="glyphicon  glyphicon-ok"></span></td>
					<td class="danger"> <span class="btn btn-danger btn-xs"><span class="glyphicon  glyphicon-remove"></span></td>	
					<td class="danger"> <span class="btn btn-danger btn-xs"><span class="glyphicon  glyphicon-remove"></span></td>	
					<td class="danger"> <span class="btn btn-danger btn-xs"><span class="glyphicon  glyphicon-remove"></span></td>	
					<td class="danger"> <span class="btn btn-danger btn-xs"><span class="glyphicon  glyphicon-remove"></span></td>	
					<td class="danger"> <span class="btn btn-danger btn-xs"><span class="glyphicon  glyphicon-remove"></span></td>	
				 	<?php } ?>
				 	<?php if($convenio['smata'] == 1){?>
				 	<td class="danger"> <span class="btn btn-danger btn-xs"><span class="glyphicon  glyphicon-remove"></span></td>	
					<td class="success"><span class="btn btn-success btn-xs"><span class="glyphicon  glyphicon-ok"></span></td>					
					<td class="danger"> <span class="btn btn-danger btn-xs"><span class="glyphicon  glyphicon-remove"></span></td>	
					<td class="danger"> <span class="btn btn-danger btn-xs"><span class="glyphicon  glyphicon-remove"></span></td>	
					<td class="danger"> <span class="btn btn-danger btn-xs"><span class="glyphicon  glyphicon-remove"></span></td>	
					<td class="danger"> <span class="btn btn-danger btn-xs"><span class="glyphicon  glyphicon-remove"></span></td>	
				 	<?php } ?>
				 		<?php if($convenio['gastronomico'] == 1){?>
					<td class="danger"> <span class="btn btn-danger btn-xs"><span class="glyphicon  glyphicon-remove"></span></td>
					<td class="danger"> <span class="btn btn-danger btn-xs"><span class="glyphicon  glyphicon-remove"></span></td>	
					<td class="success"><span class="btn btn-success btn-xs"><span class="glyphicon  glyphicon-ok"></span></td>	
					<td class="danger"> <span class="btn btn-danger btn-xs"><span class="glyphicon  glyphicon-remove"></span></td>	
					<td class="danger"> <span class="btn btn-danger btn-xs"><span class="glyphicon  glyphicon-remove"></span></td>	
					<td class="danger"> <span class="btn btn-danger btn-xs"><span class="glyphicon  glyphicon-remove"></span></td>	
				 	<?php } ?>
				 		<?php if($convenio['uom'] == 1){?>
					
					<td class="danger"> <span class="btn btn-danger btn-xs"><span class="glyphicon  glyphicon-remove"></span></td>	
					<td class="danger"> <span class="btn btn-danger btn-xs"><span class="glyphicon  glyphicon-remove"></span></td>	
					<td class="danger"> <span class="btn btn-danger btn-xs"><span class="glyphicon  glyphicon-remove"></span></td>	
					<td class="success"><span class="btn btn-success btn-xs"><span class="glyphicon  glyphicon-ok"></span></td>
					<td class="danger"> <span class="btn btn-danger btn-xs"><span class="glyphicon  glyphicon-remove"></span></td>	
					<td class="danger"> <span class="btn btn-danger btn-xs"><span class="glyphicon  glyphicon-remove"></span></td>	
				 	<?php } ?>
				 			 		<?php if($convenio['comercio'] == 1){?>
					
					<td class="danger"> <span class="btn btn-danger btn-xs"><span class="glyphicon  glyphicon-remove"></span></td>	
					<td class="danger"> <span class="btn btn-danger btn-xs"><span class="glyphicon  glyphicon-remove"></span></td>	
					<td class="danger"> <span class="btn btn-danger btn-xs"><span class="glyphicon  glyphicon-remove"></span></td>	
					<td class="danger"> <span class="btn btn-danger btn-xs"><span class="glyphicon  glyphicon-remove"></span></td>
					<td class="success"><span class="btn btn-success btn-xs"><span class="glyphicon  glyphicon-ok"></span></td>	
					<td class="danger"> <span class="btn btn-danger btn-xs"><span class="glyphicon  glyphicon-remove"></span></td>	
				 	<?php } ?>
				 			 		<?php if($convenio['utedyc'] == 1){?>
					
					<td class="danger"> <span class="btn btn-danger btn-xs"><span class="glyphicon  glyphicon-remove"></span></td>	
					<td class="danger"> <span class="btn btn-danger btn-xs"><span class="glyphicon  glyphicon-remove"></span></td>	
					<td class="danger"> <span class="btn btn-danger btn-xs"><span class="glyphicon  glyphicon-remove"></span></td>	
					<td class="danger"> <span class="btn btn-danger btn-xs"><span class="glyphicon  glyphicon-remove"></span></td>
					
					<td class="danger"> <span class="btn btn-danger btn-xs"><span class="glyphicon  glyphicon-remove"></span></td>
					<td class="success"><span class="btn btn-success btn-xs"><span class="glyphicon  glyphicon-ok"></span></td>		
				 	<?php } ?>



				<?php endwhile; ?>
			</tbody>
		</table>



				</div>
			</div>
		</div>
	</body>
</html>	

<script type="text/javascript">
  $(document).ready(function(){
    $('#id_cliente').select2();
    
  })
</script>
</script>

<?php 
}else{
	header("location:index.php");
}

 ?>