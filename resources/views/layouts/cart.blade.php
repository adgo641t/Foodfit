@extends('layouts.menu')
@section('style')
<script src="//unpkg.com/alpinejs" defer></script>
<link
  href="https://fonts.googleapis.com/css?family=Material+Icons|Material+Icons+Outlined|Material+Icons+Two+Tone|Material+Icons+Round|Material+Icons+Sharp"
  rel="stylesheet"
/>
@section('content')
          <main class="my-8" >
            <div class="container px-6 mx-auto">
                <div class="flex justify-center my-6">
                    <div class="flex flex-col w-full p-8 text-gray-800 bg-white shadow-lg pin-r pin-y md:w-4/5 lg:w-4/5" style="margin-top: 200px">
                      @if ($message = Session::get('success'))
                          <div class="p-4 mb-3 bg-green-400 rounded" x-data="{show: true}" x-init="setTimeout(()=> show = false, 3000)" x-show="show">
                              <p class="text-green-800">{{ $message }}</p>
                          </div>
                      @endif
                      @if ($message = Session::get('error'))
                      <div class="p-4 mb-3 bg-red-400 rounded" x-data="{show: true}" x-init="setTimeout(()=> show = false, 3000)" x-show="show">
                          <p class="text-green-800">{{ $message }}</p>
                      </div>
                  @endif
                      <a href="product" class="inline-block text-black ml-4 mb-4"
><i class="fa-solid fa-arrow-left"></i> {{ __('Back') }}
</a>
                        <h3 class="text-3xl text-bold">{{ __('Your cart') }}</h3>
                      <div class="flex-1" >
                        <table class="w-full text-sm lg:text-base" cellspacing="0">
                          <thead>
                            <tr class="h-12 uppercase">
                              <th class="hidden md:table-cell"></th>
                              <th class="text-left">{{ __('Name') }}</th>
                              <th class="pl-5 text-left lg:text-right lg:pl-0">
                                <span class="lg:hidden" title="Quantity">{{ __('QTD') }}</span>
                                <span class="hidden lg:inline">{{ __('Quantity') }}</span>
                              </th>
                              <th class="hidden text-right md:table-cell">{{ __('Price') }}</th>
                              <!--<th class="hidden text-right md:table-cell"> Remove </th>-->
                            </tr>
                          </thead>
                          <tbody>
                              @foreach ($cartItems as $item)
                            <tr>
                              <td class="hidden pb-4 md:table-cell">
                                  <img src="public/{{ $item->attributes->image }}" class="w-20 rounded" alt="Thumbnail">
                              </td>
                              <td>
                                  <p class="mb-2 md:ml-4">{{ $item->name }}</p>
                              </td>
                              <td class="justify-center mt-6 md:justify-end md:flex">
                                <div class="h-10 w-28">
                                  <div class="relative flex flex-row w-full h-8">
                                    
                                    <form action="{{ route('cart.update') }}" method="POST">
                                      @csrf
                                      <input type="hidden" name="id" value="{{ $item->id}}" >
                                      <input type="hidden" name="stock" value="{{ $item->attributes->stock}}" >
                                      <input type="number" name="quantity" value="{{ $item->quantity }}" class="w-12 text-center bg-gray-300" />
                                    <button type="submit">
                                      <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-emerald-400"
                                                fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                                            </svg>
                                    </button>
                                    </form>
                                  </div>
                                </div>
                              </td>
                              <td class="hidden text-right md:table-cell">
                                <span class="text-sm font-medium lg:text-base">
                                    {{ $item->price}}€
                                </span>
                              </td>
                              <td class="hidden text-right md:table-cell">
                                <form action="{{ route('cart.remove') }}" method="POST">
                                  @csrf
                                  <input type="hidden" value="{{ $item->id }}" name="id">
                                  <button type="submit" onclick="return confirm('Estas seguro de borrar?')">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-red-400"
                                                fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                            </svg>
                                  </button>
                              </form>
                                
                              </td>
                            </tr>
                            @endforeach
                          </tbody>
                        </table>
                        <div style="float: right; font-size:1.5rem">
                          <b>Total: {{round(Cart::getTotal()*1.21 ,2, PHP_ROUND_HALF_EVEN)}}€</b> 
                        </div>
                        <div>
                          <form action="{{ route('cart.clear') }}" method="POST">
                            @csrf
                            <button class="px-6 py-2 text-red-800 bg-red-300 rounded">{{ __('Remove all cart') }}</button>
                          </form>
                        </div>
                        <div>
                          @if (Cart::getTotal() > 0)
                        <form action="{{ url('/bill') }}" method="GET">
                            @csrf
                            <button class="px-6 py-2 text-white-800 bg-green-300 rounded">{{ __('Checkout') }}</button>
                          </form>
                          @endif
                        </div>
                        <br>
                        <div>
                        </div>
                      </div>
                    </div>
                  </div>
            </div>
        </main>
    @endsection
    