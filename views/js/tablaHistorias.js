$(document).ready(function() {
  $('#tablehistorias').DataTable();
});

function detalleinicio() {
  $("#tablahistorias").load('views/modules/mostrarhistorias.php');
}