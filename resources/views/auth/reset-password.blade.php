<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    
    <!-- Icon -->
    <link rel="icon" href="../public/favicon.ico">
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Exo+2:wght@300&display=swap" rel="stylesheet"> 
    
    <!-- Bootstrap & TailwindCSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>


    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ __('title8') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <style>
        body{
    font-family: 'Exo 2', sans-serif;
}
        .logo{
            width: 275px;
            padding-left: 20%;
        }
    </style>
</head>
<body>
    <div class="relative min-h-screen flex items-center justify-center bg-gray-50 py-12 px-4 sm:px-6 lg:px-8 bg-gray-500 bg-no-repeat bg-cover relative items-center"
	style="background-image: url(https://images.unsplash.com/photo-1615657711994-f0e35eb9e46d?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8MTB8fGdlbnRlJTIwY29taWVuZG98ZW58MHx8MHx8&auto=format&fit=crop&w=1950&q=80);">
	<div class="absolute bg-black opacity-60 inset-0 z-0"></div>
	<div class="max-w-md w-full space-y-8 p-10 bg-white rounded-xl z-10">
		<div class="text-center">
			<img src="../logo.png" alt="" class="logo">
			<p class="mt-2 text-sm text-gray-600">{{ __('Reset your password') }}</p>
		</div>
		<form class="mt-8 space-y-6" method="POST" action="{{ route('password.update') }}">
            @csrf

            <input type="hidden" name="token" value="{{ $request->route('token') }}">

			<div class="form-group mb-3">
				<label class="text-sm font-bold text-gray-700 tracking-wide">
					{{ __('E-Mail Address') }}
				</label>
				<input id="email" class="w-full content-center text-base py-2 border-b border-gray-400 focus:outline-none focus:border-gray-600" type="email" name="email" :value="old('email', $request->email)" required autofocus>
			</div>
			<div class="form-group mb-3">
				<label class="text-sm font-bold text-gray-700 tracking-wide">
					{{ __('Password') }}
				</label>
				<input id="password" class="w-full content-center text-base py-2 border-b border-gray-400 focus:outline-none focus:border-gray-600" type="password" name="password" required autocomplete="new-password">
			</div>
			<div class="form-group mb-3">
				<label class="text-sm font-bold text-gray-700 tracking-wide">
					{{ __('Confirm Password') }}
				</label>
				<input id="password_confirmation" class="w-full content-center text-base py-2 border-b border-gray-400 focus:outline-none focus:border-gray-600" type="password" name="password_confirmation" required autocomplete="new-password">
			</div>
			<div>
                <button type="submit" class="w-full flex justify-center bg-teal-500 text-gray-100 p-4  rounded-full tracking-wide
                font-semibold  focus:outline-none focus:shadow-outline hover:bg-teal-600 shadow-lg cursor-pointer transition ease-in duration-300">
				{{ __('Reset your password') }}
                </button>
			</div>
		</form>
	</div>
</div>

    
</body>
</html>
