@extends('principal.layout')
@section('title')
Yoppen | Categorias de productos
@endsection
@section('content')


@if(Session::has('notice'))
<p>
    <strong>
        {{ Session::get('notice') }}
    </strong>
</p>
@endif

<div class="content-wrapper">

    <section class="content-header">
        <h2>
            Categorias de productos.
        </h2>

    </section>

    <section class="content">
        <div class="box">
            <div class="box-header">
                <a data-toggle="modal" data-target="#modal-default" class='btn btn-primary pull-right'>
                    <i class='fa fa-plus'></i>
                </a>
            </div>

            <div class="box-body">
                <table id="example2" class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>Nombre</th>
                            <th>Descripcíon</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($categories as $category)
                        @include('category.modify')
                        <tr>
                            <td>{{$category->name}}</td>
                            <td>{{$category->description}}</td>

                            <td>
                                <a data-toggle="modal" name="modify" data-target="#modify-default-{{$category->id}}" class='btn btn-warning pull'><i class='fa fa-pencil'></i></a>
                                <a data-toggle="modal" name="delete" data-target="#delete-default-{{$category->id}}" class='btn btn-danger pull'><i class='fa fa-trash'></i></a>
                            </td>
                        </tr>
                        @include('category.delete')
                        @endforeach
                        @include('category.new')
                    </tbody>
                    <tfoot>
                        <tr>
                            <th>Nombre</th>
                            <th>Descripcíon</th>
                            <th>Acciones</th>
                        </tr>
                    </tfoot>
                </table>
            </div>

        </div>

    </section>
</div>

@endsection