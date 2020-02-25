<?php 
session_start();

if (isset($_SESSION['usuario'])){
require_once "dependencias.php";

require_once '../clases/Conexion.php';
$c = new conectar();
$dbh = $c->conexion();
$stmt=$dbh->prepare("SELECT * FROM Clientes c INNER JOIN datosfiscales d  on c.id_cliente = d.id_cliente");
$stmt->execute();

$stmt1=$dbh->prepare("SELECT * FROM Usuarios c");
$stmt1->execute();

$stmt2=$dbh->prepare("SELECT * FROM Usuarios c");
$stmt2->execute();


$stmt3 = $dbh->prepare("SELECT * FROM usuarios");
$stmt3->execute();

	?>
	<!DOCTYPE html>
	<html>
	<head>
	<title>Usuarios</title>	
		<?php require_once "menu.php" ?>
	</head>
	<body>
		<div class="container">
			<h1>Administrar Usuarios</h1>
			<div class="row">
				<div class="col-sm-4">
					<form id="frmRegistro">
						<label>Nombre</label>
						<input type="text" class="form-control input-sm" id="nombre" name="nombre">
						<label>Apellido</label>
						<input type="text" class="form-control input-sm" id="apellido" name="apellido">
						<label>Usuario</label>
						<input type="text" class="form-control input-sm" id="usuario" name="usuario">
						<label>Password</label>
						<input type="password" class="form-control input-sm" id="password" name="password">							
						<p></p>
						<span class="btn btn-primary" id="registro">Registrar</span>						
					</form>
				</div>
			<div class="col-sm-7" >
	<table class="table table-hover table-condensed table-border" style ="text-align: center;">
	<caption><label>Usuarios</label></caption>
	<tr>
		<td>Nombre</td>
		<td>Apellido</td>
		<td>Usuario</td>
		<td>Editar</td>
		<td>Eliminar</td>
	</tr>
	<?php while ($unaFila = $stmt3->fetch()): ?>
	<tr>
		<td><?php echo $unaFila['nombre'] ?></td>
		<td><?php echo $unaFila['apellido'] ?></td>
		<td><?php echo $unaFila['email'] ?></td>		
		<td>
			<span class="btn btn-warning btn-xs" data-toggle="modal" data-target="#abremodalUpdateUsuario" onclick="agregaDatosUsuario('<?php echo $unaFila['id_usuario'] ?>')">
				<span class="glyphicon glyphicon-pencil"></span>
				</span>
		</td>
		<td>
			<span class="btn btn-danger btn-xs" onclick="eliminaUsuario('<?php echo $unaFila['id_usuario'] ?>')">
				<span class="glyphicon glyphicon-remove" ></span>
			</span>
		</td>
	</tr>
<?php endwhile; ?>
</table>
			</div>

			</div>
			<hr/>







<h4>Asignar clientes a usuarios</h4>
			<div class="row">
				<div class="col-sm-12">
					<form id="cliente">
			<select class="form-control input-sm-5" id="id_cliente" name="id_cliente">
			<option value="0"> Seleccionar cliente</option>
            
            <?php    while ($cliente = $stmt->fetch()):            ?>
              
              <option value="<?php echo $cliente['id_cliente'] ?>"> <?php echo (utf8_decode($cliente['denominacion']))?></option>
              <?php endwhile; ?>
            </select> </br>
           
            <select class="form-control input-sm-5" id="id_usuario" name="id_usuario">
			<option value="0"> Seleccionar usuario</option>
            
            <?php    while ($cliente = $stmt1->fetch()):            ?>
              
              <option value="<?php echo $cliente['id_usuario'] ?>"> <?php echo (utf8_decode($cliente['email']))?></option>
              <?php endwhile; ?>
            </select> </br>
            <div class="col-sm-2">
            	<span class="btn btn-primary" id="agrega">Asignar Cliente</span>
			
			</div>
			</div>
			</div>			
</form>
</br>




<hr/>	
<h4>Tabla de clientes asignados</h4>
			<select class="form-control input-sm" id="carga" name="carga">
			<option value="0"> Seleccionar usuario</option>
            
            <?php    while ($cliente = $stmt2->fetch()):            ?>
              
              <option value="<?php echo $cliente['id_usuario'] ?>"> <?php echo (utf8_decode($cliente['email']))?></option>
              <?php endwhile; ?>
            </select> <br>


              <div class="table-responsive-sm ">
			<table id="tablaCliente" class="table table-responsive table-hover table-condensed table-border " style ="text-align: center;">

				<thead class="active">
					<th class="active">Numero de cliente</th>
					<th class="active">Denominación</th>
				</thead>
				<tbody>
					
				</tbody>
			</table>
			</div>

		</div>


		<!-- Modal -->
		<div class="modal fade" id="abremodalUpdateUsuario" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
			<div class="modal-dialog modal-sm" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title" id="exampleModalLabel">Actualiza Usuario</h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<div class="modal-body">

						<form id="frmUsuarioU" >
							<input type="text" hidden="" id="idusuario" name="idusuario">												
							<label>Nombre	</label>
							<input type="text" class="form-control input-sm" name="nombreu" id="nombreu">
							<label>Apellido	</label>
							<input type="text" class="form-control input-sm" name="apellidou" id="apellidou">
							<label>Usuario</label>
							<input type="text" class="form-control input-sm" name="usuariou" id="usuariou">
							<label>Constraseña</label>
							<input type="text" class="form-control input-sm" name="passu" id="passu">
							
						</form>
					</div>
					<div class="modal-footer">
						<button id="btnActualizaUsuario"type="button" class="btn btn-warning" data-dismiss="modal">Actualizar</button>

					</div>
				</div>
			</div>
		</div>	


	</body>
	</html>

<script type="text/javascript">
		$(document).ready(function(){
			$('#btnActualizaUsuario').click(function(){

				datos=$('#frmUsuarioU').serialize();
				$.ajax({
					type:"POST",
					data:datos,
					url:"../procesos/usuarios/actualizaUsuarios.php",
					success:function(r){

					
						if(r==1){
								$('#tablaUsuarioLoad').load("#tablaUsuarioLoad");
								alertify.success('Datos actualizados');

						}else{
						  
							alertify.error('No se pudo actualizar');
						}

					}
				});
			});



		});
	</script>

<script type="text/javascript">
			function agregaDatosUsuario(idusuario){
			$.ajax({
				type:"POST",
				data:"idusuario="+ idusuario,
				url:"../procesos/usuarios/obtenDatoUsuarios.php",
				success:function(r){		
			
					datos=jQuery.parseJSON(r);
					$('#idusuario').val(datos['id_usuario']);
					$('#nombreu').val(datos['nombre']);
					$('#apellidou').val(datos['apellido']);
					$('#usuariou').val(datos['email']);
				}
			});
		}

			function eliminaUsuario(idusuario){
			alertify.confirm('Desea eliminar este usuario?', function(){
				$.ajax({
					type:"POST",
					data:"idusuario=" +idusuario ,
					url:"../procesos/usuarios/eliminarUsuario.php",
					success:function(r){
						

						if (r==1){
							$('#tablaUsuarioLoad').load("usuarios/tablausuario.php");
							alertify.success("Eliminado con exito");
						}else{
							alertify.error("No se pudo eliminar");
							
						}

					}
				});
			},
			function(){ 
				alertify.error('Cancelo!')});


		}

	


</script>



	<script type="text/javascript">
		$(document).ready(function(){
			$('#tablaUsuarioLoad').load("usuarios/tablausuario.php");


			$('#registro').click(function(){
				datos = validarFormVacio('frmRegistro');		
				if (datos>0){
					alertify.alert('Completar todos los campos');
					return false;
				}


				datos=$('#frmRegistro').serialize();
				$.ajax({
					type:"POST",
					data:datos,
					url:"../procesos/regLogin/registrarUsuario.php",
					success:function(r){					
						if(r==1){
							$('#tablaUsuarioLoad').load("usuarios/tablausuario.php");
							alertify.success("Agregado con exito");
						}else{

						alertify.error("fallo al agregar");
					}

					}		
				});
			});
		});


	</script>

	<script type="text/javascript">

		$('#carga').change(function(){

    	var id_cliente = $('#carga').val();
    
$.ajax({
          method: 'POST',
          url:"../procesos/usuarios/tablausr.php",  
           data:"id=" + id_cliente,
          success:function(r){
          
              data= jQuery.parseJSON( r );
               var newRow;
                $("#tablaCliente tbody").html("");
              data.forEach(function(data, index) { 

                 newRow =
                "<tr>"+
                  "<td>"+data.nro_cliente+"</td>"+
                  "<td>"+data.denominacion+"</td>"+	                  
  				"</tr>";
				$(newRow).appendTo("#tablaCliente tbody"); 
				})
          }
      })
})



	</script>

	<script type="text/javascript">
		$('#agrega').click(function(){
				datos=$('#cliente').serialize();
					$.ajax({
					type:"POST",
					data:datos,
					url:"../procesos/usuarios/AsignaUsuario.php",
					success:function(r){	
									
						if(r==1){
							
							alertify.success("Agregado con exito");
						}else{

						alertify.error("fallo al agregar");
					}

					}		
				});
		})
	</script>

	<?php 
}else{
	header("location:../index.php");
}

?>