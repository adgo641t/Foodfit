@extends('layouts.menu')
@section('content')
    <!--sobre nosotros-->
    <div class="container" id="about">
      <div class="row">
      <h1 class="">Quienes somos y que es este Negocio</h1>
        <br>
        <p>Hola queridos visitantes, En estos momentos vamos a explicaros en que consiste nuestro modelo de restaurante: Nuestro restaurante trata de servir 
            un tipo de comida diferente a la usual, ofrecemos comida variada sin necesidad de poner carne, respecto a nosotros somos 3 humildes chavales 
            que hemos salido de DAW llenos de sabiduria y experiencia gracias a nuestros maravillosos profesores. 
        </p>
      </div>
      <div class="row justify-content-center">
        <div  class="col-md-5 mt-3 col-lg-3">
          <img style="width:83%" class="img-fluid" id="Adrian" src="public/DANI_CHAD.jpg" alt="Imagen adrian">
        </div>
        <div  class="col-md-5 mt-3 col-lg-3">
          <img class="img-fluid"  id="Jose"  src="public/JORDI_CHAD.jpg" alt="Imagen Jord">
        </div >
        <div  class="col-md-5 mt-3 col-lg-3">  
          <img style="width:90%" class="img-fluid" id="Wintop" src="public/obama_CHAD.jpg" alt="">
        </div>
        <div  class="col-md-5 mt-3 col-lg-3">  
          <img style="width:90%" class="img-fluid" id="Wintop" src="public/Pau.png" alt="">
        </div>
      </div>
    </div>
  </div>
    <!-- Footer section -->
    <footer id="footer">
      <div class="col text-center">
        <a class="nav-link" href="{{ url('/faq') }}">Faqs</a>
      </div>
      <div class="col text-center">
        <div class="icon-footer">
          <i class="fa-brands fa-twitter"></i>
          <i class="fa-brands fa-facebook"></i>
          <i class="fa-brands fa-instagram"></i>
          <i class="fa-solid fa-envelope"></i>
        </div>
      </div>
      <p class="text-center">© Copyright FOOD&FIT</p>
  
    </footer>
@endsection