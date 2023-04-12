@extends('layouts.app2')

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
        @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
		<div class="text-center">
			<img src="../logo.png" alt="" class="logo">
			<p class="mt-2 text-sm text-gray-600">{{ __('Recover your password') }}</p>
		</div>
		<form class="mt-8 space-y-6" action="{{ route('password.email') }}" method="POST">
            @csrf
			<input type="hidden" name="remember" value="true">
			<div class="relative">
				<label class="text-sm font-bold text-gray-700 tracking-wide">{{ __('E-Mail Address') }}</label>
				<input class=" w-full text-base py-2 border-b border-gray-300 focus:outline-none focus:border-teal-500 @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus type="email" id="email">
                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
            </div>
			<div>
                <button type="submit" class="w-full flex justify-center bg-teal-500 text-gray-100 p-4  rounded-full tracking-wide
                font-semibold  focus:outline-none focus:shadow-outline hover:bg-teal-600 shadow-lg cursor-pointer transition ease-in duration-300">
                {{ __('Reset Password') }}
                </button>
			</div>
		</form>
	</div>
</div>
@endsection
