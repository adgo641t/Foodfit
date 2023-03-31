@extends('layouts.menu')
@section('content')
<section class="relative py-16 bg-blueGray-50">
<div class="w-full mb-12 px-4">
  <div class="relative flex flex-col min-w-0 break-words w-full mb-6 shadow-lg rounded 
  bg-gray-300">
    <div class="rounded-t mb-0 px-4 py-3 border-0">
      <div class="flex flex-wrap items-center">
        <div class="relative w-full px-4 max-w-full flex-grow flex-1 text-center">
          <h3 class="font-semibold text-lg">Lista de facturas</h3>
        </div>
      </div>
    </div>
    <div class="block w-full overflow-x-auto ">
      <table class="items-center w-full bg-transparent border-collapse">
        <thead>
          <tr class="text-center">
            <th class="border-t-0 px-6 align-middle border-l-0 border-r-0 whitespace-nowrap p-4 bg-gray-200">Nombre de producto</th>
            <th class="border-t-0 px-6 align-middle border-l-0 border-r-0 whitespace-nowrap p-4 bg-gray-200">Cantidad</th>
            <th class="border-t-0 px-6 align-middle border-l-0 border-r-0 whitespace-nowrap p-4 bg-gray-200">Precio final</th>
            <th class="border-t-0 px-6 align-middle border-l-0 border-r-0 whitespace-nowrap p-4 bg-gray-200">Fecha</th>
            <th class="border-t-0 px-6 align-middle border-l-0 border-r-0 whitespace-nowrap p-4 bg-gray-200">Id factura</th>
          </tr>
        </thead>

        <tbody>
          @foreach ($bill as $billItem)
          <tr class="text-center">
            <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 whitespace-nowrap p-4">{{$billItem->name}}</td>
            <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 whitespace-nowrap p-4">{{$billItem->quantity}}</td>
            <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 whitespace-nowrap p-4">{{round($billItem->totalprice*1.21,2,PHP_ROUND_HALF_EVEN)}}€</td>
            <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 whitespace-nowrap p-4">{{$billItem->created_at->format('d/m/y')}}</td>
            <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 whitespace-nowrap p-4">{{$billItem->created_at->format('h:i')}}</td>
          </tr>
          @endforeach
          <!--<tr class="text-center">
            <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 whitespace-nowrap p-4">Gazi Rahad</td>
            <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 whitespace-nowrap p-4">gazi.rahad871@gmail.com</td>
            <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 whitespace-nowrap p-4">01648349009</td>
            <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 whitespace-nowrap p-4">admin</td>
            <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 whitespace-nowrap p-4">
              <span class="bg-gray-400 text-gray-50 rounded-md px-2">ACTIVE</span>
            </td>
          </tr>-->
        </tbody>
      </table>
      <!--@if (Cart::getTotal() > 0)
        <a href="{{ url('/bill-pdf') }}" style="display:inline-block;background:#DDC44B;color:#fdfdfd;font-family:Helvetica;font-size:14px;font-weight:bold;line-height:120%;margin:0;text-decoration:none;text-transform:none;padding:10px 25px;mso-padding-alt:0px;border-radius:10px; text-center" target="_blank">Descargar PDF</a>
      @endif-->
      <a href="{{ url('/bill-pdf') }}" style="display:inline-block;background:#DDC44B;color:#fdfdfd;font-family:Helvetica;font-size:14px;font-weight:bold;line-height:120%;margin:0;text-decoration:none;text-transform:none;padding:10px 25px;mso-padding-alt:0px;border-radius:10px; text-center" target="_blank">Descargar PDF</a>
    </div>
  </div>
</div>
</section>
@endsection