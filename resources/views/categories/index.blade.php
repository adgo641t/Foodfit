<header>
    @extends('layouts.menu')
</header>

<body>@section('content')
    <h2 class=" text-center" style="margin-top: 6rem; font-size:2rem">Lista de categories</h2>
        
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
                            <th class="p-3 text-left">Action</th>
                        </tr>
                    </thead>
                    <tbody class="text-gray-700">
                        @foreach ($categories as $categoryItem)
                        <tr class="bg-gray-50">
                            <td class="p-3">
                                {{ $categoryItem->id }}
                            </td>
                            <td class="p-3">
                                {{ $categoryItem->name }}
                            </td>
                            <td class="p-3 ">
                                <a href="{{ route('categories.edit',$categoryItem->id) }}" class="px-1">
                                    <button type="submit">
                                        <i class="fa-solid fa-pen-to-square text-emerald-400"></i>
                                    </button>
                                </a>
                                <form action="{{ route('categories.destroy',$categoryItem->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                        
                                    <button type="submit" onclick="return confirm('Estas seguro de borrar {{$categoryItem->name}}?')" class="px-1">
                                        <i class="fa-solid fa-trash-can text-rose-400"></i>
                                      </button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                <br>
                <div class="pull-right">
                    <a class="btn btn-primary" href="{{ url('/home') }}"> Atrás</a>
                    <a class="btn btn-success" href="{{ route('categories.create') }}"> Crear nueva Categoria</a>
                </div>        

            </div>
        </div>
    </div>    
@endsection
</body>