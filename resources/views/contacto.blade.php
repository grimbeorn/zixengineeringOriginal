@extends('layouts.app')

@section('content')

@if (session('notification'))
    <div class="alert alert-success">
      {{ session('notification') }}
    </div>
  @endif

<div class="container">
  <div class="py-5 text-center">
    <h2 class="featurette-heading">Contacto</h2>
    <p>
      México : + 52 55 5374 2992, proyectos@barrafrancamexico.com<br>
      España : + 34 65 5715 99, presupuestos@zixengineering.com
    </p>
    <!-- <span class="text-muted">Por favor llene los espacios y le contactaremos en menos de 24 horas.</span> -->

  </div>

  <div class="row">
    <div class="col-md-12 order-md-1">
      <h6><span class="text-muted">Por favor llene los espacios y le contactaremos en menos de 24 horas.</span></h6>
      <br>
      <h4 class="mb-3">Datos de Contacto</h4>
      

      <form class="needs-validation" method="post" action="{{ url('/contact2') }}" novalidate>
        {{ csrf_field() }}
        <div class="row">
          <div class="col-md-4 mb-3">
            <label for="nombre">Nombre</label>
            <input type="text" class="form-control" id="nombre" name="nombre" placeholder="" value="" required>
            <div class="invalid-feedback">
              Se necesita un nombre válido.
            </div>
          </div>
          <div class="col-md-4 mb-3">
            <label for="correo">Correo</label>
            <input type="email" class="form-control" id="correo" name="correo" placeholder="" value="" required>
            <div class="invalid-feedback">
              Se necesita un correo válido.
            </div>
          </div>
          <div class="col-md-4 mb-3">
            <label for="telefono">Teléfono</label>
            <input type="text" class="form-control" id="telefono" name="telefono" placeholder="" value="" required>
            <div class="invalid-feedback">
              Se necesita un teléfono válido.
            </div>
          </div>
        </div>
        <div class="mb-3">
          <label for="mensaje">Mensaje <span class="text-muted"></span></label>
          <textarea rows="5" cols="50" type="text" class="form-control" id="mensaje" name="mensaje" placeholder="escriba aquí su mensaje ..."></textarea>
          <div class="invalid-feedback">
            Se necesita un mensaje válido.
          </div>
        </div>
          <button class="btn btn-primary btn-lg btn-block">Contactar</button>
      </form>


    </div>
  </div>

  <hr class="mb-4">

</div>

@endsection
