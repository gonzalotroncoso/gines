

function calF(){

	var monotributof = document.liquidacionF.monotributoF.value;	
   var aterf = document.liquidacionF.aterF.value;
   var municipalidadf = document.liquidacionF.municipalidadF.value;
   var sindicatof = document.liquidacionF.sindicatoF.value;
   var ivaf = document.liquidacionF.ivaF.value;
   var sicoref = document.liquidacionF.sicoreF.value;
   var gananciasf = document.liquidacionF.gananciasF.value;
   var autonomosf = document.liquidacionF.autonomosF.value;
   var cajaf = document.liquidacionF.cajaF.value;
   var aportesf = document.liquidacionF.aportesF.value;
   var CPCEERf = document.liquidacionF.CPCEERF.value;
   var matriculaf = document.liquidacionF.matriculaF.value;
   var SUSSf = document.liquidacionF.SUSSF.value;
   var leyf = document.liquidacionF.leyF.value;
   var honorariosf = document.liquidacionF.honorariosF.value;
   var pagocl = document.liquidacionF.pagocl.value;
   
    try{
      //Calculamos el número escrito:
       monotributof = (isNaN(parseInt(monotributof)))? 0 : parseInt(monotributof);
       aterf = (isNaN(parseInt(aterf)))? 0 : parseInt(aterf);
       municipalidadf = (isNaN(parseInt(municipalidadf)))? 0 : parseInt(municipalidadf);
       sindicatof = (isNaN(parseInt(sindicatof)))? 0 : parseInt(sindicatof);       
       ivaf = (isNaN(parseInt(ivaf)))? 0 : parseInt(ivaf);
       sicoref = (isNaN(parseInt(sicoref)))? 0 : parseInt(sicoref);
       gananciasf = (isNaN(parseInt(gananciasf)))? 0 : parseInt(gananciasf);
       autonomosf = (isNaN(parseInt(autonomosf)))? 0 : parseInt(autonomosf);
       cajaf = (isNaN(parseInt(cajaf)))? 0 : parseInt(cajaf);
        aportesf = (isNaN(parseInt(aportesf)))? 0 : parseInt(aportesf);
       CPCEERf = (isNaN(parseInt(CPCEERf)))? 0 : parseInt(CPCEERf);
       matriculaf = (isNaN(parseInt(matriculaf)))? 0 : parseInt(matriculaf);
       SUSSf = (isNaN(parseInt(SUSSf)))? 0 : parseInt(SUSSf);
       leyf = (isNaN(parseInt(leyf)))? 0 : parseInt(leyf);
       honorariosf = (isNaN(parseInt(honorariosf)))? 0 : parseInt(honorariosf);
       document.liquidacionF.disponible.value =pagocl-(monotributof+aterf+municipalidadf+sindicatof+aportesf+sindicatof+ivaf+sicoref+gananciasf+autonomosf+cajaf+CPCEERf+matriculaf+SUSSf+leyf+honorariosf) ;
   }
   //Si se produce un error no hacemos nada
   catch(e) {}
}
  function sal(){
    var pagocliente =  document.liquidacion.pagocliente.value;
    var total = document.liquidacion.total.value;
    try{
         pagocliente = (isNaN(parseInt(pagocliente)))? 0 : parseInt(pagocliente);
             total = (isNaN(parseInt(total)))? 0 : parseInt(total);
             document.liquidacion.saldo.value=total-pagocliente;

    } catch(e) {}
  }

  function cal() {
   
   
   var monotributo = document.liquidacion.monotributo.value;
   var ater = document.liquidacion.ater.value;
   var municipalidad = document.liquidacion.municipalidad.value;
   var sindicato = document.liquidacion.sindicato.value;
   var iva = document.liquidacion.iva.value;
   var sicore = document.liquidacion.sicore.value;
   var ganancias = document.liquidacion.ganancias.value;
   var autonomos = document.liquidacion.autonomos.value;
   var caja = document.liquidacion.caja.value;
   var aportes = document.liquidacion.aportes.value;
   var CPCEER = document.liquidacion.CPCEER.value;
   var matricula = document.liquidacion.matricula.value;
   var SUSS = document.liquidacion.SUSS.value;
   var ley = document.liquidacion.ley.value;
   var honorarios = document.liquidacion.honorarios.value;




   try{
      //Calculamos el número escrito:
       monotributo = (isNaN(parseInt(monotributo)))? 0 : parseInt(monotributo);
       ater = (isNaN(parseInt(ater)))? 0 : parseInt(ater);
       municipalidad = (isNaN(parseInt(municipalidad)))? 0 : parseInt(municipalidad);
       sindicato = (isNaN(parseInt(sindicato)))? 0 : parseInt(sindicato);
       sindicato = (isNaN(parseInt(sindicato)))? 0 : parseInt(sindicato);
       iva = (isNaN(parseInt(iva)))? 0 : parseInt(iva);
       sicore = (isNaN(parseInt(sicore)))? 0 : parseInt(sicore);
       ganancias = (isNaN(parseInt(ganancias)))? 0 : parseInt(ganancias);
       autonomos = (isNaN(parseInt(autonomos)))? 0 : parseInt(autonomos);
       caja = (isNaN(parseInt(caja)))? 0 : parseInt(caja);
        aportes = (isNaN(parseInt(aportes)))? 0 : parseInt(aportes);
       CPCEER = (isNaN(parseInt(CPCEER)))? 0 : parseInt(CPCEER);
       matricula = (isNaN(parseInt(matricula)))? 0 : parseInt(matricula);
       SUSS = (isNaN(parseInt(SUSS)))? 0 : parseInt(SUSS);
       ley = (isNaN(parseInt(ley)))? 0 : parseInt(ley);
       honorarios = (isNaN(parseInt(honorarios)))? 0 : parseInt(honorarios);
       document.liquidacion.total.value =monotributo+ater+municipalidad+sindicato+aportes+sindicato+iva+sicore+ganancias+autonomos+caja+CPCEER+matricula+SUSS+ley+honorarios ;
       
   }
   //Si se produce un error no hacemos nada
   catch(e) {}
}

  $(document).ready(function(){ 
    
    $('#pagocliente').change(function(){  
      $('#pagocl').val($('#pagocliente').val());
      $('#id_clienteF').val($('#id_cliente').val());
      $('#fechafF').val($('#fecha').val());
    })

  })  

    $('#btn_cargar').click (function(){
      

      var id = $('#id_cliente').val();
       var fecha = $('#fecha').val(); 
      var data=[id,fecha];    
      $.ajax({
        type:"POST",
        data: {'data': JSON.stringify(data)},
        url:"../procesos/pagos/validarFecha.php",       
        success:function(r){
          
          if (r==1){

            alertify.alert("Ya se han cargado pagos en este mes");
            return false
          }else{
              
                datos=$('#liquidacion').serialize();
                $.ajax({
                  type:"POST",
                  data:datos,
                  url:"../procesos/pagos/insertarPago.php",         
                  success:function(r){        
                  if(r==1){                 
                   $('#liquidacion').trigger("reset");
                  alertify.success("Pago guardado");
                 
                }else{      
                    
                  alertify.error("No se pudo guardar el pago");
                }
              }
            })

          }
        }
      })    
    })

    $('#btn_saldo').click(function(){
     
    datos=$('#liquidacionF').serialize();
    $.ajax({
      type:"POST",
      data:datos,
      url:'../procesos/pagos/saldo.php',
      success:function(r){
      
        if(r==1){
          alertify.success("Pago realizado");
        }else{
        
          alertify.error("No se cargaron datos")

        }
      }
    })
  })

  $(document).ready(function(){
    $('#id_cliente').select2();
    
  })

  $(document).ready(function(){       
    $('#id_cliente').change(function(){     

       $('#ater').val(0);
      $.ajax({
        type:"POST",
        data:"idcliente="+ $('#id_cliente').val(),
        url:"../procesos/liquidacion/cargarTablaLiquidacion.php",               
        success:function(r){
       
        data= jQuery.parseJSON( r );   
       

        if(data['denominacion']!=null){
        
        $("#tablajson tbody").html("");
        $('#monotributo').val(parseInt (data['monto']));
        $('#ater').val(data['montopg']);
        m = parseInt(data['monto']);
        g = parseInt(data['montopg'])
        $('#total').val(m+g);
        var newRow =
        "<tr>"
        +"<td>"+data['id']+"</td>"        
        +"<td>"+data['denominacion']+"</td>"        
        +"<td>"+data['tipo']+"</td>"        
        +"<td>"+data['estado']+"</td>"        
        +"<td>"+data['cuit']+"</td>"        
        +"<td>"+data['afip']+"</td>"    
        +"</tr>";
        $(newRow).appendTo("#tablajson tbody");
        }else{
        $("#tablajson tbody").html("");
        var newRow =
        "<tr>"
        +"<td>"+""+"</td>"        
        +"<td>"+""+"</td>"        
        +"<td>"+""+"</td>"        
        +"<td>"+""+"</td>"        
        +"<td>"+""+"</td>"        
        +"<td>"+""+"</td>"  
        +"</tr>";

        }


          
        }
        

      });

    }); 
  }); 




