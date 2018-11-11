@extends('principal.layout')

@section('title')
Yoppen | Artículos
@endsection
@section('content')


@if(Session::has('notice'))
       <p> <strong> {{ Session::get('notice') }} </strong> </p>
    @endif
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Artículos.
      </h1>

    </section>

    <!-- Main content -->
    <section class="content">
		<div class="box">
            <div class="box-header">
              <h3 class="box-title">Tabla de datos de artículos.</h3><a  data-toggle="modal" data-target="#modal-default" class='btn btn-primary pull-right'><i class='fa fa-plus'></i></a>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example2" class="table table-bordered table-striped">
                <thead>


                <tr>
                  <th>Nombre</th>
                  <th>Código</th>
                  <th>Precio</th>
                  <th>Stock</th>
                  
                  <th>Proveedor</th>
                  <th>Acciones</th>
                </tr>


                </thead>
                <tbody>

            @foreach($articles as $article)
            @include('articles.modal')
            @include('articles.modify')
            @include('articles.delete')
            @include('articles.view')
                <tr>
                  <td>{{$article->name}}</td>
                  <td>{{$article->code}}</td>
                  <td>{{$article->price}}</td>

                  <td>{{$article->stock}}</td>
                  <td>{{$article->provisioner->name}}</td>
                  <td>
                  <a  data-toggle="modal" name="view" data-target="#view-default-{{$article->id}}" class='btn btn-success pull'><i class='fa fa-eye'></i></a>
                  <a  data-toggle="modal" name="modify" data-target="#modify-default-{{$article->id}}" class='btn btn-warning pull'><i class='fa fa-pencil'></i></a>
                  <div>
                  <a><form action="articles/{{ $article->id }}" method="POST">
                      {{ method_field('DELETE') }} 
                      {{ csrf_field() }}
                    
                     <button type="submit" class='btn btn-danger pull '><i class='fa fa-trash'></i></button>
                    
                     
                  </div>
                  
                  </form></a>
               
                  

              </form>
                  </td>
                </tr>
            @endforeach
                </tbody>
                <tfoot>
                <tr>
                <th>Nombre</th>
                  <th>Código</th>
                  <th>Precio</th>
                  <th>Stock</th>
                  
                  <th>Proveedor</th>
                  <th>Acciones</th>
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
