<?php
		
	require_once "../clases/Conexion.php";
    require_once "../clases/clientes.php";

    $count = 0;
	$c = new conectar();
	$dbh = $c->conexion();
    $cliente = new clientes();
    include 'simplexlsx.class.php';
    $xlsx = new SimpleXLSX( 'gines.xlsx' );
    foreach ($xlsx->rows() as $fields) {
    

   	
    	$count++;
    	echo $count."</br>";
    	if($count>4){
 $stmt = $dbh->prepare( "INSERT INTO clientes (nro_cliente, denominacion, celular, mail, fecha_nac, fecha_ingreso, fecha_egreso, observaciones) VALUES (?,?,?,?,?,?,?,?)");
    $stmt->bindParam( 1, $nro_cliente);  
     $stmt->bindParam( 2, $denominacion);  
     $stmt->bindParam( 3, $celular);  
     $stmt->bindParam( 4, $mail);  
     $stmt->bindParam( 5, $fecha_nac);  
     $stmt->bindParam( 6, $fecha_ingreso);  
     $stmt->bindParam( 7, $fecha_egreso);  
     $stmt->bindParam( 8, $observaciones); 
    	$nro_cliente = $fields[1];
    
        $denominacion =utf8_encode($fields[2]);
        $celular = utf8_encode($fields[32]);
        $mail =utf8_encode( $fields[33]);
    	$fecha_nac =utf8_encode($fields[34]);
    	$fecha_ingreso =utf8_encode($fields[35]);
    	$fecha_egreso =utf8_encode($fields[36]);
    	$observaciones =utf8_encode($fields[37]);    	        
       	if($stmt->execute()){
       		echo "cargo ".$nro_cliente."</br>";
       	}else{
       		echo $dbh->error_info();
       	}       
    	$id = $dbh->lastInsertId();    	  	
       	echo "obtuvo la id de  ".$id."</br>";	

    	$stmt2 = $dbh->prepare("INSERT INTO datosfiscales (id_cliente,estado,tipo_persona,cuit, cuit_juridico, riesgo, clave_afim, clave_dpt, clave_sindicato, clave_fiscal, cuit_titular) values (?,?,?,?,?,?,?,?,?,?,?)");
    	$stmt2->bindParam( 1, $id_cliente);
    	$stmt2->bindParam( 2, $estado);
    	$stmt2->bindParam( 3, $tipo_persona);
    	$stmt2->bindParam( 4, $cuit);
    	$stmt2->bindParam( 5, $cuit_juridico);
    	$stmt2->bindParam( 6, $riesgo);
    	$stmt2->bindParam( 7, $clave_afim);
    	$stmt2->bindParam( 8, $clave_dpt);
    	$stmt2->bindParam( 9, $clave_sindicato);
    	$stmt2->bindParam( 10, $clave_fiscal);
        $stmt2->bindParam( 11, $cuit_titular);
    	
    	$id_cliente = $id;

    	$estado = utf8_encode($fields[3]);
        echo "ESTADO".$estado."<br>";
        echo ("TIPO DE PERSONA".$fields[4]);
        if($fields[4]=="Física"){
    	$tipo_persona = "fisica";
        $cuit = utf8_encode($fields[5]);
        $cuit_juridico = 0;
        $cuit_titular = 0;
        }else{
            $tipo_persona = "juridica";
            $cuit = 0;
                $cuit_juridico = utf8_encode($fields[5]);;                
                $cuit_titular = utf8_encode($fields[37]);
        }
    	
    	$riesgo = utf8_encode($fields[6]);
    	$clave_afim =utf8_encode ($fields[7]);
   		$clave_dpt =utf8_encode ($fields[8]);
   		$clave_sindicato =utf8_encode($fields[9]);	
   		$clave_fiscal = utf8_encode($fields[10]);	

    	$stmt13 = $dbh->prepare("INSERT INTO empleador (id_clien) values(?)");
        $stmt13->bindParam(1,$id_clien);   
        $id_clien = $id_cliente;
        $stmt13->execute();
        


    	
    	  	if($stmt2->execute()){
                $id_condicion =$dbh->lastInsertId(); 
       		echo "inserto en datos fiscales el cuit  ".$cuit."</br>";
       	}else{
       		echo $dbh->error_info();
       	}
       	$stmt4 = $dbh->prepare("INSERT INTO condiciontributaria (id_cliente, afip, ingresos_brutos) values(?,?,?)");
       	$stmt4->bindParam(1,$id_cl);
       	$stmt4->bindParam(2,$afip);
        $stmt4->bindParam(3,$ig);
       	$id_cl = $id;
    	$afip = utf8_encode($fields[19]);
        $ig = $fields[22];
    	if($stmt4->execute()){
    		echo("CARGO EL AFIP WACHO: ".$afip)."</br>";
    	}else{
    		$dbh->error_info();
    	}
    	$id_con = $dbh->lastInsertId();


        $stmt10 = $dbh->prepare("INSERT INTO ater (id_condicion) values(?)");
        $stmt10->bindParam(1,$id_condicion);   
        $id_condicion = $id_con;
        $stmt10->execute();





        $stmt16 = $dbh->prepare("INSERT INTO convenio_multilateral (id_ater) values(?)");
        $stmt16->bindParam(1,$id_ater);          
        

        $stmt15 = $dbh->prepare("SELECT max(id_ater) from ater");
        $stmt15->execute();
        $id_ater = $stmt15->fetchColumn();

        $stmt16->execute();



        $stmt11 = $dbh->prepare("INSERT INTO facturacion (id_condicion) values(?)");
        $stmt11->bindParam(1,$id_condicion);   
        $id_condicion = $id_con;
        $stmt11->execute();

        $stmt12 = $dbh->prepare("INSERT INTO regimenretencion (id_condicion) values(?)");
        $stmt12->bindParam(1,$id_condicion);   
        $id_condicion = $id_con;
        $stmt12->execute();
    $id_condicion = $id_con; 
    	echo "el valor de afip es :".$afip."</br>";
    	if($afip=="Monotributista"){
            $ingresos_brutos = utf8_encode($fields[23]); 
            $categoria = utf8_encode($fields[26]); 
                //$a = $cliente->AsignarCategoria_Simplificado("A");
              echo ($ingresos_brutos);


            
    		
    		$stmt5=$dbh->prepare("INSERT INTO monotributo (id_condicion, ingresos_brutos, categoria, totalpagar, actividad) values (?,?,?,?,?)");
    		$stmt5->bindParam(1,$id_condicion);    		
    		$stmt5->bindParam(2,$ingresos_brutos);
    		$stmt5->bindParam(3,$categoria);
            $stmt5->bindParam(4,$totalpagar);
            $stmt5->bindParam(5,$actividad);
    		
    	   		
    		
		  

                            $st = $dbh->prepare('SELECT * FROM tabla_monotributo where categoria =:categoria');
                $st->bindValue(':categoria',$categoria,PDO::PARAM_STR);
                $st->execute();
                $tabla = $st->fetch();
                echo ("SIPA: ".$tabla['sipa']."   IMPUESTO".$tabla['impuesto_bienes']."  OBRA SOCIAL".$tabla['obra_social']."</br>");
                $totalpagar = $tabla['sipa']+$tabla['impuesto_bienes']+$tabla['obra_social'];
                $actividad = "Bienes";
            

             
                

            if ($stmt5->execute()){               
               

                   
			

         
			
			
            if ($ingresos_brutos>0){
                $s = $dbh->prepare("SELECT MAX(id_monotributo) AS id FROM monotributo");
                $s->execute();
                $id_mono = $s->fetchcolumn();

                $ingresos_mes = $ingresos_brutos/12;
                $primer =3;
                $j = 1;
                for ($i=$primer; $i <(12+$primer) ; $i++) {
                    if($i>12){
                                  $fecha =date("Y-$j-1");             
                $stmt8 =$dbh->prepare("INSERT INTO monotributomensual (mes, monto, id_monotributo) values(?,?,?)");
                $stmt8->bindParam(1,$fecha);
                $stmt8->bindParam(2,$ingresos_mensual);
                $stmt8->bindParam(3,$id_monotributo);

                $id_monotributo = $id_mono;
                $ingresos_mensual = $ingresos_mes;                          
                $fecha_mono = $fecha;

                if ($stmt8->execute()){
                    echo "inserto fecha".$fecha_mono." ".$ingresos_mensual;
                }else{
                    echo ($dbh->errorInfo());
                }
                $j++;
                    }else{
                         $fecha =date("2019-$i-1");             
                $stmt8 =$dbh->prepare("INSERT INTO monotributomensual (mes, monto, id_monotributo) values(?,?,?)");
                $stmt8->bindParam(1,$fecha);
                $stmt8->bindParam(2,$ingresos_mensual);
                $stmt8->bindParam(3,$id_monotributo);

                $id_monotributo = $id_mono;
                $ingresos_mensual = $ingresos_mes;                          
                $fecha_mono = $fecha;

                if ($stmt8->execute()){
                    echo "inserto fecha".$fecha_mono." ".$ingresos_mensual;
                }else{
                    echo ($dbh->errorInfo());
                }

                    }
               

    		  }
              }

          }
		}

    }

    
    }

   

?>

       