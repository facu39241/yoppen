@extends('principal.layout')
@section('title')
Yoppen | Index
@endsection
@section('content')



<div class="content-wrapper">

  <section class="content">
    <div class="row">

      <div class="col-md-4 col-sm-6 col-xs-12">
        <div class="info-box">
          <span class="info-box-icon bg-aqua"><i class="ion ion-cube"></i></span>

          <div class="info-box-content">
            <span class="info-box-text title-index">Artículos dispobiles</span>
            <span class="info-box-number date-index">
              @if($articles == 1)
              {{$articles}} artículo
              @else
              {{$articles}} artículos
              @endif
            </span>
          </div>

        </div>

      </div>


      <div class="col-md-4 col-sm-6 col-xs-12">
        <div class="info-box">
          <span class="info-box-icon bg-red"><i class="fa ion-android-contacts"></i></span>

          <div class="info-box-content">
            <span class="info-box-text">Clientes</span>
            <span class="info-box-number">
              @if($clients == 1)
              {{$clients}} cliente
              @else
              {{$clients}} clientes
              @endif

            </span>
          </div>

        </div>

      </div>

      <div class="clearfix visible-sm-block"></div>

      <div class="col-md-4 col-sm-6 col-xs-12">
        <div class="info-box">
          <span class="info-box-icon bg-green"><i class="ion ion-ios-cart-outline"></i></span>

          <div class="info-box-content">
            <span class="info-box-text">Ventas del mes</span>
            <span class="info-box-number">$ 760</span>
          </div>

        </div>

      </div>

    </div>
    <div class="row">
      <div class="col-md-6">
        <div class="box box-primary">
          <div class="box-header with-border">
            <h3 class="box-title">Productos agregados recientemente</h3>
          </div>
          @foreach($articlesAdd as $articleAdd)
          <div class="box-body">
            <ul class="products-list product-list-in-box">
              <li class="item">
                <div class="product-img">
                  @if($articleAdd->image == '')
                  <img src="dist/img/default-50x50.gif" alt="Product Image">
                  @else
                  <img src="{{asset('img_product/' . $articleAdd->image)}}" alt="Product Image">
                  @endif
                </div>
                <div class="product-info">
                  <a href="/articles" class="product-title">{{$articleAdd->name}}
                    <span class="label label-warning pull-right">$ {{$articleAdd->price}}</span></a>
                  <span class="product-description">
                    {{$articleAdd->description}}
                  </span>
                </div>
              </li>
            </ul>
          </div>
          @endforeach
          <div class="box-footer text-center">
            <a href="/articles" class="uppercase">Ver todos los productos</a>
          </div>
        </div>
      </div>
      <div class="col-md-6">
        <div class="box box-info">
          <div class="box-header with-border">
            <h3 class="box-title">Últimas ventas</h3>
          </div>
          <!-- /.box-header -->
          <div class="box-body">
            <div class="table-responsive">
              <table class="table no-margin">
                <thead>
                  <tr>
                    <th>Nº de venta</th>
                    <th>Status</th>
                    <th>Fecha</th>
                    <th>Monto</th>
                  </tr>
                </thead>
                <tbody>
                @foreach($sales as $sale)
                <tr>
                    <td>{{$sale->code}}</td>
                    <td>{{$sale->type}}</td>
                    <td>{{$sale->date}}</td>
                    <td>$ {{$sale->amount}}</td>
                  </tr>
                @endforeach
               

                </tbody>
              </table>
            </div>
            <!-- /.table-responsive -->
          </div>
          <!-- /.box-body -->
          <div class="box-footer clearfix">
            <a href="/payment" class="btn btn-sm btn-info btn-flat pull-left">Nueva venta</a>
            <a href="javascript:void(0)" class="btn btn-sm btn-default btn-flat pull-right">Ver todas las ventas</a>
          </div>
          <!-- /.box-footer -->
        </div>
      </div>
    </div>
  </section>

</div>



@endsection