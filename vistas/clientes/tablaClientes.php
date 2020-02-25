<?php 
require_once '../../clases/Conexion.php';
  $c = new conectar();
$dbh = $c->conexion();
$stmt=$dbh->prepare("SELECT * FROM Clientes c INNER JOIN datosfiscales d  on c.id_cliente = d.id_cliente");
$stmt->execute();


 ?>

<div class="row">
  <div class="col-sm-12">
     <div class="table-responsive-sm ">
<div class="scrollable">
<table id="tablaCliente" class="table table-border table-responsive table-hover table-condensed table-border " style ="text-align: center;">
  <thead class="active">
  <tr>
    <th class="active">Numero de cliente</th>
    <th class="active">Denominación</th>
    <th class="active">Estado</th>
    <th class="active">CUIT</th>    
    <th class="active">Ver detalles</th>  
    <th class="active">Editar cliente</th>
    <th class="active">Eliminar cliente</th>

  </tr>
  </thead>    
  <tbody>
  <?php 

$stmt=$dbh->prepare("SELECT * FROM Clientes c INNER JOIN datosfiscales d  on c.id_cliente = d.id_cliente");
$stmt->execute();
  while ($unaFila = $stmt->fetch()): ?>
  <tr>
    <td><?php echo $unaFila['nro_cliente'] ?></td>
    <td><?php echo utf8_decode($unaFila['denominacion']) ?></td>
    <td><?php echo $unaFila['estado']?></td>  
    <?php if($unaFila['tipo_persona']=="fisica"){ ?>
    <td><?php echo $unaFila['cuit']?></td>
    <?php }else{ ?>
      <td><?php echo $unaFila['cuit_juridico']?></td>
    <?php } ?>
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