<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About US - Foot&Fit</title>
    <!-- Icon -->
    <link rel="icon" href="img/favicon.ico">
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Exo+2:wght@300&display=swap" rel="stylesheet">  
    <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
  />
    <!-- My css style -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="css/about.css">
<!-- Font awesome icons -->
<script src="https://kit.fontawesome.com/2469414de4.js" crossorigin="anonymous"></script>
<!-- Bootrap scripts -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>

</head>
<body>
     <!-- Menu -->
     <header>
      <nav class="navbar navbar-expand-lg fixed-top navbar-light navbarColor">
          <div class="container-fluid">
              <a href="{{ url('/home') }}"><img src="logo.png" alt="" class="logo-img"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                      <a class="nav-link" href="{{ url('/abouts') }}">About us</a>
                    </li>
                    @if (Route::has('login'))
                    @auth
                    <li class="nav-item">
                      <a class="nav-link" aria-current="page" href="{{ url('/product') }}">Pedir a la carta</a>
                    </li>
                      <li class="nav-item">
                          <a href="{{ url('/dashboards') }}" class="nav-link text-sm text-gray-700 dark:text-gray-500 underline">Dashboard</a>
                      </li>
                    @else
                      <li class="nav-item">
                          <a href="{{ route('login') }}" class="nav-link text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>
                      </li>
                    @if (Route::has('register'))
                      <a href="{{ route('register') }}" class="nav-link ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
                    @endif
                    @endauth
                    @endif
              </ul>
          </div>
          </div>
      </nav>
    </header> 

    <!--sobre nosotros-->
    <div class="container" id="about">
      <div class="row">
        <h1 class="col-lg-12 col-md-12 col-sm-12">Quienes somos y que es este Negocio</h1>
        <br>
        <p>Hola queridos visitantes, En estos momentos vamos a explicaros en que consiste nuestro modelo de restaurante: Nuestro restaurante trata de servir 
            un tipo de comida diferente a la usual, ofrecemos comida variada sin necesidad de poner carne, respecto a nosotros somos 3 humildes chavales 
            que hemos salido de DAW llenos de sabiduria y experiencia gracias a nuestros maravillosos profesores. 
        </p>
      </div>

    </div>
    <div class="container " id="bloque_img">
      <div class="row">
        <img class="col-lg-4 col-md-12 col-sm-12 imagen1" id="imagen1" src="public/DANI_CHAD.jpg" alt="">
        <img class="col-lg-4 col-md-12 col-sm-12" id="imagen2" src="public/JORDI_CHAD.jpg" alt="">
        <img class="col-lg-4 col-md-12 col-sm-12" id="imagen3" src="public/obama_CHAD.jpg" alt="">
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
</body>
</html>
