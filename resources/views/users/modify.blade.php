<div class="modal fade in" id="modify-default-{{$user->id}}" style="display: none; padding-right: 50px;">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">

                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span></button>
                <h4 class="modal-title">Editar Usuario</h4>
            </div>

            <div class="modal-body">

                <form action="/users/{{$user->id}}" method="POST" role="form">
                    {{ method_field('PATCH') }}
                    {{ csrf_field() }}

                    <div class="form-group">
                        <label for="exampleInputEmail1">Nombre del usuario</label>
                        <input type="text" class="form-control" value="{{$user->name}}" name="name" placeholder="Ingrese nombre" required>
                    </div>

                    <div class="form-group">
                        <label for="exampleInputEmail1">Email del usuario</label>
                        <input type="email" class="form-control" name="email" value="{{$user->email}}"  placeholder="Ingrese email" required>
                    </div>

                    <div class="form-group">
                        <label for="exampleInputEmail1">Contraseña</label>
                        <input type="password" name="password" class="form-control" id="inputPassword2" placeholder="Contraseña" required>
                    </div>

                    <select class="form-control form-control-lg" value="{{$user->job}}"  name="job">
                        <label for="exampleInputEmail1">Rol del usuario</label>
                        <option value="Administrador">Administrador</option>
                        <option value="Vendedor">Vendedor</option>
                        <option value="Logistica">Logistica</option>
                        <option value="Deposito">Deposito</option>
                    </select>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Cancelar</button>
                        <button type="submit" class="btn btn-primary">Actualizar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>