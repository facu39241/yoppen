<div class="modal fade in" id="view-default-{{$user->id}}" style="display: none; padding-right: 50px;">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">

                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span></button>
                <h4 class="modal-title">Datos del usuario</h4>
            </div>

            <div class="modal-body">

                <form method="POST" action="{{route('users.store')}}">
                    {{ csrf_field() }}

                    <div class="form-group">
                        <label for="">Nombre del usuario</label>
                        <br>{{$user->name}}
                    </div>

                    <div class="form-group">
                        <label for="">Email del usuario</label>
                        <br>{{$user->email}}
                    </div>

                    <div class="form-group">
                        <label for="">Rol del usuario</label>
                        <br>{{$user->job}}
                    </div>


                </form>
                
            </div>

            <div class="modal-footer">
            <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Cerrar</button>
            </div>
            </form>
        </div>
    </div>
</div>