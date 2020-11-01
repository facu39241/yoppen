@extends('principal.layout')
@section('title')
Yoppen | Empleados
@endsection
@section('content')


@if(Session::has('notice'))
<p>
  <strong>
    {{ Session::get('notice') }}
  </strong>
</p>
@endif

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
        <a data-toggle="modal" data-target="#modal-default" class='btn btn-primary pull-right'>
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
                <th>Rol del usuario</th>
                <th>Acciones</th>
              </tr>
            </thead>
            <tbody>
              @foreach($users as $user)
              @include('users.view')
              @include('users.modify')
             
              
              <tr>
                <td>{{$user->name}}</td>
                <td>{{$user->email}}</td>
                <td>{{$user->job}}</td>

                <td>
                  <a data-toggle="modal" name="view" data-target="#view-default-{{$user->id}}" class='btn btn-success pull'><i class='fa fa-eye'></i></a>
                  <a data-toggle="modal" name="modify" data-target="#modify-default-{{$user->id}}" class='btn btn-warning pull'><i class='fa fa-pencil'></i></a>
                  <a data-toggle="modal" name="delete" data-target="#delete-default-{{$user->id}}" class='btn btn-danger pull'><i class='fa fa-trash'></i></a>
                </td>
              </tr>
              @include('users.delete')
              @endforeach
              @include('users.modal')
               
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