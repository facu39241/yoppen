@extends('principal.layout')
@section('title')
Yoppen | Sucursal
@endsection
@section('content')

<style>
  .title {
    text-decoration: underline #000000 !important;
    font-size: 22px !important;
    color: #000000 !important;
  }

  .compania {
    font-size: 25px !important;
  }

  .title-contenedor {
    padding-bottom: 30px;
  }

  .bt-modificar {
    padding-top: 34px;
  }
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
            <h3 class="title-contenedor">Aquí se encuentran los datos de la facturacion de la empresa.</h3>
            <!-- Fila de nombre y direccìon -->
            <div class="row">
              <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <div class="datos-form">
                  <label class="title">Nombre de la Empresa:</label>
                  <p class="compania">{{$company->name}}</p>
                </div>
              </div>
              <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <div class="form-group has-success">
                  <label class="title">Dirección: </label>
                  <p class="compania">{{$company->direction}}</p>
                </div>
              </div>
            </div>
            <!-- Fila de iva y de telèfono -->
            <div class="row">
              <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <div class="form-group has-success">
                  <label class="title">Teléfono:</label>
                  <p class="compania">{{$company->phone}}</p>
                </div>
              </div>
              <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <div class="form-group has-success">
                  <label class="title">IVA </label>
                  <p class="compania">{{$company->responsable}}</p>
                </div>
              </div>
            </div>
            <!-- Fila de ini_act y de email -->
            <div class="row">
              <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <div class="form-group has-success">
                  <label class="title">inicio de actividad: </label>
                  <p class="compania">{{$company->date_init}}</p>
                </div>
              </div>
              <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <div class="form-group has-success">
                  <label class="title">Email: </label>
                  <p class="compania">{{$company->email}}</p>
                </div>
              </div>
            </div>
            <!-- Fila de provincia y de cuit -->
            <div class="row">
              <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <div class="form-group has-success">
                  <label class="title">Provincia: </label>
                  <p class="compania">{{$company->city}}</p>
                </div>
              </div>
              <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <div class="form-group has-success">
                  <label class="title">CUIT: </label>
                  <p class="compania">{{$company->cuit}}</p>
                </div>
              </div>
            </div>
            <div class="row btn-modificar">
              <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <td>
                  <button type="button" class="btn btn-warning " data-toggle="modal" name="modify" data-target="#modify-default-{{$company->id}}">Modificar</button>
                </td>
              </div>
            </div>

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