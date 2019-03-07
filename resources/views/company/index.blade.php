@extends('principal.layout')
@section('title') 
Yoppen | Sucursal
@endsection
@section('content')


<!-- contenedor-->
<div class="content-wrapper">
  <!-- titulo de la pagina  -->
  <section class="content-header">
   
    <h1>

     Datos de la compañia.

    </h1>
      
  </section>

  <!-- conteenido principal  -->
  <section class="content">
		<div class="box">
      <div class="box box-primary">
        <div class="box-header with-border">
          <div class="box-tools pull-right">
          
         </div>

      <!-- primeros text  -->
      <div class="row">
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
         <div class="form-group has-success">
            <label>Nombre de la Empresa:</label>
            <input  id="name" name="nombre_empresa" value= "" class="form-control" disabled="" type="text">
          </div>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
          <div class="form-group has-success">    
            <label>Dirección: </label>
            <input  id="name" name="nombre_empresa" class="form-control" disabled="" type="text">
          </div>
        </div>
      </div>

      <!--   -->
      <div class="row">
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
         <div class="form-group has-success">
            <label>Teléfono:</label>
            <input  id="name" name="nombre_empresa" class="form-control" disabled="" type="text">
          </div>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
          <div class="form-group has-success">    
            <label>IVA </label>
            <input  id="name" name="nombre_empresa" class="form-control" disabled="" type="text">
          </div>
        </div>
      </div>

       <!--   -->
       <div class="row">
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
         <div class="form-group has-success">
            <label>inicio de actividad: </label>
            <input  id="name" name="nombre_empresa" class="form-control" disabled="" type="text" data-mask>
          </div>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
          <div class="form-group has-success">    
            <label>Email: </label>
            <input  id="name" name="nombre_empresa" class="form-control" disabled="" type="text">
          </div>
        </div>
      </div>

       <!--   -->
       <div class="row">
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
         <div class="form-group has-success">
            <label>Establecimiento: </label>
            <input  id="name" name="nombre_empresa" class="form-control" disabled="" type="text" data-mask>
          </div>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
          <div class="form-group has-success">    
            <label>CUIT: </label>
            <input  id="name" name="nombre_empresa" class="form-control" disabled="" type="text">
          </div>
        </div>
      </div>

      <td>
        <button type="button" class="btn btn-block btn-warning btn-lg">Modificar</button>
      </td>

      <div class="box-body">
        <div class="chart">
          <canvas id="areaChart" style="height: 249px; width: 685px;" width="856" height="311"></canvas>
        </div>
      </div>
    </div>
      
    
  </section>
</div>

@endsection