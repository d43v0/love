// File Upload
// 
/*
var form = document.getElementById('formulario');
form.addEventListener('submit',function(evt) {
  evt.preventDefault();
  var mensajesError = [];
  if (etiquetas.value === null || etiquetas.value === '') {
    mensajesError.push('Ingresa Alguna etiqueta');
  }
  if (descripcion.value === null || descripcion.value === '') {
    mensajesError.push('Ingresa Alguna Descripcion');
  }
  error.innerHTML = mensajesError.join(', ');

});
*/

function validar() {
var etiquetas = document.getElementById('etiquetas').value;
var descripcion = document.getElementById('descripcion').value;
if   (etiquetas != "") {
  if (descripcion != "") {
    document.getElementById('subir').hidden = false;
  } else { document.getElementById('subir').hidden = true;}
}
 else { document.getElementById('subir').hidden = true;}


}