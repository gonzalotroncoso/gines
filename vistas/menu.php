<?php 
  require_once "dependencias.php"; 

  
?>
<!DOCTYPE html>
<html>
<head>
  <title></title>
</head>

<head>
  <title></title>
</head>
<body>

  <!-- Begin Navbar -->
  <div id="nav">
    <div class="navbar navbar-inverse navbar-fixed-top" data-spy="affix" data-offset-top="100">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          
        </div>
        <div id="navbar" class="collapse navbar-collapse">

          <ul class="nav navbar-nav navbar-center">

          <li> <a href="clientes.php"><span class="glyphicon glyphicon-user"></span> Inicio  </a></li>
          <li class="dropdown">
            <a href="clientes.php" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="glyphicon glyphicon-user"></span> Clientes <span class="caret"></span></a>
            <ul class="dropdown-menu">
              <li><a href="altaCliente.php">Alta</a></li>
              <li><a href="bajaCliente.php">Baja</a></li>
              <li><a href="verEmpleados.php">Ver Empleados</a></li>
              <li><a href="agregaEmpleado.php">Agregar Empleados</a></li>      
            </ul>

            </li>
             <li> <a href="ingresosBrutos.php"><span class="glyphicon glyphicon-list-alt"></span> Ingresos Anuales  </a></li>
            <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="glyphicon glyphicon-list-alt"></span> Monotributo <span class="caret"></span></a>
            <ul class="dropdown-menu">
              <li><a href="verMonotributista.php">Ver datos monotributistas</a></li>
            <!--  <li><a href="nuevoMonotributo.php">Cargar Ingreso Bruto Anual</a></li>-->
             <!-- <li><a href="MesMonotributo.php">Cargar Mes</a></li>              -->
              <li><a href="editarFechaMono.php">Modificar monto de mes</a></li>              
              <li><a href="recategorizacion.php">Recategorizar</a></li>              
            </ul>        
          </li>

          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="glyphicon glyphicon-list-alt"></span> Liquidacion Mensual<span class="caret"></span></a>
            <ul class="dropdown-menu">
              <li><a href="liquidacionMensual.php">Cargar Liquidacion</a></li>
              <li><a href="verLiquidacion.php">Ver/Modificar Liquidación</a></li>
              
              
            </ul>        
          </li>

           <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="glyphicon glyphicon-list-alt"></span> Banco<span class="caret"></span></a>
            <ul class="dropdown-menu">
              <li> <a href="pagos.php">Pagos </a></li>
              <li> <a href="morosos.php"></span> Deudas  </a></li>
              
              
            </ul>        
          </li>
           
     
     
      
        <?php
      if($_SESSION['rango']=="admin"):
         ?>
           <li><a href="usuarios.php"><span class="glyphicon glyphicon-user"></span> Administrar usuarios</a>
            </li>
         <?php 
      endif;
          ?>


        
          
          <li class="dropdown" >
            <a href="#" style="color: blue"  class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="glyphicon glyphicon-user"></span> <?php echo $_SESSION['usuario']; ?>  <span class="caret"></span></a>
            <ul class="dropdown-menu">
              <li> <a style="color: blue" href="../procesos/salir.php"><span class="glyphicon glyphicon-off"></span> Salir</a></li>
              <li> <a href="#" id="exportar">Exportar base de datos</a></li>
               <li> <a href="">Vaciar base de datos</a></li>
               <li> <a href="cargaTablaMonotributo.php">Modificar tabla de monotributo</a></li>
               <li> <a href="">Modificar tabla de pago simplificado</a></li>              
            </ul>
          </li>
        </ul>
        
      </div>
      <!--/.nav-collapse -->
    </div>
    <!--/.contatiner -->
  </div>
</div>
<!-- Main jumbotron for a primary marketing message or call to action -->





<!-- /container -->        


</body>
</html>
<script type="text/javascript">
  $('#exportar').click(function(){
    alertify.confirm("Desea exportar la base de datos",
      function (e) {
              if (e) {
                $.ajax({
      url:"../procesos/clientes/recTodos.php",
      success:function(r){
        if (r == 1) {
                    alertify.success('Base de datos guardada en la carpeta del sistema');
                    }
              }
            })
          }
        })
      })      

</script>

