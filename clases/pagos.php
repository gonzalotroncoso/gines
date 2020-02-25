<?php 

class pagos{
	public function pagarSaldo($datos){
		$c=new conectar();
		$dbh=$c->conexion();
		$sql = "SELECT count(*) from apagar where id_cliente=:id_cliente and fecha = :fecha";
		$stmt = $dbh->prepare($sql);
		$stmt->bindValue(':id_cliente',$datos[0],PDO::PARAM_INT);
		$stmt->bindValue('fecha',$datos[1],PDO::PARAM_STR);
		$stmt->execute();
		$count = $stmt->fetchColumn();
		if($count>0){
			
			////////////////////////
			$sql1 = "UPDATE apagar SET pagocl =:pagocl ,
									   disponible = :disponible,

									   monotributo=:monotributo, monotributoPago=:monotributoPago, monotributoSaldo=:monotributoSaldo,

									    ater =:ater, aterPago =:aterPago, aterSaldo =:aterSaldo,

									    municipalidad =:municipalidad, municipalidadPago =:municipalidadPago,
									    municipalidadSaldo =:municipalidadSaldo, 

									    empleador = :empleador, empleadorPago = :empleadorPago, empleadorSaldo =:empleadorSaldo,

									     sindicato = :sindicato, sindicatoPago = :sindicatoPago, sindicatoSaldo = :sindicatoSaldo,
									      iva = :iva, ivaPago = :ivaPago ,ivaSaldo = :ivaSaldo,

									       sicore = :sicore, sicorePago = :sicorePago, sicoreSaldo = :sicoreSaldo,

									        ganancias = :ganancias ,gananciasPago=:gananciasPago, gananciasSaldo = :gananciasSaldo,

									         autonomo =:autonomo ,autonomoPago = :autonomoPago, autonomoSaldo = :autonomoSaldo,

									          caja=:caja, cajaPago =:cajaPago, cajaSaldo=:cajaSaldo,

									          aportes=:aportes, aportesPago=:aportesPago, aportesSaldo=:aportesSaldo,

									           cpceer=:cpceer, cpceerPago=:cpceerPago, cpceerSaldo=:cpceerSaldo,

									            matricula=:matricula, matriculaPago=:matriculaPago, matriculaSaldo=:matriculaSaldo,

									             suss=:suss, sussPago=:sussPago, sussSaldo=:sussSaldo, 

									             ley4035=:ley4035, ley4035Pago=:ley4035Pago, ley4035Saldo=:ley4035Saldo,

									              honorarios=:honorarios, honorariosPago=:honorariosPago, honorariosSaldo=:honorariosSaldo
									                WHERE id_cliente=:id_cliente and fecha=:fecha";
			$stmt1 = $dbh->prepare($sql1);

		

			$stmt1->bindValue(':id_cliente',$datos[0],PDO::PARAM_INT);
			$stmt1->bindValue(':fecha',$datos[1],PDO::PARAM_STR);

			$stmt1->bindValue(':pagocl',$datos[2],PDO::PARAM_STR);
			$stmt1->bindValue(':disponible',$datos[3],PDO::PARAM_STR);

			$stmt1->bindValue(':monotributo',$datos[4],PDO::PARAM_STR);
			$stmt1->bindValue(':monotributoPago',$datos[5],PDO::PARAM_STR);
			$stmt1->bindValue(':monotributoSaldo',$datos[6],PDO::PARAM_STR);

			$stmt1->bindValue(':ater',$datos[7],PDO::PARAM_STR);
			$stmt1->bindValue(':aterPago',$datos[8],PDO::PARAM_STR);
			$stmt1->bindValue(':aterSaldo',$datos[9],PDO::PARAM_STR);

			$stmt1->bindValue(':municipalidad',$datos[10],PDO::PARAM_STR);
			$stmt1->bindValue(':municipalidadPago',$datos[11],PDO::PARAM_STR);
			$stmt1->bindValue(':municipalidadSaldo',$datos[12],PDO::PARAM_STR);

			$stmt1->bindValue(':empleador',$datos[13],PDO::PARAM_STR);
			$stmt1->bindValue(':empleadorPago',$datos[14],PDO::PARAM_STR);
			$stmt1->bindValue(':empleadorSaldo',$datos[15],PDO::PARAM_STR);

			$stmt1->bindValue(':sindicato',$datos[16],PDO::PARAM_STR);
			$stmt1->bindValue(':sindicatoPago',$datos[17],PDO::PARAM_STR);
			$stmt1->bindValue(':sindicatoSaldo',$datos[18],PDO::PARAM_STR);

			$stmt1->bindValue(':iva',$datos[19],PDO::PARAM_STR);
			$stmt1->bindValue(':ivaPago',$datos[20],PDO::PARAM_STR);
			$stmt1->bindValue(':ivaSaldo',$datos[21],PDO::PARAM_STR);

			$stmt1->bindValue(':sicore',$datos[22],PDO::PARAM_STR);
			$stmt1->bindValue(':sicorePago',$datos[23],PDO::PARAM_STR);
			$stmt1->bindValue(':sicoreSaldo',$datos[24],PDO::PARAM_STR);

			$stmt1->bindValue(':ganancias',$datos[25],PDO::PARAM_STR);
			$stmt1->bindValue(':gananciasPago',$datos[26],PDO::PARAM_STR);
			$stmt1->bindValue(':gananciasSaldo',$datos[27],PDO::PARAM_STR);

			$stmt1->bindValue(':autonomo',$datos[28],PDO::PARAM_STR);
			$stmt1->bindValue(':autonomoPago',$datos[29],PDO::PARAM_STR);
			$stmt1->bindValue(':autonomoSaldo',$datos[30],PDO::PARAM_STR);

			$stmt1->bindValue(':caja',$datos[31],PDO::PARAM_STR);
			$stmt1->bindValue(':cajaPago',$datos[32],PDO::PARAM_STR);			
			$stmt1->bindValue(':cajaSaldo',$datos[33],PDO::PARAM_STR);

			$stmt1->bindValue(':aportes',$datos[34],PDO::PARAM_STR);
			$stmt1->bindValue(':aportesPago',$datos[35],PDO::PARAM_STR);
			$stmt1->bindValue(':aportesSaldo',$datos[36],PDO::PARAM_STR);

			$stmt1->bindValue(':cpceer',$datos[37],PDO::PARAM_STR);
			$stmt1->bindValue(':cpceerPago',$datos[38],PDO::PARAM_STR);	
			$stmt1->bindValue(':cpceerSaldo',$datos[39],PDO::PARAM_STR);

			$stmt1->bindValue(':matricula',$datos[40],PDO::PARAM_STR);
			$stmt1->bindValue(':matriculaPago',$datos[41],PDO::PARAM_STR);	
			$stmt1->bindValue(':matriculaSaldo',$datos[42],PDO::PARAM_STR);



			$stmt1->bindValue(':suss',$datos[43],PDO::PARAM_STR);
			$stmt1->bindValue(':sussPago',$datos[44],PDO::PARAM_STR);
			$stmt1->bindValue(':sussSaldo',$datos[45],PDO::PARAM_STR);

			$stmt1->bindValue(':ley4035',$datos[46],PDO::PARAM_STR);
			$stmt1->bindValue(':ley4035Pago',$datos[47],PDO::PARAM_STR);
			$stmt1->bindValue(':ley4035Saldo',$datos[48],PDO::PARAM_STR);

			$stmt1->bindValue(':honorarios',$datos[49],PDO::PARAM_STR);			
			$stmt1->bindValue(':honorariosPago',$datos[50],PDO::PARAM_STR);			
			$stmt1->bindValue(':honorariosSaldo',$datos[51],PDO::PARAM_STR);
			
			

			if($stmt1->execute()){
					$total = $datos[6]+$datos[9]+$datos[12]+$datos[15]+$datos[18]+$datos[21]+$datos[24]+
						 $datos[30]+$datos[33]+$datos[36]+$datos[39]+$datos[42]+$datos[45]+$datos[48]+
						 $datos[51]+$datos[27];
					$pago =$datos[5]+$datos[8]+$datos[11]+$datos[14]+$datos[17]+$datos[20]+$datos[23]+
							$datos[26]+$datos[29]+$datos[32]+$datos[35]+$datos[38]+$datos[41]+$datos[44]+
							$datos[47]+$datos[50];
					$saldo=$datos[6]+$datos[9]+$datos[12]+$datos[15]+$datos[18]+$datos[21]+$datos[24]+
							$datos[27]+$datos[30]+$datos[33]+$datos[36]+$datos[39]+$datos[42]+$datos[45]+
							$datos[48]+$datos[51];
				$sql3="UPDATE pagos SET iva=:iva, autonomo=:autonomo, caja=:caja,aportes=:aportes,cpceer=:cpceer, matricula =:matricula, suss=:suss,ley4035=:ley4035,honorarios=:honorarios,ganancias=:ganancias, sicore=:sicore, empleador=:empleador, sindicato=:sindicato, municipalidad=:municipalidad, ater=:ater, monotributo=:monotributo, total=:total, pagoCliente=:pago, saldoIntegrar=:saldo WHERE id_cliente=:id_cliente and fecha=:fecha";
				$stmt3=$dbh->prepare($sql3);
				$stmt3->bindValue(':id_cliente',$datos[0],PDO::PARAM_INT);
				$stmt3->bindValue(':fecha',$datos[1],PDO::PARAM_STR);
				$stmt3->bindValue(':monotributo',$datos[6],PDO::PARAM_STR);
				$stmt3->bindValue(':ater',$datos[9],PDO::PARAM_STR);
				$stmt3->bindValue(':municipalidad',$datos[12],PDO::PARAM_STR);
				$stmt3->bindValue(':empleador',$datos[15],PDO::PARAM_STR);
				$stmt3->bindValue(':sindicato',$datos[18],PDO::PARAM_STR);
				$stmt3->bindValue(':iva',$datos[21],PDO::PARAM_STR);
				$stmt3->bindValue(':sicore',$datos[24],PDO::PARAM_STR);
				$stmt3->bindValue(':autonomo',$datos[30],PDO::PARAM_STR);
				$stmt3->bindValue(':caja',$datos[33],PDO::PARAM_STR);
				$stmt3->bindValue(':aportes',$datos[36],PDO::PARAM_STR);
				$stmt3->bindValue(':cpceer',$datos[39],PDO::PARAM_STR);
				$stmt3->bindValue(':matricula',$datos[42],PDO::PARAM_STR);
				$stmt3->bindValue(':suss',$datos[45],PDO::PARAM_STR);
				$stmt3->bindValue(':ley4035',$datos[48],PDO::PARAM_STR);
				$stmt3->bindValue(':honorarios',$datos[51],PDO::PARAM_STR);
				$stmt3->bindValue(':ganancias',$datos[27],PDO::PARAM_STR);
				$stmt3->bindValue(':total',$total,PDO::PARAM_STR);
				$stmt3->bindValue(':pago',$pago,PDO::PARAM_STR);
				$stmt3->bindValue(':saldo',$saldo,PDO::PARAM_STR);
				if ($stmt3->execute()){
						return 1;
				}else{
						return $dbh->errorInfo();		
				}
			}else{
				return $dbh->errorInfo();
		
				};			
			//////////////////////
		}else{
			///////////////////
			$sql2 = "INSERT INTO apagar(
										id_cliente, pagocl,disponible,
										ater, aterPago, aterSaldo,
										monotributo, monotributoPago, monotributoSaldo,
										municipalidad, municipalidadPago, municipalidadSaldo,
										empleador, empleadorPago, empleadorSaldo,
										sindicato, sindicatoPago, sindicatoSaldo,
										iva, ivaPago,ivaSaldo,
										sicore, sicorePago, sicoreSaldo, 
										ganancias,gananciasPago, gananciasSaldo, 
										autonomo,autonomoPago, autonomoSaldo,
										caja, cajaPago, cajaSaldo,
										aportes, aportesPago, aportesSaldo,
										cpceer, cpceerPago, cpceerSaldo,
										matricula, matriculaPago, matriculaSaldo,
										suss, sussPago, sussSaldo,
										ley4035, ley4035Pago, ley4035Saldo,
										honorarios, honorariosPago, honorariosSaldo,
										fecha)
										VALUES (
										:id_cliente, :pagocl, :disponible,
										:ater, :aterPago, :aterSaldo,
										:monotributo, :monotributoPago, :monotributoSaldo,
										:municipalidad,:municipalidadPago,:municipalidadSaldo,
										:empleador, :empleadorPago, :empleadorSaldo,
										:sindicato, :sindicatoPago, :sindicatoSaldo,
										:iva, :ivaPago,:ivaSaldo,
										:sicore, :sicorePago, :sicoreSaldo,
										:ganancias,:gananciasPago, :gananciasSaldo,
										:autonomo,:autonomoPago,:autonomoSaldo,
										:caja, :cajaPago, :cajaSaldo,
										:aportes, :aportesPago, :aportesSaldo, 
										:cpceer, :cpceerPago, :cpceerSaldo,
										:matricula, :matriculaPago, :matriculaSaldo,
										:suss, :sussPago, :sussSaldo,
										:ley4035, :ley4035Pago, :ley4035Saldo,
										:honorarios, :honorariosPago, :honorariosSaldo,
										:fecha)";
			$stmt2  = $dbh->prepare($sql2);							


			$stmt2->bindValue(':id_cliente',$datos[0],PDO::PARAM_INT);
			$stmt2->bindValue(':fecha',$datos[1],PDO::PARAM_STR);
			$stmt2->bindValue(':pagocl',$datos[2],PDO::PARAM_STR);
			$stmt2->bindValue(':disponible',$datos[3],PDO::PARAM_STR);

			$stmt2->bindValue(':monotributo',$datos[4],PDO::PARAM_STR);
			$stmt2->bindValue(':monotributoPago',$datos[5],PDO::PARAM_STR);
			$stmt2->bindValue(':monotributoSaldo',$datos[6],PDO::PARAM_STR);

			$stmt2->bindValue(':ater',$datos[7],PDO::PARAM_STR);
			$stmt2->bindValue(':aterPago',$datos[8],PDO::PARAM_STR);
			$stmt2->bindValue(':aterSaldo',$datos[9],PDO::PARAM_STR);

			$stmt2->bindValue(':municipalidad',$datos[10],PDO::PARAM_STR);
			$stmt2->bindValue(':municipalidadPago',$datos[11],PDO::PARAM_STR);
			$stmt2->bindValue(':municipalidadSaldo',$datos[12],PDO::PARAM_STR);

			$stmt2->bindValue(':empleador',$datos[13],PDO::PARAM_STR);
			$stmt2->bindValue(':empleadorPago',$datos[14],PDO::PARAM_STR);
			$stmt2->bindValue(':empleadorSaldo',$datos[15],PDO::PARAM_STR);

			$stmt2->bindValue(':sindicato',$datos[16],PDO::PARAM_STR);
			$stmt2->bindValue(':sindicatoPago',$datos[17],PDO::PARAM_STR);
			$stmt2->bindValue(':sindicatoSaldo',$datos[18],PDO::PARAM_STR);

			$stmt2->bindValue(':iva',$datos[19],PDO::PARAM_STR);
			$stmt2->bindValue(':ivaPago',$datos[20],PDO::PARAM_STR);
			$stmt2->bindValue(':ivaSaldo',$datos[21],PDO::PARAM_STR);

			$stmt2->bindValue(':sicore',$datos[22],PDO::PARAM_STR);
			$stmt2->bindValue(':sicorePago',$datos[23],PDO::PARAM_STR);
			$stmt2->bindValue(':sicoreSaldo',$datos[24],PDO::PARAM_STR);

			$stmt2->bindValue(':ganancias',$datos[25],PDO::PARAM_STR);
			$stmt2->bindValue(':gananciasPago',$datos[26],PDO::PARAM_STR);
			$stmt2->bindValue(':gananciasSaldo',$datos[27],PDO::PARAM_STR);

			$stmt2->bindValue(':autonomo',$datos[28],PDO::PARAM_STR);
			$stmt2->bindValue(':autonomoPago',$datos[29],PDO::PARAM_STR);
			$stmt2->bindValue(':autonomoSaldo',$datos[30],PDO::PARAM_STR);

			$stmt2->bindValue(':caja',$datos[31],PDO::PARAM_STR);
			$stmt2->bindValue(':cajaPago',$datos[32],PDO::PARAM_STR);			
			$stmt2->bindValue(':cajaSaldo',$datos[33],PDO::PARAM_STR);

			$stmt2->bindValue(':aportes',$datos[34],PDO::PARAM_STR);
			$stmt2->bindValue(':aportesPago',$datos[35],PDO::PARAM_STR);
			$stmt2->bindValue(':aportesSaldo',$datos[36],PDO::PARAM_STR);

			$stmt2->bindValue(':cpceer',$datos[37],PDO::PARAM_STR);
			$stmt2->bindValue(':cpceerPago',$datos[38],PDO::PARAM_STR);	
			$stmt2->bindValue(':cpceerSaldo',$datos[39],PDO::PARAM_STR);

			$stmt2->bindValue(':matricula',$datos[40],PDO::PARAM_STR);
			$stmt2->bindValue(':matriculaPago',$datos[41],PDO::PARAM_STR);	
			$stmt2->bindValue(':matriculaSaldo',$datos[42],PDO::PARAM_STR);



			$stmt2->bindValue(':suss',$datos[43],PDO::PARAM_STR);
			$stmt2->bindValue(':sussPago',$datos[44],PDO::PARAM_STR);
			$stmt2->bindValue(':sussSaldo',$datos[45],PDO::PARAM_STR);

			$stmt2->bindValue(':ley4035',$datos[46],PDO::PARAM_STR);
			$stmt2->bindValue(':ley4035Pago',$datos[47],PDO::PARAM_STR);
			$stmt2->bindValue(':ley4035Saldo',$datos[48],PDO::PARAM_STR);

			$stmt2->bindValue(':honorarios',$datos[49],PDO::PARAM_STR);			
			$stmt2->bindValue(':honorariosPago',$datos[50],PDO::PARAM_STR);			
			$stmt2->bindValue(':honorariosSaldo',$datos[51],PDO::PARAM_STR);
			
			if($stmt2->execute()){
				$total = $datos[6]+$datos[9]+$datos[12]+$datos[15]+$datos[18]+$datos[21]+$datos[24]+
						 $datos[30]+$datos[33]+$datos[36]+$datos[39]+$datos[42]+$datos[45]+$datos[48]+
						 $datos[51]+$datos[27];
					$pago =$datos[5]+$datos[8]+$datos[11]+$datos[14]+$datos[17]+$datos[20]+$datos[23]+
							$datos[26]+$datos[29]+$datos[32]+$datos[35]+$datos[38]+$datos[41]+$datos[44]+
							$datos[47]+$datos[50];
					$saldo=$datos[6]+$datos[9]+$datos[12]+$datos[15]+$datos[18]+$datos[21]+$datos[24]+
							$datos[27]+$datos[30]+$datos[33]+$datos[36]+$datos[39]+$datos[42]+$datos[45]+
							$datos[48]+$datos[51];
				$sql3="UPDATE pagos SET iva=:iva, autonomo=:autonomo, caja=:caja, aportes=:aportes, cpceer=:cpceer, matricula =:matricula, suss=:suss,ley4035=:ley4035, honorarios=:honorarios, ganancias=:ganancias, sicore=:sicore, empleador=:empleador, sindicato=:sindicato, municipalidad=:municipalidad, ater=:ater, monotributo=:monotributo, total=:total, pagoCliente=:pago, saldoIntegrar=:saldo  WHERE id_cliente=:id_cliente and fecha=:fecha";
				$stmt3=$dbh->prepare($sql3);
				$stmt3->bindValue(':id_cliente',$datos[0],PDO::PARAM_INT);
				$stmt3->bindValue(':fecha',$datos[1],PDO::PARAM_STR);
				$stmt3->bindValue(':monotributo',$datos[6],PDO::PARAM_STR);
				$stmt3->bindValue(':ater',$datos[9],PDO::PARAM_STR);
				$stmt3->bindValue(':municipalidad',$datos[12],PDO::PARAM_STR);
				$stmt3->bindValue(':empleador',$datos[15],PDO::PARAM_STR);
				$stmt3->bindValue(':sindicato',$datos[18],PDO::PARAM_STR);
				$stmt3->bindValue(':iva',$datos[21],PDO::PARAM_STR);
				$stmt3->bindValue(':sicore',$datos[24],PDO::PARAM_STR);
				$stmt3->bindValue(':autonomo',$datos[30],PDO::PARAM_STR);
				$stmt3->bindValue(':caja',$datos[33],PDO::PARAM_STR);
				$stmt3->bindValue(':aportes',$datos[36],PDO::PARAM_STR);
				$stmt3->bindValue(':cpceer',$datos[39],PDO::PARAM_STR);
				$stmt3->bindValue(':matricula',$datos[42],PDO::PARAM_STR);
				$stmt3->bindValue(':suss',$datos[45],PDO::PARAM_STR);
				$stmt3->bindValue(':ley4035',$datos[48],PDO::PARAM_STR);
				$stmt3->bindValue(':honorarios',$datos[51],PDO::PARAM_STR);
				$stmt3->bindValue(':ganancias',$datos[27],PDO::PARAM_STR);
				$stmt3->bindValue(':total',$total,PDO::PARAM_STR);
				$stmt3->bindValue(':total',$total,PDO::PARAM_STR);
				$stmt3->bindValue(':pago',$pago,PDO::PARAM_STR);
				$stmt3->bindValue(':saldo',$saldo,PDO::PARAM_STR);

				if ($stmt3->execute()){
						return 1;
				}else{
						return $dbh->errorInfo();		
				}
			}else{
				$dbh->errorInfo();
			};


			/////////////////
			
		}
	}
	public function cargarSaldo($datos){
		
		$c=new conectar();
		$dbh=$c->conexion();
		$sql = "INSERT INTO saldo(id_cliente,fecha, iva, autonomo, caja, aportes, cpceer, matricula, suss, ley4035, honorarios,monotributo, ater, municipalidad, sindicato, empleador, sicore, ganancias) VALUES(:id_cliente, :fecha, :iva, :autonomo, :caja, :aportes, :cpceer, :matricula, :suss, :ley4035, :honorarios, :monotributo, :ater, :municipalidad, :sindicato, :empleador, :sicore, :ganancias)";
		$stmt = $dbh->prepare($sql);
		$stmt->bindValue(':id_cliente',$datos[0],PDO::PARAM_INT);
		$stmt->bindValue(':fecha',$datos[1],PDO::PARAM_STR);
		$stmt->bindValue(':iva',$datos[7],PDO::PARAM_STR);
		$stmt->bindValue(':caja',$datos[11],PDO::PARAM_STR);
		$stmt->bindValue(':autonomo',$datos[10],PDO::PARAM_STR);
		$stmt->bindValue(':aportes',$datos[12],PDO::PARAM_STR);
		$stmt->bindValue(':cpceer',$datos[13],PDO::PARAM_STR);
		$stmt->bindValue(':matricula',$datos[17],PDO::PARAM_STR);
		$stmt->bindValue(':suss',$datos[14],PDO::PARAM_STR);
		$stmt->bindValue(':ley4035',$datos[15],PDO::PARAM_STR);
		$stmt->bindValue(':honorarios',$datos[16],PDO::PARAM_STR);		
		$stmt->bindValue(':monotributo',$datos[2],PDO::PARAM_STR);
		$stmt->bindValue(':ater',$datos[3],PDO::PARAM_STR);
		$stmt->bindValue(':municipalidad',$datos[4],PDO::PARAM_STR);
		$stmt->bindValue(':sindicato',$datos[6],PDO::PARAM_STR);
		$stmt->bindValue(':empleador',$datos[5],PDO::PARAM_STR);
		$stmt->bindValue(':sicore',$datos[8],PDO::PARAM_STR);
		$stmt->bindValue(':ganancias',$datos[9],PDO::PARAM_STR);



		if($stmt->execute()){
			return 1;
		}else{
		
			return $dbh->errorInfo();
		};
	}
	public function saldoDeuda($datos){

		$c=new conectar();
		$dbh=$c->conexion();
		$sql = "SELECT * FROM pagos p  where p.id_cliente=:id";
		$stmt = $dbh->prepare($sql);
		$stmt->bindValue('id',$datos[0],PDO::PARAM_INT);
		$stmt->execute();
		
		while($pagos=$stmt->fetch()){
			$fecha = $pagos['fecha'];

			$mesP = self::obtenerMes($datos[1]);
			$anioP = self::obtenerAnio($datos[1]);

			$mesF = self::obtenerMes($pagos['fecha']);
			$anioF = self::obtenerAnio($pagos['fecha']);


			

			if(($mesP==$mesF)&&($anioP==$anioF)){
				$saldo=$pagos['saldoIntegrar']-$datos[2];
				$pago=$pagos['pagoCliente']+$datos[2];
				$sql1 = "UPDATE PAGOS set pagoCliente=:pago, saldoIntegrar=:saldo where fecha=:fecha and id_cliente=:id";
				$st = $dbh->prepare($sql1);
				$st->bindValue(':id',$datos[0],PDO::PARAM_INT);
				$st->bindValue(':saldo',$saldo,PDO::PARAM_STR);
				$st->bindValue(':pago',$pago,PDO::PARAM_STR);
				$st->bindValue(':fecha',$fecha,PDO::PARAM_STR);
				if($st->execute()){
				return 1;	
				break;			
				}else{

					return $dbh->errorInfo();
					break;
				}
			}
		}
	}

	public function obtenerMes($fecha){
		$fechaStr = strtotime($fecha);
		$m =  date("m", $fechaStr);
		return $m;
	}
	
	public function obtenerAnio($fecha){
		$fechaStr = strtotime($fecha);
		$y =  date("Y", $fechaStr);
		return $y;
		
	}
	public function cargarPago($datos){
		$c= new conectar();
		$dbh= $c->conexion();
		$sql = "INSERT INTO pagos (id_cliente,fecha, iva, autonomo, caja, aportes, cpceer, matricula, suss, ley4035, honorarios, total, monotributo, ater, municipalidad, sindicato, empleador, sicore, ganancias) VALUES(:id_cliente, :fecha, :iva, :autonomo, :caja, :aportes, :cpceer, :matricula, :suss, :ley4035, :honorarios, :total, :monotributo, :ater, :municipalidad, :sindicato, :empleador, :sicore, :ganancias)";
		$stmt = $dbh->prepare($sql);
		$stmt->bindValue(':id_cliente',$datos[0],PDO::PARAM_INT);
		$stmt->bindValue(':fecha',$datos[1],PDO::PARAM_STR);
		$stmt->bindValue(':iva',$datos[7],PDO::PARAM_STR);
		$stmt->bindValue(':caja',$datos[11],PDO::PARAM_STR);
		$stmt->bindValue(':autonomo',$datos[10],PDO::PARAM_STR);
		$stmt->bindValue(':aportes',$datos[12],PDO::PARAM_STR);
		$stmt->bindValue(':cpceer',$datos[13],PDO::PARAM_STR);
		$stmt->bindValue(':matricula',$datos[18],PDO::PARAM_STR);
		$stmt->bindValue(':suss',$datos[14],PDO::PARAM_STR);
		$stmt->bindValue(':ley4035',$datos[15],PDO::PARAM_STR);
		$stmt->bindValue(':honorarios',$datos[16],PDO::PARAM_STR);
		$stmt->bindValue(':total',$datos[17],PDO::PARAM_STR);
	
		$stmt->bindValue(':monotributo',$datos[2],PDO::PARAM_STR);
		$stmt->bindValue(':ater',$datos[3],PDO::PARAM_STR);
		$stmt->bindValue(':municipalidad',$datos[4],PDO::PARAM_STR);
		$stmt->bindValue(':sindicato',$datos[6],PDO::PARAM_STR);
		$stmt->bindValue(':empleador',$datos[5],PDO::PARAM_STR);
		$stmt->bindValue(':sicore',$datos[8],PDO::PARAM_STR);
		$stmt->bindValue(':ganancias',$datos[9],PDO::PARAM_STR);




		if($stmt->execute()){
			return 1;
		}else{
			return 2;
		};

	}

	public function tablaMorosos($id){
	$c= new conectar();
	$dbh= $c->conexion();
	
	}

}

 ?>