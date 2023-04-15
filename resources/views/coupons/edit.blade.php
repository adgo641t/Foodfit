<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Editar cupón {{ $coupon->name }} - Food&Fit</title>
    <!-- Icon -->
    <link rel="icon" href="../public/favicon.ico">
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Exo+2:wght@200&display=swap" rel="stylesheet"> 
    <!-- Bootstrap & TailwindCSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

<style>
  body{
    font-family: 'Exo 2', sans-serif;
}
</style>

</head>
<body>     
    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops!</strong> Ha habido algunos errores en tu input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    
    <div class="flex h-screen items-center justify-center  mt-10 mb-10">
        <div class="grid bg-white rounded-lg shadow-xl w-11/12 md:w-9/12 lg:w-1/2">
          <div class="flex justify-center py-4">
            <img src="public/favicon.ico" alt="" class="logo-img">
          </div>
      
          <div class="flex justify-center">
            <div class="flex">
              <h1 class="text-gray-500 font-bold md:text-2xl text-xl">Editar Cupón</h1>
            </div>
          </div>
      
          <form action="{{ route('coupons.update',$coupon->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
    
              <div class="grid grid-cols-1 md:grid-cols-2 gap-5 md:gap-8 mt-5 mx-7">
                <div class="grid grid-cols-1">
                    <label class="uppercase md:text-sm text-xs text-gray-500 font-semibold">Nombre</label>
                    <input class="py-2 px-3 rounded-lg border-2 border-teal-200 mt-1 focus:outline-none focus:ring-2 focus:ring-teal-500 focus:border-transparent" value="{{ $coupon->code }}" type="text" name="code" placeholder="Name" />
                  </div>
                  <div class="grid grid-cols-1">
                    <label class="uppercase md:text-sm text-xs text-gray-500 font-semibold">Descuento</label>
                    <input class="py-2 px-3 rounded-lg border-2 border-teal-200 mt-1 focus:outline-none focus:ring-2 focus:ring-teal-500 focus:border-transparent" value="{{ $coupon->amount }}" type="text" name="amount" placeholder="Amount" />
                  </div>
                  <div class="grid grid-cols-1">
                    <label class="uppercase md:text-sm text-xs text-gray-500 font-semibold">Estado del Cupón</label>
                    <select class="form-select" name="habilitado">
                          <option value="habilitado">habilitado</option>
                          <option value="Desabilitado">Desabilitado</option>

                    </select>
                  </div>
              </div>

              <div class="grid grid-cols-1 mt-5 mx-7">
                <label class="uppercase md:text-sm text-xs text-gray-500 font-semibold">Descripción</label>
                <input class="py-2 px-3 rounded-lg border-2 border-teal-200 mt-1 focus:outline-none focus:ring-2 focus:ring-teal-500 focus:border-transparent" value="{{ $coupon->description }}" type="text" name="description" placeholder="Description" />
              </div>
            
             <div class='flex items-center justify-center  md:gap-8 gap-4 pt-5 pb-5'>
                <button class='w-auto bg-teal-500 hover:bg-teal-700 rounded-lg shadow-xl font-medium text-white px-4 py-2'>Editar</button>
              </div>

              <div class='flex items-center justify-center  md:gap-8 gap-4 pt-2 pb-2'>
                <a class="btn btn-primary" href="{{ route('coupons.index') }}"> Back</a>
              </div>             
        </form>
      
        </div>
      </div>
</body>
</html>