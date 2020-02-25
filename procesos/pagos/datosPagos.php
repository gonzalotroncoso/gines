<?php 
require_once"../../clases/Conexion.php";
$c = new conectar();
$dbh = $c->conexion();
 $data = json_decode($_POST['data']);
 $sql = "SELECT * FROM pagos where id_cliente =:id and fecha=:fecha";
 $stmt = $dbh->prepare($sql);
 $stmt->bindValue(':id',$data[0],PDO::PARAM_INT);
 $stmt->bindValue(':fecha',$data[1],PDO::PARAM_STR);
 $stmt->execute();
 $pago = $stmt->fetch();
 $dato=array("monotributo"=>$pago['monotributo'],
 			 "iva"=>$pago['iva'],
 			 "autonomo"=>$pago['autonomo'],
 			 "caja"=>$pago['caja'],
 			 "aportes"=>$pago['aportes'],
 			 "cpceer"=>$pago['cpceer'],
 			 "matricula"=>$pago['matricula'],
 			 "suss"=>$pago['suss'],
 			 "ley4035"=>$pago['ley4035'],
 			 "honorarios"=>$pago['honorarios'],
 			 "ater"=>$pago['ater'],
 			 "municipalidad"=>$pago['municipalidad'],
 			 "sindicato"=>$pago['sindicato'],
 			 "empleador"=>$pago['empleador'],
 			 "sicore"=>$pago['sicore'],
 			 "ganancias"=>$pago['ganancias']
				);
 echo json_encode($dato);


 ?>
