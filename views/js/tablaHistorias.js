$(document).ready(function() {
  $('#tablehistorias').DataTable();
});

function detalleinicio() {
  $("#tablahistorias").load('index.php?action=mostrarhistorias');
}