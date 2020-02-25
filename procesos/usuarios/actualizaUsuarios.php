<?php 

require_once"../../clases/Conexion.php";
require_once "../../clases/Usuarios.php";


$id = $_POST['idusuario'];
$nombre =$_POST['nombreu'];
$apellido =$_POST['apellidou'];
$usr=$_POST['usuariou'];
if($_POST['passu']!=null){ 
		$pass=$_POST['passu'];
	}else{
		 $pass='nulo';

	}
$datos = array($id,$nombre,$apellido,$usr,$pass);

$obj = new usuarios();
echo $obj->actualizaUsuario($datos);


 ?>