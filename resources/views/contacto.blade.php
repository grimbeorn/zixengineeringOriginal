@extends('layouts.app')

@section('content')

<div class="container">
  <div class="py-5 text-center">
    <h2 class="featurette-heading">Contacto</h2>
    <span class="text-muted">Por favor llene los espacios y le contactaremos en menos de 24 horas.</span>

  </div>

  <div class="row">
    <div class="col-md-12 order-md-1">
      <h4 class="mb-3">Datos de Contacto</h4>
      <form class="needs-validation" novalidate>
        <div class="row">
          <div class="col-md-4 mb-3">
            <label for="nombre">Nombre</label>
            <input type="text" class="form-control" id="nombre" placeholder="" value="" required>
            <div class="invalid-feedback">
              Se necesita un nombre válido.
            </div>
          </div>
          <div class="col-md-4 mb-3">
            <label for="correo">Correo</label>
            <input type="email" class="form-control" id="correo" placeholder="" value="" required>
            <div class="invalid-feedback">
              Se necesita un correo válido.
            </div>
          </div>
          <div class="col-md-4 mb-3">
            <label for="telefono">Teléfono</label>
            <input type="text" class="form-control" id="telefono" placeholder="" value="" required>
            <div class="invalid-feedback">
              Se necesita un teléfono válido.
            </div>
          </div>
        </div>
        <div class="mb-3">
          <label for="mensaje">Mensaje <span class="text-muted"></span></label>
          <textarea rows="5" cols="50" type="text" class="form-control" id="mensaje" placeholder="escriba aquí su mensaje ..."></textarea>
          <div class="invalid-feedback">
            Se necesita un mensaje válido.
          </div>
        </div>

        <form method="post" action="{{ url('/contact2') }}">
          {{ csrf_field() }}
          <button class="btn btn-primary btn-lg btn-block" type="submit">Contactar</button>
        </form>

      </form>
    </div>
  </div>

  <hr class="mb-4">

</div>

@endsection
