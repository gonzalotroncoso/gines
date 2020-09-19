




$(document).ready(function(){	

	$('#mono').attr('disabled', 'disabled');
})

$('#condicion').change(function(){
		if(($('#condicion').val())==1){
			$('#mono').removeAttr('disabled');
			$('#tipof').attr('disabled', 'disabled');
		}else{
			$('#mono').attr('disabled', 'disabled');
			$('#tipof').removeAttr('disabled');
		}
	
})

$('#btn_filtro').click(function(){
   

	 var condicion = $('#condicion').val();	 
	 var mono = $('#mono').val();	 
	 var estadof= $('#estadof').val();	 
	 var tipof= $('#tipof').val();	 
	 var liberal= $('#liberal').val();	 
	 var bruto= $('#bruto').val();	 
   var riesgo= $('#riesgo').val();   

	
	$.ajax({
			method:"POST",
		  	data:{
  					"condicion": condicion,
    				"mono": mono,    				
    				"estadof":estadof,
    				"tipof":tipof,
    				"liberal":liberal,
    				"bruto":bruto,
            "riesgo":riesgo
					},
		  	url:"../procesos/clientes/filtroBusqueda.php",
			success:function(r){	
      			
				    data= jQuery.parseJSON( r );
               		var newRow;
                	$("#tablaCliente tbody").html("");

              		data.forEach(function(data, index) {              

                 		newRow =
                		"<tr>"+
                  		"<td>"+data.nro_cliente+"</td>"+
                  		"<td>"+utf8to16(data.denominacion)+"</td>"+
                  		"<td>"+data.estado+"</td>"+
                  		"<td  style ='text-align: center;''>"+data.cuit+"</td>"+    
                  		"<td>"+
                        "<span class='btn btn-success btn-xs'data-toggle='modal' data-target='#actualizaCliente'"+ "onclick='agregaDatosClientes("+data.id_cliente+")'>"+
        				"<span class='glyphicon glyphicon-plus'></span>"+"</span>"+
    					"</td> "+
    					"<td>"+
        				"<a href='ModificarCliente.php?id_cliente="+data.id_cliente+"'> <span class='btn btn-warning btn-xs'data-toggle='modal'>"+
        				"<span class='glyphicon glyphicon-pencil'></span>"+
        				"</span></a>"+
    					"</td> "+
    					"<td>"+
      					"<span class='btn btn-danger btn-xs' onclick='eliminaCliente("+data.id_cliente+")'>"+
        				"<span class='glyphicon glyphicon-remove'></span>"+
      					"</span>"+
    					"</td> "+
  						"</tr>";
						$(newRow).appendTo("#tablaCliente tbody"); 
              		})
				}
		})
	})




$('#btn_pdf').click(function(){    
  
  var doc = new jsPDF()  
  var head = [['ID', 'Denominacion', 'Estado', 'Cuit']]
   doc.autoTable({ head: head})
  doc.autoTable({ html: '#tablaCliente tbody'})
  doc.save('table.pdf')

      
   
})

function utf8to16(str) {
    var out, i, len, c;
    var char2, char3;

    out = "";
    len = str.length;
    i = 0;
    while(i < len) {
    c = str.charCodeAt(i++);
    switch(c >> 4)
    { 
      case 0: case 1: case 2: case 3: case 4: case 5: case 6: case 7:
        // 0xxxxxxx
        out += str.charAt(i-1);
        break;
      case 12: case 13:
        // 110x xxxx   10xx xxxx
        char2 = str.charCodeAt(i++);
        out += String.fromCharCode(((c & 0x1F) << 6) | (char2 & 0x3F));
        break;
      case 14:
        // 1110 xxxx  10xx xxxx  10xx xxxx
        char2 = str.charCodeAt(i++);
        char3 = str.charCodeAt(i++);
        out += String.fromCharCode(((c & 0x0F) << 12) |
                       ((char2 & 0x3F) << 6) |
                       ((char3 & 0x3F) << 0));
        break;
    }
    }

    return out;
}