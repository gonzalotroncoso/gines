<?php 	
require_once '../../clases/Conexion.php';
$c = new conectar();
$dbh = $c->conexion();

$sql5= "Select DISTINCT c.denominacion, sum(p.total) as totalp, c.nro_cliente, c.id_cliente From pagos p inner join clientes c on c.id_cliente = p.id_cliente group by c.id_cliente, p.id_cliente";
$stmt5 = $dbh->prepare($sql5);
$stmt5->execute();
 ?>

<div class="scrollable1">
		  		<table style="overflow-y:scroll"  id="clientestb" class="table table-responsive table-hover table-condensed table-border ">
		  			<thead>
		  				<th class="active">Nro de cliente</th>
		  				<th class="active">Denominacion</th>
		  				<th class="active">Total a Pagar</th>		  				
		  				<th class="active" align="center">Ver meses</th>		  				
		  			</thead>
		  			<tbody>
		  				<?php while ($unaFila1 = $stmt5->fetch()): ?>		  					
		  					<?php  if($unaFila1['totalp']>0){?>		  					
		  					<tr class="danger">
								<td><?php echo $unaFila1['nro_cliente'] ?></td>
								<td><?php echo utf8_decode($unaFila1['denominacion']) ?></td>
								<td><?php echo $unaFila1['totalp'] ?></td>								
								<td align="center"><a hidden="true" href=""><?php echo $unaFila1['id_cliente']  ?></a><span class="glyphicon glyphicon-zoom-in

								"></span></td>
							</tr>
						<?php }else{ ?>							
		  					<tr class="success">
								<td><?php echo $unaFila1['nro_cliente'] ?></td>
								<td><?php echo $unaFila1['denominacion'] ?></td>
								<td><?php echo $unaFila1['totalp'] ?></td>	
								<td align="center"><a hidden="true" href=""><?php echo $unaFila1['id_cliente']  ?></a><span class="glyphicon glyphicon-zoom-in

								"></span></td>
															
								
							</tr>
						<?php } ?>
						<?php endwhile; ?>
		  			</tbody>
		  		</table>
		  	</div>