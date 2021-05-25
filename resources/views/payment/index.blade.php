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
                <div>
                    <div class="row">
                        <div class="col-md-12">
                            <label for="searchClient">Buscar cliente</label>
                            <input type="text" id="searchClient" name="searchClient" class="form-control" placeholder="Buscar cliente">
                            <span id="errorSearchClient" class="bg-danger"></span>
                        </div>
                        <div class="col-md-3">
                            <div class="input-group">
                                <label>Nombre y apellido:</label><br>
                                <input type="text" id="clientName" class="form-ontrol disabled" name="clientName" disabled>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="input-group">
                                <label>Numero de documento/CUIL:</label><br>
                                <input type="text" id="clientDni" class="form-ontrol disabled" name="clientDni" disabled>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="input-group">
                                <label>Dirección:</label><br>
                                <input type="text" id="clientDirection" class="form-ontrol disabled" name="clientDirection" disabled>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="input-group">
                                <label>Tel/Cel:</label><br>
                                <input type="text" id="clientPhone" class="form-ontrol disabled" name="clientPhone" disabled>
                            </div>
                        </div>
                    </div>
                </div>
                <br>
                <div>
                    <div class="row">
                        <div class="col-md-12">
                            <table class="table table-striped datatable-articles">
                                <thead>
                                    <tr>
                                        <th>Codigo</th>
                                        <th>Articulo</th>
                                        <th>P-unitario</th>
                                        <th>Cantidad</th>
                                        <th>agregar</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($articles as $article)
                                        <tr>
                                            <td>{{$article->code}}</td>
                                            <td>{{$article->name}}</td>
                                            <td>{{$article->price}}</td>
                                            <td>
                                                <input type="number" min="1"  value="1" data-id="{{$article->id}}" class="quantity-{{$article->id}} validate-quantity">
                                                <br>
                                                <span class="text-danger span-quantity-{{$article->id}}"></span>
                                            </td>
                                            <td>
                                                <button class="add-article" data-id="{{$article->id}}" data-code="{{$article->code}}" data-name="{{$article->name}}"  data-price="{{$article->price}}" >+</button>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        <div class="col-md-12">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>Codigo</th>
                                        <th>Articulo</th>
                                        <th>Cantidad</th>
                                        <th>Precio unitario</th>
                                        <th>Precio final</th>
                                        <th>Eliminar</th>
                                    </tr>
                                </thead>
                                <tbody class="selected-articles">
                                    
                                </tbody>
                            </table>
                        </div>
                        <div class="col-md-12">
                            <hr>
                            <h3 class="total-price text-success"></h3>
                            <form method="post" action="checkout" id="form-checkout">
                                @csrf
                                <input type="hidden" name="data" id="form-data">
                            </form>
                            <button class="btn btn-success pay">Ir a checkout</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->

@include('payment.modal')
@endsection
@section('script')
    @include('payment.script')
@endsection
