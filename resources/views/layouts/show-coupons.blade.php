@extends('layouts.menu')
@section('content')
<section class="relative py-16 bg-blueGray-50">
<div class="w-full mb-12 px-4">
  <div class="relative flex flex-col min-w-0 break-words w-full mb-6 shadow-lg rounded 
  bg-gray-300">
    <div class="rounded-t mb-0 px-4 py-3 border-0">
      <div class="flex flex-wrap items-center">
        <div class="relative w-full px-4 max-w-full flex-grow flex-1 text-center">
          <h3 class="font-semibold text-lg">Lista de Cupones</h3>
        </div>
      </div>
    </div>
    <div class="block w-full overflow-x-auto ">
      <table class="items-center w-full bg-transparent border-collapse">
        <thead>
          <tr class="text-center">
            <th class="border-t-0 px-6 align-middle border-l-0 border-r-0 whitespace-nowrap p-4 bg-gray-200">Codigo de cupon</th>
            <th class="border-t-0 px-6 align-middle border-l-0 border-r-0 whitespace-nowrap p-4 bg-gray-200">Descripción</th>
            <th class="border-t-0 px-6 align-middle border-l-0 border-r-0 whitespace-nowrap p-4 bg-gray-200">Habilitado</th>
            <th class="border-t-0 px-6 align-middle border-l-0 border-r-0 whitespace-nowrap p-4 bg-gray-200">Preció</th>
          </tr>
        </thead>

        <tbody>
          @foreach ($coupon as $item)
          <tr class="text-center">
            <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 whitespace-nowrap p-4">{{$item->code}}</td>
            <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 whitespace-nowrap p-4">{{$item->description}}</td>
            <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 whitespace-nowrap p-4">{{$item->habilitado}}</td>
            <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 whitespace-nowrap p-4">{{$item->amount}}€</td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  </div>
</div>
</section>
@endsection