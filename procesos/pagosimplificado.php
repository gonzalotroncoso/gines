<?php 
require_once "../clases/Conexion.php";
$c = new conectar();
$dbh = $c->conexion();

$s = "SELECT * FROM MONOTRIBUTO";
$st = $dbh->prepare($s);
$st->execute();
while($cliente = $st->fetch()){ 
$ingresos_brutos = $cliente['ingresos_brutos'];
$id_condicion = $cliente['id_condicion'];
$monto= 0;

if($ingresos_brutos > 0){
	if ($ingresos_brutos<= 208739){
                    $monto = 600;
                }else if ($ingresos_brutos >208739 && $ingresos_brutos<= 313108 ){
                    $monto = 756;
                }else if ($ingresos_brutos>313108 && $ingresos_brutos<= 417478){
                    $monto = 1057;
                }else if ($ingresos_brutos> 417478 && $ingresos_brutos <= 626217 ){
                    $monto =  1510;
                }else if ($ingresos_brutos > 626217 && $ingresos_brutos <= 834957){
                    $monto =  2115;
                }else if ($ingresos_brutos > 834957 && $ingresos_brutos <= 1043696){
                    $monto =  2719;
                }else if ($ingresos_brutos > 1043696 && $ingresos_brutos <= 1252435){
                    $monto =   3324;
                }else if ($ingresos_brutos > 1252435 && $ingresos_brutos <= 1739493){
                    $monto =   4332;
                }else if ($ingresos_brutos > 1739493 && $ingresos_brutos <= 2043905){
                    $monto =    5476;
                }else if ($ingresos_brutos > 2043905 && $ingresos_brutos <= 2348316){
                    $monto =    6358;
                }else if ($ingresos_brutos > 2348316 && $ingresos_brutos <= 2609240){
                    $monto =    7176;
                }
               
                $sql = "INSERT INTO pago_simplificado (id_condicion, montoSimplificado) VALUES (:id_condicion, :monto)";
                $stmt20 = $dbh->prepare($sql);
                $stmt20->bindValue(':id_condicion',$id_condicion,PDO::PARAM_INT);
                $stmt20->bindValue(':monto',$monto,PDO::PARAM_INT);
                if($stmt20->execute()){
                   echo "inserto pago simplificado";                
                }else{
                   print_r($stmt20->errorInfo());
                }

}



        }
 ?>