/*
window.onload = function () {
document.nuevo_registro.nombre.focus();
document.nuevo_registro.addEventListener('submit', validarFormulario);
}

function validarFormulario(evObject) {
evObject.preventDefault();
var todoCorrecto = true;
var formulario = document.nuevo_registro;
for (var i=0; i<formulario.length; i++) {
if(formulario[i].type =='text') {
if (formulario[i].value == null || formulario[i].value.length == 0 || /^\s*$/.test(formulario[i].value)){
alert (formulario[i].name+ ' no puede estar vacío o contener sólo espacios en blanco');
todoCorrecto=false;
}
}
}
if (todoCorrecto ==true) {formulario.submit();}
}
*/

function validarLetras(e) { // 1
  tecla = (document.all) ? e.keyCode : e.which;
  if (tecla==8) return true; // backspace
    if (tecla==32) return true; // espacio
      if (e.ctrlKey && tecla==86) { return true;} //Ctrl v
        if (e.ctrlKey && tecla==67) { return true;} //Ctrl c
          if (e.ctrlKey && tecla==88) { return true;} //Ctrl x

            patron = /[a-zA-Z]/; //patron

            te = String.fromCharCode(tecla);
            return patron.test(te); // prueba de patron
}


function validarNumeros(e) { // 1
  tecla = (document.all) ? e.keyCode : e.which; // 2
  if (tecla==8) return true; // backspace
    if (tecla==109) return true; // menos
      if (tecla==110) return true; // punto
        if (tecla==189) return true; // guion
          if (e.ctrlKey && tecla==86) { return true}; //Ctrl v
            if (e.ctrlKey && tecla==67) { return true}; //Ctrl c
              if (e.ctrlKey && tecla==88) { return true}; //Ctrl x
                if (tecla>=96 && tecla<=105) { return true;} //numpad

                  patron = /[0-9]/; // patron

                  te = String.fromCharCode(tecla);
                  return patron.test(te); // prueba
}

