<div class="modal fade in" id="modify-default-{{$category->id}}" style="display: none; padding-right: 50px;">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">

                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span></button>
                <h4 class="modal-title">Editar categoria</h4>
            </div>

            <div class="modal-body">

                <form action="/categories/{{$category->id}}" method="POST" role="form">
                    {{ method_field('PATCH') }}
                    {{ csrf_field() }}

                    <div class="form-group">
                        <label for="exampleInputEmail1">Nombre de la categoria</label>
                        <input type="text" class="form-control" value="{{$category->name}}" name="name" placeholder="Ingrese nombre" required>
                    </div>

                    <div class="form-group">
                        <label for="exampleInputEmail1">Descripcíon de la categoria</label>
                        <input type="text" name="description" value="{{$category->description}}" class="form-control" id="inputPassword2" placeholder="Contraseña" required>
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Cancelar</button>
                        <button type="submit" class="btn btn-primary">Actualizar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>