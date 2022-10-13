$("#vaciarcampos").on("click", function() {
  // Cancelar comportamiento normal del botón
  event.preventDefault();
  $('#nombre').val('');
  $('#correo').val('');
  $('#clave').val('');
  $('#documento').val('');
});

$("#salvarusuario").on("click", function() {
  // Cancelar comportamiento normal del botón
  event.preventDefault();
  $('#nombre').val('');
  $('#correo').val('');
  $('#clave').val('');
  $('#documento').val('');
});