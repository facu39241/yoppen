@extends('principal.layout')
@section('title') 
Yoppen | Proveedores.
@endsection
@section('content')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h2>
        Proveedores.
      </h2>
      
    </section>

    <!-- Main content -->
    <section class="content">
		<div class="box">
            <div class="box-header">
              <h3 class="box-title">Proveedores de la tienda.</h3>
              <a  data-toggle="modal" data-target="#modal-default" class='btn btn-primary pull-right'>
              <i class='fa fa-plus'></i>
              </a>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example2" class="table table-bordered table-striped">
                <thead>


                <tr>
                  <th>#</th>
                  <th>Nombre</th>
                  <th>Dirección</th>
                  <th>Telefono</th>
                  <th>Cuil-Cuit</th>
                  <th>Acciones </th>
                </tr>


                </thead>
                <tbody>

            @foreach($provisioners as $provisioner)
                <tr>
                  <td>{{$provisioner->id}}</td>
                  <td>{{$provisioner->name}}</td>
                  <td>{{$provisioner->direccion}}</td>
                  <td>{{$provisioner->phone}}</td>
                  <td>{{$provisioner->cuit}}</td>
                  
                  <td><a  data-toggle="modal" name="modify" data-target="#view-modify-{{$provisioner->id}}" class='btn btn-warning pull'><i class='fa fa-pencil'></i></a>
                  <a  data-toggle="modal" name="delete" data-target="#" class='btn btn-danger pull'><i class='fa fa-trash'></i></a> 
                  </td>
                </tr>
                @include('provisioners.modify')
            @endforeach
                </tbody>
                <tfoot>
                <tr>
                <th>#</th>
                <th>Nombre</th>
                <th>Dirección</th>
                <th>Telefono</th>
                <th>Cuil-Cuit</th>
                <th>Acciones </th>
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
  @include('provisioners.modal')

  
@endsection