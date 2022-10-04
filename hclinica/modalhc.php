<?php
            session_start();
            include('../db.php');
            include('../header/header.php');
 ?>           
             <div class="container">
             <div class="row">
            <form action="../hclinica/indexhclinica.php" method="POST" >
               <div class="form-row">
                        <div class="col-md-12 mb-2">
                         <label for="usr">Digite Numero Documento:</label> 
                        <input type="text"  name="documento" id="documento"  class="form-control" >
                        </div>
              </div>        
             
                       <input type="submit" name="salvarparametro" class="btn btn-primary " value="Historia Clinica">
                  
                     
                    </form>
  </div>
  </div>               