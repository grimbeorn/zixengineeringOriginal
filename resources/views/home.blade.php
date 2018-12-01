@extends('layouts.app')

@section('content')
  <main role="main">
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img class="first-slide" src="{{ asset('imgs/bg3.jpg') }}" alt="First slide">
        </div>
        <div class="carousel-item">
          <img class="second-slide" src="{{ asset('imgs/bg7.jpg') }}" alt="Second slide">
        </div>
        <div class="carousel-item">
          <img class="third-slide" src="{{ asset('imgs/profile_city.jpg') }}" alt="Third slide">
        </div>
      </div>
      <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
    <!-- Wrap the rest of the page in another container to center all the content. -->
    <div class="container marketing">
      <div class="row featurette">
          <div class="col-md-12">
            <h1 >Zix Ingeniería</h1>
            <br>
            <p class="lead"><strong>Zix Ingeniería</strong> es una empresa de consultoría especializada en proyectos de estructuras, dedicados al cálculo, diseño, planos y redacción en las áreas industrial, comercial, de edificación, infraestructura, mecánicos y R+D</p><p class="lead"><strong>Zix Ingeniería</strong> ofrece soluciones en diseño de estructuras de concreto, acero, madera, composites y mecánicas en cualquier fase del proyecto.</p>
          </div>
          <!-- <div class="col-md-5">
            <img class="featurette-image img-fluid mx-auto" data-src="holder.js/500x500/auto" alt="Generic placeholder image">
            <img class="featurette-image img-fluid mx-auto" src="../../../../assets/img/logoa.png" alt="logo Zix">
          </div> -->
        </div>
        <hr class="featurette-divider">
    </div>
  </main>
@endsection
