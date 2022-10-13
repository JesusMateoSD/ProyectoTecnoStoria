<?php
  session_start();
  if(isset($_SESSION['usuario'])){
    include("header.php");
  }
  else{
    header('location:index.php');
  }
  
  if(isset($_POST['salvarusuario'])){
    $usuario = new UsuarioControlador();
    $usuario->registrarUsuarioControlador();
  }

  if($_GET['action'] == 'usuok'){
    ?>
      <script LANGUAGE="javascript">
          $(document).ready(function() {
            swal({
              title: 'TecnoStoria',
              text: "El Usuario  Ha Sido Grabado Correctamente!",
              type: 'success',
              confirmButtonColor: '#3085d6',
              confirmButtonText: 'OK!'
            }).then((result) => {
              
            })
          });
        </script>
    <?php
  } 
  //print "el valor del get es ".$_GET['action'];
  $usuario = new UsuarioControlador();
  $datos = $usuario->tablaUsuariosControlador();

  
?>
<main class="container ">  
  <div class="p-2 mb-2 bg-primary text-white">Crear Usuario</div>
    <hr>  
    <div class="container">
      <div class="row">
        <form action="" method="POST" enctype="multipart/form-data">
          <div class="form-row">
            <div class="col-md-6 mb-4">
              <input type="text" name="nombre" id="nombre" class="form-control" placeholder="Nombre" value=""  onkeyup="javascript:this.value=this.value.toUpperCase();" autofocus autocomplete="off">
            </div>

            <div class="col-md-3 mb-4">
              <input type="text" name="documento" id="documento" class="form-control" placeholder="Documento" autofocus autocomplete="off">
            </div>

            <div class="col-md-3 mb-4">
              <input type="text" name="registro" id="registro" class="form-control" placeholder="Registro Medico" value=""  onkeyup="javascript:this.value=this.value.toUpperCase();" autofocus autocomplete="off">
            </div>

            <div class="col-md-3 mb-4">
              <input type="email" name="correo" id="correo" class="form-control" placeholder="ejemplo@gmail.com" autofocus autocomplete="off">
            </div>

          <div class="col-md-3 mb-4">
            <label class="mr-sm-2 sr-only" for="inlineFormCustomSelect">Preference</label>
            <select class="custom-select mr-sm-2" name="nivel" id="nivel" id="inlineFormCustomSelect">
              <option selected value="0">Nivel...</option>
              <option value="2">Medico</option>
              <option value="3">Asistente</option>  
            </select>
          </div>

          <div class="col-md-3 mb-4">
            <input type="date" name="fecha" id="fecha" class="form-control" placeholder="" autofocus>
          </div>
      
          <div class="col-md-3 mb-4">
            <input type="text" name="clave" id="clave" class="form-control" placeholder="Clave" id="inputPassword" autocomplete="off">
          </div>

          <div class="col-md-3 mb-4">
            <a href="index.php?action=indexfirma" class="btn btn-primary" role="button" target="_blank" aria-pressed="true">Firmar</a>
          </div>

          <div class="col-md-7 mb-4">
            <input type="file" name="foto" id="foto" class="inputfile inputfile-1" data-multiple-caption="{count} archivos seleccionados" multiple />
            <label for="file-1">
            <svg xmlns="http://www.w3.org/2000/svg" class="iborrainputfile" width="20" height="17" viewBox="0 0 20 17"><path d="M10 0l-5.2 4.9h3.3v5.1h3.8v-5.1h3.3l-5.2-4.9zm9.3 11.5l-3.2-2.1h-2l3.4 2.6h-3.5c-.1 0-.2.1-.2.1l-.8 2.3h-6l-.8-2.2c-.1-.1-.1-.2-.2-.2h-3.6l3.4-2.6h-2l-3.2 2.1c-.4.3-.7 1-.6 1.5l.6 3.1c.1.5.7.9 1.2.9h16.3c.6 0 1.1-.4 1.3-.9l.6-3.1c.1-.5-.2-1.2-.7-1.5z"></path></svg>
            <span class="iborrainputfile">Seleccionar Firma</span>
            </label>      
          </div>
          <div class="col-md-12 mb-2">
            <div class="p-2 mb-2 bg-primary "></div>
          </div>
        </div>
        <input type="submit" name="salvarusuario" class="btn btn-primary mx-2" value="Grabar Usuario">
        <input type="submit" name="vaciarcampos" id="vaciarcampos" class="btn btn-success mx-2" value="Vaciar Campos">  
        </form>
      </div>
    </div>
   <br>
      <table class="table table-hover table-light">
        <thead>
          <tr class="table-primary">
            <th>Nombre</th>
            <th>Correo</th>
            <th>Nivel</th>
            <th>Borrar Usuario</th>
          </tr>
        </thead>
        <tbody>
          <?php
          
            foreach($datos as $v){
          ?>
            <tr>
              <td><?php echo $v['nombre'] ?></td>
              <td><?php echo $v['correo'] ?></td>
              <td><?php echo$v['nivel'] ?></td>
              <td>
                <a href="index.php?action=delUser&id=<?php echo $v['id'] ?>" class="btn btn-danger"><i class="fas fa-trash-alt"></i></a>
              </td>
              </tr>
          <?php }  ?>
        </tbody>
      </table>
    </div>
  </div>
</main>

<script type="text/javascript" src="views/js/vaciarcampos.js"></script>

             <!-- FIN PHP INDEX SUPER USUARIO -->
