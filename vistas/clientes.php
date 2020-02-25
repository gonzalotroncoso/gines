<?php 

session_start();

if (isset($_SESSION['usuario'])){
require_once "dependencias.php"; 
require_once '../clases/Conexion.php';
$c = new conectar();
$dbh = $c->conexion();
$stmt=$dbh->prepare("SELECT * FROM Clientes c INNER JOIN datosfiscales d  on c.id_cliente = d.id_cliente");
$stmt->execute();


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

<?php 

if($_SESSION ['rango']!='admin'){ ?>

      
    
 <center><b><h3>Clientes asignados</h3></b></center> 
<div class="row">
  <div class="col-sm-12">
     <div class="table-responsive-sm ">

<table id="tablaCliente" class="table table-bordered table-responsive table-hover table-condensed table-border " style ="text-align: center;">
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

$stmt=$dbh->prepare("SELECT * FROM Clientes c INNER JOIN datosfiscales d  on c.id_cliente = d.id_cliente inner join cliente_usuario uc on c.id_cliente = uc.id_cliente where uc.id_usuario=:id ");
$stmt->bindValue('id',$_SESSION ['iduser'],PDO::PARAM_INT);
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
</div>
</div>
<hr/>
<?php } ?>



 





    <!-- ////////////////////////////////////////////////////////////////////////////////-->
		<div class="row">		
			<div class="col-sm-12">

		  <div class="well"><b><h3>Clientes</h3></b></div>

			</div>			
		</div>
		<div class="row">
      <div class="col-sm-12">
        <label class="col-sm-2">Buscar Cliente</label>
          <div class="col-sm-4">
            <select class="form-control input-sm" id="id_cliente" name="id_cliente">
          <option value="0"> Seleccionar cliente</option>
            
            <?php    while ($cliente = $stmt->fetch()):            ?>
              
              <option value="<?php echo $cliente['id_cliente'] ?>"> <?php echo (utf8_decode($cliente['denominacion']))?></option>
              <?php endwhile; ?>
            </select> 
            </div> 
              <label class="col-sm-2">Buscar por:</label>
            <div class="col-sm-4">
              <select class="form-control input-sm" id="chkcliente" name="chkcliente">
                  <option value =0>Todos</option>
                  <option value =1>Activos</option>
                  <option value =2>Inactivos</option>
               </select>   
            </div>    
          </div>
       </div>   
           

    <hr/>
		
		<div class="col-sm-12" id="tablaClientesLoad"></div>
  </div>
</div>
</div>
<!--///////////////////////////////////////////////////////////////////////////////////////// -->

<!-- /////////////////////////////////////////////////////////////////////////////////////////-->  
</div>
<div class="modal fade" id="actualizaCliente" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
			<div class="modal-dialog modal-lg" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
						<h4 class="modal-title" id="myModalLabel">Detalles cliente</h4>
					</div>
					<div class="modal-body">
						<form id="frmClienteU">
						
								<div class="panel panel-primary">
  							<div class="panel-heading">Datos Fiscales</div>
  								<div class="panel-body">
  									 <label  class="col-sm-2 col-form-label">Denominación:</label>
  								   		 <div class="col-sm-10">
  								   		 	 <input type="text" class="form-control" id="denominacion" name="denominacion" disabled ></br>
  								   		 </div>	 
  								   	 
  								   	 
  								   		 <label for="Estado" class="col-sm-2 col-form-label">Estado</label>	
  								   		 <div class="col-sm-2"> 			   		 
  										<select class="form-control" id="estado" name="estado" disabled>
    											<option value="activo">Activo</option>
    											<option value="inactivo">Inactivo</option>   
  										</select>
  										 </div>
  									
  										 <label  class="col-sm-2 col-form-label">Tipo de persona</label>
  										 <div class="col-sm-2"> 	 			   	 
  										<select class="form-control" id="tipo" name="tipo" disabled>
    											<option value="fisica">Fisica</option>
    											<option value="juridica">Juridica</option>    
  										</select>	
  										</div>
  										 <label for="Estado" class="col-sm-2 col-form-label">Riesgo</label>	
  										  <div class="col-sm-2">		   	 
  										<select class="form-control" id="riesgo" name="riesgo" disabled >
    											<option value="1">Alto</option>
    											<option value="2">Medio</option>    
    											<option value="3">Bajo</option>    
  										</select></br>
  										</div>
  											<label  class="col-sm-2 col-form-label">CUIT:</label>
  								   		 <div class="col-sm-10">
  								   		 	 <input type="text" class="form-control" id="cuit" name="cuit" disabled></br>
  								   		 </div>	 
  											 <label class="col-sm-2 col-form-label">CUIT JURIDICO:</label>
  								   		 <div class="col-sm-10">
  								   		 	 <input type="text" class="form-control" id="cuitjuridico" name="cuitjuridico" disabled></br>
  								   		 </div>
                         <label class="col-sm-2 col-form-label">CUIT TITULAR:</label>
                         <div class="col-sm-10">
                           <input type="text" class="form-control" id="cuitdueño" name="cuitdueño" disabled></br>
                         </div>
  										<label  class="col-sm-2 col-form-label">Clave Fiscal</label>
  										<div class="col-sm-4">
  								   		 	 <input type="text" class="form-control" id="clave_fiscal" name="clave_fiscal" disabled>	<br>
  								   		</div>

  								   		<label  class="col-sm-2 col-form-label">Clave SIPROD</label>
  										<div class="col-sm-4">
  								   		 	 <input type="text" class="form-control" id="clave_siprod" name="clave_siprod" disabled><br>
  								   		</div>

  								   		<label  class="col-sm-2 col-form-label">Clave Sindicato</label>
  										<div class="col-sm-4">
  								   		 	 <input type="text" class="form-control" id="clave_sindicato" name="clave_sindicato" disabled>	</br>
  								   		</div>

  								   		<label for="Denominacion" class="col-sm-2 col-form-label">Clave Afim</label>
  										<div class="col-sm-4">
  								   		 	 <input type="text" class="form-control" id="clave_afim" name="clave_afim" disabled>	
  								   		</div><br>


  								</div><!--fin panel body -->
  						</div><!-- fin panel -->	


  						<div class="panel  panel-success">
  							<div class="panel-heading">Condición Tributaria</div>
  								<div class="panel-body">
  									<div class="panel panel-default">								
  									  <div class="panel-body">							   	  	 
  								   		 <label class="col-sm-2 col-form-label">Facturacion</label>
  								   		 <div class="col-sm-4">
  								   		 <div class="form-check">
  											<input class="form-check-input" type="checkbox" id="facturacion_manual" name="facturacion_manual" disabled>
  											<label class="form-check-label" for="defaultCheck1"> 
    										Manual 
  											</label>
  										 </div>
  										
  										<div class="form-check">	
  											<input class="form-check-input" type="checkbox" value="" id="facturacion_fiscal" name="facturacion_fiscal" disabled>
  											<label class="form-check-label" for="defaultCheck1"> 
    										Controlador Fiscal 
  											</label>
  										</div>
  										 <div class="form-check">
  											<input class="form-check-input" type="checkbox" value="" id="facturacion_electronica" name="facturacion_electronica"  onChange="validarFactura();" disabled>
  											<label class="form-check-label" for="defaultCheck1"> 
    										Electronica 
  											</label>
  										</div>
  										<div class="form-check">
  											<input class="form-check-input" type="checkbox" value="" id="facturacion_web" disabled name="facturacion_web" disabled>
  											<label class="form-check-label" for="defaultCheck1" d> 
    										Web Service 
  											</label>
  										</div>
  										<div class="form-check">	
  											<input class="form-check-input" type="checkbox" value="" id="facturacion_linea" disabled name="facturacion_linea" disabled>
  											<label class="form-check-label" for="defaultCheck1"> 
    										Factura en linea 
  											</label>
  										</div>	

										</div>	
									</div>
								</div>
						<div class="panel panel-default">	

  									  <div class="panel-body">							   	  	 			 
  									  	<label for="Estado" class="col-sm-2 col-form-label">Condición Tributaria Provincial</label> 		  
  								   		 <div class="col-sm-4">
  								   		 	<div class="panel panel-default">						  	
  								   		 	<div class="panel-heading">Profesiones liberales</div>
  									  		<div class="panel-body">
  								   		 <div class="form-check">
  											<input class="form-check-input" type="checkbox" value="" id="liberal_simplificado" name="liberal_simplificado" disabled>
  											<label class="form-check-label" for="defaultCheck1"> 
    										Regimen Simplificado
  											</label>
  										 		</div>				
		  										 <div class="form-check">
  													<input class="form-check-input" type="checkbox" value="" id="liberal_general" name="liberal_general" disabled>
  													<label class="form-check-label" for="defaultCheck1"> 
    												Regimen General
  													</label>
  												</div>
  									</div>
  								</div>
  								<div class="panel panel-default">						  	
  								   		 	<div class="panel-heading">Ingresos brutos</div>
  									  		<div class="panel-body">
  										<div class="form-check">	
  											<input class="form-check-input" type="checkbox" value="" id="brutos_simplificado" name="brutos_simplificado" onChange="validarConvenioSimplificado();" disabled>
  											<label class="form-check-label" for="defaultCheck1"> 
    										Regimen Simplificado 
  											</label>
  										</div>
  										<div class="form-check">
  											<input class="form-check-input" type="checkbox" value="" id="brutos_general" name="brutos_general" onChange="validarConvenioGeneral();" disabled>
  											<label class="form-check-label" for="defaultCheck1"> 
    										Regimen General
  											</label>
  										</div>
                        <div class="form-check">  
                        <input class="form-check-input" type="checkbox" value="" id="convenioMultilateral" name="convenioMultilateral" onChange="validarchk();" disabled>
                        <label class="form-check-label" for="defaultCheck1"> 
                        Convenio Multilateral 
                        </label>
                      </div>
  								</div>
  							</div>
  							</div>

  							 <div class="col-sm-4">
  								
  									
  										
  										<div class="form-group">
  											<div class="panel panel-default">						  	
  								   		 	<div class="panel-heading">Seleccionar juridicción</div>
  									  		<div class="panel-body ">															
  									  		
  											<input class="form-check-input" type="checkbox" id="caba" name="caba" disabled>
  											<label for="sel1">CABA</label></BR>

  											
  											<input class="form-check-input" type="checkbox" id="bs_as" name="bs_as" disabled>
  											<label for="sel1">Buenos Aires</label></BR>
  											
  											<input class="form-check-input" type="checkbox" id="catamarca" name="catamarca" disabled>
  											<label for="sel1">Catamarca</label></BR>
  											
  											<input class="form-check-input" type="checkbox" id="chaco" name="chaco" disabled>
  											<label for="sel1">Chaco</label></BR>
  											
  											<input class="form-check-input" type="checkbox" id="chubut" name="chubut" disabled>
  											<label for="sel1">Chubut</label></BR>
    										
  											<input class="form-check-input" type="checkbox" id="cordoba" name="cordoba" disabled>	
  											<label for="sel1">Cordoba</label></BR>
    										
  											<input class="form-check-input" type="checkbox" id="corrientes" name="corrientes" disabled>	
  											<label for="sel1">Corrientes</label></BR>
  											
  											<input class="form-check-input" type="checkbox" id="entre_rios" name="entre_rios" disabled>
  											<label for="sel1">Entre Ríos</label></BR>
    										
  											<input class="form-check-input" type="checkbox" id="formosa" name="formosa" disabled>	
  											<label for="sel1">Formosa</label></BR>
    										
  											<input class="form-check-input" type="checkbox" id="jujuy" name="jujuy" disabled>	
  											<label for="sel1">Jujuy</label></BR>
    										
  											<input class="form-check-input" type="checkbox" id="la_pampa" name="la_pampa" disabled>
  											<label for="sel1">La Pampa</label></BR>
  											
  											<input class="form-check-input" type="checkbox" id="la_rioja" name="la_rioja" disabled>	
  											<label for="sel1">La Rioja</label></BR>
    										
  											<input class="form-check-input" type="checkbox" id="mendoza" name="mendoza" disabled>	
  											<label for="sel1">Mendoza</label></BR>
    										
  											<input class="form-check-input" type="checkbox" id="misiones" name="misiones" disabled><label for="sel1">Misiones</label></BR>
    										


  											<input class="form-check-input" type="checkbox" id="rio_negro" name="rio_negro" disabled>
  											<label for="sel1">Río Negro</label></BR>

  											<input class="form-check-input" type="checkbox" id="salta" name="salta" disabled>
  											<label for="sel1">Salta</label></BR>

  											<input class="form-check-input" type="checkbox" id="san_juan" name="san_juan" disabled>
  											<label for="sel1">San Juan</label></BR>

  											<input class="form-check-input" type="checkbox" id="neuquen" name="neuquen" disabled>
  											<label for="sel1">Neuquen</label></BR>

  											<input class="form-check-input" type="checkbox" id="san_luis" name="san_luis" disabled>
  											<label for="sel1">San Luis</label></BR>

  											<input class="form-check-input" type="checkbox" id="santa_cruz" name="santa_cruz" disabled>
  											<label for="sel1">Santa Cruz</label></BR>

  											<input class="form-check-input" type="checkbox" id="santa_fe" name="santa_fe" disabled>
  											<label for="sel1">Santa Fé</label></BR>

  											<input class="form-check-input" type="checkbox" id="santiago_estero" name="santiago_estero" disabled>
  											<label for="sel1">Santiago del Estero</label></BR>

  											<input class="form-check-input" type="checkbox" id="tucuman" name="tucuman" disabled>
  											<label for="sel1">Tucuman</label></BR>	

  											<input class="form-check-input" type="checkbox" id="tierra_fuego" name="tierra_fuego" disabled>
  											<label for="sel1">Tierra del Fuego</label></BR>										
  											
    										</div>
    									</div>
										</div>	

																				
  									  </div>	
  						</div>
  					</div>

  						<div class="panel panel-default">								
  									  <div class="panel-body">							   	  	 			 <label for="Estado" class="col-sm-2 col-form-label">Regimen de Retención</label>
  									  	 <div class="col-sm-8">
  									  	 	<div class="form-check">
  											<input class="form-check-input" type="checkbox" value="" id="sicore_iva" name="sicore_iva" disabled>
  											<label class="form-check-label" for="defaultCheck1"> 
    										Sicore Iva
  											</label>
  										 </div>
  								   		 <div class="form-check">
  											<input class="form-check-input" type="checkbox" value="" id="sicore_ganancia" name = "sicore_ganancia" disabled>
  											<label class="form-check-label" for="defaultCheck1"> 
    										Sicore Ganancia
  											</label>
  										 </div>
  										 <div class="form-check">
  											<input class="form-check-input" type="checkbox" value="" id="siager_liberales" name ="siager_liberales" disabled>
  											<label class="form-check-label" for="defaultCheck1"> 
    										Siager Liberales
  											</label>
  										</div>
  										<div class="form-check">	
  											<input class="form-check-input" type="checkbox" value="" id="siager_brutos" name="siager_brutos" disabled>
  											<label class="form-check-label" for="defaultCheck1"> 
    										Siager Ingresos Brutos
  											</label>
  										</div>
  									
									</div> 
  								</div>
  									 </div>

  									  
  								<div class="panel panel-default">								
  									  <div class="panel-body">	
  									  	<label for="Estado"  class="col-sm-4 col-form-label">Afip</label>
  										 <div class="col-sm-8"> 	 			   	 
  										<select class="form-control" id="afip" name="afip" disabled>
    											<option value="1">Monotributista</option>
    											<option value="2">Responsable Inscripto</option>    
    											<option value="3">Exento</option>    
    											<option value="4">No Inscripto</option>    
  										</select>	
  										</div>
  								</div>
  								</div>		
  								<div class="panel panel-default">								
                    <div class="panel-heading">Datos Monostributista</div>
  									  <div class="panel-body">
  									  	
  									  	
  								   		  	<label for="Estado"  class="col-sm-4 col-form-label">Actividad</label>
  										 <div class="col-sm-8"> 	 			   	 
  										<select class="form-control" id="actividad_monotributo" name="actividad_monotributo" disabled>
    											<option value="Servicios">Servicios</option>
    											<option value="Bienes">Bienes</option>    
    											 <option value="A-B">Ambos - Principal Bienes</option>   
                          <option value="A-S">Ambos - Principal Servicios</option>   
    											
  										</select></br>	
  										</div>
  										<label for="Denominacion" class="col-sm-4 col-form-label">Adicionales</label>
  										<div class="col-sm-8">
  								   		 	 <input type="number" class="form-control" id="adicional" name="adicional" disabled>	<br>

  								</div>
  							</div>

  							</div><!--fin panel body -->
  						</div><!-- fin panel -->
  					</div>
  					
  				<div class="panel  panel-info">
  							<div class="panel-heading">Datos Personales</div>
  								<div class="panel-body">
  								<label class="col-sm-2">Telefono</label>	
  								<div class="col-sm-4">
  									 
  								   		 	 <input type="text" class="form-control" id="telefono" name="telefono" disabled></br>
  								   	
  								</div>
  								<label class="col-sm-2">Mail</label>	
  								<div class="col-sm-4">
  									 
  								   		 	 <input type="email" class="form-control" id="mail" name="mail" disabled></br>
  								   	
  								</div>
  								<label class="col-sm-2">Fecha de ingreso</label>	
  								<div class="col-sm-10">
  								<input type="date" class="form-control" id="fecha_ingreso" name="fecha_ingreso"  disabled></br>
  								</div>
                  <label class="col-sm-2">Fecha Egreso</label>  
                  <div class="col-sm-10">
                  <input type="date" class="form-control" id="fecha_egreso" name="fecha_egreso"  disabled></br>
                  </div>
  								<label class="col-sm-2">Fecha de cumpleaños</label>	
  								<div class="col-sm-10">
  								<input type="date" class="form-control" id="fecha_cumple" name="fecha_cumple"  disabled></br>
  								</div>
                   

                  
  								<label class="col-sm-2">Observaciones</label>	
  								<div class="col-sm-10">	
  								<input type="text" class="form-control" id="observaciones" name="observaciones" disabled></br>
  								</div>
  							</div>
  				</div>				







						</form>

					</div>
				
				</div>
			</div>
		</div>


<!--||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||| -->

			</div>
		</div>

</body>
</html>

<script type="text/javascript">
		function agregaDatosClientes(id_cliente){
	
			$.ajax({
				type:"POST",
				data:"id_cliente= "+id_cliente,
				url:"../procesos/clientes/obtenDatosClientes.php",
				success:function(r){  
        
					dato= jQuery.parseJSON( r );  
          
      
																		
					$('#denominacion').val(dato['denominacion']);
					$('#cuit').val(dato['cuit']);
					$('#cuitjuridico').val(dato['cuit_juridico']);							 
          $('#cuitdueño').val(dato['cuit_titular']);
					$('#estadoV').val(dato['estado']);

          $('#tipo').val(dato['tipo_persona'])         ;
          
					
          
					$('#riesgo').val(dato['riesgo']);
          
					$('#clave_fiscal').val(dato['clave_fiscal']);
					$('#clave_siprod').val(dato['clave_dpt']);
					$('#clave_sindicato').val(dato['clave_sindicato']);
					$('#clave_afim').val(dato['clave_afim']);



					if (dato['facturacion_manual']=="0") {
						document.getElementById("facturacion_manual").checked = false;					
					}else{
						document.getElementById("facturacion_manual").checked = true;
					}

					if (dato['facturacion_electronica']=="0") {
						document.getElementById("facturacion_electronica").checked = false;					
					}else{
            document.getElementById("facturacion_electronica").checked = true;         
          }
          
					if (dato['facturacion_fiscal']=="0") {
						document.getElementById("facturacion_fiscal").checked = false;					
					}else{
            document.getElementById("facturacion_fiscal").checked = true;          
          }

					if (dato['facturacion_web']==0) {
						document.getElementById("facturacion_web").checked = false;					
					}else{
            document.getElementById("facturacion_web").checked = true;         
          }

					if (dato['facturacion_linea']==0) {
						document.getElementById("facturacion_linea").checked = false;					
					}else{
            document.getElementById("facturacion_linea").checked = true;         
          }

					if (dato['liberal_simplificado']==0) {
						document.getElementById("liberal_simplificado").checked = false;					
					}else{
            document.getElementById("liberal_simplificado").checked = true;          
          }

					if (dato['liberal_general']==0) {
						document.getElementById("liberal_general").checked = false;					
					}else{
            document.getElementById("liberal_general").checked = true;         
          }


					if (dato['brutos_simplificado']==0) {
						document.getElementById("brutos_simplificado").checked = false ;					
					}else{
            document.getElementById("brutos_simplificado").checked = true ;          
          }

					if (dato['brutos_general']==0) {
						document.getElementById("brutos_general").checked = false;					
					}else{
            document.getElementById("brutos_general").checked = true;          
          }

					if (dato['convenio_multilateral']==0) {
						document.getElementById("convenioMultilateral").checked = false;						
						}else{
              document.getElementById("convenioMultilateral").checked = true;            
            }
						
					if (dato['caba']==1){
							document.getElementById("caba").checked = true;
						}
						
						if (dato['bs_as']==1){
							document.getElementById("bs_as").checked = true;
						}
						if (dato['cordoba']==1){
							document.getElementById("cordoba").checked = true;
						}					
						if (dato['santa_fe']==1){
							document.getElementById("santa_fe").checked = true;
						}					
						if (dato['misiones']==1){
							document.getElementById("misiones").checked = true;
						}					
						if (dato['chaco']==1){
							document.getElementById("chaco").checked = true;
						}
						if (dato['entre_rios']==1){
							document.getElementById("entre_rios").checked = true;
						}
						if (dato['tucuman']==1){
							document.getElementById("tucuman").checked = true;
						}
						if (dato['mendoza']==1){
							document.getElementById("mendoza").checked = true;
						}
						if (dato['tierra_del_fuego']==1){
							document.getElementById("tierra_fuego").checked = true;
						}	
						if (dato['la_pampa']==1){
							document.getElementById("la_pampa").checked = true;
						}					
						if (dato['santa_cruz']==1){
							document.getElementById("santa_cruz").checked = true;
						}					
						if (dato['rio_negro']==1){
							document.getElementById("rio_negro").checked = true;
						}					
						if (dato['corrientes']==1){
							document.getElementById("corrientes").checked = true;
						}					
						if (dato['san_luis']==1){
							document.getElementById("san_luis").checked = true;
						}					
						if (dato['salta']==1){
							document.getElementById("salta").checked = true;
						}					
						if (dato['jujuy']==1){
							document.getElementById("jujuy").checked = true;
						}					
						if (dato['san_juan']==1){
							document.getElementById("san_juan").checked = true;
						}					
						if (dato['chubut']==1){
							document.getElementById("chubut").checked = true;
						}					
						if (dato['neuquen']==1){
							document.getElementById("neuquen").checked = true;
						}					
						if (dato['la_rioja']==1){
							document.getElementById("la_rioja").checked = true;
						}					
						if (dato['santiago_estero']==1){
							document.getElementById("santiago_estero").checked = true;
						}					
						if (dato['formosa']==1){
							document.getElementById("formosa").checked = true;
						}
						if (dato['catamarca']==1){
							document.getElementById("catamarca").checked = true;
						}	





						if(dato['sicore_iva']==0){
							document.getElementById("sicore_iva").checked = false;
						}else{
              document.getElementById("sicore_iva").checked = true;
            }

						if(dato['sicore_ganancia']==0){
							document.getElementById("sicore_ganancia").checked = false;
						}else{
              document.getElementById("sicore_ganancia").checked = true;
            }		
						
						if(dato['siager_liberales']==0){
							document.getElementById("siager_liberales").checked = false;
						}		else{
              document.getElementById("siager_liberales").checked = true;
            }
						if(dato['siager_ingresos_brutos']==0){
							document.getElementById("siager_brutos").checked = false;
						}		else{
              document.getElementById("siager_brutos").checked = true;
            }
					
            if(dato['afip']=="Monotributista"){
						$('#afip').val(1);
            }

            if(dato['afip']=="R.I"){
            $('#afip').val(2);
            }

            if(dato['afip']=="Exento"){
            $('#afip').val(3);
            }

            if(dato['afip']=="No Inscripto"){
            $('#afip').val(4);
            }



						if(dato['afip']!="Monotributista"){
								$('#monotributo_ingreso').val(" ");
								$('#categoria_monotributo').val(" ");
								$('#actividad_monotributo').val(" ");
								$('#adicional').val(" ");					


						}else{

								$('#monotributo_ingreso').val(dato['ingresos_brutos']);
								$('#categoria_monotributo').val(dato['categoria']);
								$('#actividad_monotributo').val(dato['actividad']);
								$('#adicional').val(dato['adicional']);
								

						}


				$('#telefono').val(dato['celular']);
				$('#mail').val(dato['mail']);
				$('#fecha_ingreso').val(dato['fecha_ingreso']);
				$('#fecha_cumple').val(dato['fecha_nac']);
        $('#fecha_egreso').val(dato['fecha_egreso']);
				$('#observaciones').val(dato['observaciones']);





	
	
					







					


				}
			});

			


		}
</script>		


<script type="text/javascript">
		$(document).ready(function(){
	$('#tablaClientesLoad').load("clientes/tablaClientes.php");

	$('#btnAgregarCliente').click(function(){

	
		datos=$('#frmClientes').serialize();
		$.ajax({
			type:"POST",
			data:datos,
			url:"../procesos/clientes/agregaClientes.php",
			
			success:function(r){
				
				if(r==1){
					$('#frmClientes')[0].reset();
					$('#tablaClientesLoad').load("clientes/tablaClientes.php");
					alertify.success("Cliente agregado con exito");
				}else{
					alertify.error("No se pudo agregar cliente");
				}

			}
		})		
		
	});
	

	})



  function eliminaCliente(id_cliente){
      alertify.confirm('¿Desea eliminar este cliente?', function(){ 
        $.ajax({
          type:"POST",
          data:"id_cliente=" + id_cliente,
          url:"../procesos/clientes/eliminaCliente.php",
          success:function(r){
                    
            if(r==1){             

              alertify.success("Eliminado con exito!!");
              $('#tablaClientesLoad').load("clientes/tablaClientes.php");
            }else{
             
              alertify.error("No se pudo eliminar :(");
            }
          }
        });
      }, function(){ 
        alertify.error('Cancelo !')
      });
    }

      
</script>

<script type="text/javascript">
  $(document).ready(function(){
    $('#id_cliente').select2();
    
  })
</script>



<script type="text/javascript">
  $('#id_cliente').change(function(){
    var id_cliente = $('#id_cliente').val();
    if(id_cliente==0){
$.ajax({
          method: 'POST',
          url:"../procesos/clientes/todosClientes.php",  

          success:function(r){
              data= jQuery.parseJSON( r );
               var newRow;
                $("#tablaCliente tbody").html("");
              data.forEach(function(data, index) { 
             
                 newRow =
                "<tr>"+
                  "<td>"+data.nro_cliente+"</td>"+
                  "<td>"+data.denominacion+"</td>"+
                  "<td>"+data.estado+"</td>"+
                  "<td>"+data.cuit+"</td>"+    
                  "<td>"+
                        "<span class='btn btn-success btn-xs'data-toggle='modal' data-target='#actualizaCliente'"+ "onclick='agregaDatosClientes("+data.id_cliente+")'>"+
        "<span class='glyphicon glyphicon-plus'></span>"+"</span>"+
    "</td> "+
    "<td>"+
        "<a href='ModificarCliente.php?id_cliente="+data.id_cliente+"'> <span class='btn btn-warning btn-xs'data-toggle='modal'>"+
        "<span class='glyphicon glyphicon-pencil'></span>"+
        "</span></a>"+
    "</td> "+
    "<td>"+
      "<span class='btn btn-danger btn-xs' onclick='eliminaCliente("+data.id_cliente+")'>"+
        "<span class='glyphicon glyphicon-remove'></span>"+
      "</span>"+
    "</td> "+
  "</tr>";
$(newRow).appendTo("#tablaCliente tbody"); 



              })
            }      
        })
      

            }
      else{
     $.ajax({
          type:"POST",
          data:"id=" + id_cliente,
          url:"../procesos/clientes/datocliente.php",
          success:function(r){
                        
            data= jQuery.parseJSON( r );
            var newRow;
            $("#tablaCliente tbody").html("");
           
                newRow =
                "<tr>"+
                  "<td>"+data.nro_cliente+"</td>"+
                  "<td>"+data.denominacion+"</td>"+
                  "<td>"+data.estado+"</td>"+
                  "<td>"+data.cuit+"</td>"+    
                  "<td>"+
                        "<span class='btn btn-success btn-xs'data-toggle='modal' data-target='#actualizaCliente'"+ "onclick='agregaDatosClientes("+data.id_cliente+")'>"+
        "<span class='glyphicon glyphicon-plus'></span>"+"</span>"+
        "</td> "+
    "<td>"+
        "<a href='ModificarCliente.php?id_cliente="+data.id_cliente+"'> <span class='btn btn-warning btn-xs'data-toggle='modal'>"+
        "<span class='glyphicon glyphicon-pencil'></span>"+
        "</span></a>"+
    "</td> "+
    "<td>"+
      "<span class='btn btn-danger btn-xs' onclick='eliminaCliente("+data.id_cliente+")'>"+
        "<span class='glyphicon glyphicon-remove'></span>"+
      "</span>"+
    "</td> "+
  "</tr>";
$(newRow).appendTo("#tablaCliente tbody"); 
    }
    
             

       
         })
         }
     
   })


</script>
<script type="text/javascript">
  $('#chkcliente').change (function (){    

      if ($('#chkcliente').val()==1)
      {

        $.ajax({
          method: 'POST',
          url:"../procesos/clientes/tablaActivos.php",  

          success:function(r){
              data= jQuery.parseJSON( r );
               var newRow;
                $("#tablaCliente tbody").html("");
              data.forEach(function(data, index) { 

                 newRow =
                "<tr>"+
                  "<td>"+data.nro_cliente+"</td>"+
                  "<td>"+data.denominacion+"</td>"+
                  "<td>"+data.estado+"</td>"+
                  "<td>"+data.cuit+"</td>"+    
                  "<td>"+
                        "<span class='btn btn-success btn-xs'data-toggle='modal' data-target='#actualizaCliente'"+ "onclick='agregaDatosClientes("+data.id_cliente+")'>"+
        "<span class='glyphicon glyphicon-plus'></span>"+"</span>"+
    "</td> "+
    "<td>"+
        "<a href='ModificarCliente.php?id_cliente="+data.id_cliente+"'> <span class='btn btn-warning btn-xs'data-toggle='modal'>"+
        "<span class='glyphicon glyphicon-pencil'></span>"+
        "</span></a>"+
    "</td> "+
    "<td>"+
      "<span class='btn btn-danger btn-xs' onclick='eliminaCliente("+data.id_cliente+")'>"+
        "<span class='glyphicon glyphicon-remove'></span>"+
      "</span>"+
    "</td> "+
  "</tr>";
$(newRow).appendTo("#tablaCliente tbody"); 



              })
            }      
        })
      }
      if($('#chkcliente').val()==2){
          $.ajax({
          method: 'POST',
          url:"../procesos/clientes/tablaInactivo.php",  

          success:function(r){
              data= jQuery.parseJSON( r );
               var newRow;
                $("#tablaCliente tbody").html("");
              data.forEach(function(data, index) { 

                 newRow =
                "<tr>"+
                  "<td>"+data.nro_cliente+"</td>"+
                  "<td>"+data.denominacion+"</td>"+
                  "<td>"+data.estado+"</td>"+
                  "<td>"+data.cuit+"</td>"+    
                  "<td>"+
                        "<span class='btn btn-success btn-xs'data-toggle='modal' data-target='#actualizaCliente'"+ "onclick='agregaDatosClientes("+data.id_cliente+")'>"+
        "<span class='glyphicon glyphicon-plus'></span>"+"</span>"+
    "</td> "+
    "<td>"+
        "<a href='ModificarCliente.php?id_cliente="+data.id_cliente+"'> <span class='btn btn-warning btn-xs'data-toggle='modal'>"+
        "<span class='glyphicon glyphicon-pencil'></span>"+
        "</span></a>"+
    "</td> "+
    "<td>"+
      "<span class='btn btn-danger btn-xs' onclick='eliminaCliente("+data.id_cliente+")'>"+
        "<span class='glyphicon glyphicon-remove'></span>"+
      "</span>"+
    "</td> "+
  "</tr>";
$(newRow).appendTo("#tablaCliente tbody"); 



              })
            }      
        })

      }


      if($('#chkcliente').val()==0)
      {
         $.ajax({
          method: 'POST',
          url:"../procesos/clientes/todosClientes.php",  

          success:function(r){
              data= jQuery.parseJSON( r );
               var newRow;
                $("#tablaCliente tbody").html("");
              data.forEach(function(data, index) { 

                 newRow =
                "<tr>"+
                  "<td>"+data.nro_cliente+"</td>"+
                  "<td>"+data.denominacion+"</td>"+
                  "<td>"+data.estado+"</td>"+
                  "<td>"+data.cuit+"</td>"+    
                  "<td>"+
                        "<span class='btn btn-success btn-xs'data-toggle='modal' data-target='#actualizaCliente'"+ "onclick='agregaDatosClientes("+data.id_cliente+")'>"+
        "<span class='glyphicon glyphicon-plus'></span>"+"</span>"+
    "</td> "+
    "<td>"+
        "<a href='ModificarCliente.php?id_cliente="+data.id_cliente+"'> <span class='btn btn-warning btn-xs'data-toggle='modal'>"+
        "<span class='glyphicon glyphicon-pencil'></span>"+
        "</span></a>"+
    "</td> "+
    "<td>"+
      "<span class='btn btn-danger btn-xs' onclick='eliminaCliente("+data.id_cliente+")'>"+
        "<span class='glyphicon glyphicon-remove'></span>"+
      "</span>"+
    "</td> "+
  "</tr>";
$(newRow).appendTo("#tablaCliente tbody"); 



              })
            }      
        })

      }
   }) 

</script>
<script type="text/javascript">
  $(document).ready(function(){
  $('#tablaClientesLoad').load("clientes/tablaClientes.php");
})
</script>
<?php 
}else{
  header("location:index.php");
}

 ?>