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
    <section class="content">
        <div class="box">
            <div class="box-body">
                <div class="container">
                    <div class="row">
                        <div class="col-md-3">
                            <div class="input-group">
                                <label>Nombre y apellido:</label><br>
                                <input type="text" value="{{$client->name}}" id="clientName" class="form-ontrol disabled" name="clientName" disabled>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="input-group">
                                <label>Numero de documento/CUIL:</label><br>
                                <input type="text" value="{{$client->dni}}" id="clientDni" class="form-ontrol disabled" name="clientDni" disabled>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="input-group">
                                <label>Dirección:</label><br>
                                <input type="text" value="{{$client->direction}}" id="clientDirection" class="form-ontrol disabled" name="clientDirection" disabled>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="input-group">
                                <label>Tel/Cel:</label><br>
                                <input type="text" value="{{$client->phone}}" id="clientPhone" class="form-ontrol disabled" name="clientPhone" disabled>
                            </div>
                        </div>
                    </div>
                </div>
                <br>
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <table class="table table-striped ">
                                <thead>
                                    <tr>
                                        <th>Codigo</th>
                                        <th>Articulo</th>
                                        <th>P-unitario</th>
                                        <th>Cantidad</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($detailPayments as $detailPayment)
                                        <tr>
                                            <td>{{$detailPayment->code}}</td>
                                            <td>{{$detailPayment->name}}</td>
                                            <td>{{$detailPayment->price}}</td>
                                            <td>{{$detailPayment->quantity}}</td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        <div class="col-md-12">
                            <hr>
                            <input type="hidden" value="0" id="totalPrices" />
                            <h3 class="total-price text-success"></h3>
                            <div class="MP-button"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->
@endsection
@section('script')
    @include('payment.checkoutScript')
@endsection
