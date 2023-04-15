@extends('layouts.menu')
@section('content')
            <!-- Header -->
    <div class="container-fluid pageHeader">
        <div class="row align-items-center">
        <div class="col-lg-6 col-md-12 col-sm-12 p-5">
                <h1> {{ __('text1') }}</h1>
                <p class="lead">
                  {{ __('text2') }}
                </p>
                @if(@Auth::user()->hasRole('cliente'))
                <a href="product" class="btn btn-warning" role="button">PEDIR A LA CARTA</a>
                @endif
                @if(@Auth::user()->hasRole('admin'))
                <button type="button" class="btn btnColor"><a href="{{ route('products.index')}}" style="all: inherit">PEDIR A LA CARTA</a></button>
                @endif
            </div>
            <div class="col-lg-6 col-md-12 col-sm-12">
                <img class="img-fluid float-right" src="https://www.hogarmania.com/archivos/202004/recetas-familia-1280x720x80xX.jpg" alt="">
            </div>
        </div>
    </div>
  </div>

  <!-- information section -->
  <div class="container-fluid">
    <div class="row marginHeader">
      <div class="col-lg-12 col-md-12 col-sm-12">
          <p class="someText textAlignment">{{ __('text3') }}</p>
          <h1 class="textAlignment display-6">{{ __('text4') }}</h1>
      </div>
      <div class="col-lg-4 col-md-6 col-sm-12 marginHeader">
        <i class="fa-solid fa-clock fa-4x d-flex justify-content-center"></i>
        <p class="mt-5 textAlignment">{{ __('text5') }}</p>
      </div>
      <div class="col-lg-4 col-md-6 col-sm-12 marginHeader">
        <i class="fa-solid fa-basket-shopping fa-4x d-flex justify-content-center"></i>
        <p class="mt-5 textAlignment">{{ __('text6') }}</p>
      </div>
      <div class="col-lg-4 col-md-6 col-sm-12 marginHeader">
        <i class="fa-solid fa-bowl-food fa-4x d-flex justify-content-center"></i>
        <p class="mt-5 textAlignment">{{ __('text7') }}</p>
      </div>
    </div>
  </div>

  <!-- Testimonails section -->
  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-12 col-md-12 col-sm-12">
          <h1 class="display-6 textAlignment">{{ __('text8') }}</h1>
      </div>
  </div>
  <!-- <section id="testimonials" class="marginHeader">
    <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <h2 class="testimonial-text">Estos chicos son unos cracks fui al restaurante era perfecto tuve que cancelar el programa</h2>
          <img class="content-center" src="public/gordon.jpg" class="testimonial-img " alt="dog-profile">
          <em>Gordon Ramsay, New York</em>
        </div>
        <div class="carousel-item">
          <h2 class="testimonial-text">Ahora me llaman Don sucio me acabo de hinchar a comer en este restaurante me encanta.</h2>
          <img src="../public/don-limpio.png" class="testimonial-img object-center" alt="lady-profile">
          <em>Don limpio, Illinois</em>
        </div>
        <div class="carousel-item">
          <h2 class="testimonial-text">Gracias a esta app he conseguido adelgazar 80Kg</h2>
          <img src="public/Alberto-Chicote.jpg" class="testimonial-img" alt="lady-profile">
          <em>Alberto Chicote</em>
        </div>
        <div class="carousel-item">
          <h2 class="testimonial-text">Después de probar esta app, la familia ya no es lo más importante</h2>
          <img src="public/bin.jpeg" class="testimonial-img" alt="lady-profile">
          <em>Vin Diesel</em>
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
  </section> -->

