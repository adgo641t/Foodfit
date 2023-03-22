<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Add to cart - Foot&Fit</title>
    
    <script src="https://kit.fontawesome.com/2469414de4.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"
 integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB"
 crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"
 integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13"
 crossorigin="anonymous"></script>


    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
    <!-- Icon -->
    <link rel="icon" href="img/favicon.ico">
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">

    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Exo+2:wght@300&display=swap" rel="stylesheet">
 <!-- My styles -->
 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
 integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="css/faqs.css">
<!-- Font awesome -->

 <link rel="icon" href="img/favicon.ico">
        <!-- Google Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Exo+2:wght@300&display=swap" rel="stylesheet">  
        <!-- My css style -->
    <link rel="stylesheet" href="css/index.css">
    <!-- Font awesome icons -->
</head>

<body>
    <div class="bg-white">
        <header>
         <nav class="navbar navbar-expand-lg fixed-top navbar-light" style="background-color: #ecffeb" >
            <div class="container-fluid">
            @if(Route::has('login'))
            <a href="{{ url('/home') }}"><img src="logo.png" alt="" class="logo-img"></a>
            @endif
                <div class="navbar-collapse collapse" id="collapseExample">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        @if (Route::has('login'))
                            @auth                            
                            <li class="nav-item">
                                <a class="nav-link" href="{{ url('/abouts') }}">About</a>
                            </li>
                                <!--If user is logged-->
                                @if(@Auth::user()->hasRole('client'))
                                <li class="nav-item">
                                    <a class="nav-link" aria-current="page" href="{{ url('/product') }}">Pedir a
                                        la carta</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" aria-current="page" href="{{ url('/blog') }}">Blog</a>
                                </li>
                                                                                <!--Icon cart and go to cart-->
                                                                                <a href="{{ route('cart.list') }}" class="flex items-center">
                                                                                    <svg class="w-5 h-5" fill="none" stroke-linecap="round" stroke-linejoin="round"
                                                                                        stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                                                                                        <path
                                                                                            d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z">
                                                                                        </path>
                                                                                    </svg>
                                                                                    {{ Cart::getTotalQuantity() }}
                                                                                </a>
                                @endif
                                @if(@Auth::user()->hasRole('admin'))
                                <li class="nav-item">
                                    <a class="nav-link" aria-current="page" href="{{ route('products.index') }}">Pedir a la carta</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" aria-current="page" href="{{ route('coupons.index') }}">Seccion cupones</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" aria-current="page" href="{{ route('blog') }}">Blog</a>
                                </li>
                                @endif
                                @if(@Auth::user()->hasRole('BlogCreator'))
                                <li class="nav-item">
                                    <a class="nav-link" aria-current="page" href="{{ route('blog') }}">Seccion Blog</a>
                                </li>
                                @endif
                             <!--To logout-->
                             <li class="nav-item">
                            <a href="{{ url('/logout') }}"class="nav-link">Logout</a></li>
                            @else
                            <a href="{{ url('/') }}"><img src="logo.png" alt="" class="logo-img"></a>
                            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                                aria-expanded="false" aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                            </button>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ url('/abouts') }}">About</a>
                            </li>
                                <li class="nav-item">
                                    <a href="{{ route('login') }}"
                                        class="nav-link text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>
                                </li>
                                @if (Route::has('register'))
                                    <a href="{{ route('register') }}"
                                        class="nav-link ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
                                @endif
                            @endauth
                        @endif
                    </ul>
            </nav>
        </header>
    </div>
    <div class="p-9">
            @yield('content')
        </div>
        <script src="js/faqs.js"></script>
</body>
</html>
