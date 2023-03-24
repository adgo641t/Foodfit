@extends('layouts.menu')
@section('content')           
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
    <div class="row">
      <div class="col-lg-12 col-md-12 col-sm-12">
          <h1 class="display-6 textAlignment">Lo que dicen de nosotros</h1>
      </div>
  </div>
  <section id="testimonials" class="marginHeader">

    <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <h2 class="testimonial-text">Estos chicos son unos cracks fui al restaurante era perfecto tuve que cancelar el programa</h2>
          <img class="content-center" src="public/gordon.jpg" class="testimonial-img " alt="dog-profile">
          <em>Gordon Ramsay, New York</em>
        </div>
        <div class="carousel-item">
          <h2 class="testimonial-text">Ahora me llaman Don sucio me acabo de hinchar a comer en este restaurante me encanta.</h2>
          <img src="public/don-limpio.png" class="testimonial-img object-center" alt="lady-profile">
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
  <section class="row py-12 object-center	" id="press">
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
@endsection
