<div class="modal fade in" id="modal-default" style="display: none; padding-right: 50px;">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">

                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span></button>
                <h4 class="modal-title">Agregar nueva categoria de artículos.</h4>
            </div>

            <div class="modal-body">
                <form method="POST" action="{{route('categories.store')}}">
                    {{ csrf_field() }}

                    <div class="form-group">
                        <label for="exampleInputEmail1">Nombre de la categoria</label>
                        <input type="text" class="form-control" name="name" placeholder="Ingrese nombre" required>
                    </div>

                    <div class="form-group">
                        <label for="exampleInputEmail1">Descripcíon de la categoria</label>
                        <input type="text" class="form-control" name="description" placeholder="Ingrese email" required>
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Cerrar</button>
                        <button type="submit" class="btn btn-primary">Guardar</button>
                    </div>
                </form>
            </div>
        </div>

    </div>