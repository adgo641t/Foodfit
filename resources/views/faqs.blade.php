<<<<<<< HEAD
@extends('layouts.menu')
@section('content')
=======
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
>>>>>>> 306120288077709923af1317e483e272f64a71a7
    <body class="antialiased">
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
<br>
</div>

		
</div>
</body>
  <footer class="bg-gray-900">	
		<div class="container max-w-6xl mx-auto flex items-center px-2 py-8">

			<div class="w-full mx-auto flex flex-wrap items-center">
				<div class="flex w-full md:w-1/2 justify-center md:justify-start text-white font-extrabold">
					<a class="text-gray-900 no-underline hover:text-gray-900 hover:no-underline" href="#">
					    <span class="text-base text-gray-200">Food&Fit</span>
					</a>
				</div>
				<div class="flex w-full pt-2 content-center justify-between md:w-1/2 md:justify-end">
					<ul class="list-reset flex justify-center flex-1 md:flex-none items-center">
					  <li>
						<a class="inline-block py-2 px-3 text-white no-underline" href="#">Blog</a>
					  </li>
					  <li>
						<a class="inline-block text-gray-600 no-underline hover:text-gray-200 hover:underline py-2 px-3" href="#">Faqs</a>
					  </li>
					  <li>
						<a class="inline-block text-gray-600 no-underline hover:text-gray-200 hover:underline py-2 px-3" href="#">Facebook</a>
					  </li>
						<li>
						<a class="inline-block text-gray-600 no-underline hover:text-gray-200 hover:underline py-2 px-3" href="#">Linkedin</a>
					  </li>
					</ul>
				</div>
			</div>
        
      </div>
	</footer>
          
            


        <script src="js/faqs.js"></script>

  @section('content')