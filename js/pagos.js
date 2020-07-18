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
       monotributof = (isNaN(parseFloat(monotributof)))? 0 : parseFloat(monotributof);
       aterf = (isNaN(parseFloat(aterf)))? 0 : parseFloat(aterf);
       municipalidadf = (isNaN(parseFloat(municipalidadf)))? 0 : parseFloat(municipalidadf);
       sindicatof = (isNaN(parseFloat(sindicatof)))? 0 : parseFloat(sindicatof);       
       ivaf = (isNaN(parseFloat(ivaf)))? 0 : parseFloat(ivaf);
       sicoref = (isNaN(parseFloat(sicoref)))? 0 : parseFloat(sicoref);
       gananciasf = (isNaN(parseFloat(gananciasf)))? 0 : parseFloat(gananciasf);
       autonomosf = (isNaN(parseFloat(autonomosf)))? 0 : parseFloat(autonomosf);
       cajaf = (isNaN(parseFloat(cajaf)))? 0 : parseFloat(cajaf);
        aportesf = (isNaN(parseFloat(aportesf)))? 0 : parseFloat(aportesf);
       CPCEERf = (isNaN(parseFloat(CPCEERf)))? 0 : parseFloat(CPCEERf);
       matriculaf = (isNaN(parseFloat(matriculaf)))? 0 : parseFloat(matriculaf);
       SUSSf = (isNaN(parseFloat(SUSSf)))? 0 : parseFloat(SUSSf);
       leyf = (isNaN(parseFloat(leyf)))? 0 : parseFloat(leyf);
       honorariosf = (isNaN(parseFloat(honorariosf)))? 0 : parseFloat(honorariosf);
       document.liquidacionF.disponible.value =pagocl-(monotributof+aterf+municipalidadf+sindicatof+aportesf+sindicatof+ivaf+sicoref+gananciasf+autonomosf+cajaf+CPCEERf+matriculaf+SUSSf+leyf+honorariosf) ;
   }
   //Si se produce un error no hacemos nada
   catch(e) {}
}
  function sal(){
    var pagocliente =  document.liquidacion.pagocliente.value;
    var total = document.liquidacion.total.value;
    try{
         pagocliente = (isNaN(parseFloat(pagocliente)))? 0 : parseFloat(pagocliente);
             total = (isNaN(parseFloat(total)))? 0 : parseFloat(total);
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
       monotributo = (isNaN(parseFloat(monotributo)))? 0 : parseFloat(monotributo);
       ater = (isNaN(parseFloat(ater)))? 0 : parseFloat(ater);
       municipalidad = (isNaN(parseFloat(municipalidad)))? 0 : parseFloat(municipalidad);
       sindicato = (isNaN(parseFloat(sindicato)))? 0 : parseFloat(sindicato);
       sindicato = (isNaN(parseFloat(sindicato)))? 0 : parseFloat(sindicato);
       iva = (isNaN(parseFloat(iva)))? 0 : parseFloat(iva);
       sicore = (isNaN(parseFloat(sicore)))? 0 : parseFloat(sicore);
       ganancias = (isNaN(parseFloat(ganancias)))? 0 : parseFloat(ganancias);
       autonomos = (isNaN(parseFloat(autonomos)))? 0 : parseFloat(autonomos);
       caja = (isNaN(parseFloat(caja)))? 0 : parseFloat(caja);
        aportes = (isNaN(parseFloat(aportes)))? 0 : parseFloat(aportes);
       CPCEER = (isNaN(parseFloat(CPCEER)))? 0 : parseFloat(CPCEER);
       matricula = (isNaN(parseFloat(matricula)))? 0 : parseFloat(matricula);
       SUSS = (isNaN(parseFloat(SUSS)))? 0 : parseFloat(SUSS);
       ley = (isNaN(parseFloat(ley)))? 0 : parseFloat(ley);
       honorarios = (isNaN(parseFloat(honorarios)))? 0 : parseFloat(honorarios);
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
        $('#monotributo').val(data['monto']);
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




