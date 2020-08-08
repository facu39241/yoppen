<style>
  .form-class {
    border: none;
    border-bottom: 2px solid #DCD9D8;
    font-size: 21px;
  }

  .title {
    font-size: 15px;
  }

  .alerta-cambios {
    text-align: center;
    font-size: 18px;
  }

  .alerta {
    font-size: 22px;
  }
</style>

<div class="modal fade in" id="modify-default-{{$company->id}}" style="display: none; padding-right: 50px;">
  <div class="modal-dialog">
    <div class="modal-content">

      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">X</span></button>
        <h4 class="modal-title">Editar datos de la compañia</h4>
      </div>

      <div class="alert alert-danger alert-dismissible alerta-cambios">

        <h4 class="alerta"><i class="icon fa fa-warning"></i> Alerta!</h4>
        Los cambios que realice aquí, se veran impactados en la proxima factura.<br>
        Corrobore todos los cambios antes de guardar!.
      </div>

      <div class="modal-body">
        <form action="/company/{{$company->id}}" method="POST" role="form">
          {{ method_field('PATCH') }}
          {{ csrf_field() }}

          <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
              <div class="form-group has-success">
                <label class="title">Nombre de la Empresa:</label>
                <input id="name" class="form-class" name="name" value="{{$company->name}}" class="form-control" type="text">
              </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
              <div class="form-group has-success">
                <label class="title">Dirección: </label>
                <input id="direccion" class="form-class" name="direction" value="{{$company->direction}}" class="form-control" type="text">
              </div>
            </div>
          </div>
          <!-- Fila de iva y de telèfono -->
          <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
              <div class="form-group has-success">
                <label class="title">Teléfono:</label>
                <input id="telefono" class="form-class" name="phone" value="{{$company->phone}}" class="form-control" type="number">
              </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
              <div class="form-group has-success">
                <label class="title">IVA </label>
                <input id="iva" class="form-class" name="responsable" value="{{$company->responsable}}" class="form-control" type="text">
              </div>
            </div>
          </div>
          <!-- Fila de ini_act y de email -->
          <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
              <div class="form-group has-success">
                <label class="title">inicio de actividad: </label>
                <input id="inicio_act" class="form-class" name="date_init" value="{{$company->date_init}}" class="form-control" type="text" data-mask>
              </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
              <div class="form-group has-success">
                <label class="title">Email: </label>
                <input id="email" class="form-class" name="email" value="{{$company->email}}" class="form-control" type="email">
              </div>
            </div>
          </div>
          <!-- Fila de provincia y de cuit -->
          <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
              <div class="form-group has-success">
                <label class="title">Provincia: </label>
                <input id="city" class="form-class" name="city" value="{{$company->city}}" class="form-control" type="text" data-mask>
              </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
              <div class="form-group has-success">
                <label class="title">CUIT: </label>
                <input id="name" maxlength="13"  class="form-class" name="cuit" value="{{$company->cuit}}" class="form-control" type="text">
              </div>
            </div>
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