@extends('layouts.menu')
@section('content')
<div class="w-full xl:w-8/12 mb-12 xl:mb-0 px-4 mx-auto mt-24">
  <div class="relative flex flex-col min-w-0 break-words bg-white w-full mb-6 shadow-lg rounded ">
    <div class="rounded-t mb-0 px-4 py-3 border-0">
      <div class="flex flex-wrap items-center">
        <div class="relative w-full px-4 max-w-full flex-grow flex-1">
          <h3 class="font-semibold text-base text-blueGray-700">Product List</h3>
        </div>
      </div>
    </div>
        @if ($message = Session::get('success'))
            <div class="alert alert-success">
                <p>{{ $message }}</p>
            </div>
        @endif
        <!-- new -->
        <div class="block w-full overflow-x-auto">
            <div class="col-span-12">
                <div class="overflow-auto lg:overflow-visible">
                    <table class="items-center bg-transparent w-full border-collapse ">
                        <thead class="bg-gray-50 text-gray-900">
                            <tr class="focus:outline-none h-16 border border-gray-100 rounded">
                                <th class="px-6 bg-blueGray-50 text-blueGray-500 align-middle border border-solid border-blueGray-100 py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left">id</th>
                                <th class="px-6 bg-blueGray-50 text-blueGray-500 align-middle border border-solid border-blueGray-100 py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left">Nombre</th>
                                <th class="px-6 bg-blueGray-50 text-blueGray-500 align-middle border border-solid border-blueGray-100 py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left">Precio</th>
                                <th class="px-6 bg-blueGray-50 text-blueGray-500 align-middle border border-solid border-blueGray-100 py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left">Imagen</th>
                                <th class="px-6 bg-blueGray-50 text-blueGray-500 align-middle border border-solid border-blueGray-100 py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left">Action</th>
                            </tr>
                        </thead>
                        <tbody class="text-gray-700">
                            @foreach ($products as $product)
                            <tr class="bg-gray-50">
                                <td class="pl-5">
                                    {{ $product->id }}
                                </td>
                                <td class="pl-5">
                                    {{ $product->name }}
                                </td>
                                <td class="pl-5 font-bold">
                                    {{ $product->price }}€
                                </td>
                                <td class="pl-5">
                                    <img src="public/{{$product->image}}" width="100px">
                                </td>
                                <td class="pl-5">
                                    <a href="{{ route('products.edit',$product->id) }}" class="px-1">
                                        <button type="submit">
                                            <i class="fa-solid fa-pen-to-square text-emerald-400"></i>
                                        </button>
                                    </a>
                                    <form action="{{ route('products.destroy',$product->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                            
                                        <button type="submit" onclick="return confirm('Estas seguro de borrar {{$product->name}}?')" class="px-1">
                                            <i class="fa-solid fa-trash-can text-rose-400"></i>
                                          </button>
                                    </form>
                                    
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <br>
                    {!! $products->links() !!}
                    <br>
                    <div class="pull-right">
                        <a class="btn btn-primary" href="{{ url('/home') }}"> Back</a>
                        <a class="btn btn-success" href="{{ route('products.create') }}"> Create New Product</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
''
        