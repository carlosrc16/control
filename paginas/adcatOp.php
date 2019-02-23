<!--Modal-->
<div class="modal fade" id="myModalCatOp" role="dialog">
   <div class="modal-dialog" role="document">
      <div class="modal-content">
         <div class="modal-header bg-success" style="color: #fff;">
            <h5 class="modal-title">Agregar Categoria</h5>
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
               <!--<div class="form-group" id="">
                  <label class="txt">Monto:</label>
                  <input type="number" class="form-control" placeholder="" name="montoPer" id="perMonto" autocomplete="off">
               </div>
               <div class="form-group" id="">
                  <label class="txt">Fecha:</label>
                  <input type="date" class="form-control" placeholder="" name="montoPer" id="perMonto" autocomplete="off" value="<?php //echo date("Y-m-d"); ?>">
               </div>-->
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

<div class="card bg-light mb-3" style="width: 100%;">
   <div class="card-header">
      Categorias Gastos Operativos<span class="" id="addCatOp" style="float: right;"><i class="fas fa-plus"></i></span>
   </div>
   <div class="card-body" style="padding: 0px;">
      <table class="table table-striped table-bordered table-sm " style="padding: 0px; margin: 0px;">
         <thead>
            <th>Clave</th>
            <th>Descripcion</th>
            <!--<th>Monto</th>-->
            <th>Fecha</th>
            <th>Acción</th>
         </thead>
         <tbody>

         </tbody>
      </table>
   </div>
</div>