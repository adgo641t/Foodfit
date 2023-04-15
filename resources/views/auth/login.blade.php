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
			<img src="logo.png" alt="" class="logo">
			<p class="mt-2 text-sm text-gray-600">{{ __('Sign in with your account') }}</p>
		</div>
		<form class="mt-8 space-y-6"  method="POST">
            @csrf
			<div class="form-group mb-3">
				<label class="text-sm font-bold text-gray-700 tracking-wide">
					{{ __('E-Mail Address') }}
				</label>
				<input type="text" id="email" class="w-full content-center text-base py-2 border-b border-gray-400 focus:outline-none focus:border-gray-600" name="email" required
					autofocus value="{{old('email')}}">
				@if ($errors->has('email'))
				<span class="text-danger">{{ $errors->first('email') }}</span>
				@endif
			</div>
			<div class="form-group mb-3">
				<label class="text-sm font-bold text-gray-700 tracking-wide">
					{{ __('Password') }}
				</label>
				<input type="password" id="password" class="w-full content-center text-base py-2 border-b border-gray-400 focus:outline-none focus:border-gray-600" name="password" required>
				@if ($errors->has('password'))
				<span class="text-danger">{{ $errors->first('password') }}</span>
				@endif
			</div>
			<div class="flex items-center justify-between">
					<div class="flex items-center">
                        <input id="remember" name="remember" type="checkbox" class="h-4 w-4  border-gray-400 rounded" {{ old('remember') ? 'checked' : '' }}>
						<label for="remember" class="ml-2 block text-sm text-gray-900">
                            {{ __('Remember Me') }}
                        </label>
					</div>
                    <div class="form-group row">
                        <div class="col-md-6 offset-md-4">
                            <div class="checkbox">
                                <label>
                                    <a href="{{ url('/forget-password') }}">{{ __('Forgot Your Password?') }}</a>
                                </label>
                            </div>
                        </div>
                    </div>
			</div>
			<div>
                <button type="submit" class="w-full flex justify-center bg-teal-500 text-gray-100 p-4  rounded-full tracking-wide
                font-semibold  focus:outline-none focus:shadow-outline hover:bg-teal-600 shadow-lg cursor-pointer transition ease-in duration-300">
				{{ __('Sign in') }}
                </button>
			</div>
			<p class="flex flex-col items-center justify-center mt-10 text-center text-md text-gray-500">
				<span>{{ __('You do not have an account?') }}</span>
				<a href="{{ route('register-user') }}" class="text-teal-500 hover:text-teal-600no-underline ">{{ __('Sign up') }}</a>
			</p>
		</form>
	</div>
</div>
@endsection