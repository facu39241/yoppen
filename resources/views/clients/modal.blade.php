<div class="modal fade in" id="modal-default" style="display: none; padding-right: 50px;">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">

        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span></button>
            <h4 class="modal-title">Agregar nuevos nuevo cliente</h4>
      </div>

      <div class="modal-body">
               
        <form method="POST" action="{{route('clients.store')}}">
        {{ csrf_field() }}


          <div class="form-group">
            <label for="exampleInputEmail1">Nombre del cliente</label>
            <input type="text" class="form-control" name="name" placeholder="Nombre" requiered>
          </div>

          <div class="form-group">
            <label for="exampleInputEmail1">Dirección </label>
            <input type="text" class="form-control" name="direction" placeholder="Direccion" requiered>
          </div>

          <div class="form-group">
            <label for="exampleInputEmail1">Numero de Contacto </label>
            <input type="text" class="form-control" name="phone" placeholder="Telefono" requiered>
          </div>

          <div class="form-group">
            <label for="exampleInputEmail1">Email del cliente</label>
            <input type="email" class="form-control" name="email" placeholder="Email" requiered>
          </div>

          <div class="form-group">
            <label for="exampleInputEmail1">Tipo de DNI</label>
            <select class="form-control"  name="dni_type" >
             
              <option> DNI </option>
             
            </select>
          </div>

          <div class="form-group">
            <label for="exampleInputEmail1">Número de DNI </label>
            <input type="number" class="form-control" name="dni" placeholder="DNI" requiered>
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