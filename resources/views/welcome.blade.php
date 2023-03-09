<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Foot&Fit - Nourish what you want</title>
        <!-- Icon -->
        <link rel="icon" href="img/favicon.ico">
        <!-- Google Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Exo+2:wght@300&display=swap" rel="stylesheet">  
        <!-- My css style -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="css/index.css">
    <!-- Font awesome icons -->
    <script src="https://kit.fontawesome.com/2469414de4.js" crossorigin="anonymous"></script>
    <!-- Bootrap scripts -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    </head>
    <body class="antialiased">
        <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
            <!-- Menu -->
          <header>
            <nav class="navbar navbar-expand-lg fixed-top navbar-light navbarColor">
                <div class="container-fluid">
                    <a href="{{ url('/') }}"><img src="logo.png" alt="" class="logo-img"></a>
                  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                  </button>
                  <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">                 
                    </ul>
                      <a class="nav-link" href="{{ url('/sobre') }}">About us</a>
                    @if (Route::has('login'))
                    @auth
                    @else
                          <a href="{{ route('login') }}" class="nav-link text-sm text-gray-700 dark:text-gray-500 underline nav-link">Log in</a>
                    @if (Route::has('register'))
                      <a href="{{ route('register') }}" class="nav-link ml-4 text-sm text-gray-700 dark:text-gray-500 underline nav-link">Register</a>
                    @endif
                    @endauth
                    @endif
            </nav>
          </header>    
            
            <!-- Header -->
      <div class="container-fluid pageHeader">
        <div class="row">
            <div class="col-lg-6 col-md-12 col-sm-12 marginHeader">
                <h1> La suscripción semanal para que comas rico y sano</h1>
                <p class="lead">
                  Food&Fit cocina por ti y llena tu nevera de tápers ricos y saludables sin complicarte la vida.
                </p>
                <button class="btn btnColor">PEDIR A LA CARTA</button>
            </div>
        </div>
    </div>
  </div>

  <!-- information section -->
  <div class="container-fluid">
    <div class="row marginHeader">
      <div class="col-lg-12 col-md-12 col-sm-12">
          <p class="someText textAlignment">NO TE COMPLIQUES LA VIDA</p>
          <h1 class="textAlignment display-6">Únete a las más de 103.602 personas que ya han comido Food&Fit</h1>
      </div>
      <div class="col-lg-4 col-md-6 col-sm-12 marginHeader">
        <i class="fa-solid fa-clock fa-4x d-flex justify-content-center"></i>
        <p class="mt-5 textAlignment">Menos horas en el super, cocinando y limpiando. Y más tiempo para ti. Cinco horas extra en tu semana.</p>
      </div>
      <div class="col-lg-4 col-md-6 col-sm-12 marginHeader">
        <i class="fa-solid fa-basket-shopping fa-4x d-flex justify-content-center"></i>
        <p class="mt-5 textAlignment">Cocinamos por ti menús saludables y llenos de sabor.Cero aditivos, cero procesados, comida como la de tu madre.</p>
      </div>
      <div class="col-lg-4 col-md-6 col-sm-12 marginHeader">
        <i class="fa-solid fa-bowl-food fa-4x d-flex justify-content-center"></i>
        <p class="mt-5 textAlignment">Platos con ingredientes naturales desde 5,45€/plato Ahorra comiendo mejor. Que el precio no sea un problema.</p>
      </div>
    </div>
  </div>

  <!-- Testimonails section -->
  <div class="container-fluid">
    <div class="row marginHeader">
      <div class="col-lg-12 col-md-12 col-sm-12">
          <h1 class="display-6 textAlignment">Lo que dicen de nosotros</h1>
      </div>
  </div>
  <section id="testimonials" class="marginHeader">

    <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <h2 class="testimonial-text">Estos chicos son unos cracks fui al restaurante era perfecto tuve que cancelar el programa</h2>
          <img src="public/gordon.jpg" class="testimonial-img" alt="dog-profile">
          <em>Gordon Ramsay, New York</em>
        </div>
        <div class="carousel-item">
          <h2 class="testimonial-text">Ahora me llaman Don sucio me acabo de hinchar a comer en este restaurante me encanta.</h2>
          <img src="public/don-limpio.png" class="testimonial-img" alt="lady-profile">
          <em>Don limpio, Illinois</em>
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>

  </section>
  <section id="press">
    <img class="press-logo" src="public/Spacex.png" alt="tc-logo">
    <img class="press-logo" src="public/mcdonald.png" alt="tnw-logo">
    <img class="press-logo" src="public/forbes-logo.png" alt="biz-insider-logo">
    <img class="press-logo" src="public/masterchef.png" alt="mashable-logo">

  </section>
  </div>

  <!-- Another information section -->
  <div class="row marginHeader">
    <div class="col-lg-6 col-md-6 col-sm-6">
      <h1 class="display-5 px-5">Comer responsable es comer sostenible</h1>
      <p class="px-5">Una alimentación responsable es una alimentación sostenible. Trabajar con productos que crecen de la tierra nos hace muy conscientes de esto y de lo vital que es cuidarla.</p>
      <p class="px-5"><i class="fa-solid fa-check px-2"></i><strong>Donamos el excedente de alimentos</strong>. Todas las semana enviamos las raciones excedentes a familias vulnerables.</p>
      <p class="px-5"><i class="fa-solid fa-check px-2"></i><strong>Somos Plastic Neutral.</strong>. Recogemos del mar los mismos kg de plástico que generamos.</p>
      <p class="px-5"><i class="fa-solid fa-check px-2"></i><strong>Reducimos la huella de carbono.</strong>.A través de un transporte semanal en vez de diario. Menos viajes, menos contaminación.</p>
    </div>
    <div class="col-lg-6 col-md-6 col-sm-6">
      <img src="public/sostenible.png" class="vegies" alt="">
    </div>
  </div>

  <!-- Community section -->
        
  <div class="row ">
    <div class="col-lg-12 col-md-12 col-sm-12 marginHeader">
      <p class="textAlignment marginHeader">GENTE INCREÍBLE QUE YA COME FOODFIT</p>
      <h1 class="display-5 px-5 textAlignment ">Forma parte de una comunidad que inspira a los demás</h1>
    </div>
    <p class="textAlignment ">Formamos parte de la vida de personas con pasión por lo que hacen. Personas que buscan confianza en lo que comen porque saben que de la buena comida se nutren las mejores cosas.</p>
  </div>
  <div class="container">
    <div class="row marginHeader">
      <div class="col-md-2 mt-3 col-lg-4">
        <img src="public/gente-increible-bici.png" class="img-fluid" alt="">
      </div>
    <div class="col-md-2 mt-3 col-lg-4">
      <img src="public/gente-increible-comiendo.png" class="img-fluid" alt="">
    </div>
      <div class="col-md-2 mt-3 col-lg-4">
        <img src="public/gente-increible-hijo.png" class="img-fluid"  alt="">
      </div> 
      <div class="col-md-2 mt-3 col-lg-4">
        <img src="public/gente-increible-trabajando.jpg" class="img-fluid" alt="">
      </div>
    <div class="col-md-2 mt-3 col-lg-4">
      <img src="public/gente-increible-viaje.jpg" class="img-fluid" alt="">
    </div>
      <div class="col-md-2 mt-3 col-lg-4">
        <img src="public/gente-increible-silencio.jpg" class="img-fluid"  alt="">
      </div> 
    </div>
  </div>

  <!-- Footer section -->

  <div class="row marginHeader textAlignment">
    <div class="col">
      <p>¿Cuánto vale tu tiempo?</p>
      <h2 class="display-6">Nutre lo que quieres</h2>
    </div>
    <footer id="footer">
      <div class="col">
        <a class="nav-link" href="{{ url('/faqs') }}">Faqs</a>
      </div>
      <div class="col">
        <div class="icon-footer">
          <i class="fa-brands fa-twitter"></i>
          <i class="fa-brands fa-facebook"></i>
          <i class="fa-brands fa-instagram"></i>
          <i class="fa-solid fa-envelope"></i>
        </div>
      </div>
      <p>© Copyright FOOD&FIT</p>
  
    </footer>
  </div>

        </div>
    </body>
</html>
