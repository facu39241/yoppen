@extends('principal.layout')
@section('title')
Yoppen | Empleados
@endsection
@section('content')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h2>
      Empleados.
    </h2>

  </section>

  <!-- Main content -->
  <section class="content">
    <div class="box">
      <div class="box-header">
        <h3 class="box-title">Empleados que cuentan con acceso al sistema.</h3>
        <a data-toggle="modal" data-target="/register" class='btn btn-primary pull-right'>
          <i class='fa fa-plus'></i>
        </a>
      </div>
      <!-- /.box-header -->
      <div class="box-body">


        <div class="table-responsive">
          <table class="table table-hover">
            <thead>
              <tr>
                <th>Nombre y Apellido</th>
                <th>Email</th>
                <th>Puesto</th>
                <th>Acciones</th>
              </tr>
            </thead>
            <tbody>
              @foreach($users as $user)
              <tr>
                <td>{{$user->name}}</td>
                <td>{{$user->email}}</td>
                <td>{{$user->job}}</td>
                <td>sdad</td>
              </tr>
              @endforeach
            </tbody>
          </table>

        </div>
      </div>
      <!-- /.box-body -->
    </div>
    <!-- /.box -->
  </section>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->

@endsection