<section class="text-neutral-700 dark:text-neutral-300">
  <div class="grid gap-6 text-center md:grid-cols-3">
    <div>
      <div
        class="block rounded-lg bg-white shadow-lg dark:bg-neutral-700 dark:shadow-black/30">
        <div class="h-28 overflow-hidden rounded-t-lg bg-[#9d789b]"></div>
        <div
          class="mx-auto -mt-12 w-24 overflow-hidden rounded-full border-2 border-white bg-white dark:border-neutral-800 dark:bg-neutral-800">
          <img src="public/don-limpio.png" alt="lady-profile">
        </div>
        <div class="p-6">
          <h4 class="mb-4 text-2xl font-semibold">{{ __('text12') }}</h4>
          <hr />
          <p class="mt-4">
            <svg
              xmlns="http://www.w3.org/2000/svg"
              fill="currentColor"
              class="inline-block h-7 w-7 pr-2"
              viewBox="0 0 24 24">
              <path
                d="M13 14.725c0-5.141 3.892-10.519 10-11.725l.984 2.126c-2.215.835-4.163 3.742-4.38 5.746 2.491.392 4.396 2.547 4.396 5.149 0 3.182-2.584 4.979-5.199 4.979-3.015 0-5.801-2.305-5.801-6.275zm-13 0c0-5.141 3.892-10.519 10-11.725l.984 2.126c-2.215.835-4.163 3.742-4.38 5.746 2.491.392 4.396 2.547 4.396 5.149 0 3.182-2.584 4.979-5.199 4.979-3.015 0-5.801-2.305-5.801-6.275z" />
            </svg>
            {{ __('text11') }}
          </p>
        </div>
        <ul class="mb-0 flex items-center justify-center">
        <li>
          <svg
            xmlns="http://www.w3.org/2000/svg"
            viewBox="0 0 24 24"
            fill="currentColor"
            class="h-5 w-5 text-yellow-500">
            <path
              fill-rule="evenodd"
              d="M10.788 3.21c.448-1.077 1.976-1.077 2.424 0l2.082 5.007 5.404.433c1.164.093 1.636 1.545.749 2.305l-4.117 3.527 1.257 5.273c.271 1.136-.964 2.033-1.96 1.425L12 18.354 7.373 21.18c-.996.608-2.231-.29-1.96-1.425l1.257-5.273-4.117-3.527c-.887-.76-.415-2.212.749-2.305l5.404-.433 2.082-5.006z"
              clip-rule="evenodd" />
          </svg>
        </li>
        <li>
          <svg
            xmlns="http://www.w3.org/2000/svg"
            viewBox="0 0 24 24"
            fill="currentColor"
            class="h-5 w-5 text-yellow-500">
            <path
              fill-rule="evenodd"
              d="M10.788 3.21c.448-1.077 1.976-1.077 2.424 0l2.082 5.007 5.404.433c1.164.093 1.636 1.545.749 2.305l-4.117 3.527 1.257 5.273c.271 1.136-.964 2.033-1.96 1.425L12 18.354 7.373 21.18c-.996.608-2.231-.29-1.96-1.425l1.257-5.273-4.117-3.527c-.887-.76-.415-2.212.749-2.305l5.404-.433 2.082-5.006z"
              clip-rule="evenodd" />
          </svg>
        </li>
        <li>
          <svg
            xmlns="http://www.w3.org/2000/svg"
            viewBox="0 0 24 24"
            fill="currentColor"
            class="h-5 w-5 text-yellow-500">
            <path
              fill-rule="evenodd"
              d="M10.788 3.21c.448-1.077 1.976-1.077 2.424 0l2.082 5.007 5.404.433c1.164.093 1.636 1.545.749 2.305l-4.117 3.527 1.257 5.273c.271 1.136-.964 2.033-1.96 1.425L12 18.354 7.373 21.18c-.996.608-2.231-.29-1.96-1.425l1.257-5.273-4.117-3.527c-.887-.76-.415-2.212.749-2.305l5.404-.433 2.082-5.006z"
              clip-rule="evenodd" />
          </svg>
        </li>
        <li>
          <svg
            xmlns="http://www.w3.org/2000/svg"
            viewBox="0 0 24 24"
            fill="currentColor"
            class="h-5 w-5 text-yellow-500">
            <path
              fill-rule="evenodd"
              d="M10.788 3.21c.448-1.077 1.976-1.077 2.424 0l2.082 5.007 5.404.433c1.164.093 1.636 1.545.749 2.305l-4.117 3.527 1.257 5.273c.271 1.136-.964 2.033-1.96 1.425L12 18.354 7.373 21.18c-.996.608-2.231-.29-1.96-1.425l1.257-5.273-4.117-3.527c-.887-.76-.415-2.212.749-2.305l5.404-.433 2.082-5.006z"
              clip-rule="evenodd" />
          </svg>
        </li>
        <li>
          <svg
            xmlns="http://www.w3.org/2000/svg"
            viewBox="0 0 24 24"
            fill="currentColor"
            class="h-5 w-5 text-yellow-500">
            <path
              fill-rule="evenodd"
              d="M10.788 3.21c.448-1.077 1.976-1.077 2.424 0l2.082 5.007 5.404.433c1.164.093 1.636 1.545.749 2.305l-4.117 3.527 1.257 5.273c.271 1.136-.964 2.033-1.96 1.425L12 18.354 7.373 21.18c-.996.608-2.231-.29-1.96-1.425l1.257-5.273-4.117-3.527c-.887-.76-.415-2.212.749-2.305l5.404-.433 2.082-5.006z"
              clip-rule="evenodd" />
          </svg>
        </li>
      </ul>
      <br>
      </div>
    </div>
    <div>
      <div
        class="block rounded-lg bg-white shadow-lg dark:bg-neutral-700 dark:shadow-black/30">
        <div class="h-28 overflow-hidden rounded-t-lg bg-[#7a81a8]"></div>
        <div
          class="mx-auto -mt-12 w-24 overflow-hidden rounded-full border-2 border-white bg-white dark:border-neutral-800 dark:bg-neutral-800">
          <img class="content-center" src="public/gordon.jpg" alt="dog-profile">
        </div>
        <div class="p-6">
          <h4 class="mb-4 text-2xl font-semibold">{{ __('text10') }}</h4>
          <hr />
          <p class="mt-4">
            <svg
              xmlns="http://www.w3.org/2000/svg"
              fill="currentColor"
              class="inline-block h-7 w-7 pr-2"
              viewBox="0 0 24 24">
              <path
                d="M13 14.725c0-5.141 3.892-10.519 10-11.725l.984 2.126c-2.215.835-4.163 3.742-4.38 5.746 2.491.392 4.396 2.547 4.396 5.149 0 3.182-2.584 4.979-5.199 4.979-3.015 0-5.801-2.305-5.801-6.275zm-13 0c0-5.141 3.892-10.519 10-11.725l.984 2.126c-2.215.835-4.163 3.742-4.38 5.746 2.491.392 4.396 2.547 4.396 5.149 0 3.182-2.584 4.979-5.199 4.979-3.015 0-5.801-2.305-5.801-6.275z" />
            </svg>
            {{ __('text9') }}
          </p>
          <ul class="mb-0 flex items-center justify-center">
        <li>
          <svg
            xmlns="http://www.w3.org/2000/svg"
            viewBox="0 0 24 24"
            fill="currentColor"
            class="h-5 w-5 text-yellow-500">
            <path
              fill-rule="evenodd"
              d="M10.788 3.21c.448-1.077 1.976-1.077 2.424 0l2.082 5.007 5.404.433c1.164.093 1.636 1.545.749 2.305l-4.117 3.527 1.257 5.273c.271 1.136-.964 2.033-1.96 1.425L12 18.354 7.373 21.18c-.996.608-2.231-.29-1.96-1.425l1.257-5.273-4.117-3.527c-.887-.76-.415-2.212.749-2.305l5.404-.433 2.082-5.006z"
              clip-rule="evenodd" />
          </svg>
        </li>
        <li>
          <svg
            xmlns="http://www.w3.org/2000/svg"
            viewBox="0 0 24 24"
            fill="currentColor"
            class="h-5 w-5 text-yellow-500">
            <path
              fill-rule="evenodd"
              d="M10.788 3.21c.448-1.077 1.976-1.077 2.424 0l2.082 5.007 5.404.433c1.164.093 1.636 1.545.749 2.305l-4.117 3.527 1.257 5.273c.271 1.136-.964 2.033-1.96 1.425L12 18.354 7.373 21.18c-.996.608-2.231-.29-1.96-1.425l1.257-5.273-4.117-3.527c-.887-.76-.415-2.212.749-2.305l5.404-.433 2.082-5.006z"
              clip-rule="evenodd" />
          </svg>
        </li>
        <li>
          <svg
            xmlns="http://www.w3.org/2000/svg"
            viewBox="0 0 24 24"
            fill="currentColor"
            class="h-5 w-5 text-yellow-500">
            <path
              fill-rule="evenodd"
              d="M10.788 3.21c.448-1.077 1.976-1.077 2.424 0l2.082 5.007 5.404.433c1.164.093 1.636 1.545.749 2.305l-4.117 3.527 1.257 5.273c.271 1.136-.964 2.033-1.96 1.425L12 18.354 7.373 21.18c-.996.608-2.231-.29-1.96-1.425l1.257-5.273-4.117-3.527c-.887-.76-.415-2.212.749-2.305l5.404-.433 2.082-5.006z"
              clip-rule="evenodd" />
          </svg>
        </li>
        <li>
          <svg
            xmlns="http://www.w3.org/2000/svg"
            viewBox="0 0 24 24"
            fill="currentColor"
            class="h-5 w-5 text-yellow-500">
            <path
              fill-rule="evenodd"
              d="M10.788 3.21c.448-1.077 1.976-1.077 2.424 0l2.082 5.007 5.404.433c1.164.093 1.636 1.545.749 2.305l-4.117 3.527 1.257 5.273c.271 1.136-.964 2.033-1.96 1.425L12 18.354 7.373 21.18c-.996.608-2.231-.29-1.96-1.425l1.257-5.273-4.117-3.527c-.887-.76-.415-2.212.749-2.305l5.404-.433 2.082-5.006z"
              clip-rule="evenodd" />
          </svg>
        </li>
        <li>
          <svg
            xmlns="http://www.w3.org/2000/svg"
            viewBox="0 0 24 24"
            fill="currentColor"
            class="h-5 w-5 text-yellow-500">
            <path
              fill-rule="evenodd"
              d="M10.788 3.21c.448-1.077 1.976-1.077 2.424 0l2.082 5.007 5.404.433c1.164.093 1.636 1.545.749 2.305l-4.117 3.527 1.257 5.273c.271 1.136-.964 2.033-1.96 1.425L12 18.354 7.373 21.18c-.996.608-2.231-.29-1.96-1.425l1.257-5.273-4.117-3.527c-.887-.76-.415-2.212.749-2.305l5.404-.433 2.082-5.006z"
              clip-rule="evenodd" />
          </svg>
        </li>
      </ul>
        </div>
      </div>

    </div>
    <div>
      <div
        class="block rounded-lg bg-white shadow-lg dark:bg-neutral-700 dark:shadow-black/30">
        <div class="h-28 overflow-hidden rounded-t-lg bg-[#6d5b98]"></div>
        <div
          class="mx-auto -mt-12 w-24 overflow-hidden rounded-full border-2 border-white bg-white dark:border-neutral-800 dark:bg-neutral-800">
          <img
            src="https://tecdn.b-cdn.net/img/Photos/Avatars/img%20(9).webp" />
        </div>
        <div class="p-6">
          <h4 class="mb-4 text-2xl font-semibold">{{ __('text26') }}</h4>
          <hr />
          <p class="mt-4">
            <svg
              xmlns="http://www.w3.org/2000/svg"
              fill="currentColor"
              class="inline-block h-7 w-7 pr-2"
              viewBox="0 0 24 24">
              <path
                d="M13 14.725c0-5.141 3.892-10.519 10-11.725l.984 2.126c-2.215.835-4.163 3.742-4.38 5.746 2.491.392 4.396 2.547 4.396 5.149 0 3.182-2.584 4.979-5.199 4.979-3.015 0-5.801-2.305-5.801-6.275zm-13 0c0-5.141 3.892-10.519 10-11.725l.984 2.126c-2.215.835-4.163 3.742-4.38 5.746 2.491.392 4.396 2.547 4.396 5.149 0 3.182-2.584 4.979-5.199 4.979-3.015 0-5.801-2.305-5.801-6.275z" />
            </svg>
            {{ __('text27') }}
          </p>
          <ul class="mb-0 flex items-center justify-center">
        <li>
          <svg
            xmlns="http://www.w3.org/2000/svg"
            viewBox="0 0 24 24"
            fill="currentColor"
            class="h-5 w-5 text-yellow-500">
            <path
              fill-rule="evenodd"
              d="M10.788 3.21c.448-1.077 1.976-1.077 2.424 0l2.082 5.007 5.404.433c1.164.093 1.636 1.545.749 2.305l-4.117 3.527 1.257 5.273c.271 1.136-.964 2.033-1.96 1.425L12 18.354 7.373 21.18c-.996.608-2.231-.29-1.96-1.425l1.257-5.273-4.117-3.527c-.887-.76-.415-2.212.749-2.305l5.404-.433 2.082-5.006z"
              clip-rule="evenodd" />
          </svg>
        </li>
        <li>
          <svg
            xmlns="http://www.w3.org/2000/svg"
            viewBox="0 0 24 24"
            fill="currentColor"
            class="h-5 w-5 text-yellow-500">
            <path
              fill-rule="evenodd"
              d="M10.788 3.21c.448-1.077 1.976-1.077 2.424 0l2.082 5.007 5.404.433c1.164.093 1.636 1.545.749 2.305l-4.117 3.527 1.257 5.273c.271 1.136-.964 2.033-1.96 1.425L12 18.354 7.373 21.18c-.996.608-2.231-.29-1.96-1.425l1.257-5.273-4.117-3.527c-.887-.76-.415-2.212.749-2.305l5.404-.433 2.082-5.006z"
              clip-rule="evenodd" />
          </svg>
        </li>
        <li>
          <svg
            xmlns="http://www.w3.org/2000/svg"
            viewBox="0 0 24 24"
            fill="currentColor"
            class="h-5 w-5 text-yellow-500">
            <path
              fill-rule="evenodd"
              d="M10.788 3.21c.448-1.077 1.976-1.077 2.424 0l2.082 5.007 5.404.433c1.164.093 1.636 1.545.749 2.305l-4.117 3.527 1.257 5.273c.271 1.136-.964 2.033-1.96 1.425L12 18.354 7.373 21.18c-.996.608-2.231-.29-1.96-1.425l1.257-5.273-4.117-3.527c-.887-.76-.415-2.212.749-2.305l5.404-.433 2.082-5.006z"
              clip-rule="evenodd" />
          </svg>
        </li>
        <li>
          <svg
            xmlns="http://www.w3.org/2000/svg"
            viewBox="0 0 24 24"
            fill="currentColor"
            class="h-5 w-5 text-yellow-500">
            <path
              fill-rule="evenodd"
              d="M10.788 3.21c.448-1.077 1.976-1.077 2.424 0l2.082 5.007 5.404.433c1.164.093 1.636 1.545.749 2.305l-4.117 3.527 1.257 5.273c.271 1.136-.964 2.033-1.96 1.425L12 18.354 7.373 21.18c-.996.608-2.231-.29-1.96-1.425l1.257-5.273-4.117-3.527c-.887-.76-.415-2.212.749-2.305l5.404-.433 2.082-5.006z"
              clip-rule="evenodd" />
          </svg>
        </li>
        <li>
          <svg
            xmlns="http://www.w3.org/2000/svg"
            viewBox="0 0 24 24"
            fill="currentColor"
            class="h-5 w-5 text-yellow-500">
            <path
              fill-rule="evenodd"
              d="M10.788 3.21c.448-1.077 1.976-1.077 2.424 0l2.082 5.007 5.404.433c1.164.093 1.636 1.545.749 2.305l-4.117 3.527 1.257 5.273c.271 1.136-.964 2.033-1.96 1.425L12 18.354 7.373 21.18c-.996.608-2.231-.29-1.96-1.425l1.257-5.273-4.117-3.527c-.887-.76-.415-2.212.749-2.305l5.404-.433 2.082-5.006z"
              clip-rule="evenodd" />
          </svg>
        </li>
      </ul>
        </div>
      </div>
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
  <div class="container">
  <div class="row align-items-center p-5">
    <div class="col-lg-6 col-md-12 col-sm-12">
      <h1 class="display-5 px-5 float">{{ __('text13') }}</h1>
      <p class="px-5 float">{{ __('text14') }}</p>
      <p class="px-5 float"><i class="fa-solid fa-check px-2"></i><strong>{{ __('text15') }}</strong> {{ __('text16') }}</p>
      <p class="px-5 float"><i class="fa-solid fa-check px-2"></i><strong>{{ __('text17') }}</strong> {{ __('text18') }}</p>
      <p class="px-5 "><i class="fa-solid fa-check px-2"></i><strong>{{ __('text19') }}</strong> {{ __('text20') }}</p>
    </div>
    <div class="col-lg-6 col-md-12 col-sm-12">
      <img class="p-5 float-image" src="https://canalcocina.es/medias/_cache/zoom-7633d99ea9677004a4988e94e5d30aa0-920-518.jpg" class="vegies" alt="">
    </div>
  </div>
  </div>

  <!-- Community section -->
  <div class="container">
  <div class="row">
    <div class="col-lg-12 col-md-12 col-sm-12 marginHeader">
      <p class="textAlignment marginHeader">{{ __('text21') }}</p>
      <h1 class="display-5 px-5 textAlignment ">{{ __('text22') }}</h1>
    </div>
    <p class="textAlignment ">{{ __('text23') }}</p>
  </div>
  <div class="container">
    <div class="row align-items-center">
      <div class="col-md-2 mt-3 col-lg-4 align-items-center">
        <img src="public/gente-increible-bici.png" class="img-fluid" alt="">
      </div>
    <div class="col-md-2 mt-3 col-lg-4 align-items-center">
      <img src="public/gente-increible-comiendo.png" class="img-fluid" alt="">
    </div>
      <div class="col-md-2 mt-3 col-lg-4 align-items-center">
        <img src="public/gente-increible-hijo.png" class="img-fluid"  alt="">
      </div>
      <div class="col-md-2 mt-3 col-lg-4 align-items-center">
        <img src="public/gente-increible-trabajando.jpg" class="img-fluid" alt="">
      </div>
    <div class="col-md-2 mt-3 col-lg-4 align-items-center">
      <img src="public/gente-increible-viaje.jpg" class="img-fluid" alt="">
    </div>
      <div class="col-md-2 mt-3 col-lg-4 align-items-center">
        <img src="public/gente-increible-silencio.jpg" class="img-fluid"  alt="">
      </div>
    </div>
  </div>
  </div>

  <!-- Footer section -->

  <!-- <div class="row marginHeader textAlignment">
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
  </div> -->

  <br>

  <footer class="bg-gray-900">
		<div class="container max-w-6xl mx-auto flex items-center px-2 py-8">

			<div class="w-full mx-auto flex flex-wrap items-center">
				<div class="flex w-full md:w-1/2 justify-center md:justify-start text-white font-extrabold">
					<a class="text-gray-900 no-underline hover:text-gray-900 hover:no-underline" href="/home">
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

        </div>
@endsection