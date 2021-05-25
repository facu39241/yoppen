<div class="modal fade in" id="modify-default-{{$article->id}}" style="display: none; padding-right: 50px;">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">

        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span></button>
        <h4 class="modal-title">Editar articulo</h4>
      </div>

      <div class="modal-body">

        <form action="/articles/{{$article->id}}" method="POST" role="form" enctype='multipart/form-data'>
          {{ method_field('PATCH') }}
          {{ csrf_field() }}

          <div class="form-group col-md-6 col-xs-6 col-sm-12">
            <label for="exampleInputEmail1">Proveedor</label>
            <select class="form-control" name="provisioner_id">
              @foreach($provisioners as $provisioner)
              <option value='{{$provisioner->id}}'>{{$provisioner->name}} </option>
              @endforeach
            </select>
          </div>

          <div class="form-group col-md-6 col-xs-6 col-sm-12">
            <label for="exampleInputEmail1">Categoria</label>
            <select class="form-control" name="category_id[]" multiple>
            @foreach($categories as $category)
            <option value='{{$category->id}}'
              @foreach($article->categories as $ArticleCategory)
                @if($category->id == $ArticleCategory->id)
                  selected
                  @break
                @endif
              @endforeach
              >{{$category->name}}</option>
            @endforeach
            </select>
          </div>

          <div class="form-group col-md-6 col-xs-6 col-sm-12">
            <label for="exampleInputEmail1">Nombre del producto</label>
            <input type="text" class="form-control" value="{{$article->name}}" name="name" placeholder="Ingrese nombre" required>
          </div>

          <div class="form-group col-md-6 col-xs-6 col-sm-12">
            <label for="exampleInputEmail1">Código del producto</label>
            <input type="number" class="form-control" value="{{$article->code}}" name="code" placeholder="Codigo" required>
          </div>

          <div class="form-group col-md-6 col-xs-6 col-">
            <label for="exampleInputEmail1">Precio</label>
            <div class="input-group">
              <span class="input-group-addon">$</span>
              <input type="text" class="form-control" value="{{$article->price}}" name="price" required>
              <span class="input-group-addon">.00</span>
            </div>
          </div>
          

          <div class="form-group col-md-6 col-xs-6 col-sm-12">
            <label for="exampleInputEmail1">Cantidad en Stock</label>
            <input type="number" class="form-control" value="{{$article->stock}}" name="stock" placeholder="Stock" required>
          </div>

          <div class="form-group">
            <label>Descripcíon</label>
            <textarea class="form-control" rows="3" value="{{$article->description}}" placeholder="Descripcíon ..." name="description">{{$article->description}}</textarea>
          </div>

          <div class="form-group">
            <label for="exampleInputFile">Imagen</label>
            <input type="file" value="{{$article->image}}" name="image">

            <p class="help-block">JPN solamente.</p>
          </div>

          <div class="form-group form-check">
            @if( $article->web == 1 )
              <input type="checkbox" name="web" value="true" class="form-check-input" id="exampleCheck1" checked>
            @else
              <input type="checkbox" name="web" value="true" class="form-check-input" id="exampleCheck1">
            @endif
         
            <label class="form-check-label" for="exampleCheck1">Publicar en web?</label>
          </div>
          
          <div class="form-group">
          </div>
      </div>

      <div class="modal-footer">
        <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Cancelar</button>
        <button type="submit" class="btn btn-primary">Actualizar</button>
      </div>
      </form>
    </div>
  </div>
</div>