<?php 
require_once "../clases/Conexion.php";
$c = new conectar();
$dbh = $c->conexion();

 $s = "SELECT * FROM monotributo";
    $st = $dbh->prepare($s);
    $st->execute();
    
    while($mono = $st->fetch()){
        
        $sq = "SELECT * FROM tabla_simplificado where categoria = :categoria";
        $stm = $dbh->prepare($sq);
        $stm->bindValue(':categoria',$mono['categoria'],PDO::PARAM_STR);
        $stm->execute();
        $tabla = $stm->fetch();
        if($mono['ingresos_brutos']!=0  || $mono['categoria']!= '' ){
            $sql = "INSERT INTO pago_simplificado (id_condicion, montoSimplificado) values(:id, :pago)";
        $stmt = $dbh->prepare($sql);
        $stmt->bindValue(':id',$mono['id_condicion'],PDO::PARAM_INT);
        $stmt->bindValue(':pago',$tabla['impuesto']);
        if($stmt->execute()){
            echo ("cargo<br>");
        }else{
            print_r($stmt->errorInfo());
        }
       

        }
        
    }


 ?>