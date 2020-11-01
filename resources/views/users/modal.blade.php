<div class="modal fade in" id="modal-default" style="display: none; padding-right: 50px;">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">

                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span></button>
                <h4 class="modal-title">Agregar nuevos empleado</h4>
            </div>

            <div class="modal-body">
                <form method="POST" action="{{route('users.store')}}">
                    {{ csrf_field() }}

                    <div class="form-group">
                        <label for="exampleInputEmail1">Nombre del usuario</label>
                        <input type="text" class="form-control" name="name" placeholder="Ingrese nombre" required>
                    </div>

                    <div class="form-group">
                        <label for="exampleInputEmail1">Email del usuario</label>
                        <input type="email" class="form-control" name="email" placeholder="Ingrese email" required>
                    </div>

                    <div class="form-group">
                        <label for="exampleInputEmail1">Contraseña</label>
                        <input type="password" name="password" class="form-control" id="inputPassword2" placeholder="Contraseña" required>
                    </div>

                    <select class="form-control form-control-lg" name="job">
                        <label for="exampleInputEmail1">Rol del usuario</label>
                        <option value="Administrador">Administrador</option>
                        <option value="Vendedor">Vendedor</option>
                        <option value="Logistica">Logistica</option>
                        <option value="Deposito">Deposito</option>
                    </select>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Cerrar</button>
                        <button type="submit" class="btn btn-primary">Guardar</button>
                    </div>
                </form>
            </div>
        </div>

    </div>