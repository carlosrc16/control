<!--Modal-->
<div class="modal fade" id="myModal" role="dialog">
   <div class="modal-dialog" role="document">
      <div class="modal-content">
         <div class="modal-header bg-success" style="color: #fff;">
            <h5 class="modal-title">Agregar Gasto</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
               <span aria-hidden="true">&times;</span>
            </button>
         </div>
         <form method="post">
            <div class="modal-body">
               <div class="form-group" id="">
                  <label class="txt">Descripción:</label>
                  <input type="text" class="form-control" placeholder="" name="montoPer" id="perMonto" autocomplete="off">
               </div>
               <div class="form-group" id="">
                  <label class="txt">Monto:</label>
                  <input type="number" class="form-control" placeholder="" name="montoPer" id="perMonto" autocomplete="off">
               </div>
               <div class="form-group" id="">
                  <label class="txt">Fecha:</label>
                  <input type="date" class="form-control" placeholder="" name="montoPer" id="perMonto" autocomplete="off" value="<?php echo date("Y-m-d"); ?>">
               </div>
            </div>
            <div class="modal-footer">
               <button type="button" class="btn btn-success">Guardar</button>
               <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
            </div>
         </form>      
      </div>
   </div>
</div>
<!--Modal-->

<!--Modal Op-->
<div class="modal fade" id="myModalOp" role="dialog">
   <div class="modal-dialog" role="document">
      <div class="modal-content">
         <div class="modal-header bg-success" style="color: #fff;">
            <h5 class="modal-title">Agregar Gasto Operativo</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
               <span aria-hidden="true">&times;</span>
            </button>
         </div>
         <form method="post">
            <div class="modal-body">
               <div class="form-group" id="">
                  <label class="txt">Descripción:</label>
                  <input type="text" class="form-control" placeholder="" name="montoPer" id="perMonto" autocomplete="off">
               </div>
               <div class="form-group" id="">
                  <label class="txt">Monto:</label>
                  <input type="number" class="form-control" placeholder="" name="montoPer" id="perMonto" autocomplete="off">
               </div>
               <div class="form-group" id="">
                  <label class="txt">Fecha:</label>
                  <input type="date" class="form-control" placeholder="" name="montoPer" id="perMonto" autocomplete="off" value="<?php echo date("Y-m-d"); ?>">
               </div>
            </div>
            <div class="modal-footer">
               <button type="button" class="btn btn-success">Guardar</button>
               <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
            </div>
         </form>      
      </div>
   </div>
</div>
<!--Modal-->

<ul class="nav nav-tabs muni" id="myTab" role="tablist">
   <li class="nav-item">
      <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Gastos Administrativos</a>
   </li>
   <li class="nav-item">
      <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Gastos Operativos</a>
   </li>
   <li class="nav-item">
      <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">Otros</a>
   </li>
</ul>

<div class="tab-content container-fluid" id="myTabContent">

   <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
      <div class="container-fluid " style="padding-top: 10px;">
         <div class="" align="center" style="padding-top: 15px;">
            <div class="container-fluid" style="padding: 0px;" style="background: #eee;">
               <p class="float-right">
                  <?php if (isset($_GET['add']) && $_GET['add'] == 'gastoAdmin') { ?>
                     <a href="/control/?submenu=1&movs=1" class="btn btn-warning" style="color: #fff;">Gastos</a>
                   <?php } ?>    
                  <a href="/control/?submenu=1&movs=1&add=gastoAdmin" class="btn btn-success"><i class="fas fa-plus"></i> Categorias</a>           
               </p>
               <p class="lead lead-info float-left">Gastos Administrativos</p>
            </div>
         </div>
      </div>
      <div class="container-fluid" style="padding-top: 50px; width: 100%;"> 
      <?php 
      if (isset($_GET['add']) && $_GET['add'] == 'gastoAdmin') { ?>
            <?php
            include_once('paginas/adcatadmn.php');
            return;
            ?>
      <?php } else { ?>
      
         <div class="card bg-light mb-3" style="width: 100%;">
            <div class="card-header">
               Listado de Gastos<span class="" id="addG" style="float: right;"><i class="fas fa-plus"></i></span>
            </div>
            <div class="card-body" style="padding: 0px;">
               <table class="table table-striped table-bordered table-sm " style="padding: 0px; margin: 0px;">
                  <thead>
                     <th>Clave</th>
                     <th>Descripcion</th>
                     <th>Monto</th>
                     <th>Fecha</th>
                     <th>Acción</th>
                  </thead>
                  <tbody>

                  </tbody>
               </table>
            </div>
         </div>
      
   <?php } ?>
      </div>
   </div>


   <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
      <div class="container-fluid justify-content-center " style="padding-top: 10px;">
         <div class="" align="center" style="padding-top: 15px;">
            <div class="container-fluid" style="padding: 0px;">
               <p class="float-right">          
                  <a href="/control/?submenu=1&movs=1&add=gastosOp" class="btn btn-success"><i class="fas fa-plus"></i> Categorias</a>          
               </p>
               <p class="lead lead-info float-left">Gastos Operativos</p>
            </div>
         </div>
      </div>

      <div class="container-fluid" style="padding-top: 50px; width: 100%;"> 
         <?php 
         if (isset($_GET['add']) && $_GET['add'] == 'gastosOp') { ?>
            <?php
            include_once('paginas/adcatOp.php');
            return;
            ?>
         <?php } else { ?>

            <div class="card bg-light mb-3" style="width: 100%;">
               <div class="card-header">
                  Listado de Gastos<span class="" id="addGOp" style="float: right;"><i class="fas fa-plus"></i></span>
               </div>
               <div class="card-body" style="padding: 0px;">
                  <table class="table table-striped table-bordered table-sm " style="padding: 0px; margin: 0px;">
                     <thead>
                        <th>Clave</th>
                        <th>Descripcion</th>
                        <th>Monto</th>
                        <th>Fecha</th>
                        <th>Acción</th>
                     </thead>
                     <tbody>

                     </tbody>
                  </table>
               </div>
            </div>
         <?php } ?>
      </div>


   </div>


   <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
      <div class="container-fluid justify-content-center " style="padding-top: 10px;">
         <div class="" align="center" style="padding-top: 15px;">
            <div class="container-fluid" style="padding: 0px;">
               <p class="float-right">          
                  <a href="/crm/?comercial=solicitud-anuncio&lista=me" class="btn btn-success"><i class="fas fa-plus"></i> Categorias</a>          
               </p>
               <p class="lead lead-info float-left">Otros Gastos|</p>
            </div>
         </div>
      </div>
   </div>
</div>