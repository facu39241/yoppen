<div class="modal fade in" id="delete-default-{{$category->id}}" style="display: none; padding-right: 50px;">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header header-deleteModal">

                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span></button>
            </div>

            <div class="modal-body">
                <form class="modal-content" action="categories/{{$category->id}}" method="POST">
                    {{ method_field('DELETE') }}
                    {{ csrf_field() }}
                    <h2 class="text-center title-delete pb-1">Esta seguro de eliminar a esta categoria?</h2></h2>

                    <p class="text-center text-eliminar">Si elimina la categoria <b>{{$category->name}}</b> los productos
                        no estaran asociadas a la misma y tendran categoria <b>default</b> </p>

                    <div class="clearfix">
                        <button type="button" data-dismiss="modal" class="cancelbtn btn-delete">Cancelar</button>
                        <button type="submit" class="deletebtn btn-delete">Eliminar</button>
                    </div>

                </form>
            </div>
        </div>
    </div>
</div>