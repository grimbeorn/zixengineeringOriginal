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
        <h2 class="featurette-heading">Reducción de Costos<span class="text-muted"></span></h2>
        <p class="lead">En <strong>zIX Ingeniería</strong> estamos convencidos que más del 80% de las estructuras pueden optimizarse en la cantidad de materiales empleados y los tiempos de ejecución. Es por esto que si se tiene un cálculo previo de cualquier estructura, en la que se intuye que se puede reducir la cantidad de material empleado, tenemos la
                        modalidad de negocio: “si no reducimos material, no pagas". Esto significa que solamente te cobraremos si hay un ahorro. Es decir, nos damos a la tarea de revisar y la estructura, entender la necesidad del cliente y proponer un recálculo -siempre del lado de la seguridad estructural- en el cual se garantiza que habrá reducción de costos.
                        De esta forma puedes estar seguro que lo invertido en este recálculo impactará en ahorros para el proyecto.</p>
      </div>
      <div class="col-md-5">
        <img class="featurette-image img-fluid mx-auto" src="{{ asset('imgs/01-warehouse.jpg') }}" alt="Generic placeholder image">
      </div>
    </div>

    <a name="servicios 02"></a>
    <hr class="featurette-divider">
    <div class="row featurette">
      <div class="col-md-7 order-md-2">
        <h2 class="featurette-heading">Servicio Personalizado a Arquitectos<span class="text-muted"></span></h2>
        <p class="lead">En <strong>zIX Ingeniería</strong> sabemos que todo proyecto comienza con una idea. Nuestra labor, es acompañar al arquitecto para que a partir de esa idea podamos lograr el mejor resultado, alineando el proyecto estructural con el arquiectónico desde su concepción.</p>
      </div>
      <div class="col-md-5 order-md-1">
        <img class="featurette-image img-fluid mx-auto" src="{{ asset('imgs/03-warehouse.jpg') }}" alt="Generic placeholder image">
      </div>
    </div>

    <a name="servicios 03"></a>
    <hr class="featurette-divider">
    <div class="row featurette">
      <div class="col-md-7">
        <h2 class="featurette-heading">Nuestro Equipo <span class="text-muted"></span></h2>
        <p class="lead">El equipo de <strong>zIX Ingeniería</strong> está conformado por un grupo de ingenieros y maestros con formación estructural, experiencia y ética profesional. Siempre le atenderemos con la importancia que usted y su proyecto nos merecen. Nos gusta la puntualidad en las entregas, la fácil lectura de memorias y planos, generar vínculos sólidos con nuestros clientes y la satisfacción del trabajo bien hecho.</p>
      </div>
      <div class="col-md-5">
        <img class="featurette-image img-fluid mx-auto" src="{{ asset('imgs/11-warehouse.jpg') }}"data-src="holder.js/500x500/auto" alt="Generic placeholder image">
      </div>
    </div>
    <hr class="featurette-divider">
  </div>
</main>
@endsection
