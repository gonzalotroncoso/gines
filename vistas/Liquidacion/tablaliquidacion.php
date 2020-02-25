<?php 	
require_once '../../clases/Conexion.php';
$c = new conectar();
$dbh = $c->conexion();
$stmt5 =$dbh->prepare("SELECT distinct(c.denominacion) as denominacion, (c.nro_cliente) as nro_cliente, (c.id_cliente) as id_cliente FROM clientes c inner join liquidacionmensual l on l.id_cliente = c.id_cliente ");
$stmt5->execute();
 ?>
	<div class="scrollable1">
		  		<table style="overflow-y:scroll"  class="table table-responsive table-hover table-condensed table-border " id="tablacliente">
		  			<thead>
		  				<th class="active">Nro de cliente</th>
		  				<th class="active">Denominacion</th>		  						  				
		  				<th class="active" align="center">Ver meses</th>		  				
		  			</thead>
		  			<tbody>
		  				<?php while ($unaFila1 = $stmt5->fetch()): ?>		  			
		  				<?php 
		  				$id = $unaFila1['id_cliente'];
		  				$s = $dbh->prepare("select count(li.fin) from liquidacionmensual li where li.id_cliente=:id and li.fin=0");
		  				$s->bindValue(':id',$id,PDO::PARAM_INT);
		  				$s->execute();
		  				$contador = $s->fetchcolumn(); ?>						  					
		  					<tr class="<?php if($contador>0){echo "danger";}else{ echo "success";} ?>">
								<td><?php echo $unaFila1['nro_cliente'] ?></td>
								<td><?php echo utf8_decode($unaFila1['denominacion']) ?></td>
														
								<td align="center">
									<span class="btn btn-warning btn-xs"  onclick="meses('<?php echo $unaFila1['id_cliente'] ?>')">
				<span class="glyphicon glyphicon-pencil"></span>
				</span>
								</td>
							</tr>
					
						<?php endwhile; ?>
		  			</tbody>
		  		</table>
		  	</div>