@extends('principal.layout')
@section('title') 
Yoppen | Index
@endsection
@section('content')


<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">

    <div class="alert alert-warning alert-dismissible">
      <button type="button" class="close" data-dismiss="alert" aria-hidden="false">×</button>
      <h5><i class="icon fa fa-warning"></i> Atencion!</h5>
       No se ha verificado su correo en la base de datos. Por favor verifique el correo electronico 
       para poder obtener una mayor seguridad en el sistema.
    </div>
  
      <h2>

        Pagina de inicio.

      </h2>
      
    </section>

    <!-- Main content -->
    <section class="content">
		<div class="box">

           
            <!-- /.box-header -->



            
            <!-- /.box-body -->
            

            <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Articulos vendidos</h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
              </div>
            </div>
            <div class="box-body">
              <div class="chart">
                <canvas id="areaChart" style="height: 249px; width: 685px;" width="856" height="311"></canvas>
              </div>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
    <div>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

@endsection