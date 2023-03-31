<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>{{ __('title7') }}</title>
        <!-- Icon -->
        <link rel="icon" href="img/favicon.ico">
        <!-- Google Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Exo+2:wght@300&display=swap" rel="stylesheet">  
        <!-- My css style -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="css/faqs.css">
    <!-- Font awesome icons -->
    <script src="https://kit.fontawesome.com/2469414de4.js" crossorigin="anonymous"></script>
    <!-- Bootrap scripts -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"
    integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"
    integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13"
    crossorigin="anonymous"></script>
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
                          <li class="nav-item">
                            <a class="nav-link" href="{{ url('/sobre') }}">About us</a>
                          </li>
                          @if (Route::has('login'))
                          @auth
                            <li class="nav-item">
                              <a href="{{ url('/logout') }}" class="nav-link text-sm text-gray-700 dark:text-gray-500 underline nav-link">Logout</a>
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
          
          <div class="container faqs">
            <h3>{{ __('faq1') }} <b>{{ __('faq2') }}</b></h3>
          </div>
        
          <!-- Accordion FAQs -->
          <div class="container faqs2">
            <button class="accordion">{{ __('faq3') }}</button>
<div class="panel">
  <p class="panelText">{{ __('faq4') }} <b>{{ __('faq5') }}</b>{{ __('faq6') }}</p>
  <p class="panelText">{{ __('faq44') }} <b>{{ __('faq7') }}</b>{{ __('faq8') }} <b>{{ __('faq9') }}</b>{{ __('faq10') }} <b>{{ __('faq11') }}</b>{{ __('faq12') }} <b>{{ __('faq13') }} </b>{{ __('faq14') }}</p>
  <p class="panelText">{{ __('faq15') }}</p>
</div>

<button class="accordion">{{ __('faq16') }}</button>
<div class="panel">
  <p class="panelText">{{ __('faq17') }}</p>
  <p class="panelText">{{ __('faq18') }}</p>
</div>

<button class="accordion">{{ __('faq19') }}</button>
<div class="panel">
  <p class="panelText">{{ __('faq20') }} <b>{{ __('faq21') }}</b>.</p>
  <p class="panelText">{{ __('faq22') }}</p>
</div>

<button class="accordion">{{ __('faq23') }}</button>
<div class="panel">
  <p class="panelText">{{ __('faq24') }}</p>
</div>

<button class="accordion">{{ __('faq25') }}</button>
<div class="panel">
  <p class="panelText">{{ __('faq26') }} <b>{{ __('faq27') }}</b>{{ __('faq28') }}</p>
</div>

<button class="accordion">{{ __('faq29') }}</button>
<div class="panel">
  <p class="panelText">{{ __('faq30') }} <b>{{ __('faq31') }}</b></p>
  <p class="panelText">{{ __('faq32') }}</p>
</div>

<button class="accordion">{{ __('faq33') }}</button>
<div class="panel">
  <p class="panelText">{{ __('faq34') }}</p>
</div>

<button class="accordion">{{ __('faq35') }}</button>
<div class="panel">
  <p class="panelText">{{ __('faq36') }}</p>
  <p class="panelText">{{ __('faq37') }}</p>
</div>

<button class="accordion">{{ __('faq38') }}</button>
<div class="panel">
  <p class="panelText">{{ __('faq39') }}</p>
  <p class="panelText">{{ __('faq40') }}</p>
</div>

<button class="accordion">{{ __('faq41') }}</button>
<div class="panel">
  <p class="panelText">{{ __('faq42') }}</p>
  <p class="panelText">{{ __('faq43') }}</p>
</div>
          </div>
          
            

  <!-- Footer section -->
    <footer id="footer">
      <div class="col text-center">
        <a class="nav-link" href="{{ url('/faqs') }}">Faqs</a>
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
  </div>

        <script src="js/faqs.js"></script>

    </body>
</html>