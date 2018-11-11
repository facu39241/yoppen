@extends('principal.layout')
@section('title') 
Yoppen | Usuarios
@endsection
@section('content')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h2>
        Usuarios.
      </h2>
      
    </section>

    <!-- Main content -->
    <section class="content">
		<div class="box">
            <div class="box-header">
              <h3 class="box-title">Usuarios con acceso al sistema.</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example2" class="table table-bordered table-striped">
                <thead>


                <tr>
                  <th>Nombre</th>
                  <th>Email</th>
                  <th>Puesto</th>
                </tr>


                </thead>
                <tbody>

            @foreach($users as $user)
                <tr>
                  <td>{{$user->name}}</td>
                  <td>{{$user->email}}</td>
                  <td>{{$user->job}}</td>
                </tr>
            @endforeach
                </tbody>
                <tfoot>
                <tr>
                  <th>Nombre</th>
                  <th>Email</th>
                  <th>Puesto</th>
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

@endsection