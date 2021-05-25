<div class="modal fade in " id="modal-default" style="display: none; padding-right: 50px;">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">

                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span></button>
                <h4 class="modal-title">Crear nueva orden de compra</h4>
            </div>

            <div class="modal-body">

                <div class="form-group">
                    <label for="exampleInputEmail1">Proveedor</label>
                    <select class="form-control select-provicioner" name='selectProvisioner'>
                        <option value="-">Seleccione un proveedor</option>
                        @foreach($provisioners as $provisioner)
                        <option value='{{$provisioner->id}}'>{{$provisioner->name}} </option>
                        @endforeach

                    </select>
                </div>
                <section class="section-addProductProvicioner">

                    <table id="productProvider_table" class="table-productForProviders">
                        <tr>
                            <th>Nombre</th>
                            <th>Código</th>
                            <th>Precio</th>
                            <th>Cantidad</th>
                        </tr>

                    </table>

                    <h4 class="pt-4">
                        <label for="exampleInputEmail1">Productos agredos</label>
                    </h4>

                    <form method="POST" action="{{url('updateProduct')}}">
                        {{ csrf_field() }}
                        {{ method_field('PUT') }}

                        <table id="productosAgregados" class="">
                            <tr>
                                <th>Nombre</th>
                                <th>Código</th>
                                <th>Precio</th>
                                <th>Cantidad</th>
                            </tr>
                            <tr class="clone hidden">
                                <td class="nombre">-</td>
                                <td class="codigo">-</td>
                                <td class="precio">-</td>
                                <td class="cantidad">-</td>
                            </tr>
                        </table>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Cerrar</button>
                            <button type="submit" class="btn btn-primary">Guardar</button>
                        </div>

                    </form>

                </section>

                <div class="alert-nullProdict">
                    <div class="alert alert-warning" role="alert">
                        El proveedor selecionado no tiene productos asociados!.
                    </div>
                </div>

            </div>
        </div>

    </div>