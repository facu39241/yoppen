<div class="modal fade in" id="view-modify-{{$provisioner->id}}" style="display: none; padding-right: 50px;">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">

        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span></button>
            <h4 class="modal-title">Datos del Proveedor</h4>
      </div>

      <div class="modal-body">
               
        <form method="POST" action="{{route('provisioners.store')}}">
        {{ csrf_field() }}


          <div class="form-group">
            <label for="">Nombre del producto</label>
            <br>
            <input type="text" class="form-control" name="name" value="{{$provisioner->name}}" required >
          </div>

          <div class="form-group">
            <label for="">Código del producto</label>
            <br>
            <input type="text" class="form-control" name="direccion" value="{{$provisioner->direccion}}" required>
          </div>

          <label for="">Número de telefono</label>
            <br>
            <input type="number" class="form-control" name="phone" value="{{$provisioner->phone}}" required>
      
          <div class="form-group">
            <label for="">CUIL O CUIT</label>
            <br>
            <input type="number" class="form-control" name="cuit" value="{{$provisioner->cuit}}" required>
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