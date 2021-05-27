<div class="modal fade in" id="view-default-{{$payment->id}}" style="display: none; padding-right: 50px;">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">

                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span></button>
                <h4 class="modal-title">Datos de la venta</h4>
            </div>

            <div class="modal-body">

                <form method="POST" action="{{route('history.store')}}">
                    {{ csrf_field() }}

                    <div class="form-group col-md-6 col-xs-6 col-sm-12">
                        <label >Código de la venta</label>
                        <br>{{$payment->code}}
                    </div>

                    <div class="form-group col-md-6 col-xs-6 col-sm-12">
                        <label >Fecha de la venta</label>
                        <br>{{$payment->date}}
                    </div>

                    <div class="form-group col-md-6 col-xs-6 col-sm-12">
                        <label >Status de la venta</label>
                        <br>{{$payment->type}}
                    </div>

                    <div class="form-group col-md-6 col-xs-6 col-sm-12">
                        <label >Total de la venta</label>
                        <br>$ {{$payment->amount}}
                    </div>

                    <div class="form-group col-md-12 col-xs-12 col-sm-12">
                        <u><h4>Detalle de la compra: </h4></u>
                    </div>

                    <div class="col-md-3 col-xs-3 col-sm-12">
                        <strong>
                            <p>Nombre del artículo:</p>
                        </strong>
                    </div>
                    <div class="col-md-3 col-xs-3 col-sm-12">
                        <strong>
                            <p>Código del artículo:</p>
                        </strong>
                    </div>
                    <div class="col-md-3 col-xs-3 col-sm-12">
                        <strong>
                            <p>Código del artículo:</p>
                        </strong>
                    </div>
                    <div class="col-md-3 col-xs-3 col-sm-12">
                        <strong>
                            <p>Precio del artículo:</p>
                        </strong>
                    </div>
                    @foreach ($payment->detailPayments as $datailpayment)
                    <div class="col-md-3 col-xs-3 col-sm-12">
                        <p>{{$datailpayment->name}}</p>
                    </div>
                    <div class="col-md-3 col-xs-3 col-sm-12">
                        <p>{{$datailpayment->code}}</p>
                    </div>
                    <div class="col-md-3 col-xs-3 col-sm-12">
                        <p>{{$datailpayment->quantity}}</p>
                    </div>
                    <div class="col-md-3 col-xs-3 col-sm-12">
                        <p>$ {{$datailpayment->price}}</p>
                    </div>

                    @endforeach

                </form>
                <div class="modal-footer">
                    <!-- <button type="submit" class="btn btn-primary">Cerrar</button> -->
                </div>
            </div>
        </div>
    </div>
</div>