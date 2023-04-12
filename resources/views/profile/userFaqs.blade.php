@extends('layouts.menu')
@section('content') 
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
  </div>
@endsection
