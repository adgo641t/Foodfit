@extends('layouts.menu')
@section('content')
    <h1 class="text-center" style="margin-top: 3rem; font-size:2rem">Lista de Productos</h1>
        @if ($message = Session::get('success'))
            <div class="alert alert-success">
                <p>{{ $message }}</p>
            </div>
        @endif
        <!-- new -->
        <div class="flex items-center justify-center min-h-screen mt-5">
            <div class="col-span-12">
                <div class="overflow-auto lg:overflow-visible">
                    <table class="table text-gray-400 border-separate text-sm text-center">
                        <thead class="bg-gray-50 text-gray-900">
                            <tr>
                                <th class="p-3">id</th>
                                <th class="p-3 text-left">Nombre</th>
                                <th class="p-3 text-left">Precio</th>
                                <th class="p-3 text-left">Imagen</th>
                                <th class="p-3 text-left">Action</th>
                            </tr>
                        </thead>
                        <tbody class="text-gray-700">
                            @foreach ($products as $product)
                            <tr class="bg-gray-50">
                                <td class="p-3">
                                    {{ $product->id }}
                                </td>
                                <td class="p-3">
                                    {{ $product->name }}
                                </td>
                                <td class="p-3 font-bold">
                                    {{ $product->price }}€
                                </td>
                                <td class="p-3">
                                    <img src="public/{{$product->image}}" width="100px">
                                </td>
                                <td class="p-3 ">
                                    <a href="{{ route('products.edit',$product->id) }}" class="px-1">
                                        <button type="submit">
                                            <i class="fa-solid fa-pen-to-square text-emerald-400"></i>
                                        </button>
                                    </a>
                                    @hasrole('admin')
                                        @if(@Auth::user()->hasPermissionTo('DeleteProductos'))
                                    <!--Delete-->
                                    <form action="{{ route('products.destroy',$product->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                            
                                        <button type="submit" onclick="return confirm('Estas seguro de borrar {{$product->name}}?')" class="px-1">
                                            <i class="fa-solid fa-trash-can text-rose-400"></i>
                                          </button>
                                    </form>
                                        @endif
                                    @endrole
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    {!! $products->links() !!}
                    <br>
                    <div class="pull-right">
                        <a class="btn btn-primary" href="{{ url('/home') }}"> Back</a>
                        <a class="btn btn-success" href="{{ route('products.create') }}"> Create New Product</a>
                    </div>
                </div>
            </div>
        </div>
@endsection

        