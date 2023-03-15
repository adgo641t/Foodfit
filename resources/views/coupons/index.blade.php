<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Listado de cupones - Food&Fit</title>
    <!-- Icon -->
    <link rel="icon" href="public/favicon.ico">
    <!-- Style -->
    <link rel="stylesheet" href="css/tables.css">
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

    <!-- Font awesome icons -->
    <script src="https://kit.fontawesome.com/2469414de4.js" crossorigin="anonymous"></script>

    <style>
        body{
    font-family: 'Exo 2', sans-serif;
}
</style>
</head>
<body>
    <h2 class="text-center" style="margin-top: 3rem; font-size:2rem">Lista de cupones</h2>
        
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

    <!-- new -->
    <div class="flex items-center justify-center min-h-screen">
        <div class="col-span-12">
            <div class="overflow-auto lg:overflow-visible">
                <table class="table text-gray-400 border-separate text-sm text-center mb-5">
                    <thead class="bg-gray-50 text-gray-900">
                        <tr>
                            <th class="p-3">id</th>
                            <th class="p-3 text-left">Nombre</th>
                            <th class="p-3 text-left">Descuento</th>
                            <th class="p-3 text-left">Descripción</th>
                            <th class="p-3 text-left">Action</th>
                        </tr>
                    </thead>
                    <tbody class="text-gray-700">
                        @foreach ($coupons as $coupon)
                        <tr class="bg-gray-50">
                            <td class="p-3">
                                {{ $coupon->id }}
                            </td>
                            <td class="p-3">
                                {{ $coupon->code }}
                            </td>
                            <td class="p-3 font-bold">
                                {{ $coupon->amount }}€
                            </td>
                            <td class="p-3">
                                {{$coupon->description}}
                            </td>
                            <td class="p-3 ">
                                <a href="{{ route('coupons.show',$coupon->id) }}" class="px-1">
                                    <button type="submit">
                                        <i class="fa-solid fa-eye text-indigo-400"></i>
                                      </button>
                                </a>
                                <a href="{{ route('coupons.edit',$coupon->id) }}" class="px-1">
                                    <button type="submit">
                                        <i class="fa-solid fa-pen-to-square text-emerald-400"></i>
                                    </button>
                                </a>
                                <form action="{{ route('coupons.destroy',$coupon->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                        
                                    <button type="submit" onclick="return confirm('Estas seguro de borrar {{$coupon->code}}?')" class="px-1">
                                        <i class="fa-solid fa-trash-can text-rose-400"></i>
                                      </button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                {!! $coupons->links() !!}
                <br>
                <div class="pull-right">
                    <a class="btn btn-primary" href="{{ url('/admin') }}"> Atrás</a>
                    <a class="btn btn-success" href="{{ route('coupons.create') }}"> Crear nuevo cupón</a>
                </div>        

            </div>
        </div>
    </div>    
</body>
</html>