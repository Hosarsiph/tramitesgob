// JavaScript Document
 
// Función para recoger los datos de PHP
function objetoAjax(){
	var xmlhttp=false;
	try {
		xmlhttp = new ActiveXObject("Msxml2.XMLHTTP");
	} catch (e) {
 
	try {
		xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
	} catch (E) {
		xmlhttp = false;
	}
}
 
if (!xmlhttp && typeof XMLHttpRequest!='undefined') {
	  xmlhttp = new XMLHttpRequest();
	}
	return xmlhttp;
}
 
//Función para recoger los datos del formulario y enviarlos por post  
function enviarDatosBeca(){
 
  //div donde se mostrará lo resultados
  divResultado = document.getElementById('resultado');
  //recogemos los valores de los inputs
  /*homotramite = document.nuevo_registro.homotramite.value;
  fechadof = document.nuevo_registro.fechadof.value;
  fechasolicitud = document.nuevo_registro.fechasolicitud.value; */
  fechatramite = document.nuevo_registro.fechatramite.value;
  curp = document.nuevo_registro.curp.value;
  nombre = document.nuevo_registro.nombre.value;
  appaterno = document.nuevo_registro.appaterno.value;
  apmaterno = document.nuevo_registro.apmaterno.value;
  telefono = document.nuevo_registro.telefono.value;
  extension = document.nuevo_registro.extension.value;
  telefonomovil = document.nuevo_registro.telefonomovil.value;
  email = document.nuevo_registro.email.email.value;
  vialidad = document.nuevo_registro.vialidad.value;
  calle = document.nuevo_registro.calle.value;
  numeroexte = document.nuevo_registro.numeroexte.value;
  numeinte = document.nuevo_registro.numeinte.value;
  codigopostal = document.nuevo_registro.codigopostal.value;
  colonia = document.nuevo_registro.colonia.value;
  municipio = document.nuevo_registro.municipio.value;
  estado = document.nuevo_registro.estado.value;
  tipobeca = document.nuevo_registro.tipobeca.value;
  cicloescolar = document.nuevo_registro.cicloescolar.value;
  propedeutico = document.nuevo_registro.propedeutico.value;
  especialidad = document.nuevo_registro.especialidad.value;
  maestria = document.nuevo_registro.maestria.value;
  doctorado = document.nuevo_registro.doctorado.value;
  otrabeca = document.nuevo_registro.otrabeca.value;
  otroingreso = document.nuevo_registro.otroingreso.value;
  observaciones = document.nuevo_registro.observaciones.value;
 
  //instanciamos el objetoAjax
  ajax=objetoAjax();
 
  //uso del medotod POST
  //archivo que realizará la operacion
  //registro.php
  ajax.open("POST", "registro.php",true);
  //cuando el objeto XMLHttpRequest cambia de estado, la función se inicia
  ajax.onreadystatechange=function() {
	  //la función responseText tiene todos los datos pedidos al servidor
  	if (ajax.readyState==4) {
  		//mostrar resultados en esta capa
		divResultado.innerHTML = ajax.responseText
  		//llamar a funcion para limpiar los inputs
		LimpiarCampos();
	}
 }
	ajax.setRequestHeader("Content-Type","application/x-www-form-urlencoded");
	//enviando los valores a registro.php para que inserte los datos
	ajax.send ("$fechatramite"+fechatramite+"$curp"+curp+"$nombre"+nombre+"$appaterno"+appaterno+"$apmaterno"+apmaterno+"$telefono"+telefono+"$extension"+extension+
            "$telefonomovil"+telefonomovil+"$email"+email+"$vialidad"+vialidad+"$calle"+calle+"$numeroexte"+numeroexte+"$numeinte"+numeinte+
            "$codigopostal"+codigopostal+"$colonia"+colonia+"$municipio"+municipio+"$estado"+estado+"$tipobeca"+tipobeca+"$cicloescolar"+cicloescolar+
            "$propedeutico"+propedeutico+"$especialidad"+especialidad+"$maestria"+maestria+'$doctorado'+doctorado+'$otrabeca'+otrabeca+'$otroingreso'+otroingreso+'$observaciones'+observaciones)
}
 
//función para limpiar los campos
/*function LimpiarCampos(){
  document.nuevo_empleado.nombre.value="";
  document.nuevo_empleado.appaterno.value="";
  document.nuevo_empleado.apmaterno.value="";
  document.nuevo_empleado.nombre.focus();
}*/