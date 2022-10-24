   <table class="table table-hover">
        <thead >
          <tr class="table-primary">
            <th>Factura</th>
            <th>Fecha</th>
            <th>Producto</th>
            <th>Valor</th>
            <th>Cantidad</th>
            <th>Total</th>
            <th>Borrar</th>
          </tr>
        </thead>
        <tbody>
          <?php
          require_once('../../controllers/PagosControlador.php');
          require_once('../../models/PagosModelo.php');

          $Pagos = new PagosControlador();
          $tFacturap = $Pagos->TablaFacturaPagosControlador();
         
          // $query = "SELECT * FROM tbl_dfacturap ";
          // $result_tasks = mysqli_query($mysqli, $query);    

          // while($row = mysqli_fetch_assoc($result_tasks)) {
          foreach($tFacturap as $row){ ?>
          <tr>
            <td><?php echo $row['nfactura']; ?></td>
            <td><?php echo $row['fecha']; ?></td>
            <td><?php echo $row['producto']; ?></td>
            <td><?php echo $row['valor']; ?></td>
            <td><?php echo $row['cantidad']; ?></td>
            <td><?php echo $row['total']; ?></td>
            <td>
              <li id="<?php echo $row['id']?>" class="btn btn-danger"><a href="index.php?action=delPagT&id=<?php echo $row['id']?>" class="deleteitem" style="color: #FFF;" ><i class="fas fa-trash-alt"></i></a></li>
            </td>
          </tr>
          <?php } ?>
        </tbody>
      </table>

<!-- 
<script type="text/javascript">

$(function() {
$(".deleteitem").click(function(e) {
e.preventDefault();
var id = $(this).parent("li").attr("id");
$.get("borrardetallep.php",{ id: id}).done(function(data) {
if(data=="Error, insert query failed") {
// dont delete from list
alert("Failed to delete "+id);
} else {
//delete from list
$("#"+id).remove();
//alert("Deleted "+id);
$("#tabladetallep").load('mostrardetallep.php');
}
});
});
});
</script>
 -->      