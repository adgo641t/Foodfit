@extends('layouts.menu')
@section('content')
<div class="container px-6 mx-auto">
    <form action="list-bill">
        <div class="relative border-2 border-gray-100 rounded-lg search">
            <div class="absolute top-4 left-3">
                <i
                    class="fa fa-search text-gray-400 z-20 hover:text-gray-500"
                ></i>
            </div>
            <input
                type="text"
                name="search"
                class="h-14 w-full pl-10 pr-20 rounded-lg z-0 focus:shadow focus:outline-none"
                placeholder="{{ __('Invoice finder...') }}"
            />
            <div class="absolute top-2 right-2">
                <button
                    type="submit"
                    class="h-10 w-20 text-white rounded-lg bg-red-500 hover:bg-red-600"
                >
                {{ __('Search') }}
                </button>
            </div>
        </div>
    </form>
</div>
@if(count($bills) == 0)
<h3 class="text-center">{{ __('Invoice not found') }}</h3>
@endif
<section class="relative py-16 bg-blueGray-50">
<div class="w-full mb-12 px-4">
  <div class="relative flex flex-col min-w-0 break-words w-full mb-6 shadow-lg rounded
  bg-gray-300">
    <div class="rounded-t mb-0 px-4 py-3 border-0">
      <div class="flex flex-wrap items-center">
        <div class="relative w-full px-4 max-w-full flex-grow flex-1 text-center">
          <h3 class="font-semibold text-lg">{{ __('Invoice list') }}</h3>
        </div>
      </div>
    </div>
    <div class="block w-full overflow-x-auto ">
      <table class="items-center w-full bg-transparent border-collapse">
        <thead>
          <tr class="text-center">
            <th class="border-t-0 px-6 align-middle border-l-0 border-r-0 whitespace-nowrap p-4 bg-gray-200">{{ __('Username') }}</th>
            <th class="border-t-0 px-6 align-middle border-l-0 border-r-0 whitespace-nowrap p-4 bg-gray-200">{{ __('Name of product') }}</th>
            <th class="border-t-0 px-6 align-middle border-l-0 border-r-0 whitespace-nowrap p-4 bg-gray-200">{{ __('Quantity') }}</th>
            <th class="border-t-0 px-6 align-middle border-l-0 border-r-0 whitespace-nowrap p-4 bg-gray-200">{{ __('Final price') }}</th>
            <th class="border-t-0 px-6 align-middle border-l-0 border-r-0 whitespace-nowrap p-4 bg-gray-200">{{ __('Coupon applied') }}</th>
            <th class="border-t-0 px-6 align-middle border-l-0 border-r-0 whitespace-nowrap p-4 bg-gray-200">{{ __('Shipping address') }}</th>
            <th class="border-t-0 px-6 align-middle border-l-0 border-r-0 whitespace-nowrap p-4 bg-gray-200">{{ __('Date') }}</th>
            <th class="border-t-0 px-6 align-middle border-l-0 border-r-0 whitespace-nowrap p-4 bg-gray-200">{{ __('Billing time') }}</th>
          </tr>
        </thead>
        <tbody>
        @foreach ($bills as $billItem)
          <tr class="text-center">
            <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 whitespace-nowrap p-4">{{$billItem->name_user}}</td>
            <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 whitespace-nowrap p-4">{{$billItem->name}}</td>
            <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 whitespace-nowrap p-4">{{$billItem->quantity}}</td>
            <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 whitespace-nowrap p-4">{{$billItem->totalprice}}€</td>
            <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 whitespace-nowrap p-4">{{$billItem->coupon}}</td>
            <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 whitespace-nowrap p-4">{{$billItem->adress}}</td>
            <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 whitespace-nowrap p-4">{{$billItem->created_at->format('d/m/y')}}</td>
            <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 whitespace-nowrap p-4">{{$billItem->created_at->format('h:i')}}</td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  </div>
</div>
{!! $bills->links() !!}
</section>
@endsection
