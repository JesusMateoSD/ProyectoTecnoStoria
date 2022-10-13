<link href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.8.0/sweetalert2.min.css" rel="stylesheet"/>
<script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.8.0/sweetalert2.min.js"></script>
<script language="javascript" src="views/js/jquery-3.6.0.min.js"></script>
<?php
  include("header.php");
  if(isset($_POST['salvarconsultorio'])){
    $consultorio = new ConsultorioControlador();
    $consultorio->registrarConsultorioControlador();
  }

  $consultorio = new ConsultorioControlador();
  $datos = $consultorio->tablaConsultoriosControlador();
?>
             <!-- INICIO PHP INDEXCONSULTORIOS -->
<main class="container p-0">
  <br>
  <div class="p-2 mb-4 bg-primary text-white">Crear Consultorio</div>   
    <div class="container">
      <div class="row">
        <form method="POST" enctype="multipart/form-data">
          <div class="form-row">
            <div class="col-md-8 mb-4">
              <input type="text" name="nombre" id="nombre" class="form-control" value=""  onkeyup="javascript:this.value=this.value.toUpperCase();"  placeholder="Consultorio" autofocus>
            </div>

            <div class="col-md-4 mb-4">
              <input type="text" name="nit" id="nit" class="form-control" placeholder="Nit" autofocus>
            </div>

            <div class="col-md-4 mb-4">
              <input type="text" name="direccion" id="direccion" class="form-control" placeholder="Direccion" autofocus>
            </div>

            <div class="col-md-4 mb-4">
              <input type="text" name="ciudad" id="ciudad" class="form-control" placeholder="Ciudad"value=""  onkeyup="javascript:this.value=this.value.toUpperCase();"autofocus>
            </div>

            <div class="col-md-4 mb-4">
              <input type="text" name="depto" id="depto" class="form-control" placeholder="Departamento" value=""  onkeyup="javascript:this.value=this.value.toUpperCase();"autofocus>
            </div> 

            <div class="col-md-3 mb-4">
              <input type="text" name="telefono" id="telefono" class="form-control" placeholder="Telefono" autofocus>
            </div>

            <div class="col-md-3 mb-4">
              <input type="email" name="correo" id="correo" class="form-control" autocomplete="off" placeholder="ejemplo@mai.com" autofocus>
            </div>

            <div class="col-md-3 mb-4">
              <input type="text" name="capb" id="capb" class="form-control" placeholder="Codigo E.A.P.B" autofocus>
            </div>

            <div class="col-md-3 mb-4">
              <input type="text" name="napb" id="napb" class="form-control" placeholder="Nombre E.A.P.B" autofocus>
            </div>

            <div class="col-md-6 mb-4 mx-auto">
              <input type="file" name="foto" id="foto" class="inputfile inputfile-1 mr-5" data-multiple-caption="{count} archivos seleccionados" multiple/>
              <label for="foto">
              <svg xmlns="http://www.w3.org/2000/svg" class="iborrainputfile" width="20" height="17" viewBox="0 0 20 17"><path d="M10 0l-5.2 4.9h3.3v5.1h3.8v-5.1h3.3l-5.2-4.9zm9.3 11.5l-3.2-2.1h-2l3.4 2.6h-3.5c-.1 0-.2.1-.2.1l-.8 2.3h-6l-.8-2.2c-.1-.1-.1-.2-.2-.2h-3.6l3.4-2.6h-2l-3.2 2.1c-.4.3-.7 1-.6 1.5l.6 3.1c.1.5.7.9 1.2.9h16.3c.6 0 1.1-.4 1.3-.9l.6-3.1c.1-.5-.2-1.2-.7-1.5z"></path></svg>
              <span class="iborrainputfile">Seleccionar Logo</span>
              </label>
            </div>
            
            <div class="col-md-12 mb-2">
              <div class="p-2 mb-2 bg-primary"></div>
            </div>
          </div>
          <input type="submit" name="salvarconsultorio" class="btn btn-primary mx-2" value="Grabar Consultorio">
          <input type="submit" name="vaciarcampos" id="vaciarcampos" class="btn btn-success mx-2" value="Vaciar  Campos">  
        </form>
      </div>
    </div>

    <br>

    <div class="col-md-12">
      <table class="table table-hover table-light">
        <thead>
          <tr class="table-primary">
            <th>Consultorio</th>
            <th>Nit</th>
            <th>Ciudad</th>
            <th>Editar</th>
            <th>Borrar</th>
          </tr>
        </thead>
        <tbody>
          <?php
            foreach($datos as $v){
          ?>
            <tr>
              <td><?php echo $v['nombre'] ?></td>
              <td><?php echo $v['nit'] ?></td>
              <td><?php echo $v['ciudad'] ?></td>
              <td>
                <a href="index.php?action=editCon&id=<?php echo $v['id']?>" class="btn btn-success">
                  <i  class="fas fa-edit"></i>
                </a>
              </td>
              <td>
                <a href="index.php?action=delCons&id=<?php echo $v['id']?>" class="btn btn-danger">
                  <i class="fas fa-trash-alt"></i>
                </a>
              </td>
            </tr>
          <?php } ?>
        </tbody>
      </table>
    </div>
  </div>
</main>

<script type="text/javascript">
  $("#vaciarcampos").on("click", function() {
    // Cancelar comportamiento normal del botón
    event.preventDefault();
    $('#nombre').val('');
    $('#nit').val('');
    $('#direccion').val('');
    $('#ciudad').val('');
    $('#dpto').val('0');
    $('#telefono').val('');
    $('#correo').val('');
    $('#capb').val('');
    $('#napb').val('');
    $('#foto').val('');
  });
</script>

