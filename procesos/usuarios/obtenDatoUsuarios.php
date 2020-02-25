<?php 

require_once "../../clases/Conexion.php";

require_once "../../clases/Usuarios.php";

 $idusr=$_POST['idusuario'];
$obj = new  usuarios();
echo json_encode ($obj->obtenDatosUsuarios($idusr));



 ?>