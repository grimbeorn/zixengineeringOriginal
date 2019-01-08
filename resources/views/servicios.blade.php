@extends('layouts.app')

@section('content')
<main role="main">
<!-- Wrap the rest of the page in another container to center all the content. -->
  <div class="container marketing">
    <!-- START THE FEATURETTES -->
    <h2 class="featurette-heading">Zix Ingeniería. Servicios</h2>
    <a name="servicios 01"></a>
    <hr class="featurette-divider">
    <div class="row featurette">
      <div class="col-md-7">
        <h2 class="featurette-heading">Reducción de Costos<span class="text-muted"></span></h2><br>
        <p class="lead">En <strong>zIX Ingeniería</strong> estamos centrados en buscar la eficiencia y mejor funcionamiento de la estructura, interactuando con las necesidades de cada proyecto desde la planeación, diseño estructural y ejecución.
                        Para nosotros, la optimización de costos y tiempos es una prioridad que debe acompañar al diseño desde sus fases iniciales.</p>
      </div>
      <div class="col-md-5">
        <img class="featurette-image img-fluid mx-auto" src="{{ asset('imgs/01-warehouse.jpg') }}" alt="Generic placeholder image">
      </div>
    </div>

    <a name="servicios 02"></a>
    <hr class="featurette-divider">
    <div class="row featurette">
      <div class="col-md-7 order-md-2">
        <h2 class="featurette-heading">Servicio Personalizado a Arquitectos<span class="text-muted"></span></h2><br>
        <p class="lead">En <strong>zIX Ingeniería</strong> sabemos que el proyecto puede estar condicionado por cuestiones económicas, estéticas, funcionales, operativas, de seguridad y otros factores que necesitan ser coordinados.
                        Para nosotros, es un ejercicio indispensable acompañar al arquitecto, project manager u otro especialista en ese proceso, más aún, en fase de proyecto para preparar los concursos. En este ejercicio, se pueden brindar certidumbres relativas al proceso constructivo, materiales y otras variables, para lograr seguridad en las decisiones futuras.</p>
      </div>
      <div class="col-md-5 order-md-1 align-bottom">
        <img class="featurette-image img-fluid mx-auto" src="{{ asset('imgs/arquitectos.jpg') }}" alt="Generic placeholder image">
      </div>
    </div>

    <a name="servicios 03"></a>
    <hr class="featurette-divider">
    <div class="row featurette">
      <div class="col-md-7">
        <h2 class="featurette-heading">Nuestro Equipo <span class="text-muted"></span></h2><br>
        <p class="lead">El equipo de <strong>zIX Ingeniería</strong> está conformado por un grupo de ingenieros y maestros con formación estructural, experiencia y ética profesional. 
                        Ing. Hernando Martínez, Maestría en Ingeniería Estructural.<br>
                        Ing. Felipe Martínez, Especializado en Energía.<br>
                        Arq. Miguel Hernández, Maestría en Estructuras de Edificación.<br>
                        Ing. Andrés Álvarez, Maestría en Administración de Empresas.<br>
                        Ing. Diego Martínez, Maestría en Estructuras Aeroespaciales, Maestría en Mecánica Aplicada.</p>
      </div>
      <div class="col-md-5">
        <img class="featurette-image img-fluid mx-auto" src="{{ asset('imgs/11-warehouse.jpg') }}"data-src="holder.js/500x500/auto" alt="Generic placeholder image">
      </div>
    </div>
    <hr class="featurette-divider">
  </div>
</main>
@endsection
