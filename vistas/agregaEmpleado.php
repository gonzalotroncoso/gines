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
<title>Agregar Empleados</title>
	<?php require_once "menu.php" ?>
</head>
<body>
	<div class="container">
      <center><b><h3>Agregar Empleado</h3></b></center>
		<div class="row">
			<div class="col-sm-12">

        <form id='empleador'>
				</select>
					<label>Seleccionar Cliente</label>
						<select class="form-control input-sm" id="clienteVenta" name="clienteVenta">
			
						<?php
							$sql ="SELECT * FROM clientes ORDER BY nro_cliente ASC";
							$stmt = $dbh->prepare($sql);
							$stmt->execute();
							while ($cliente = $stmt->fetch()):
              ?>
              
							<option value="<?php echo $cliente['id_cliente'] ?>"><?php echo utf8_decode($cliente['denominacion'])?></option>
							<?php endwhile; ?>
						</select> </br>
            
    			</div> 
	     </div>
        
        <div class="panel panel-primary">
                <div class="panel-heading">Empleador</div>
                  <div class="panel-body">
                    <div class="panel panel-success">
                      <div class="panel-heading">Casa Particular</div>
                      <div class="panel-body">
                      <div class="row">
                        <div class="col-sm-6">
                          <div class="panel panel-warning">
                          
                          <div class="panel-body">
                            <label>Edad</label>
                          <select class="form-control" id="edad" name="edad">
                          <option value="1">Seleccionar edad</option>  
                          <option value="+18">Mayor de edad</option>
                          <option value="-18">Menor de edad</option>                         
                          <option value="jubilado">Jubilado</option>                 
                      </select> <br>
                          </div>
                          </div>  
                        </div>
                        <div class="col-sm-6">
                          <div class="panel panel-warning">                          
                          <div class="panel-body">
                             <label>Carga horaria</label>
                             <select class="form-control" id="horario" name="horario">                          
                              <option value="1">Seleccionar carga horaria</option>
                                <option value="-12">Menos de 12 horas semanales</option>
                                <option value="-16">Menos de 16 horas semanales</option>                         
                                <option value="+16">Mas de 16 horas semanales</option>                 
                      </select> <br>
                            
                          </div>
                          </div> 
                        </div>
                       </div>    
                        </div>
                      </div>
                      <div class="panel panel-success">
                        <div class="panel-heading">Convenio Sindical</div>
                          <div class="panel-body">
                             <label>Sindicatos</label>
                             <select class="form-control" id="sindicato" name="sindicato">
                                <option value="1">Seleccionar sindicato</option>                      
                                <option value="2">Sanidad</option>
                                <option value="3">SMATA</option>                         
                                <option value="4">UOM</option>                 
                                <option value="5">Gastronomico</option>    
                                <option value="6">UTEDYC</option>                              
                                <option value="7">Comercio</option>                              
                      </select> <br>
                            
                          </div>
                      </div>
                  </div>
                </div>
                   <button type="button" class="btn btn-success btn-lg btn-block" id="btn_cargar">Cargar</button>
        <button type="button" class="btn btn-secondary btn-lg btn-block" id="btn_cancelar">Cancelar</button> 
        </div>

				</form>
	</div>
		
</body>
</html>





<script type="text/javascript">
	$( function() {
    $("#edad").change( function() {
        if ($(this).val() !== "1") {          
          $("#sindicato").prop("disabled", true);          
        } else {         
          $("#sindicato").prop("disabled", false);
          
        }
    });
});

$('#btn_cargar').click(function(){
    

   datos=$('#empleador').serialize();
   $.ajax({
     type:"POST",
     data:datos,
    url:"../procesos/clientes/agregaEmpleado.php",          

   success:function(r){   
   
     if(r==1){    
      
          
        alertify.success("Empleado agregado con exito");
      }else{
   
         alertify.error("No se pudo agregar empleado");
        }

     }
   })    
    
  });

</script>


<script type="text/javascript">
  $( function() {
    $("#horario").change( function() {
        if ($(this).val() !== "1") {          
          $("#sindicato").prop("disabled", true);          
        } else {         
          $("#sindicato").prop("disabled", false);
          
        }
    });
});
</script>

<script type="text/javascript">
  $( function() {
    $("#sindicato").change( function() {
        if ($(this).val() !== "1") {          
          $("#edad").prop("disabled", true);          
          $("#horario").prop("disabled", true);          
        } else {         
          $("#edad").prop("disabled", false);
          $("#horario").prop("disabled", false);
          
        }
    });
});
</script>
<script type="text/javascript">
  $(document).ready(function(){
    $('#clienteVenta').select2();
    
  })
</script>

<?php 
}else{
  header("location:index.php");
}

 ?>