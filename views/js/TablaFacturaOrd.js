$(document).ready(function() {
  $('#tablefactura').DataTable( {
    "aoColumns": [
        null,
        null,
        { "orderSequence": [ "asc" ] },
        { "orderSequence": [ "desc", "asc", "asc" ] },
        { "orderSequence": [ "desc" ] },
        null
    ]
  });
});