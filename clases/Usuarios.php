<?php 
	class usuarios{
		public function registroAdmin($datos){
			$c = new conectar();
		$dbh = $c->conexion();
		$fecha = date('Y-m.d');



			$consulta = 'INSERT INTO usuarios';
			$consulta .= ' (nombre, apellido, email, password, rango)';
			$consulta .= ' VALUES ';
			$consulta .= '(:nombre, :apellido, :email,:password, :rango)';
			$stmt = $dbh->prepare($consulta);
			$stmt->bindValue(':nombre', $datos[0], PDO::PARAM_STR);
			$stmt->bindValue(':apellido', $datos[1], PDO::PARAM_STR);
			$stmt->bindValue(':email', $datos[2],PDO::PARAM_STR);
			$stmt->bindValue(':password', $datos[3],PDO::PARAM_STR);
			$stmt->bindValue(':rango', 'admin',PDO::PARAM_STR);
			if($stmt->execute()){			
			 return true;
			 	}

		}

		public function registroUsuario($datos){
		$c = new conectar();
		$dbh = $c->conexion();
		$fecha = date('Y-m.d');



			$consulta = 'INSERT INTO usuarios';
			$consulta .= ' (nombre, apellido, email, password, rango)';
			$consulta .= ' VALUES ';
			$consulta .= '(:nombre, :apellido, :email,:password, :rango)';
			$stmt = $dbh->prepare($consulta);
			$stmt->bindValue(':nombre', $datos[0], PDO::PARAM_STR);
			$stmt->bindValue(':apellido', $datos[1], PDO::PARAM_STR);
			$stmt->bindValue(':email', $datos[2],PDO::PARAM_STR);
			$stmt->bindValue(':password', $datos[3],PDO::PARAM_STR);
			$stmt->bindValue(':rango', 'usuario',PDO::PARAM_STR);
			if($stmt->execute()){			
			 return true;
			 	}



		}
		public function loginUser($datos){
		$c = new conectar();
		$dbh = $c->conexion();
		$password =sha1($datos[1]);
		$_SESSION['usuario']=$datos[0];
		$_SESSION ['iduser']=self::traerid($datos);
		$consulta = 'SELECT * FROM usuarios WHERE email = :email AND password = :password ';
		$stmt = $dbh->prepare($consulta);
		$stmt->bindValue(':email', $datos[0]);
		$stmt->bindValue(':password', $password);
		$stmt->execute();
		$usuario = $stmt->fetch();
		$count = $stmt->rowCount();
			$_SESSION['rango']= $usuario['rango'];
			if ($count>0){
				return $count;
				}else
				{
				return $count;	
				} 
		


		}

	
		public function traerid($datos){
		$c = new conectar();
		$dbh = $c->conexion();
		$password =sha1($datos[1]);
		$_SESSION['usuario']=$datos[0];
		$consulta = 'SELECT * FROM usuarios WHERE email = :email AND password = :password ';
		$stmt = $dbh->prepare($consulta);
		$stmt->bindValue(':email', $datos[0]);
		$stmt->bindValue(':password', $password);
		$stmt->execute();
		$user = $stmt->fetch(PDO::FETCH_ASSOC);
		$id =$user['id_usuario'];
		return $id;
		}

	public function obtenDatosUsuarios($idusr){
		$c =  new conectar();
		$dbh = $c->conexion();
	$sql = "SELECT * FROM usuarios where id_usuario = :idusuario";
	$stmt = $dbh->prepare($sql);	
	$stmt->bindValue(':idusuario' ,$idusr , PDO::PARAM_INT);
	$stmt->execute();						
	$art = $stmt->fetch();
	$dato=array(
		"id_usuario"=>$art['id_usuario'],
		"nombre"=>$art['nombre'],
		"apellido"=>$art['apellido'],
		"email"=>$art['email']
		
	);
	return $dato;

	}
	public function actualizaUsuario($datos){
		if($datos[4]=='nulo'){
			$c =  new conectar();
		$dbh = $c->conexion();		
		$consulta = "UPDATE usuarios SET nombre = :nombre,
						apellido = :apellido,
						email = :usr WHERE id_usuario = :id";		
		$stmt = $dbh->prepare($consulta);
		$stmt->bindValue(':nombre', $datos[1], PDO::PARAM_STR);
		$stmt->bindValue(':apellido', $datos[2], PDO::PARAM_STR);
		$stmt->bindValue(':usr', $datos[3], PDO::PARAM_STR);
		$stmt->bindValue(':id', $datos[0], PDO::PARAM_INT);
		
		
		return $stmt->execute();

		}else{
		$c =  new conectar();
		$dbh = $c->conexion();		
		$consulta = "UPDATE usuarios SET nombre = :nombre,
						apellido = :apellido,
						email = :usr, password=:password WHERE id_usuario = :id";		
		$stmt = $dbh->prepare($consulta);
		$stmt->bindValue(':nombre', $datos[1], PDO::PARAM_STR);
		$stmt->bindValue(':apellido', $datos[2], PDO::PARAM_STR);
		$stmt->bindValue(':usr', $datos[3], PDO::PARAM_STR);
		$stmt->bindValue(':id', $datos[0], PDO::PARAM_INT);
		$stmt->bindValue(':password', $datos[4], PDO::PARAM_STR);
		
		return $stmt->execute();


}

	}

	public function eliminarUsuario($id){
		$c = new conectar();
		$dbh = $c->conexion();
		$consulta = "DELETE FROM usuarios
					 WHERE id_usuario = :id_usuarios";
		$stmt = $dbh->prepare($consulta);
		$stmt->bindValue(':id_usuarios', $id, PDO::PARAM_INT);
		return $stmt->execute();

	}


}	

	


 ?>
