

  $( function() {
    $("#tipo").change( function() {
        if ($(this).val() == "fisica") {
          $("#cuit").prop("disabled", false);
          $("#cuitjuridico").prop("disabled", true);
          $("#cuitdueño").prop("disabled", true);
          $("#cuitjuridico").val('');
          $("#cuitdueño").val('');
        }else {
             $("#cuitjuridico").prop("disabled", false);
             $("#cuitdueño").prop("disabled", false);
             $("#cuit").prop("disabled", true);
             $("#cuit").val('');
        }
    });

});


$( function() {
    $("#afip").change( function() {
        if ($(this).val() !== "1") {
         	$("#actividad_monotributo").prop("disabled", true);
        	$("#adicional").prop("disabled", true);
        } else {
           
        	$("#actividad_monotributo").prop("disabled", false);
        	$("#adicional").prop("disabled", false);
        }
    });
});


function validarchk(){
var chk = document.getElementById('convenioMultilateral');
var caba = document.getElementById('caba');
var bs_as = document.getElementById('bs_as');
var catamarca = document.getElementById('catamarca');
var chaco = document.getElementById('chaco');
var chubut = document.getElementById('chubut');
var cordoba = document.getElementById('cordoba');
var corrientes = document.getElementById('corrientes');
var entre_rios = document.getElementById('entre_rios');
var formosa = document.getElementById('formosa');
var jujuy = document.getElementById('jujuy');
var la_pampa = document.getElementById('la_pampa');
var la_rioja = document.getElementById('la_rioja');
var mendoza = document.getElementById('mendoza');
var misiones = document.getElementById('misiones');
var chaco = document.getElementById('chaco');
var rio_negro = document.getElementById('rio_negro');
var salta = document.getElementById('salta');
var neuquen = document.getElementById('neuquen');
var san_juan = document.getElementById('san_juan');
var san_luis = document.getElementById('san_luis');
var santa_cruz = document.getElementById('santa_cruz');
var santa_fe = document.getElementById('santa_fe');
var santiago_estero = document.getElementById('santiago_estero');
var tucuman = document.getElementById('tucuman');
var tierra_fuego = document.getElementById('tierra_fuego');

if(chk.checked){
	neuquen.disabled='';
    caba.disabled='';	
    bs_as.disabled='';
    mendoza.disabled='';
	catamarca.disabled='';
	chaco.disabled='';
	chubut.disabled='';
	cordoba.disabled='';
	corrientes.disabled='';
	entre_rios.disabled='';
	formosa.disabled='';
	jujuy.disabled='';
	la_pampa.disabled='';
	la_rioja.disabled='';
	misiones.disabled='';
	neuquen.disabled='';
	chaco.disabled='';
	rio_negro.disabled='';
	salta.disabled='';
	san_juan.disabled='';
	san_luis.disabled='';
	santa_cruz.disabled='';
	santa_fe.disabled='';
	santiago_estero.disabled='';
	tucuman.disabled='';
	tierra_fuego.disabled='';
}else{       
    caba.disabled='disabled';
    bs_as.disabled='disabled';	
    mendoza.disabled='disabled';
	catamarca.disabled='disabled';
	chaco.disabled='disabled';
	chubut.disabled='disabled';
	cordoba.disabled='disabled';
	corrientes.disabled='disabled';
	entre_rios.disabled='disabled';
	formosa.disabled='disabled';
	jujuy.disabled='disabled';
	la_pampa.disabled='disabled';
	la_rioja.disabled='disabled';
	misiones.disabled='disabled';
	chaco.disabled='disabled';
	rio_negro.disabled='disabled';
	salta.disabled='disabled';
	san_juan.disabled='disabled';
	san_luis.disabled='disabled';
	santa_cruz.disabled='disabled';
	santa_fe.disabled='disabled';
	santiago_estero.disabled='disabled';
	tucuman.disabled='disabled';
	tierra_fuego.disabled='disabled';

	caba.value='';	
	bs_as.value='';
	mendoza.value='';
	catamarca.value='';
	chaco.value='';
	chubut.value='';
	cordoba.value='';
	corrientes.value='';
	entre_rios.value='';
	formosa.value='';
	jujuy.value='';
	la_pampa.value='';
	la_rioja.value='';
	misiones.values='';
	chac.valueo='';
	rio_negro.value='';
	salta.value='';
	san_juan.value='';
	san_luis.value='';
	santa_cruz.value='';
	santa_fe.value='';
	santiago_estero.value='';
	tierra_fuego.value='';
}
}



