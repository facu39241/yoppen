<div class="modal fade in" id="view-default-{{$article->id}}" style="display: none; padding-right: 50px;">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">

        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span></button>
            <h4 class="modal-title">Datos del artículo</h4>
      </div>

      <div class="modal-body">
               
        <form method="POST" action="{{route('articles.store')}}">
        {{ csrf_field() }}


          <div class="form-group">
            <label for="">Nombre del producto</label>
            <br>{{$article->name}}
          </div>

          <div class="form-group">
            <label for="">Código del producto</label>
            <br>{{$article->code}}
          </div>

          <label for="">Precio</label>
          <br>{{$article->price}}
      
          <div class="form-group">
            <label for="">Cantidad en Stock</label>
            <br>{{$article->stock}}
          </div>

          <div class="form-group">
            <label for="">Proveedor</label>
           <br> {{$article->provisioner->name}}
          </div>

          <div class="form-group">
           <label>Descripcíon</label>
           <br> {{$article->description}}
            
          </div>

          <div class="form-group">
            <label for="exampleInputFile">Imagen</label>
            <br><img class="img-producto" src="{{asset('img_product/' . $article->image)}}" >
          </div>

          <div class="form-group form-check">
            @if( $article->web == 1 )
              <input type="checkbox" name="web" value="true" class="form-check-input" id="exampleCheck1" checked disabled>
            @else
              <input type="checkbox" name="web" value="true" class="form-check-input" id="exampleCheck1" disabled>
            @endif
         
            <label class="form-check-label" for="exampleCheck1">Publicar en web?</label>
          </div>

          <div class="form-group">
        </div>
      </div>

      <div class="modal-footer">
        <button type="submit" class="btn btn-primary">Cerrar</button>
      </div>
      </form>
          </div>
        </div>
      </div>