<?php 
session_start();

if (isset($_SESSION['usuario'])){
require_once "dependencias.php"; 
require_once '../clases/Conexion.php';
$c = new conectar();
$dbh = $c->conexion();


?>

<!DOCTYPE html>
<html>
<head>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<title>Alta de clientes</title>
	<?php require_once "menu.php" ?>
</head>
<body>
	<div class="container">
		<center><h1>Alta de Cliente</h1></center>
		<div class="row">
			<div class="col-sm-12">
 				<form id="frmClientes">
						<div class="panel panel-primary">
  							<div class="panel-heading">Datos Fiscales</div>
  								<div class="panel-body">
  									 <label  class="col-sm-2 col-form-label">Denominación:</label>
  								   		 <div class="col-sm-10">
  								   		 	 <input type="text" class="form-control" id="denominacion" name="denominacion" ></br>
  								   		 </div>	 
  								   	 
  								   	 
  								   		 <label for="Estado" class="col-sm-2 col-form-label">Estado</label>	
  								   		 <div class="col-sm-2"> 			   		 
  										<select class="form-control" id="estado" name="estado">
    											<option value="Activo">Activo</option>
    											<option value="Inactivo">Inactivo</option>    
  										</select>
  										 </div>
  									
  										 <label  class="col-sm-2 col-form-label">Tipo de persona</label>
  										 <div class="col-sm-2"> 	 			   	 
  										<select class="form-control" id="tipo" name="tipo">
    											<option value="fisica">Fisica</option>
    											<option value="juridica">Juridica</option>    
  										</select>	
  										</div>
  										 <label for="Estado" class="col-sm-2 col-form-label">Riesgo</label>	
  										  <div class="col-sm-2">		   	 
  										<select class="form-control" id="riesgo" name="riesgo" >
    											<option value="3">Alto</option>
    											<option value="2">Medio</option>    
    											<option value="1">Bajo</option>    
  										</select></br>
  										</div>
  											<label  class="col-sm-2 col-form-label">CUIT:</label>
  								   		 <div class="col-sm-10">
  								   		 	 <input type="text" class="form-control" id="cuit" name="cuit"></br>
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
  								   		 	 <input type="text" class="form-control" id="clave_fiscal" name="clave_fiscal">	<br>
  								   		</div>

  								   		<label  class="col-sm-2 col-form-label">Clave SIPROD</label>
  										<div class="col-sm-4">
  								   		 	 <input type="text" class="form-control" id="clave_siprod" name="clave_siprod"><br>
  								   		</div>

  								   		<label  class="col-sm-2 col-form-label">Clave Sindicato</label>
  										<div class="col-sm-4">
  								   		 	 <input type="text" class="form-control" id="clave_sindicato" name="clave_sindicato">	</br>
  								   		</div>

  								   		<label for="Denominacion" class="col-sm-2 col-form-label">Clave Afim</label>
  										<div class="col-sm-4">
  								   		 	 <input type="text" class="form-control" id="clave_afim" name="clave_afim">	
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
  											<input class="form-check-input" type="checkbox"  id="facturacion_manual" name="facturacion_manual">
  											<label class="form-check-label" for="defaultCheck1"> 
    										Manual 
  											</label>
  										 </div>
  										
  										<div class="form-check">	
  											<input class="form-check-input" type="checkbox"  id="facturacion_fiscal" name="facturacion_fiscal">
  											<label class="form-check-label" for="defaultCheck1"> 
    										Controlador Fiscal 
  											</label>
  										</div>
  										 <div class="form-check">
  											<input class="form-check-input" type="checkbox"  id="facturacion_electronica" name="facturacion_electronica"  onChange="validarFactura();">
  											<label class="form-check-label" for="defaultCheck1"> 
    										Electronica 
  											</label>
  										</div>
  										<div class="form-check">
  											<input class="form-check-input" type="checkbox"  id="facturacion_web" name="facturacion_web">
  											<label class="form-check-label" for="defaultCheck1" d> 
    										Web Service 
  											</label>
  										</div>
  										<div class="form-check">	
  											<input class="form-check-input" type="checkbox"  id="facturacion_linea" name="facturacion_linea">
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
  											<input class="form-check-input" type="checkbox"  id="liberal_simplificado" name="liberal_simplificado">
  											<label class="form-check-label" for="defaultCheck1"> 
    										Regimen Simplificado
  											</label>
  										 		</div>				
		  										 <div class="form-check">
  													<input class="form-check-input" type="checkbox"  id="liberal_general" name="liberal_general">
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
  											<input class="form-check-input" type="checkbox"  id="brutos_simplificado" name="brutos_simplificado" onChange="validarConvenioSimplificado();">
  											<label class="form-check-label" for="defaultCheck1"> 
    										Regimen Simplificado 
  											</label>
  										</div>
  										<div class="form-check">
  											<input class="form-check-input" type="checkbox"  id="brutos_general" name="brutos_general" onChange="validarConvenioGeneral();">
  											<label class="form-check-label" for="defaultCheck1"> 
    										Regimen General
  											</label>
  										</div>

                      <div class="form-check">  
                        <input class="form-check-input" type="checkbox"  id="convenioMultilateral" name="convenioMultilateral" onChange="validarchk();">
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
  											<input class="form-check-input" type="checkbox"  id="sicore_iva" name="sicore_iva">
  											<label class="form-check-label" for="defaultCheck1"> 
    										Sicore Iva
  											</label>
  										 </div>
  								   		 <div class="form-check">
  											<input class="form-check-input" type="checkbox"  id="sicore_ganancia" name = "sicore_ganancia">
  											<label class="form-check-label" for="defaultCheck1"> 
    										Sicore Ganancia
  											</label>
  										 </div>
  										 <div class="form-check">
  											<input class="form-check-input" type="checkbox"  id="siager_liberales" name ="siager_liberales">
  											<label class="form-check-label" for="defaultCheck1"> 
    										Siager Liberales
  											</label>
  										</div>
  										<div class="form-check">	
  											<input class="form-check-input" type="checkbox"  id="siager_brutos" name="siager_brutos">
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
  										<select class="form-control" id="afip" name="afip">
    											<option value="1">Monotributista</option>
    											<option value="2">Responsable Inscripto</option>    
    											<option value="3">Exento</option>    
    											<option value="4">No Inscripto</option>    
  										</select>	
  										</div>
  								</div>
  								</div>		
  								<div class="panel panel-default">								

  									  <div class="panel-body">
                      <label for="Estado"  class="col-sm-4 col-form-label">Actividad</label>
  										<div class="col-sm-8"> 	 			   	 
  										<select class="form-control" id="actividad_monotributo" name="actividad_monotributo">
    											<option value="Servicios">Servicios</option>
    											<option value="Bienes">Bienes</option>    
    											<option value="A-B">Ambos - Principal Bienes</option>   
                          <option value="A-S">Ambos - Principal Servicios</option>   
    											
  										</select></br>	
  										</div>
  										<label for="Denominacion" class="col-sm-4 col-form-label">Adicionales</label>
  										<div class="col-sm-8">
  								   		 	 <input type="number" class="form-control" id="adicional" name="adicional">	<br>

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
  									 
  								   		 	 <input type="text" class="form-control" id="telefono" name="telefono"></br>
  								   	
  								</div>
  								<label class="col-sm-2">Mail</label>	
  								<div class="col-sm-4">
  									 
  								   		 	 <input type="email" class="form-control" id="mail" name="mail"></br>
  								   	
  								</div>
  								<label class="col-sm-2">Fecha de ingreso</label>	
  								<div class="col-sm-10">
  								<input type="date" class="form-control" id="denominacion" name="fecha_ingreso" value="<?php echo date("Y-m-d");?>"></br>
  								</div>
  								<label class="col-sm-2">Fecha de cumpleaños</label>	
  								<div class="col-sm-10">
  								<input type="date" class="form-control" id="fecha_cumple" name="fecha_cumple" value="<?php echo date("Y-m-d");?>"></br>
  								</div>
  								<label class="col-sm-2">Observaciones</label>	
  								<div class="col-sm-10">	
  								<input type="text" class="form-control" id="observaciones" name="observaciones"></br>
  								</div>
  							</div>
  				</div>			
  				<button type="button" class="btn btn-primary btn-lg btn-block" id="btn_cargar">Cargar</button>
				<button type="button" onclick="history.back()"  class="btn btn-secondary btn-lg btn-block" id="btn_cancelar">Cancelar</button>			
  				</form>
  			 </div><!-- fin col-sm-12-->	
  		</div><!-- fin row --> 			

  								   		
   
  							 	
  								
  							
    			
			
			<div class="col-sm-4"></div>
		</div>
	</div>
</body>
</html>
<script src="../js/altacliente.js"></script>


	<?php 
}else{
  header("location:index.php");
}

 ?>