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
	<title>Cargar Pagos</title>
	<?php require_once "menu.php" ?>
</head>
<body>
<div class="container">
	<form id="liquidacion" name="liquidacion">		
		<!-- FILA SUPERIOR-->
		 <div class="row"><!--INICIO ROW SUPERIOR-->
			<div class="col-sm-12"> <!--INICIO COL SUPERIOR-->

				<!-- INICIO SELECCIONAR CLIENTE -->
				<label class="col-sm-2">Seleccionar Cliente</label>
					<div class="col-sm-4"> 
						<select class="form-control input-sm" id="id_cliente" name="id_cliente">
					<option value="0"> Seleccionar cliente</option>
					<?php
							$estado = "inactivo";
							$sql ="SELECT * FROM clientes c, datosfiscales d  where c.id_cliente = d.id_cliente ORDER BY nro_cliente ASC";			
							$stmt = $dbh->prepare($sql);	
							$stmt->execute();
							while ($cliente = $stmt->fetch()):            ?>
              
							<option value="<?php echo $cliente['id_cliente'] ?>"><?php echo utf8_decode($cliente['denominacion'])?></option>
							<?php endwhile; ?>
						</select> 
					</div>
					
		
		<!-- FIN SELECCIONAR CLIENTE -->

		<!-- SELECCIONAR FECHA -->
		 <label class="col-sm-1">Fecha</label>    			    			    			
	    		      <div class="col-sm-5">
	    		      		<input class="form-control" type="date" name="fecha" id="fecha" value="<?php echo date("Y-m-d");?>"><br>
	    		      </div>
	     
	     <!-- SELECCIONAR FECHA -->
		</div><!--FIN COL SUPERIOR-->
	</div><!--FIN ROW SUPERIOR-->
	<!-- FILA SUPERIOR-->

	<!-- INICIO TABLA DATOS -->
	<div class="row">
	    	<div class="col-sm-12">
	    		<div class="panel panel-primary">
	    			<div class="panel-heading">Datos</div>
	    			<div class="panel-body">
	    				<table class="table table-responsive table-hover table-condensed table-border " style ="text-align: center;" class="grilla" id="tablajson" >
	    					<thead class="active">
	    						<th class="active">Numero de cliente</th>
	    						<th class="active">Denominación</th>
	    						<th class="active">Tipo Persona</th>
	    						<th class="active">Estado</th>
	    						<th class="active">Cuit</th>
	    						
	    					</thead>
	    					<tbody  style ="text-align: center;" >
	    						
	    					</tbody>
	    				</table>
	    			</div>
	    		</div>
	    	</div>
	</div>
	<!-- FIN TABLA DATOS -->

	<!--INICIO FILA -->
	<div class="row">
		<!-- INICIO BASE IMPONIBLE -->
		<div class="col-sm-6">
					<div class="panel panel-primary">
	    				<div class="panel-heading">Base Imponible</div>
	    				<div class="panel-body">
	    					<label class="col-sm-4">Monotributo</label>    			    			    			
	    		    		  <div class="col-sm-8">
	    		    		  	<input class="form-control" type="text" name="monotributo" id="monotributo"onKeyUp="cal()"><br>
	    		    		  </div>

	    			  		<label class="col-sm-4">ATER</label>    			    			    			    
	    		      			<div class="col-sm-8">
	    		      				<input class="form-control" type="text" name="ater" id="ater"onKeyUp="cal()"><br>
	    		      			</div>

	    		      <label class="col-sm-4" >Municipalidad</label>		    			    			    
	    		      <div class="col-sm-8"><input class="form-control" type="text" name="municipalidad" id="municipalidad"onKeyUp="cal()"></div>	

	    				</div>
	    			</div>	

		</div>
		
	<!-- FIN BASE IMPONIBLE -->

	<!-- INICIO -->
		<div class="col-sm-6">
			<div class="panel panel-primary">
	    			<div class="panel-heading">Remunerativo</div>
	    			<div class="panel-body">

	    			  <label >Empleador</label>    			    			    			    
	    			
	    		      	<input class="form-control" type="text" name="empleador" id="empleador"onKeyUp="cal()"><br>
	    		    

	    		      <label >Sindicato</label>    			    			    			    
	    		    
	    		      	<input class="form-control" type="text" name="sindicato" id="sindicato"onKeyUp="cal()">
	    		    

	    			</div>
	    		</div>
		</div>
	<!-- FIN -->
	</div>
	<!--FIN FILA -->

	<!--INICIO FILA -->
	<div class="row">
		<div class="col-sm-12">
				<div class="panel panel-primary">
	    			<div class="panel-heading">Monto Retenido</div>
	    			<div class="panel-body">
	    				<label class="col-sm-1">IVA</label>    			    			    			    
	    					<div class="col-sm-5">
	    		      		<input class="form-control" type="text" name="iva" id="iva"onKeyUp="cal()"><br>	    			
	    		      		</div>

	    		      	<label class="col-sm-1" >Sicore</label>    			    			    			    
	    		      	<div class="col-sm-5">
	    		      		<input class="form-control" type="text" name="sicore" id="sicore"onKeyUp="cal()">	
	    		      	</div>
	    			</div>

	    		</div>
	    </div>	
			
		
		
	</div>
	<!--FIN FILA -->

	<!-- inicio row col montos -->
	<div class="row">
		<div class="col-sm-12">
			<div class="panel panel-primary">
				<div class="panel-heading">Otros montos</div>
				<div class="panel-body">
					<div class="row">				

							<label class="col-sm-1">Ganancias</label>
			    			<div class="col-sm-2">
			    				<input type="text" class="form-control" name="ganancias" id="ganancias"onKeyUp="cal()">
			    			</div>	

			    			<label class="col-sm-1">Autonomos</label>	    			    			    			   
			    			<div class="col-sm-2">
			    				<input type="text" class="form-control" name="autonomos" id="autonomos"onKeyUp="cal()">
			    			</div>	

			    			<label class="col-sm-1">Caja de prevision social</label>	    			    			    			   

			    			<div class="col-sm-2">
			    				<input type="text" class="form-control" name="caja" id="caja"onKeyUp="cal()">
			    			</div>	

			    			<label class="col-sm-1">Aportes</label>	    			    			    			   

			    			<div class="col-sm-2">
			    				<input type="text" class="form-control" name="aportes" id="aportes"onKeyUp="cal()">
			    			</div>

	    			</div>

	    			<hr />

	    			<div class="row">

			    			<label class="col-sm-1">Legalizados CPCEER</label>	    			    			    			   

			    			<div class="col-sm-2">
			    				<input type="text" class="form-control" name="CPCEER" id="CPCEER"onKeyUp="cal()">
			    			</div>	

			    			<label class="col-sm-1">Matricula</label>	    			    			    			   

	    					<div class="col-sm-2">
	    						<input type="text" class="form-control" name="matricula" id="matricula"onKeyUp="cal()">
	    					</div>	

	    					<label class="col-sm-1">SUSS - F 931</label>	    			    			    			   

	    					<div class="col-sm-2">
	    						<input type="text" class="itemTotalNeto form-control" name="SUSS" id="SUSS"  onKeyUp="cal()">
	    					</div>

	    					<label class="col-sm-1">LEY 4035</label>	    			    			    			   

	    					<div class="col-sm-2">
	    						<input type="text" class="itemTotalNeto form-control" name="ley" id="ley" onKeyUp="cal()" >
	    					</div>	
	    			</div>

	    			<hr />

				</div><!-- fin panel body-->
				
			</div>	<!-- fin panel-->
		</div>		
	</div>
	<!-- inicio row col montos -->

	<div class="row">
		<div class="col-sm-12">
			<div class="panel panel-primary">
				<div class="panel-heading">Honorarios y monto total</div>
				<div class="panel-body">

				<div class="row">
					<label class="col-sm-2">Honorarios</label>	    			    			    			   
		    		<div class="col-sm-10">
		    			<input type="text" class="itemTotalNeto form-control" name="honorarios" id="honorarios" onKeyUp="cal()">
		    		</div>
				</div>	
		<hr/>
				<div class="row">
				<label class="col-sm-2">Total</label>	    			    			    			   

	    		<div class="col-sm-10">
	    			<input type="text" class="form-control" name="total" id="total">
	    		</div>		
	    		</div>
		
	    					
			</div>

		</div>	
	</div>

<hr/>
				<div class="col-sm-6">
				<button type="button" class="btn btn-primary btn-lg btn-block" id="btn_cargar">Cargar</button>
				</div>

				<div class="col-sm-6">
				<button type="button" onclick="history.back()"  class="btn btn-danger btn-lg btn-block" id="btn_cancelar">Cancelar</button>		
				</div>
	</form>	








</div><!--FIN CONTAINER -->
	   
</body>
</html>	
<script src="../js/pagos.js"></script>
<?php 
}else{
  header("location:index.php");
}

 ?>