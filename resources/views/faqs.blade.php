@extends('layouts.menu')
@section('content')
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
					<a class="text-gray-900 no-underline hover:text-gray-900 hover:no-underline" href="/">
					    <span class="text-base text-gray-200">Food&Fit</span>
					</a>
				</div>
				<div class="flex w-full pt-2 content-center justify-between md:w-1/2 md:justify-end">
					<ul class="list-reset flex justify-center flex-1 md:flex-none items-center">
					  <li>
						<a class="inline-block text-gray-600 no-underline hover:text-gray-200 hover:underline py-2 px-3" href="{{route('faq')}}">{{ __('FAQs') }}</a>
					  </li>
					  <li>
						<a class="inline-block text-gray-600 no-underline hover:text-gray-200 hover:underline py-2 px-3" href="https://www.facebook.com/people/Comidas-Nutritivas-Y-Saludables/100066570821806/">Facebook</a>
					  </li>
					</ul>
				</div>
			</div>
		</div>
	</footer>
            


        <script src="js/faqs.js"></script>

  @section('content')