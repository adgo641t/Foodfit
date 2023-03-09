<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>500 - Food&Fit</title>
    {{-- <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet"> --}}
    <!-- Icon -->
    <link rel="icon" href="../public/favicon.ico">
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Exo+2:wght@300&display=swap" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        body{
    font-family: 'Exo 2', sans-serif;
  }
    </style>
</head>
<body>
    <!-- This is an example component -->
    <div class="h-screen w-screen bg-gray-50 flex items-center">
        <div class="container flex flex-col md:flex-row items-center justify-between px-5 text-gray-700">
                <div class="w-full lg:w-1/2 mx-8">
                    <div class="text-7xl text-teal-500 font-dark font-extrabold mb-8"> 500</div>
                <p class="text-2xl md:text-3xl font-light leading-normal mb-8">
                    Disculpe las molestias. Estamos realizando algunas tareas de mantenimiento en este momento. 
                </p>
                
        </div>
            <div class="w-full lg:flex lg:justify-end lg:w-1/2 mx-5 my-12">
            <img src="https://user-images.githubusercontent.com/43953425/166269493-acd08ccb-4df3-4474-95c7-ad1034d3c070.svg" class="" alt="Page not found">
            </div>
        
        </div>
    </div>
</body>
</html>