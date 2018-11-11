<div class="modal fade in" id="modal-default" style="display: none; padding-right: 50px;">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">

        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span></button>
            <h4 class="modal-title">Agregar nuevo Proveedor</h4>
      </div>

      <div class="modal-body">
               
        <form method="POST" action="{{route('provisioners.store')}}">
        {{ csrf_field() }}

 

          <div class="form-group">
            <label for="exampleInputEmail1">Nombre del Proveedor</label>
            <input type="text" class="form-control" name="name" placeholder="Ingrese nombre" required >
          </div>

          <div class="form-group">
            <label for="exampleInputEmail1">Dirección del Proveedor </label>
            <input type="text" class="form-control" name="direccion" placeholder="Dirección" required>
          </div>
      
          <div class="form-group">
            <label for="exampleInputEmail1">Número de telefono</label>
            <input type="number" class="form-control" name="phone" placeholder="Telefono" required>
          </div>
        
          <div class="form-group">
            <label for="exampleInputEmail1">Ingrese el numero de CUIL/CUIT</label>
            <input type="number" class="form-control" name="cuit" placeholder="Número de CUIL/CUIT" required>
          </div>
          
          <div class="form-group">
        </div>
      </div>

      <div class="modal-footer">
        <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Cerrar</button>
        <button type="submit" class="btn btn-primary">Guardar</button>
      </div>
      </form>
     
          </div>
        </div>

      </div>