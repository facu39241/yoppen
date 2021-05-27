@extends('principal.layout')
@section('title')
Yoppen | Historial
@endsection
@section('content')


@if(Session::has('notice'))
<p>
    <strong>
        {{ Session::get('notice') }}
    </strong>
</p>
@endif

<div class="content-wrapper">

    <section class="content-header">
        <h2>
            Historial de ventas realizadas.
        </h2>
    </section>

    <section class="content">
        <div class="box">
            <div class="box-header">
                <a data-toggle="modal" href="/payment" class='btn btn-primary pull-right'>
                    <i class='fa fa-plus'></i>
                </a>
            </div>

            <div class="box-body">
                <table id="example2" class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>Código de venta</th>
                            <th>Fecha de venta</th>
                            <th>Status de la venta</th>
                            <th>Total de la venta</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($payments as $payment)
                        @include('history.view')
                        <tr>
                            <td>{{$payment->code}}</td>
                            <td>{{$payment->date}}</td>
                            <td>{{$payment->type}}</td>
                            <td>$ {{$payment->amount}}</td>
                            <td>
                                <a data-toggle="modal" name="view" data-target="#view-default-{{$payment->id}}"
                                    class='btn btn-success pull'><i class='fa fa-eye'></i></a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                    <tfoot>
                        <tr>
                            <th>Código de venta</th>
                            <th>Fecha de venta</th>
                            <th>Status de la venta</th>
                            <th>Total de la venta</th>
                            <th>Acciones</th>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </div>
    </section>
</div>
<!-- /.content-wrapper -->

@endsection