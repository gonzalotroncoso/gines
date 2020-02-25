<?php 
session_start();

if (isset($_SESSION['usuario'])){
require_once "dependencias.php"; 
require_once '../clases/Conexion.php';
$c = new conectar();
$dbh = $c->conexion();
$id = $_GET['id_cliente'];



?>

<!DOCTYPE html>
<html>
<head>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<title>Modificar clientes</title>
 <meta charset="utf-8"/>
	<?php require_once "menu.php" ?>
</head>
<body>
  <input type="hidden" value="<?php echo ($id) ?>" id="id_c" name="" >
	<div class="container">
		<center><h1>Modificar Clientes</h1></center>
		<div class="row">
			<div class="col-sm-12">
 				<form id="frmClientes">
						<div class="panel panel-primary">
  							<div class="panel-heading">Datos Fiscales</div>
  								<div class="panel-body">
  									 <label  class="col-sm-2 col-form-label">Denominación:</label>
  								   		 <div class="col-sm-10">
                          <input type="hidden" class="form-control" id="id_cliente" name="id_cliente"  >
  								   		 	 <input type="text" class="form-control"  id="denominacion" name="denominacion"  ></br>
  								   		 </div>	 
  								   	 
  								   	 
  								   		 <label for="Estado" class="col-sm-2 col-form-label">Estado</label>	
  								   		 <div class="col-sm-2"> 			   		 
  										<select class="form-control" id="estado" name="estado" >                      
    											<option value="Activo">Activo</option>
                          <option value="Inactivo">Inactivo</option>   
  										</select>
  										 </div>
  									
  										 <label  class="col-sm-2 col-form-label">Tipo de persona</label>
  										 <div class="col-sm-2"> 	 			  

  										<select class="form-control" id="tipo" name="tipo">
    											<option value="fisica">Física</option>
    											<option value="juridica">Jurídica</option>    
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
  								   		 	 <input type="text" class="form-control" id="cuitjuridico" name="cuitjuridico"></br>
  								   		 </div>
                         <label class="col-sm-2 col-form-label">CUIT TITULAR:</label>
                         <div class="col-sm-10">
                           <input type="text" class="form-control" id="cuitdueño" name="cuitdueño"></br>
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
  								   		 	 <input type="text" class="form-control" id="clave_afim" name="clave_afim" >	
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
  											<input class="form-check-input" type="checkbox"  id="facturacion_manual" name="facturacion_manual" >
  											<label class="form-check-label" for="defaultCheck1"> 
    										Manual 
  											</label>
  										 </div>
  										
  										<div class="form-check">	
  											<input class="form-check-input" type="checkbox"  id="facturacion_fiscal" name="facturacion_fiscal" >
  											<label class="form-check-label" for="defaultCheck1"> 
    										Controlador Fiscal 
  											</label>
  										</div>
  										 <div class="form-check">
  											<input class="form-check-input" type="checkbox"  id="facturacion_electronica" name="facturacion_electronica" >
  											<label class="form-check-label" for="defaultCheck1"> 
    										Electronica 
  											</label>
  										</div>
  										<div class="form-check">
  											<input class="form-check-input" type="checkbox"  id="facturacion_web" name="facturacion_web" >
  											<label class="form-check-label" for="defaultCheck1" d> 
    										Web Service 
  											</label>
  										</div>
  										<div class="form-check">	
  											<input class="form-check-input" type="checkbox"  id="facturacion_linea"  name="facturacion_linea" >
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
                            <input class="form-check-input" type="checkbox"  id="liberal_simplificado" name="liberal_simplificado" >  								
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
  											<input class="form-check-input" type="checkbox" id="brutos_simplificado" name="brutos_simplificado" onChange="validarConvenioSimplificado();">
  											<label class="form-check-label" for="defaultCheck1"> 
    										Regimen Simplificado 
  											</label>
  										</div>
  										<div class="form-check">
  											<input class="form-check-input" type="checkbox" id="brutos_general" name="brutos_general" onChange="validarConvenioGeneral();" >
  											<label class="form-check-label" for="defaultCheck1"> 
    										Regimen General
  											</label>
  										</div>
                      <div class="form-check">  
                        <input class="form-check-input" type="checkbox"  id="convenioMultilateral" name="convenioMultilateral" onChange="validarchk();" >
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
  									  		
  											<input class="form-check-input" type="checkbox" id="caba" name="caba">
  											<label for="sel1">CABA</label></BR>

  											
  											<input class="form-check-input" type="checkbox" id="bs_as" name="bs_as">
  											<label for="sel1">Buenos Aires</label></BR>
  											
  											<input class="form-check-input" type="checkbox" id="catamarca" name="catamarca">
  											<label for="sel1">Catamarca</label></BR>
  											
  											<input class="form-check-input" type="checkbox" id="chaco" name="chaco">
  											<label for="sel1">Chaco</label></BR>
  											
  											<input class="form-check-input" type="checkbox" id="chubut" name="chubut">
  											<label for="sel1">Chubut</label></BR>
    										
  											<input class="form-check-input" type="checkbox" id="cordoba" name="cordoba">	
  											<label for="sel1">Cordoba</label></BR>
    										
  											<input class="form-check-input" type="checkbox" id="corrientes" name="corrientes">	
  											<label for="sel1">Corrientes</label></BR>
  											
  											<input class="form-check-input" type="checkbox" id="entre_rios" name="entre_rios">
  											<label for="sel1">Entre Ríos</label></BR>
    										
  											<input class="form-check-input" type="checkbox" id="formosa" name="formosa">	
  											<label for="sel1">Formosa</label></BR>
    										
  											<input class="form-check-input" type="checkbox" id="jujuy" name="jujuy">	
  											<label for="sel1">Jujuy</label></BR>
    										
  											<input class="form-check-input" type="checkbox" id="la_pampa" name="la_pampa"> 
  											<label for="sel1">La Pampa</label></BR>
  											
  											<input class="form-check-input" type="checkbox" id="la_rioja" name="la_rioja">  
  											<label for="sel1">La Rioja</label></BR>
    										
  											<input class="form-check-input" type="checkbox" id="mendoza" name="mendoza">  
  											<label for="sel1">Mendoza</label></BR>
    										
  											<input class="form-check-input" type="checkbox" id="misiones" name="misiones" >  
                        <label for="sel1">Misiones</label></BR>
    										


  											<input class="form-check-input" type="checkbox" id="rio_negro" name="rio_negro">
  											<label for="sel1">Río Negro</label></BR>

  											<input class="form-check-input" type="checkbox" id="salta" name="salta">
  											<label for="sel1">Salta</label></BR>

  											<input class="form-check-input" type="checkbox" id="san_juan" name="san_juan">
  											<label for="sel1">San Juan</label></BR>

  											<input class="form-check-input" type="checkbox" id="neuquen" name="neuquen">
  											<label for="sel1">Neuquen</label></BR>

  											<input class="form-check-input" type="checkbox" id="san_luis" name="san_luis">
  											<label for="sel1">San Luis</label></BR>

  											<input class="form-check-input" type="checkbox" id="santa_cruz" name="santa_cruz">
  											<label for="sel1">Santa Cruz</label></BR>

  											<input class="form-check-input" type="checkbox" id="santa_fe" name="santa_fe">
  											<label for="sel1">Santa Fé</label></BR>

  											<input class="form-check-input" type="checkbox" id="santiago_estero" name="santiago_estero">
  											<label for="sel1">Santiago del Estero</label></BR>

  											<input class="form-check-input" type="checkbox" id="tucuman" name="tucuman">
  											<label for="sel1">Tucuman</label></BR>	

  											<input class="form-check-input" type="checkbox" id="tierra_fuego" name="tierra_fuego">
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
  											<input class="form-check-input" type="checkbox"  id="sicore_iva" name="sicore_iva" >
  											<label class="form-check-label" for="defaultCheck1"> 
    										Sicore Iva
  											</label>
  										 </div>
  								   		 <div class="form-check">
  											<input class="form-check-input" type="checkbox"  id="sicore_ganancia" name = "sicore_ganancia" >
  											<label class="form-check-label" for="defaultCheck1"> 
    										Sicore Ganancia
  											</label>
  										 </div>
  										 <div class="form-check">
  											<input class="form-check-input" type="checkbox"  id="siager_liberales" name ="siager_liberales" >
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
    											<option value="1"  >Monotributista</option>
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
  										<select class="form-control" id="actividad_monotributo" name="actividad_monotributo" >
    											<option value="Servicios" >Servicios</option>
    											<option value="Bienes">Bienes</option>    
    											<option value="A-B">Ambos - Principal Bienes</option>   
                          <option value="A-S">Ambos - Principal Servicios</option>  
    											
  										</select></br>	
  										</div>
  										<label for="" class="col-sm-4 col-form-label">Adicionales</label>
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
  									 
  								   		 	 <input type="text" class="form-control" id="telefono" name="telefono" ></br>
  								   	
  								</div>
  								<label class="col-sm-2">Mail</label>	
  								<div class="col-sm-4">
  									 
  								   		 	 <input type="email" class="form-control" id="mail" name="mail"  ></br>
  								   	
  								</div>
  								<label class="col-sm-2">Fecha de ingreso</label>	
  								<div class="col-sm-10">
  								<input type="date" class="form-control" id="fecha_ingreso" name="fecha_ingreso"></br>
  								</div>
                  <label class="col-sm-2">Fecha de egreso</label>  
                  <div class="col-sm-10">
                  <input type="date" class="form-control" id="fecha_egreso" name="fecha_egreso" ></br>
                  </div>
  								<label class="col-sm-2">Fecha de cumpleaños</label>	
  								<div class="col-sm-10">
  								<input type="date" class="form-control" id="fecha_cumple" name="fecha_cumple"></br>
  								</div>
  								<label class="col-sm-2">Observaciones</label>	
  								<div class="col-sm-10">	
  								<input type="text" class="form-control" id="observaciones" name="observaciones" ></br>
  								</div>
  							</div>
  				</div>			
  				<button type="button" class="btn btn-primary btn-lg btn-block" id="btn_cargar">Cargar</button>
				<button type="button" class="btn btn-secondary btn-lg btn-block" id="btn_cancelar">Cancelar</button>			
  				</form>
  			 </div><!-- fin col-sm-12-->	
  		</div><!-- fin row --> 			

  								   		
   
  							 	
  								
  							
    			
			
			<div class="col-sm-4"></div>
		</div>
	</div>
</body>
</html>
<script type="text/javascript">
  $( document ).ready(function() {
    var id = $('#id_c').val();
     $('#id_cliente').val(id);
      $.ajax({
         method: 'POST',
          url:"../procesos/clientes/datoActualiza.php",  
          data: "id="+id,
          success:function(r){
            
             data= jQuery.parseJSON( r );
             
             $('#denominacion').val(data.denominacion);
             $('#estado').val(data.estado);
             $('#tipo').val(data.tipo_persona)
             $('#riesgo').val(data.riesgo)
             if(data.tipo_persona =="fisica"){
              $('#cuit').val(data.cuit);
              $('#cuitjuridico').prop('disabled', true);
              $('#cuitdueño').prop('disabled', true);
             }else{
              $('#cuit').prop('disabled', true);
              $('#cuitjuridico').val(data.cuit_juridico);
              $('#cuitdueño').val(data.cuit_titular);
             }
            $('#clave_fiscal').val(data.clave_fiscal);
            $('#clave_siprod').val(data.clave_dpt);
            $('#clave_sindicato').val(data.clave_sindicato);
            $('#clave_afim').val(data.clave_afim);

              if (data.manual=="0") {
            document.getElementById("facturacion_manual").checked = false;          
          }else{
            document.getElementById("facturacion_manual").checked = true;
          }

          if (data.electronica=="0") {
            document.getElementById("facturacion_electronica").checked = false;         
          }else{
            document.getElementById("facturacion_electronica").checked = true;         
          }
          
          if (data.controlador_fiscal=="0") {
            document.getElementById("facturacion_fiscal").checked = false;          
          }else{
            document.getElementById("facturacion_fiscal").checked = true;          
          }

          if (data.web_service==0) {
            document.getElementById("facturacion_web").checked = false;         
          }else{
            document.getElementById("facturacion_web").checked = true;         
          }

          if (data.factura_linea==0) {
            document.getElementById("facturacion_linea").checked = false;         
          }else{
            document.getElementById("facturacion_linea").checked = true;         
          }

          if (data.liberal_simplificado==0) {
            document.getElementById("liberal_simplificado").checked = false;          
          }else{
            document.getElementById("liberal_simplificado").checked = true;          
          }

          if (data.liberal_general==0) {
            document.getElementById("liberal_general").checked = false;         
          }else{
            document.getElementById("liberal_general").checked = true;         
          }


          if (data.ingresos_brutos_simplificado==0) {
            document.getElementById("brutos_simplificado").checked = false ;          
          }else{
            document.getElementById("brutos_simplificado").checked = true ;          
          }

          if (data.ingresos_brutos_general==0) {
            document.getElementById("brutos_general").checked = false;          
          }else{
            document.getElementById("brutos_general").checked = true;          
          }

          if (data.convenio_multilateral==0) {
            document.getElementById("convenioMultilateral").checked = false;  
            var chk = document.getElementById('convenioMultilateral');
            var caba = document.getElementById('caba');
            var bs_as = document.getElementById('bs_as');
            var catamarca = document.getElementById('catamarca');
            var chaco = document.getElementById('chaco');
            var chubut = document.getElementById('chubut');
            var cordoba = document.getElementById('cordoba');
            var corrientes = document.getElementById('corrientes');
            var entre_rios = document.getElementById('entre_rios');
            var formosa = document.getElementById('formosa');
            var jujuy = document.getElementById('jujuy');
            var la_pampa = document.getElementById('la_pampa');
            var la_rioja = document.getElementById('la_rioja');
            var mendoza = document.getElementById('mendoza');
            var misiones = document.getElementById('misiones');
            var chaco = document.getElementById('chaco');
            var rio_negro = document.getElementById('rio_negro');
            var salta = document.getElementById('salta');
            var neuquen = document.getElementById('neuquen');
            var san_juan = document.getElementById('san_juan');
            var san_luis = document.getElementById('san_luis');
            var santa_cruz = document.getElementById('santa_cruz');
            var santa_fe = document.getElementById('santa_fe');
            var santiago_estero = document.getElementById('santiago_estero');
            var tucuman = document.getElementById('tucuman');
            var tierra_fuego = document.getElementById('tierra_fuego');
            caba.disabled='disabled';
                bs_as.disabled='disabled';  
                mendoza.disabled='disabled';
              catamarca.disabled='disabled';
              chaco.disabled='disabled';
              chubut.disabled='disabled';
              cordoba.disabled='disabled';
              corrientes.disabled='disabled';
              entre_rios.disabled='disabled';
              formosa.disabled='disabled';
              jujuy.disabled='disabled';
              la_pampa.disabled='disabled';
              la_rioja.disabled='disabled';
              misiones.disabled='disabled';
              chaco.disabled='disabled';
              rio_negro.disabled='disabled';
              salta.disabled='disabled';
              san_juan.disabled='disabled';
              san_luis.disabled='disabled';
              santa_cruz.disabled='disabled';
              santa_fe.disabled='disabled';
              neuquen.disabled='disabled';
              santiago_estero.disabled='disabled';
              tucuman.disabled='disabled';
              tierra_fuego.disabled='disabled';

            }else{
              document.getElementById("convenioMultilateral").checked = true;            
            }






            var id_convenio = data.id_ater;
                 $.ajax({
                      method: 'POST',
                      url:"../procesos/clientes/datoAter.php",  
                     data: "idater="+id_convenio,
                    success:function(r){
                     
                      dato= jQuery.parseJSON( r );
                      if (dato.caba==1){
                       document.getElementById("caba").checked = true;
                      }
                        if (dato.bs_as==1){
                          document.getElementById("bs_as").checked = true;
                        }
                        if (dato.cordoba==1){
                          document.getElementById("cordoba").checked = true;
                        }         
                        if (dato.santa_fe==1){
                          document.getElementById("santa_fe").checked = true;
                        }         
                        if (dato.misiones==1){
                          document.getElementById("misiones").checked = true;
                        }         
                        if (dato.chaco==1){
                          document.getElementById("chaco").checked = true;
                        }
                        if (dato.entre_rios==1){
                          document.getElementById("entre_rios").checked = true;
                        }
                        if (dato.tucuman==1){
                          document.getElementById("tucuman").checked = true;
                        }
                        if (dato.mendoza==1){
                          document.getElementById("mendoza").checked = true;
                        }
                        if (dato.tierra_del_fuego==1){
                          document.getElementById("tierra_fuego").checked = true;
                        } 
                        if (dato.la_pampa==1){
                          document.getElementById("la_pampa").checked = true;
                        }         
                        if (dato.santa_cruz==1){
                          document.getElementById("santa_cruz").checked = true;
                        }         
                        if (dato.rio_negro==1){
                          document.getElementById("rio_negro").checked = true;
                        }         
                        if (dato.corrientes==1){
                          document.getElementById("corrientes").checked = true;
                        }         
                        if (dato.san_luis==1){
                          document.getElementById("san_luis").checked = true;
                        }         
                        if (dato.salta==1){
                          document.getElementById("salta").checked = true;
                        }         
                        if (dato.jujuy==1){
                          document.getElementById("jujuy").checked = true;
                        }         
                        if (dato.san_juan==1){
                          document.getElementById("san_juan").checked = true;
                        }         
                        if (dato.chubut==1){
                          document.getElementById("chubut").checked = true;
                        }         
                        if (dato.neuquen==1){
                          document.getElementById("neuquen").checked = true;
                        }         
                        if (dato.la_rioja==1){
                          document.getElementById("la_rioja").checked = true;
                        }         
                        if (dato.santiago_estero==1){
                          document.getElementById("santiago_estero").checked = true;
                        }         
                        if (dato.formosa==1){
                          document.getElementById("formosa").checked = true;
                        }
                        if (dato.catamarca==1){
                          document.getElementById("catamarca").checked = true;
                        } 


                    }

                 })

           if(data.sicore_iva==0){
              document.getElementById("sicore_iva").checked = false;
            }else{
              document.getElementById("sicore_iva").checked = true;
            }

            if(data.sicore_ganancia==0){
              document.getElementById("sicore_ganancia").checked = false;
            }else{
              document.getElementById("sicore_ganancia").checked = true;
            }   
            
            if(data.siager_liberales==0){
              document.getElementById("siager_liberales").checked = false;
            }   else{
              document.getElementById("siager_liberales").checked = true;
            }
            if(data.siager_ingresos_brutos==0){
              document.getElementById("siager_brutos").checked = false;
            }   else{
              document.getElementById("siager_brutos").checked = true;
            }
          
            if(data.afip=="Monotributista"){
            $('#afip').val(1);
            }

            if(data.afip=="R.I"){
            $('#afip').val(2);
            }

            if(data.afip=="Exento"){
            $('#afip').val(3);
            }

            if(data.afip=="No Inscripto"){
            $('#afip').val(4);
            }


            var id_con = data.id_condicion;
            if(data.afip=="Monotributista"){
               $.ajax({
                      method: 'POST',
                      url:"../procesos/clientes/datoMonotributista.php",  
                     data: "idcon="+id_con,
                    success:function(r){
                      
                      datos= jQuery.parseJSON( r );
                       $('#monotributo_ingreso').val(datos.ingresos_brutos);
                $('#categoria_monotributo').val(datos.categoria);
                $('#actividad_monotributo').val(datos.actividad);
                $('#adicional').val(datos.adicional); 
                }
                })            

            }else{

                $("#actividad_monotributo").prop("disabled", true);
                $("#adicional").prop("disabled", true);          
                $('#monotributo_ingreso').val(" ");
                $('#categoria_monotributo').val(" ");
                $('#actividad_monotributo').val(" ");
                $('#adicional').val(" ");         




               
            }


        $('#telefono').val(data.celular);
        $('#mail').val(data.mail);
        $('#fecha_ingreso').val(data.fecha_ingreso);
        $('#fecha_cumple').val(data.fecha_nac);
        $('#fecha_egreso').val(data.fecha_egreso);
        $('#observaciones').val(data.observaciones);




          }
      })
  });
</script>



<script type="text/javascript">
  $( function() {
    $("#tipo").change( function() {
        if ($(this).val() == "fisica") {
          $("#cuit").prop("disabled", false);
          $("#cuitjuridico").prop("disabled", true);
          $("#cuitdueño").prop("disabled", true);
          $("#cuitjuridico").val('');
          $("#cuitdueño").val('');
        }else {
             $("#cuitjuridico").prop("disabled", false);
             $("#cuitdueño").prop("disabled", false);
             $("#cuit").prop("disabled", true);
             $("#cuit").val('');
        }
    })
    })
</script>
<script type="text/javascript">
  $("#afip").change( function() {
        if ($(this).val() !== "Monotributista") {          
          $("#actividad_monotributo").prop("disabled", true);
          $("#adicional").prop("disabled", true);
          $("#adicional").val('');
        } else {
          $("#monotributo_ingreso").prop("disabled", false);
          $("#categoria_monotributo").prop("disabled", false);
          $("#actividad_monotributo").prop("disabled", false);
          $("#adicional").prop("disabled", false);
        }
    });
</script>

<script type="text/javascript">
  function validarConvenioGeneral(){
var cm = document.getElementById('convenioMultilateral');
var bg = document.getElementById('brutos_general');
if(bg.checked){
   if(cm.checked=true){cm.checked=false}
    if(caba.checked=true){caba.checked=false}
    if(bs_as.checked=true){bs_as.checked=false}
    if(mendoza.checked=true){mendoza.checked=false}
    if(catamarca.checked=true){catamarca.checked=false}
    if(chubut.checked=true){chubut.checked=false}
    if(cordoba.checked=true){cordoba.checked=false}
    if(corrientes.checked=true){corrientes.checked=false}
    if(entre_rios.checked=true){entre_rios.checked=false}
    if(formosa.checked=true){formosa.checked=false}
    if(jujuy.checked=true){jujuy.checked=false}
    if(la_pampa.checked=true){la_pampa.checked=false}
    if(la_rioja.checked=true){la_rioja.checked=false}
    if(chaco.checked=true){chaco.checked=false}
    if(salta.checked=true){salta.checked=false}
    if(san_juan.checked=true){san_juan.checked=false}
    if(san_luis.checked=true){san_luis.checked=false}
    if(santa_cruz.checked=true){santa_cruz.checked=false}
    if(santa_fe.checked=true){santa_fe.checked=false}
    if(santiago_estero.checked=true){santiago_estero.checked=false}
    if(tucuman.checked=true){tucuman.checked=false}
    if(tierra_fuego.checked=true){tierra_fuego.checked=false}
      if(misiones.checked=true){misiones.checked=false}
        if(rio_negro.checked=true){rio_negro.checked=false}
          if(neuquen.checked=true){neuquen.checked=false}
  caba.disabled='disabled';
    bs_as.disabled='disabled';  
    mendoza.disabled='disabled';
  catamarca.disabled='disabled';
  chaco.disabled='disabled';
  chubut.disabled='disabled';
  cordoba.disabled='disabled';
  corrientes.disabled='disabled';
  entre_rios.disabled='disabled';
  formosa.disabled='disabled';
  jujuy.disabled='disabled';
  la_pampa.disabled='disabled';
  la_rioja.disabled='disabled';
  misiones.disabled='disabled';
  chaco.disabled='disabled';
  rio_negro.disabled='disabled';
  salta.disabled='disabled';
  san_juan.disabled='disabled';
  san_luis.disabled='disabled';
  santa_cruz.disabled='disabled';
  santa_fe.disabled='disabled';
  santiago_estero.disabled='disabled';
  tucuman.disabled='disabled';
  tierra_fuego.disabled='disabled';

    cm.value='';
    cm.disabled='disabled';
}else{
 
  cm.disabled='';
}
}
function validarConvenioSimplificado(){
var cm = document.getElementById('convenioMultilateral');
var bs = document.getElementById('brutos_simplificado');
if(bs.checked){
  if(cm.checked=true){cm.checked=false}
      if(caba.checked=true){caba.checked=false}
    if(bs_as.checked=true){bs_as.checked=false}
    if(mendoza.checked=true){mendoza.checked=false}
    if(catamarca.checked=true){catamarca.checked=false}
    if(chubut.checked=true){chubut.checked=false}
    if(cordoba.checked=true){cordoba.checked=false}
    if(corrientes.checked=true){corrientes.checked=false}
    if(entre_rios.checked=true){entre_rios.checked=false}
    if(formosa.checked=true){formosa.checked=false}
    if(jujuy.checked=true){jujuy.checked=false}
    if(la_pampa.checked=true){la_pampa.checked=false}
    if(la_rioja.checked=true){la_rioja.checked=false}
    if(misiones.checked=true){misiones.checked=false}
    if(neuquen.checked=true){neuquen.checked=false}
    if(rio_negro.checked=true){rio_negro.checked=false}
    if(chaco.checked=true){chaco.checked=false}
    if(salta.checked=true){salta.checked=false}
    if(san_juan.checked=true){san_juan.checked=false}
    if(san_luis.checked=true){san_luis.checked=false}
    if(santa_cruz.checked=true){santa_cruz.checked=false}
    if(santa_fe.checked=true){santa_fe.checked=false}
    if(santiago_estero.checked=true){santiago_estero.checked=false}
    if(tucuman.checked=true){tucuman.checked=false}
    if(tierra_fuego.checked=true){tierra_fuego.checked=false}

        caba.disabled='disabled';
    bs_as.disabled='disabled';  
    mendoza.disabled='disabled';
  catamarca.disabled='disabled';
  chaco.disabled='disabled';
  chubut.disabled='disabled';
  cordoba.disabled='disabled';
  corrientes.disabled='disabled';
  entre_rios.disabled='disabled';
  formosa.disabled='disabled';
  jujuy.disabled='disabled';
  la_pampa.disabled='disabled';
  la_rioja.disabled='disabled';
  misiones.disabled='disabled';
   neuquen.disabled='neuquen';
  chaco.disabled='disabled';
  rio_negro.disabled='disabled';
  salta.disabled='disabled';
  san_juan.disabled='disabled';
  san_luis.disabled='disabled';
  santa_cruz.disabled='disabled';
  santa_fe.disabled='disabled';
  santiago_estero.disabled='disabled';
  tucuman.disabled='disabled';
  tierra_fuego.disabled='disabled';

    cm.value='';
    cm.disabled='disabled';
}else{

  cm.disabled='';
}
}
</script>

<script type="text/javascript">
  
function validarchk(){
var chk = document.getElementById('convenioMultilateral');
var caba = document.getElementById('caba');
var bs_as = document.getElementById('bs_as');
var catamarca = document.getElementById('catamarca');
var chaco = document.getElementById('chaco');
var chubut = document.getElementById('chubut');
var cordoba = document.getElementById('cordoba');
var corrientes = document.getElementById('corrientes');
var entre_rios = document.getElementById('entre_rios');
var formosa = document.getElementById('formosa');
var jujuy = document.getElementById('jujuy');
var la_pampa = document.getElementById('la_pampa');
var la_rioja = document.getElementById('la_rioja');
var mendoza = document.getElementById('mendoza');
var misiones = document.getElementById('misiones');
var chaco = document.getElementById('chaco');
var rio_negro = document.getElementById('rio_negro');
var salta = document.getElementById('salta');
var neuquen = document.getElementById('neuquen');
var san_juan = document.getElementById('san_juan');
var san_luis = document.getElementById('san_luis');
var santa_cruz = document.getElementById('santa_cruz');
var santa_fe = document.getElementById('santa_fe');
var santiago_estero = document.getElementById('santiago_estero');
var tucuman = document.getElementById('tucuman');
var tierra_fuego = document.getElementById('tierra_fuego');

if(chk.checked==true){  
  neuquen.disabled='';
  caba.disabled=''; 
  bs_as.disabled='';
  mendoza.disabled='';
  catamarca.disabled='';
  chaco.disabled='';
  chubut.disabled='';
  cordoba.disabled='';
  corrientes.disabled='';
  entre_rios.disabled='';
  formosa.disabled='';
  jujuy.disabled='';
  la_pampa.disabled='';
  la_rioja.disabled='';
  misiones.disabled='';
  neuquen.disabled='';
  chaco.disabled='';
  rio_negro.disabled='';
  salta.disabled='';
  san_juan.disabled='';
  san_luis.disabled='';
  santa_cruz.disabled='';
  santa_fe.disabled='';
  santiago_estero.disabled='';
  tucuman.disabled='';
  tierra_fuego.disabled='';
}else{ 
    if(caba.checked=true){caba.checked=false}
    if(bs_as.checked=true){bs_as.checked=false}
    if(mendoza.checked=true){mendoza.checked=false}
    if(catamarca.checked=true){catamarca.checked=false}
    if(chubut.checked=true){chubut.checked=false}
    if(cordoba.checked=true){cordoba.checked=false}
    if(corrientes.checked=true){corrientes.checked=false}
    if(entre_rios.checked=true){entre_rios.checked=false}
    if(formosa.checked=true){formosa.checked=false}
    if(jujuy.checked=true){jujuy.checked=false}
    if(la_pampa.checked=true){la_pampa.checked=false}
    if(la_rioja.checked=true){la_rioja.checked=false}
    if(chaco.checked=true){chaco.checked=false}
    if(salta.checked=true){salta.checked=false}
    if(san_juan.checked=true){san_juan.checked=false}
    if(san_luis.checked=true){san_luis.checked=false}
    if(santa_cruz.checked=true){santa_cruz.checked=false}
    if(santa_fe.checked=true){santa_fe.checked=false}
    if(santiago_estero.checked=true){santiago_estero.checked=false}
    if(tucuman.checked=true){tucuman.checked=false}
          if(tierra_fuego.checked=true){tierra_fuego.checked=false}
            if(misiones.checked=true){misiones.checked=false}
              if(rio_negro.checked=true){rio_negro.checked=false}
                if(neuquen.checked=true){neuquen.checked=false}


    caba.disabled='disabled';
    bs_as.disabled='disabled';  
    mendoza.disabled='disabled';
  catamarca.disabled='disabled';
  chaco.disabled='disabled';
  chubut.disabled='disabled';
  cordoba.disabled='disabled';
  corrientes.disabled='disabled';
  entre_rios.disabled='disabled';
  formosa.disabled='disabled';
  jujuy.disabled='disabled';
  la_pampa.disabled='disabled';
  la_rioja.disabled='disabled';
  misiones.disabled='disabled';
  chaco.disabled='disabled';
  rio_negro.disabled='disabled';
  salta.disabled='disabled';
  san_juan.disabled='disabled';
  san_luis.disabled='disabled';
  santa_cruz.disabled='disabled';
  santa_fe.disabled='disabled';
  santiago_estero.disabled='disabled';
  tucuman.disabled='disabled';
  tierra_fuego.disabled='disabled';
    neuquen.disabled='disabled';

  
}
}
</script>

<script type="text/javascript">
  $('#btn_cancelar').click(function(){
 $(location).attr('href','clientes.php');
})
</script>

<script type="text/javascript">
  $('#btn_cargar').click(function(){  
 if ($('#denominacion').val().length == 0) {
    alertify.alert('Ingrese Denominacion');
    return false;
  } 

   if ($('#tipo').val() == "fisica") {
      if($('#cuit').val().length ==0){
      alertify.alert('Ingrese el cuit');
    return false;
    }
  }

  if ($('#tipo').val() == "juridica") {
      if(($('#cuitjuridico').val()==0)||($('#cuitdueño').val()==0)){
      alertify.alert('Ingrese el cuit juridico y cuit titular');
    return false;
    }
  }  

contador = 0;

 if( $('#convenioMultilateral').prop('checked') ) {
    
    
   if( $('#caba').prop('checked') ) {
    contador = 1+contador;
    }
  if( $('#bs_as').prop('checked') ) {
    contador = 1+contador;
  }
  if( $('#mendoza').prop('checked') ) {
    contador = 1+contador;
  }
  if( $('#catamarca').prop('checked') ) {
    contador = 1+contador;
  }
  if( $('#chubut').prop('checked') ) {
    contador = 1+contador;
  }
  if( $('#corrientes').prop('checked') ) {
    contador = 1+contador;
  }
  if( $('#entre_rios').prop('checked') ) {
    contador = 1+contador;
  }
  if( $('#formosa').prop('checked') ) {
    contador = 1+contador;
  }
  if( $('#jujuy').prop('checked') ) {
    contador = 1+contador;
  }
  if( $('#la_pampa').prop('checked') ) {
    contador = 1+contador;
  }
  if( $('#la_rioja').prop('checked') ) {
    contador = 1+contador;
  }
  if( $('#chaco').prop('checked') ) {
    contador = 1+contador;
  }
  if( $('#salta').prop('checked') ) {
    contador = 1+contador;
  }
  if( $('#san_juan').prop('checked') ) {
    contador = 1+contador;
  }
  if( $('#san_luis').prop('checked') ) {
    contador = 1+contador;
  }
  if( $('#santa_cruz').prop('checked') ) {
    contador = 1+contador;
  }
  if( $('#santa_fe').prop('checked') ) {
    contador = 1+contador;
  }
  if( $('#santiago_estero').prop('checked') ) {
    contador = 1+contador;
  }
  if( $('#tucuman').prop('checked') ) {
    contador = 1+contador;
  }
  if( $('#tierra_fuego').prop('checked') ) {
    contador = 1+contador;
  }




if(contador<2){
   alertify.alert('Selecione al menos 2 juridicones');
    return false;

}

}


    datos=$('#frmClientes').serialize();
    $.ajax({
      type:"POST",
      data:datos,
      url:"../procesos/clientes/actualizaClientes.php",         
      success:function(r){  
          
        if(r==1){                      
          alertify.success("Cliente modificado con exito");
        
        }else{     
        alert(r);             
          alertify.error("No se pudo modificar cliente");
        }

      }
    })    
    
  });
  


</script>
<script type="text/javascript">
  $('#afip').change(function(){
    if($('#afip').val()!=1){
      $("#actividad_monotributo").prop("disabled", true);
      $("#adicional").prop("disabled", true);          
                $('#monotributo_ingreso').val(" ");
                $('#categoria_monotributo').val(" ");
                $('#actividad_monotributo').val(" ");
                $('#adicional').val(" ");  

    }else{
        $("#actividad_monotributo").prop("disabled", false);
      $("#adicional").prop("disabled", false);          

    }
  })

</script>

<?php 
}else{
  header("location:../index.php");
}

 ?>