@extends('layouts.app')

@section('style')
    <style>
        .logo{
            width: 275px;
            padding-left: 20%;
        }
    </style>

@section('content')
<div class="relative min-h-screen flex items-center justify-center bg-gray-50 py-12 px-4 sm:px-6 lg:px-8 bg-gray-500 bg-no-repeat bg-cover relative items-center"
	style="background-image: url(https://images.unsplash.com/photo-1615657711994-f0e35eb9e46d?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8MTB8fGdlbnRlJTIwY29taWVuZG98ZW58MHx8MHx8&auto=format&fit=crop&w=1950&q=80);">
	<div class="absolute bg-black opacity-60 inset-0 z-0"></div>
	<div class="max-w-md w-full space-y-8 p-10 bg-white rounded-xl z-10">
		<div class="text-center">
			<img src="../public/logo.png" alt="" class="logo">
			<p class="mt-2 text-sm text-gray-600">Registrase y disfrute del bien comer</p>
		</div>
		<form class="mt-8 space-y-6" action="{{ route('register.custom') }}" method="POST">
            @csrf
            <div class="form-group mb-3">
                <input type="text" placeholder="Name" id="name" class="form-control" name="name"
                required autofocus>
                @if ($errors->has('name'))
                <span class="text-danger">{{ $errors->first('name') }}</span>
                @endif
                </div>
                <div class="form-group mb-3">
                    <input type="text" placeholder="Email" id="email_address" class="form-control"
                    name="email" required autofocus>
                    @if ($errors->has('email'))
                    <span class="text-danger">{{ $errors->first('email') }}</span>
                    @endif
                    </div>
                    <div class="form-group mb-3">
                        <input type="password" placeholder="Password" id="password" class="form-control"
                        name="password" required>
                        @if ($errors->has('password'))
                        <span class="text-danger">{{ $errors->first('password') }}</span>
                        @endif
                        </div>
            <div class="mt-8 content-center">
				<label class="text-sm font-bold text-gray-700 tracking-wide">
					{{ __('Confirm Password') }}
				</label>
				<input class="w-full content-center text-base py-2 border-b border-gray-300 focus:outline-none focus:border-teal-500" name="password_confirmation" required autocomplete="new-password" id="password-confirm" type="password">
                
            </div>
			<div>
                <button type="submit" class="w-full flex justify-center bg-teal-500 text-gray-100 p-4  rounded-full tracking-wide
                font-semibold  focus:outline-none focus:shadow-outline hover:bg-teal-600 shadow-lg cursor-pointer transition ease-in duration-300">
                   Registro
                </button>
			</div>
			<p class="flex flex-col items-center justify-center mt-10 text-center text-md text-gray-500">
				<span>¿Ya tienes cuenta?</span>
				<a href="{{ route('login') }}" class="text-teal-500 hover:text-teal-500no-underline hover:underline cursor-pointer transition ease-in duration-300">Accede</a>
			</p>
		</form>
	</div>
</div>
@endsection


{{-- @extends('app')
@section('content')
<main class="signup-form">
<div class="cotainer">
<div class="row justify-content-center">
<div class="col-md-4">
<div class="card">
<h3 class="card-header text-center">Register User</h3>
<div class="card-body">
<form action="{{ route('register.custom') }}" method="POST">
@csrf
<div class="form-group mb-3">
<input type="text" placeholder="Name" id="name" class="form-control" name="name"
required autofocus>
@if ($errors->has('name'))
<span class="text-danger">{{ $errors->first('name') }}</span>
@endif
</div>
<div class="form-group mb-3">
<input type="text" placeholder="Email" id="email_address" class="form-control"
name="email" required autofocus>
@if ($errors->has('email'))
<span class="text-danger">{{ $errors->first('email') }}</span>
@endif
</div>
<div class="form-group mb-3">
<input type="password" placeholder="Password" id="password" class="form-control"
name="password" required>
@if ($errors->has('password'))
<span class="text-danger">{{ $errors->first('password') }}</span>
@endif
</div>
<div class="form-group mb-3">
<div class="checkbox">
<label><input type="checkbox" name="remember"> Remember Me</label>
</div>
</div>
<div class="d-grid mx-auto">
<button type="submit" class="btn btn-dark btn-block">Sign up</button>
</div>
</form>
</div>
</div>
</div>
</div>
</div>
</main>
@endsection --}}
