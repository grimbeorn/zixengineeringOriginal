@extends('layouts.app')

@section('content')

<div class="container marketing">
  <!-- START THE FEATURETTES -->
  <h2 class="featurette-heading">zIX Ingeniería</h2>
  <p class="lead">A continuación se presentan algunos de los proyectos en los que hemos participado:</p>
  

  <a name="proyectos 01"></a>
  <hr class="featurette-divider">
  <div class="row featurette">
    <div class="col-md-7">
      <h2 class="featurette-heading">Sky House <span class="text-muted">- Residencial</span></h2>
      <p class="lead">UBICACIÓN:    Centro de San Miguel de Allende, San Miguel de Allende, Guanajuato, México.</br>
                      PROPIETARIO:  No disponible *</br>
                      ARQUIETCTO:   No disponible *</br>
                      CONSTRUCTOR:  No disponible *</br>
                      DESCRIPCIÓN:  Estructura de concreto y mampostería. La cubierta de la terraza tiene cubre un claro libre de casi 9.00 m y está apoyada puntualmente en sus extremos, así que el diseño y la construcción óptima se realizó con una
                                    contraflecha.</p>
    </div>
    <div class="col-md-5">
      <img class="featurette-image img-fluid mx-auto" src="{{ asset('imgs/skyHouse.jpg') }}" alt="Generic placeholder image">
    </div>
  </div>

  
  <a name="proyectos 02"></a>
  <hr class="featurette-divider">
  <div class="row featurette">
    <div class="col-md-7">
      <h2 class="featurette-heading">Nave para Autopartes Plásticas <span class="text-muted">- Industrial</span></h2>
      <p class="lead">UBICACIÓN:    Parque Industrial Colinas de San Luis, San Luís Potosí, México.</br>
                      PROPIETARIO:  No disponible *</br>
                      ARQUIETCTO:   LKS Ingeniería</br>
                      CONSTRUCTOR:  No disponible *</br>
                      DESCRIPCIÓN:  Nave industrial con seis grúas viajeras en dos carriles. Diseñada para posterior ampliación. Alta eficiencia en el empleo de acero y de espacios por medio de contravientos tipo “portal crane runway
                                    bracings”.</p>
    </div>
    <div class="col-md-5 order-md-1">
      <img class="featurette-image img-fluid mx-auto" src="{{ asset('imgs/naveAutopartes.jpg') }}" alt="Generic placeholder image">
    </div>
  </div>

  
  <a name="proyectos 03"></a>
  <hr class="featurette-divider">
  <div class="row featurette">
    <div class="col-md-7">
      <h2 class="featurette-heading">Torre de Control <span class="text-muted">- Infraestructura</span></h2>
      <p class="lead">UBICACIÓN:    Campeche, México.</br>
                      PROPIETARIO:  No disponible *</br>
                      ARQUIETCTO:   LKS Ingeniería</br>
                      CONSTRUCTOR:  No disponible *</br>
                      DESCRIPCIÓN:  Torre de control de aeropuerto internacional resuelta en estructura de acero y losacero (chapa colaborante). Cimentación contra vuelco para resistir empujes por viento con velocidades superiores a los 180km/h.
                                    También resistente a la composición química del agua por alto nivel freático.</p>
    </div>
    <div class="col-md-5">
      <!-- <img class="featurette-image img-fluid mx-auto" data-src="holder.js/500x500/auto" alt="Generic placeholder image"> -->
      <img class="featurette-image img-fluid mx-auto" src="{{ asset('imgs/torreControl.jpg') }}" alt="Generic placeholder image">
    </div>
  </div>

  <a name="proyectos 04"></a>
  <hr class="featurette-divider">
  <div class="row featurette">
    <div class="col-md-7">
      <h2 class="featurette-heading">Esquina Uruguay y Bolívar <span class="text-muted">- Comercial</span></h2>
      <p class="lead">UBICACIÓN:    Esquina Uruguay y Bolívar, Cuauhtémoc, Ciudad de México.</br>
                      PROPIETARIO:  No disponible *</br>
                      ARQUIETCTO:   No disponible *</br>
                      CONSTRUCTOR:  No disponible *</br>
                      DESCRIPCIÓN:  Estructura de acero de 6 niveles, desplantada sobre un cajón de concreto de cimentación y rigidizada mediante el núcleo de concreto de los elevadores. </br>Zona altamente sísmica, con suelos de baja capacidad y
                  alta plasticidad.</p>
    </div>
    <div class="col-md-5">
      <img class="featurette-image img-fluid mx-auto" src="{{ asset('imgs/bolivar.jpg') }}" alt="Generic placeholder image">
    </div>
  </div>

  <hr class="featurette-divider">

  <!-- /END THE FEATURETTES -->
</div><!-- /.container -->

@endsection