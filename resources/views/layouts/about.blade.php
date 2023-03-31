@extends('layouts.menu')
@section('content')
    <title>About us</title>
    <!--sobre nosotros-->
    <br>
    <!-- <div class="container" id="about">
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
          <img style="width:83%" class="img-fluid" id="Adrian" src="../public/DANI_CHAD.jpg" alt="Imagen adrian">
        </div>
        <div  class="col-md-5 mt-3 col-lg-3">
          <img class="img-fluid"  id="Jose"  src="../public/JORDI_CHAD.jpg" alt="Imagen Jord">
        </div >
        <div  class="col-md-5 mt-3 col-lg-3">  
          <img style="width:90%" class="img-fluid" id="Wintop" src="../public/obama_CHAD.jpg" alt="">
        </div>
        <div  class="col-md-5 mt-3 col-lg-3">  
          <img style="width:90%" class="img-fluid" id="Wintop" src="../public/Pau.png" alt="">
        </div>
      </div>
    </div>
  </div> -->
        <div class="2xl:container 2xl:mx-auto lg:py-16 lg:px-20 md:py-12 md:px-6 py-9 px-4">
            <div class="flex flex-col lg:flex-row justify-between gap-8">
                <div class="w-full lg:w-5/12 flex flex-col justify-center">
                    <h1 class="text-3xl lg:text-4xl font-bold leading-9 text-gray-800 dark:text-white pb-4">{{ __('about1') }}</h1>
                    <p class="font-normal text-base leading-6 text-gray-600 dark:text-white">{{ __('about2') }}</p>
                </div>
                <div class="w-full lg:w-8/12">
                    <img class="w-full h-full" src="https://i.ibb.co/FhgPJt8/Rectangle-116.png" alt="A group of People" />
                </div>
            </div>
    
            <div class="flex lg:flex-row flex-col justify-between gap-8 pt-12">
                <div class="w-full lg:w-5/12 flex flex-col justify-center">
                    <h1 class="text-3xl lg:text-4xl font-bold leading-9 text-gray-800 dark:text-white pb-4">{{ __('about3') }}</h1>
                    <p class="font-normal text-base leading-6 text-gray-600 dark:text-white">{{ __('about4') }}</p>
                </div>
                <div class="w-full lg:w-8/12 lg:pt-8">
                    <div class="grid md:grid-cols-4 sm:grid-cols-2 grid-cols-1 lg:gap-4 shadow-lg rounded-md">
                        <div class="p-4 pb-6 flex justify-center flex-col items-center">
                            <img class="md:block hidden" src="https://upload.wikimedia.org/wikipedia/commons/thumb/5/5c/Jordan_Peterson_by_Gage_Skidmore.jpg/1200px-Jordan_Peterson_by_Gage_Skidmore.jpg" alt="Alexa featured Image" />
                            <img class="md:hidden block" src="https://upload.wikimedia.org/wikipedia/commons/thumb/5/5c/Jordan_Peterson_by_Gage_Skidmore.jpg/1200px-Jordan_Peterson_by_Gage_Skidmore.jpg" alt="Alexa featured Image" />
                            <p class="font-medium text-xl leading-5 text-gray-800 dark:text-white mt-4">Adrian</p>
                        </div>
                        <div class="p-4 pb-6 flex justify-center flex-col items-center">
                            <img class="md:block hidden" src="https://i.ibb.co/fGmxhVy/Rectangle-119.png" alt="Olivia featured Image" />
                            <img class="md:hidden block" src="https://i.ibb.co/NrWKJ1M/Rectangle-119.png" alt="Olivia featured Image" />
                            <p class="font-medium text-xl leading-5 text-gray-800 dark:text-white mt-4">Wintop</p>
                        </div>
                        <div class="p-4 pb-6 flex justify-center flex-col items-center">
                            <img class="md:block hidden" src="https://i.ibb.co/Pc6XVVC/Rectangle-120.png" alt="Liam featued Image" />
                            <img class="md:hidden block" src="https://i.ibb.co/C5MMBcs/Rectangle-120.png" alt="Liam featued Image" />
                            <p class="font-medium text-xl leading-5 text-gray-800 dark:text-white mt-4">Jose</p>
                        </div>
                        <div class="p-4 pb-6 flex justify-center flex-col items-center">
                            <img class="md:block hidden" src="https://i.ibb.co/7nSJPXQ/Rectangle-121.png" alt="Elijah featured image" />
                            <img class="md:hidden block" src="https://i.ibb.co/ThZBWxH/Rectangle-121.png" alt="Elijah featured image" />
                            <p class="font-medium text-xl leading-5 text-gray-800 dark:text-white mt-4">Pau</p>
                        </div>
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