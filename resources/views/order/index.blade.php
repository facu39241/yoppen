@extends('principal.layout')
@section('title')
Yoppen | Ordenes de compra
@endsection
@section('content')


<div class="content-wrapper">

    <section class="content-header">
        <h2>
            Ordenes de compra de productos.
        </h2>

    </section>
    <section class="content">
        <div class="box">
            <div class="box-header">
                <a data-toggle="modal" data-target="#modal-default" class='btn btn-primary pull-right'>
                    <i class='fa fa-plus'></i>
                </a>
            </div>

            <div class="box-body">
                <div class="table-responsive">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>Nombre y Apellido</th>
                                <th>Email</th>
                                <th>Rol del usuario</th>
                                <th>Acciones</th>
                            </tr>
                        </thead>
                        <tbody>


                        </tbody>
                    </table>
                </div>
                @include('order.modal')
            </div>

        </div>

    </section>
</div>


@endsection