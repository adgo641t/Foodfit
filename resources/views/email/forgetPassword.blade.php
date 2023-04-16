<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<h1>{{ __('Forget Password Email') }}</h1>
   
{{ __('You can reset password from bellow link:') }}
<a href="{{ route('reset.password.get', $token) }}">{{ __('Reset Password') }}</a>
</body>
</html>