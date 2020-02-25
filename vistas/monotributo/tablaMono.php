<?php 

require_once "../dependencias.php"; 
require_once '../../clases/Conexion.php';
$c = new conectar();
$dbh = $c->conexion();
$sql = "SELECT clientes.id_cliente, clientes.nro_cliente, clientes.denominacion, monotributo.totalpagar, monotributo.categoria, monotributo.adicional, monotributo.ingresos_brutos, monotributo.id_monotributo FROM clientes, monotributo, condiciontributaria where clientes.id_cliente = condiciontributaria.id_cliente AND
condiciontributaria.id_condicion = monotributo.id_condicion ";
$stmt = $dbh->prepare($sql);
$stmt->execute();

?>

<div class="table-responsive-sm">
<table class="table table-responsive table-hover table-condensed table-border" style ="text-align: center;">
	<thead class="thead-dark">
		<tr>
			<th>Numero de cliente</th>
		<th>Denominación</th>
		<th>Categoria</td>
		<th>Adicionales</td>	
		<th>Ingresos Brutos</th>				
		<th>SIPA</th>
		<th>Impuesto servicio</th>
		<th>Total a pagar</th>		
		<th>Datos Mensuales</th>
		</tr>
	</thead>
	<tbody>
		<?php while ($unaFila = $stmt->fetch()): ?>
		<?php 
			$sql1 = "SELECT * from tabla_monotributo t where t.categoria=:categoria";
			$stmt1 = $dbh->prepare($sql1);
			$stmt1->bindValue(':categoria',$unaFila['categoria'],PDO::PARAM_STR);
			$stmt1->execute();
			$tabla = $stmt1->fetch();
		 ?>
		<tr>
			<td><?php echo $unaFila['nro_cliente'] ?></td>
		<td><?php echo $unaFila['denominacion'] ?></td>
		<td><?php echo $unaFila['categoria']?></td>
		<td><?php echo $unaFila['adicional']?></td>
		<td><?php echo $unaFila['ingresos_brutos']?></td>
		<td><?php echo $tabla['sipa']?></td>
		<td><?php echo $tabla['impuesto_servicio']?></td>
		<td><?php echo $unaFila['totalpagar']?></td>
		<td>
				<span class="btn btn-success btn-xs"data-toggle="modal" data-target="#actualizaCliente" onclick="agregaDatos('<?php echo $unaFila['id_monotributo'] ?>')">
				<span class="glyphicon glyphicon-plus"></span>
				</span>
			</td>
		</tr>
		<?php endwhile; ?>
	</tbody>
</table>

</div>

	


