@extends('layouts.app')

@section('content')

<div class="container">
  <div class="py-5 text-center">
    <h2 class="featurette-heading">Presupuesto </h2>
    <span class="text-muted">Por favor llene los espacios y tendremos su presupuesto en menos de 24 horas.</span>

  </div>

  <div class="row">
    <div class="col-md-12 order-md-1">
      <h4 class="mb-3">Datos de Contacto</h4>
      <form class="needs-validation" novalidate>
        <div class="row">
          <div class="col-md-6 mb-3">
            <label for="nombre">Nombre</label>
            <input type="text" class="form-control" id="nombre" placeholder="" value="" required>
            <div class="invalid-feedback">
              Se necesita un nombre válido.
            </div>
          </div>
          <div class="col-md-6 mb-3">
            <label for="apellido">Apellido</label>
            <input type="text" class="form-control" id="apellido" placeholder="" value="" required>
            <div class="invalid-feedback">
              Se necesita un apellido válido.
            </div>
          </div>
        </div>

        <div class="mb-3">
          <label for="email">Email <span class="text-muted"></span></label>
          <input type="email" class="form-control" id="email" placeholder="correo@example.com">
          <div class="invalid-feedback">
            Se necesita un correo electrónico válido.
          </div>
        </div>

        <h4 class="mb-3">Datos del Proyecto</h4>
        <div class="row">
          <div class="col-md-6 mb-3">
            <label for="nombreProyecto">Nombre del Proyecto</label>
            <input type="text" class="form-control" id="nombreProyecto" placeholder="" value="" required>
            <div class="invalid-feedback">
              Se necesita un nombre válido.
            </div>
          </div>
          <div class="col-md-6 mb-3">
            <label for="ubicacion">Ubicación</label>
            <input type="text" class="form-control" id="ubicacion" placeholder="" value="" required>
            <div class="invalid-feedback">
              Se necesita una ubicación válida.
            </div>
          </div>
          <div class="col-md-6 mb-3">
            <label for="tipoEstructura">Tipo de Estructura</label>
            <select class="custom-select d-block w-100" id="tipoEstructura" required>
              <option value="">Elegir...</option>
              <option>Acero</option>
              <option>Cimentación</option>
              <option>Concreto / Hormigón</option>
              <option>Madera</option>
              <option>Mampostería</option>
              <option>Mixta</option>
              <option>Otra</option>
            </select>
            <div class="invalid-feedback">
              Please select a valid country.
            </div>
          </div>
          <div class="col-md-6 mb-3">
            <label for="otra">* Otra (especificar)</label>
            <input type="text" class="form-control" id="otra" placeholder="" value="" required>
          </div>

          <div class="col-md-6 mb-3">
            <label for="servicioRequerido">Servicio Requerido</label>
            <select class="custom-select d-block w-100" id="servicioRequerido" required>
              <option value="">Elegir...</option>
              <option>proyecto nuevo</option>
              <option>revisión</option>
              <option>consultoría</option>
            </select>
            <div class="invalid-feedback">
              Please select a valid country.
            </div>
          </div>
          <div class="col-md-6 mb-3">
            <label for="m2Proyecto">m2 de proyecto</label>
            <input type="text" class="form-control" id="m2Proyecto" placeholder="" value="" required>
          </div>
        </div>
        <button class="btn btn-primary btn-lg btn-block" type="submit">Enviar</button>
      </form>
    </div>
  </div>

  <hr class="mb-4">

</div>

@endsection