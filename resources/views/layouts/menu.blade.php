<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ __('title1') }}</title>
    <script src="https://kit.fontawesome.com/2469414de4.js" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
 integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
 crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"
 integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB"
 crossorigin="anonymous"></script>
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>

 <script src="https://cdn.ckeditor.com/4.14.1/standard/ckeditor.js"></script>
 <script  href="../js/ckeditor.js"></script>


    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
    <!-- Icon -->
    <link rel="icon" href="img/favicon.ico">
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">

    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Exo+2:wght@300&display=swap" rel="stylesheet">
 <!-- My styles -->
 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">




<link rel="stylesheet" href="../css/style.css">
<link rel="stylesheet" href="../css/faqs.css">
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
            <div class="container-fluid">
            <nav class="navbar navbar-expand-lg fixed-top navbar-light" style="background-color: #ecffeb" >
            @auth
            <a href="{{ url('/home') }}"><img src="../public/logo.png" alt="" class="logo-img"></a>
            @else
            <a href="{{ url('/') }}"><img src="../public/logo.png" alt="" class="logo-img"></a>
            @endauth
            <button onclick="menu()" class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div id="myMenu" class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    @if (Route::has('login'))
                        @auth
                        {{-- <a href="{{ url('/home') }}"><img src="../public/logo.png" alt="" class="logo-img"></a>
                        <button onclick="menu()" class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                        </button> --}}
                            <!--If user is logged-->
                            @if(@Auth::user()->hasRole('cliente'))
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('aboutUs') }}">{{ __('About us') }}</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" aria-current="page" href="{{ url('/product') }}">{{ __('Our dishes') }}</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" aria-current="page" href="{{ url('/show-bill') }}">{{ __('Bills') }}</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" aria-current="page" href="{{ route('ClientBlog') }}">{{ __('Blog') }}</a>
                            </li>
                            <div class="dropdown">
                                <button onclick="myFunction()" class="dropbtn nav-link text-sm text-gray-700 dark:text-gray-500 underline nav-link">{{ __("Choose language") }} <i class="fa fa-caret-down"></i></button>
                                <div id="myDropdown" class="dropdown-content">
                                  <a href="{{route('set_language', ['es'])}}" class="nav-link text-sm text-gray-700 dark:text-gray-500 underline nav-link"><img src="public/es.png" alt=""> {{ __("idioma1") }}</a>
                                  <a href="{{route('set_language', ['en'])}}" class="nav-link text-sm text-gray-700 dark:text-gray-500 underline nav-link"><img src="public/en.png" alt=""> {{ __("idioma2") }}</a>
                                </div>
                            </div>
                            <!--Icon cart and go to cart-->
                            <a href="{{ route('cart.list') }}" class="flex items-center text-gray-700 dark:text-gray-500">
                                <svg class="w-5 h-5" fill="none" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                                    <path
                                        d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z">
                                    </path>
                                </svg>
                                {{ Cart::getTotalQuantity() }}
                            </a>
                            <li class="nav-item">
                                <a href="{{ url('/logout') }}"class="nav-link">{{ __('Logout') }}</a>
                            </li>


                            @endif
                            @if(@Auth::user()->hasRole('admin'))
                            <li class="nav-item">
                                <a class="nav-link " aria-current="page" href="{{ route('products.index') }}">{{ __('Product management') }}</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link " aria-current="page" href="{{ route('coupons.index') }}">{{ __('Coupon management') }}</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link " aria-current="page" href="{{ route('categories.index') }}">{{ __('Category management') }}</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" aria-current="page" href="{{ url('/AdminBlog') }}">{{ __('Blog Management') }}</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" aria-current="page" href="{{ route('listBills') }}">{{ __('Invoice Management') }}</a>
                            </li>
                            <div class="dropdown">
                                <button onclick="myFunction()" class="dropbtn nav-link text-sm text-gray-700 dark:text-gray-500 underline nav-link">{{ __("Choose language") }} <i class="fa fa-caret-down"></i></button>
                                <div id="myDropdown" class="dropdown-content">
                                  <a href="{{route('set_language', ['es'])}}" class="nav-link text-sm text-gray-700 dark:text-gray-500 underline nav-link"><img src="public/es.png" alt=""> {{ __("idioma1") }}</a>
                                  <a href="{{route('set_language', ['en'])}}" class="nav-link text-sm text-gray-700 dark:text-gray-500 underline nav-link"><img src="public/en.png" alt=""> {{ __("idioma2") }}</a>
                                </div>
                            </div>
                            <li class="nav-item">
                                <a href="{{ url('/logout') }}"class="nav-link">{{ __('Logout') }}</a>
                            </li>
                            @endif
                            @if(@Auth::user()->hasRole('BlogCreator'))
                            <li class="nav-item">
                                <a class="nav-link" aria-current="page" href="{{ url('/CreatorsBlogs') }}">{{ __('Blog Management') }}</a>
                            </li>
                            <div class="dropdown">
                                <button onclick="myFunction()" class="dropbtn nav-link text-sm text-gray-700 dark:text-gray-500 underline nav-link">{{ __("Choose language") }} <i class="fa fa-caret-down"></i></button>
                                <div id="myDropdown" class="dropdown-content">
                                  <a href="{{route('set_language', ['es'])}}" class="nav-link text-sm text-gray-700 dark:text-gray-500 underline nav-link"><img src="public/es.png" alt=""> {{ __("idioma1") }}</a>
                                  <a href="{{route('set_language', ['en'])}}" class="nav-link text-sm text-gray-700 dark:text-gray-500 underline nav-link"><img src="public/en.png" alt=""> {{ __("idioma2") }}</a>
                                </div>
                            </div>
                            <li class="nav-item">
                                <a href="{{ url('/logout') }}"class="nav-link">{{ __('Logout') }}</a>
                            </li>
                            @endif
                            @if(@Auth::user()->hasRole('chef'))
                            <!--<li class="nav-item">
                                <a class="nav-link" aria-current="page" href="{{ url('/showBill') }}">{{ __('Bills') }}</a>
                            </li>-->
                            <div class="dropdown">
                                <button onclick="myFunction()" class="dropbtn nav-link text-sm text-gray-700 dark:text-gray-500 underline nav-link">{{ __("Choose language") }} <i class="fa fa-caret-down"></i></button>
                                <div id="myDropdown" class="dropdown-content">
                                  <a href="{{route('set_language', ['es'])}}" class="nav-link text-sm text-gray-700 dark:text-gray-500 underline nav-link"><img src="public/es.png" alt=""> {{ __("idioma1") }}</a>
                                  <a href="{{route('set_language', ['en'])}}" class="nav-link text-sm text-gray-700 dark:text-gray-500 underline nav-link"><img src="public/en.png" alt=""> {{ __("idioma2") }}</a>
                                </div>
                            </div>
                            <li class="nav-item">
                                <a href="{{ url('/logout') }}"class="nav-link">{{ __('Logout') }}</a>
                            </li>
                            @endif
                         <!--To logout-->
                        @else
                        {{-- <a href="{{ url('/') }}"><img src="../public/logo.png" alt="" class="logo-img"></a>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                            data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                            aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button> --}}
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('/abouts') }}">{{ __('About us') }}</a>
                        </li>
                        <div class="dropdown">
                            <button onclick="myFunction()" class="dropbtn nav-link text-sm text-gray-700 dark:text-gray-500 underline nav-link">{{ __("Choose language") }} <i class="fa fa-caret-down"></i></button>
                            <div id="myDropdown" class="dropdown-content">
                              <a href="{{route('set_language', ['es'])}}" class="nav-link text-sm text-gray-700 dark:text-gray-500 underline nav-link"><img src="public/es.png" alt=""> {{ __("idioma1") }}</a>
                              <a href="{{route('set_language', ['en'])}}" class="nav-link text-sm text-gray-700 dark:text-gray-500 underline nav-link"><img src="public/en.png" alt=""> {{ __("idioma2") }}</a>
                            </div>
                        </div>
                            <li class="nav-item">
                                <a href="{{ route('login') }}"
                                    class="nav-link">{{ __('Sign in') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <a href="{{ route('register') }}"
                                    class="nav-link ml-4 text-sm text-gray-700 dark:text-gray-500 underline">{{ __('Sign up') }}</a>
                            @endif
                        @endauth
                    @endif
                </ul>
            </div>
            </nav>
            </div>
        </header>
    </div>
    <div class="mt-5">
            @yield('content')
        </div>
        <script src="js/faqs.js"></script>
        <script src="js/navbar.js"></script>
</body>

</html>
