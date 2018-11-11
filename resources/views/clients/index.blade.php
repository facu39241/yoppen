@extends('principal.layout')
@section('title') 
Yoppen | Clientes
@endsection
@section('content')


<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h2>
        Clientes.
      </h2>
      
    </section>

    <!-- Main content -->
    <section class="content">
		<div class="box">
            <div class="box-header">
              <h3 class="box-title">Tabla de datos de clientes.</h3><a  data-toggle="modal" data-target="#modal-default" class='btn btn-primary pull-right'><i class='fa fa-plus'></i></a>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example2" class="table table-bordered table-striped">
                <thead>


                <tr>
                  <th>Nombre</th>
                  <th>Dirección</th>
                  <th>Telefono</th>
                  <th>Email</th>
                  <th>Tipo de DNI</th>
                  <th>Nº de DNI</th>
                </tr>


                </thead>
                <tbody>

            @foreach($clients as $client)
                <tr>
                  <td>{{$client->name}}</td>
                  <td>{{$client->direction}}</td>
                  <td>{{$client->phone}}</td>
                  <td>{{$client->email}}</td>
                  <td>{{$client->dni_type}}</td>
                  <td>{{$client->dni}}</td>
                </tr>
            @endforeach
                </tbody>
                <tfoot>
                <tr>
                <th>Nombre</th>
                  <th>Dirección</th>
                  <th>Telefono</th>
                  <th>Email</th>
                  <th>Tipo de DNI</th>
                  <th>Nº de DNI</th>
                </tr>


                </tfoot>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

@include('clients.modal')
@endsection
