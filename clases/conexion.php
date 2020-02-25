<?php 
	class conectar{		
		private $dsn = 'mysql:dbname=gines 2;host=localhost';
		private $usuario = 'root';
		private $contrasenia = '';



		public function conexion(){
			$dbh = new PDO($this->dsn,$this->usuario, $this->contrasenia);	

			return $dbh;
		}
	}

	

	

 ?>