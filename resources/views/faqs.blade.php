<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>FAQs - Foot&Fit</title>
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
            <h3>Frequently Asked Questions : <b>Ordering/Shipping</b></h3>
          </div>
        
          <!-- Accordion FAQs -->
          <div class="container faqs2">
            <button class="accordion">When will I receive my order and what delivery options do I have?</button>
<div class="panel">
  <p class="panelText">Delivery options <b>depend on your postcode</b> , but you can receive all your dishes in one delivery on: Friday, Sunday, Monday, Tuesday or Wednesday.</p>
  <p class="panelText">Depending on your postcode you will have the option to receive your order in the morning (from 9:00 to 14:00)</b>, in the <b>afternoon (from 15:00 to 20:00)</b>, or choose between <b>both time slots (morning or afternoon)</b>. Before receiving your dishes <b>you will receive an email stating the arrival time of your order...</b> You won't wait more than 1h30!</p>
  <p class="panelText">You can also personalise the delivery of your order by choosing a time slot.</p>
</div>

<button class="accordion">Can I pick up my order at any point?</button>
<div class="panel">
  <p class="panelText">Due to the current covid-19 situation you will not be able to pick up your order at our bakery.</p>
  <p class="panelText">If you have any questions, please call us on +34 910 37 97 23 on Mondays and Fridays from 09:00 to 19:00; Tuesdays, Wednesdays and Thursdays from 09:00 to 18:00; and Sundays from 12:00 to 21:00. Or, if you prefer, you can write to faqsfoodfit@gmail.com</p>
</div>

<button class="accordion">What happens if my dishes arrive in bad condition?</button>
<div class="panel">
  <p class="panelText">It happens very rarely, but if it does, <b>contact us so that we can find the best solution</b>.</p>
  <p class="panelText">Call us on +34 934 37 56 23 on Mondays and Fridays from 09:00 to 19:00; Tuesdays, Wednesdays and Thursdays from 09:00 to 18:00; and Sundays from 12:00 to 21:00. Or, if you prefer, you can write to faqsfootfit@gmail.com</p>
</div>

<button class="accordion">Can I change my delivery details (address, day or time slot)?</button>
<div class="panel">
  <p class="panelText">You will be able to make changes from your account in the detail of the order you want to modify. You will have the option to make changes to your address and/or the time you wish to receive your order.</p>
</div>

<button class="accordion">Do you deliver to the Balearic Islands, Canary Islands, Ceuta or Melilla?</button>
<div class="panel">
  <p class="panelText">At the moment <b>we only deliver in Palma de Mallorca</b>.  In the rest of the Balearic Islands, the Canary Islands, Ceuta and Melilla we are still studying how we can offer you this service in the future.</p>
</div>

<button class="accordion">What do I do if I have not been home to receive my order?</button>
<div class="panel">
  <p class="panelText">Don't worry, contact us and <b>we will arrange delivery again as soon as possible</b>.</p>
  <p class="panelText">Call us on +34 934 37 56 23 on Mondays and Fridays from 09:00 to 19:00; Tuesdays, Wednesdays and Thursdays from 09:00 to 18:00; and Sundays from 12:00 to 21:00. Or, if you prefer, you can write us at faqsfoodfit@gmail.com</p>
</div>

<button class="accordion">How do I know that my plates are on their way?</button>
<div class="panel">
  <p class="panelText">If you want to know the status of your order call us on +34 934 37 56 23 on Mondays and Fridays from 09:00 to 19:00; Tuesdays, Wednesdays and Thursdays from 09:00 to 18:00; and Sundays from 12:00 to 21:00. Or, if you prefer, you can write to us at faqsfoodfit@gmail.com</p>
</div>

<button class="accordion">What happens if I have a problem with the shipment?</button>
<div class="panel">
  <p class="panelText">If you have had any problems with the delivery of your order we want to be the first to know. Your experience is the most important thing to us</p>
  <p class="panelText">Call us on +34 934 37 56 23 on Mondays and Fridays from 09:00 to 19:00; Tuesdays, Wednesdays and Thursdays from 09:00 to 18:00; and Sundays from 12:00 to 21:00. Or, if you prefer, you can write to us at faqsfoodfit@gmail.com</p>
</div>

<button class="accordion">What do I do if my dishes have not arrived with the expected quality?</button>
<div class="panel">
  <p class="panelText">We care deeply about how every detail affects what you eat. To the dishes we cook and serve. We obsess about it.</p>
  <p class="panelText">So, if you have had a bad experience, do not hesitate to call us on +34 934 37 56 23 on Mondays and Fridays from 09:00 to 19:00; Tuesdays, Wednesdays and Thursdays from 09:00 to 18:00; and Sundays from 12:00 to 21:00. Or, if you prefer, you can write to us at faqsfoodfit@gmail.com</p>
</div>

<button class="accordion">Can I cancel my order?</button>
<div class="panel">
  <p class="panelText">We may cancel and/or refund your order as long as your dishes have not been cooked.</p>
  <p class="panelText">Contact us by calling +34 934 37 56 23 on Mondays and Fridays from 09:00 to 19:00; Tuesdays, Wednesdays and Thursdays from 09:00 to 18:00; and Sundays from 12:00 to 21:00. Or, if you prefer, you can write to us at faqsfoodfit@gmail.com</p>
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