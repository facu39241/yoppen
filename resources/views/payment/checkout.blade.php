@extends('principal.layout')
@section('title')
Yoppen | Facturacíon
@endsection
@section('content')


<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h2>
            Ventas.
        </h2>
    </section>
    <!-- Main content -->
    <section class="content hidden-print">
        <div class="box">
            <div class="box-body">
                <div>
                    <div class="row">
                        <div class="col-md-3">
                            <div class="input-group">
                                <label>Nombre y apellido:</label><br>
                                <input type="text" value="{{$client->name}}" id="clientName"
                                    class="form-ontrol disabled" name="clientName" disabled>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="input-group">
                                <label>Numero de documento/CUIL:</label><br>
                                <input type="text" value="{{$client->dni}}" id="clientDni" class="form-ontrol disabled"
                                    name="clientDni" disabled>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="input-group">
                                <label>Dirección:</label><br>
                                <input type="text" value="{{$client->direction}}" id="clientDirection"
                                    class="form-ontrol disabled" name="clientDirection" disabled>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="input-group">
                                <label>Tel/Cel:</label><br>
                                <input type="text" value="{{$client->phone}}" id="clientPhone"
                                    class="form-ontrol disabled" name="clientPhone" disabled>
                            </div>
                        </div>
                    </div>
                </div>
                <br>
                <div>
                    <div class="row">
                        <div class="col-md-12">
                            <table class="table table-striped ">
                                <thead>
                                    <tr>
                                        <th>Codigo</th>
                                        <th>Articulo</th>
                                        <th>Cantidad</th>
                                        <th>P-unitario</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($detailPayments as $detailPayment)
                                    <tr>
                                        <td>{{$detailPayment->code}}</td>
                                        <td>{{$detailPayment->name}}</td>
                                        <td>{{$detailPayment->quantity}}</td>
                                        <td>$ {{$detailPayment->price}}</td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        <div class="col-md-6">
                            <hr>
                            <input type="hidden" value="0" id="totalPrices" />
                            <h3 class="total-price text-success"></h3>
                            <div class="MP-button"></div>
                        </div>
                        <div class="col-md-6 text-right">
                            <hr>
                            <button type="button" class="btn btn-success" onclick="window.print()">Imprimir
                                comprobante</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /.content -->

    <section class="content show-print">
        
        <table class="table">
            <tbody>
                <tr>
                    <td><img src="/img/yoppen-logo.jpg" class="img-responsive w-30"></td>
                    <td><h3>Comprobante de compra</h3></td>
                </tr>
            </tbody>
        </table>
        
        <table class="table">
            <tbody>
                <tr class="trComprobante">
                    <td><p class="m-0"> <strong class="font-weight-bold">Nombre y apellido: </strong>{{$client->name}}</p></td>
                </tr>
                <tr class="trComprobante">
                    <td><p class="m-0"> <strong class="font-weight-bold">Numero de documento/CUIL: </strong>{{$client->dni}}</p></td>
                </tr>
                <tr class="trComprobante">
                    <td><p class="m-0"> <strong class="font-weight-bold">Dirección: </strong>{{$client->direction}}</p></td>
                </tr>
                <tr class="trComprobante">
                    <td><p class="m-0"> <strong class="font-weight-bold">Tel/Cel: </strong>{{$client->phone}}</p></td>
                </tr>
            </tbody>
        </table>
            <!-- /.box-header -->
        
        <div class="box">
            <!-- /.box-header -->
            <div class="box-body">
                <table class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>Codigo</th>
                            <th>Articulo</th>
                            <th>Cantidad</th>
                            <th>P-unitario</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($detailPayments as $detailPayment)
                            <tr>
                                <td>{{$detailPayment->code}}</td>
                                <td>{{$detailPayment->name}}</td>
                                <td>{{$detailPayment->quantity}}</td>
                                <td>$ {{$detailPayment->price}}</td>

                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>

        

    </section>

</div>
<!-- /.content-wrapper -->
@endsection
@section('script')
@include('payment.checkoutScript')
@endsection