function validarConvenioGeneral(){
var cm = document.getElementById('convenioMultilateral');
var bg = document.getElementById('brutos_general');
if(bg.checked){
    cm.value='';
    cm.disabled='disabled';
}else{
	cm.disabled='';
}
}
function validarConvenioSimplificado(){
var cm = document.getElementById('convenioMultilateral');
var bs = document.getElementById('brutos_simplificado');
if(bs.checked){
    cm.value='';
    cm.disabled='disabled';
}else{
	cm.disabled='';
}
}


$( function() {
    $("#afip").change( function() {
        if ($(this).val() === "1") {
        	$("#ingresos_brutos").prop("disabled", false);
        	$("#categoria").prop("disabled", false);
        	$("#adicional").prop("disabled", false);
        	$("#actividad").prop("disabled", false);        
        } else {
        	$("#ingresos_brutos").prop("disabled", true);
        	$("#categoria").prop("disabled", true);
        	$("#adicional").prop("disabled", true);
        	$("#actividad").prop("disabled", true);
            
        }
    });
});

$('#btn_cargar').click(function(){
  if ($('#denominacion').val().length == 0) {
    alertify.alert('Ingrese Denominacion');
    return false;
  }
   if ($('#tipo').val() == 1) {
      if($('#cuit').val().length ==0){
      alertify.alert('Ingrese el cuit');
    return false;
    }
  }

  if ($('#tipo').val() == 2) {
      if(($('#cuitjuridico').val()==0)||($('#cuitdueño').val()==0)){
      alertify.alert('Ingrese el cuit juridico y cuit titular');
    return false;
    }
  }  

var contador = 0;

 if( $('#convenioMultilateral').prop('checked') ) {
    
    
   if( $('#caba').prop('checked') ) {
    contador = 1+contador;
    }
  if( $('#bs_as').prop('checked') ) {
    contador = 1+contador;
  }
  if( $('#mendoza').prop('checked') ) {
    contador = 1+contador;
  }
  if( $('#catamarca').prop('checked') ) {
    contador = 1+contador;
  }
  if( $('#chubut').prop('checked') ) {
    contador = 1+contador;
  }
  if( $('#corrientes').prop('checked') ) {
    contador = 1+contador;
  }
  if( $('#entre_rios').prop('checked') ) {
    contador = 1+contador;
  }
  if( $('#formosa').prop('checked') ) {
    contador = 1+contador;
  }
  if( $('#jujuy').prop('checked') ) {
    contador = 1+contador;
  }
  if( $('#la_pampa').prop('checked') ) {
    contador = 1+contador;
  }
  if( $('#la_rioja').prop('checked') ) {
    contador = 1+contador;
  }
  if( $('#chaco').prop('checked') ) {
    contador = 1+contador;
  }
  if( $('#salta').prop('checked') ) {
    contador = 1+contador;
  }
  if( $('#san_juan').prop('checked') ) {
    contador = 1+contador;
  }
  if( $('#san_luis').prop('checked') ) {
    contador = 1+contador;
  }
  if( $('#santa_cruz').prop('checked') ) {
    contador = 1+contador;
  }
  if( $('#santa_fe').prop('checked') ) {
    contador = 1+contador;
  }
  if( $('#santiago_estero').prop('checked') ) {
    contador = 1+contador;
  }
  if( $('#tucuman').prop('checked') ) {
    contador = 1+contador;
  }
  if( $('#tierra_fuego').prop('checked') ) {
    contador = 1+contador;
  }




if(contador<2){
   alertify.alert('Selecione al menos 2 juridicones');
    return false;

}
}
		

		datos=$('#frmClientes').serialize();
		$.ajax({
			type:"POST",
			data:datos,
			url:"../procesos/clientes/agregaClientes.php",					
			success:function(r){				
				if(r==1){				
					
				
					alertify.success("Cliente agregado con exito");
          $('#frmClientes').trigger("reset");
				}else{
					
					alertify.error("No se pudo agregar cliente");
				}

			}
		})		
		
	});
	


