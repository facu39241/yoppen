<div class="modal fade in" id="delete-default-{{$article->id}}" style="display: none; padding-right: 50px;">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header header-deleteModal">

                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span></button>
            </div>

            <div class="modal-body">
                <form class="modal-content" action="articles/{{ $article->id }}" method="POST">
                    {{ method_field('DELETE') }}
                    {{ csrf_field() }}
                    <h2 class="text-center title-delete pb-1">Esta seguro de eliminar a este artículo?</h2>

                    <p class="text-center text-eliminar">Si elimina el articulo llamado <b>{{$article->name}}</b>, no aparecerá para vender.</p>

                    <div class="clearfix">
                        <button type="button" data-dismiss="modal" class="cancelbtn btn-delete">Cancelar</button>
                        <button type="submit" class="deletebtn btn-delete">Eliminar</button>
                    </div>

                </form>
            </div>
        </div>
    </div>
</div>