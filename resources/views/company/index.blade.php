@extends('principal.layout')
@section('title')
Yoppen | Sucursal
@endsection
@section('content')

<style>

</style>
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
          <!-- inicio del contenedor -->
          <div class="container">
            <!-- Fila de nombre y direccìon -->            
            <div class="row">
              <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <div class="datos-form">
                  <label>Nombre de la Empresa:</label>
                  <input id="name" name="nombre_empresa" value="{{$company->name}}" class="form-control" disabled="" type="text">
                </div>
              </div>
              <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <div class="form-group has-success">
                  <label>Dirección: </label>
                  <input id="direccion" name="direccion_empresa" value="{{$company->direction}}" class="form-control" disabled="" type="text">
                </div>
              </div>
            </div>
            <!-- Fila de iva y de telèfono -->
            <div class="row">
              <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <div class="form-group has-success">
                  <label>Teléfono:</label>
                  <input id="telefono" name="telefono_empresa" value="{{$company->phone}}" class="form-control" disabled="" type="number">
                </div>
              </div>
              <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <div class="form-group has-success">
                  <label>IVA </label>
                  <input id="iva" name="iva_empresa" value="{{$company->responsable}}" class="form-control" disabled="" type="text">
                </div>
              </div>
            </div>
            <!-- Fila de ini_act y de email -->
            <div class="row">
              <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <div class="form-group has-success">
                  <label>inicio de actividad: </label>
                  <input id="inicio_act" name="inicio_act_empresa" value="{{$company->date_init}}" class="form-control" disabled="" type="text" data-mask>
                </div>
              </div>
              <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <div class="form-group has-success">
                  <label>Email: </label>
                  <input id="email" name="email_empresa" value="{{$company->email}}" class="form-control" disabled="" type="email">
                </div>
              </div>
            </div>
            <!-- Fila de provincia y de cuit -->
            <div class="row">
              <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <div class="form-group has-success">
                  <label>Provincia: </label>
                  <input id="name" name="nombre_empresa" value="{{$company->city}}" class="form-control" disabled="" type="text" data-mask>
                </div>
              </div>
              <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <div class="form-group has-success">
                  <label>CUIT: </label>
                  <input id="name" name="nombre_empresa" value="{{$company->cuit}}" class="form-control" disabled="" type="text">
                </div>
              </div>
            </div>
            <td>
              <button type="button" data-toggle="modal" name="modify" data-target="#modify-default-{{$company->id}}" class="btn btn-block btn-warning btn-lg">Modificar</button>
            </td>
          </div>
          <div class="box-body">
            <div class="chart">
              <canvas id="areaChart" style="height: 249px; width: 685px;" width="856" height="311"></canvas>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</div>
@include("company.modify")
@endsection