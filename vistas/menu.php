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
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="glyphicon glyphicon-user"></span> Clientes <span class="caret"></span></a>
            <ul class="dropdown-menu">
              <li><a href="altaCliente.php">Alta</a></li>
              <li><a href="bajaCliente.php">Baja</a></li>
              <li><a href="verEmpleados.php">Ver Empleados</a></li>
              <li><a href="agregaEmpleado.php">Agregar Empleados</a></li>      
            </ul>

            </li>

            <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="glyphicon glyphicon-list-alt"></span> Monotributo <span class="caret"></span></a>
            <ul class="dropdown-menu">
              <li><a href="verMonotributista.php">Ver datos monotributistas</a></li>
              <li><a href="nuevoMonotributo.php">Cargar Periodo</a></li>
              <li><a href="MesMonotributo.php">Cargar Mes</a></li>              
              <li><a href="editarFechaMono.php">Modificar monto de mes</a></li>              
              <li><a href="recategorizacion.php">Recategorizar</a></li>              
            </ul>        
          </li>

          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="glyphicon glyphicon-list-alt"></span> Liquidacion Mensual<span class="caret"></span></a>
            <ul class="dropdown-menu">
              <li><a href="liquidacionMensual.php">Agregar Liquidacion</a></li>
              <li><a href="verLiquidacion.php">Ver Liquidación</a></li>
              
              
            </ul>        
          </li>

           
     

      <li> <a href="pagos.php"><span class="glyphicon glyphicon-user"></span> Pagos  </a></li>
        <li> <a href="morosos.php"><span class="glyphicon glyphicon-user"></span> Deudas  </a></li>
        <?php
      if($_SESSION['rango']=="admin"):
         ?>
           <li><a href="usuarios.php"><span class="glyphicon glyphicon-user"></span> Administrar usuarios</a>
            </li>
         <?php 
      endif;
          ?>


        
          
          <li class="dropdown" >
            <a href="#" style="color: blue"  class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="glyphicon glyphicon-user"></span> Usuario: <?php echo $_SESSION['usuario']; ?>  <span class="caret"></span></a>
            <ul class="dropdown-menu">
              <li> <a style="color: blue" href="../procesos/salir.php"><span class="glyphicon glyphicon-off"></span> Salir</a></li>
              
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

