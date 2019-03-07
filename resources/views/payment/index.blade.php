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
      <div class="box-header">
        <div>
        <div class="box-body">
         <table id="example" class="table table-bordered table-striped">
           <thead>
             <tr>
              <p class="margin">Número de documento del cliente:</p>
                <div class="input-group input-group-sm">
                 <input type="number" class="form-control">
                   <span class="input-group-btn">
                   <button type="button" data-target="#modal-default" class="btn btn-info btn-flat">Buscar</button>
                 </span>
                </div>
            </tr>
        
  <tr>
    <th>Nombre y Apellido <input type="text" class="form-control"  disabled=""></th>
    <th>Dirección <input type="text" class="form-control"  disabled=""></th>
    <th>Número de documento/CUIL <input type="text" class="form-control"  disabled=""></th>
    <th>Imuesto Agregado <input type="text" class="form-control"  disabled=""></th>
  </tr>

  <tr>
    <div class="col-sm-9 col-lg-12 main" id="VerDetallePedido">
    <div class="table-responsive">
     <table class="table table-striped table-bordered table-condensed table-hover" cellpadding="0" cellspacing="0" border="1" id="tblDetallePedido">
       <tr>
          <tr><button type="button" id="btnBuscarDetIng" class="btn btn-info"><i class="fa fa-search"></i>
            Buscar Articulos </button></tr>
          </tr>
           <thead>
             <tr>
               <th>Articulo</th>
               <th>Codigo</th>
               <th>Serie</th>
               <th>Stock</th>
               <th>P. Venta</th>
               <th>Cantidad</th>
               <th>Descuento</th>
               <th>Eliminar</th>
              </tr>
             </thead>
                            
      </table>
    </div>
  </div>
 </tr>
 </thead>
 </table>
  </div>
  </div>
  </div>
  <!-- /.box-header -->  
  <!-- /.box-body -->
  </div>
 <!-- /.box -->
</section>
<!-- /.content -->
</div>
  <!-- /.content-wrapper -->

@include('payment.modal')
@endsection
