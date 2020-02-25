<?php 

    $dsn = 'mysql:dbname=gines 2;host=localhost';
    $usuario = 'root';
    $contrasenia = '';
    $dbh = new PDO($dsn,$usuario, $contrasenia);;

    if(isset($_GET['estado'])){
	$estado=$_GET['estado'];	
	}else{
	//por defecto	
	$estado='Activo';
	$orden='DESC';
}

$stmt = $dbh->prepare("SELECT clientes.id_cliente, clientes.nro_cliente, clientes.denominacion, datosfiscales.estado, datosfiscales.cuit, datosfiscales.cuit_juridico, datosfiscales.tipo_persona from clientes, datosfiscales where clientes.id_cliente=datosfiscales.id_cliente ORDER BY estado=:estado ".$orden);
$stmt->bindValue('estado',$estado,PDO::PARAM_STR);

$stmt->execute();

 ?>
<div class="scrollable">
<div class="table-responsive-sm">
<table class="table table-responsive table-hover table-condensed table-border" style ="text-align: center;">
	<thead class="thead-dark">
	<tr>
		<th>Numero de cliente</th>
		<th>Denominación</th>
		<th>Estado</td>
		<th>CUIT</th>		
		<th>Ver detalles</th>	
		<th>Editar cliente</th>
		<th>Eliminar cliente</th>

	</tr>

	</thead>		
	<tbody>
	<?php while ($unaFila = $stmt->fetch()): ?>
	<tr>
		<td><?php echo $unaFila['nro_cliente'] ?></td>
		<td><?php echo $unaFila['denominacion'] ?></td>
		<td><?php echo $unaFila['estado']?></td>
		<?php if($unaFila['tipo_persona']==1): ?>
		<td><?php echo $unaFila['cuit']?></td>
		<?php endif; ?>
		<?php if($unaFila['tipo_persona']==2): ?>
		<td><?php echo $unaFila['cuit_juridico']?></td>
		<?php endif; ?>
		<td>
			<span class="btn btn-success btn-xs"data-toggle="modal" data-target="#actualizaCliente" onclick="agregaDatosClientes('<?php echo $unaFila['id_cliente'] ?>')">
				<span class="glyphicon glyphicon-plus"></span>
				</span>
		</td>	
		<td>
				<a href="ModificarCliente.php?id_cliente=<?php echo $unaFila['id_cliente'] ?>"> <span class="btn btn-warning btn-xs"data-toggle="modal">
				<span class="glyphicon glyphicon-pencil"></span>
				</span></a>
		</td>	
		<td>
			<span class="btn btn-danger btn-xs" onclick="eliminaCliente('<?php echo $unaFila['id_cliente'] ?>')">
				<span class="glyphicon glyphicon-remove"></span>
			</span>
		</td>	
	</tr>
	<?php endwhile; ?>
</tbody>

</table>
</div>
</div>
