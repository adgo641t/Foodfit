@extends('layouts.menu')
@section('content')
    <div class="container px-6 mx-auto">
        <form action="product">
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
                  placeholder="{{ __('Search for a product...') }}"
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
      @if (count($products) == 0)
          <h3 class="text-center">{{ __('Product not found') }}</h3>
      @endif
      <div class="row">
        <div class="col-md-4 px-4">
          <form action="product">
            <select name="category" class="form-select form-select-sm" aria-label="Default select example">
              <option value="">---</option>
              <option value="Desayuno">{{ __('Breakfast') }}</option>
                <option value="100% saludable">{{ __('100% healthy') }}</option>
                <option value="Vegetariano">{{ __('Vegetarian') }}</option>
                <option value="Nuevo">{{ __('New') }}</option>
                <option value="Favoritos">{{ __('Favorites') }}</option>
            </select>
            <button type="submit" class="px-4 py-2 text-white bg-blue-800 rounded mt-2">{{ __('Choose category') }}</button>
          </form>
        </div>
      </div>

        <div class="grid grid-cols-1 gap-6 mt-6 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 ">
            @foreach ($products as $product)
            <div class="w-full max-w-sm mx-auto overflow-hidden rounded-md shadow-md">
                <img src="public/{{$product->image}}" alt="" class="lg:h-72 md:h-48 w-full object-cover">
                <div class="flex items-end justify-end w-full bg-cover">
                    
                </div>
                <div class="px-5 py-3">
                    <p class="text-gray-700" style="font-size: 1.2rem">{{ $product->name }}</p>
                    <span class="mt-2 text-gray-500">{{ $product->price }}€</span>
                    <form action="{{ route('cart.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf  
                        <input type="hidden" value="{{ $product->id }}" name="id">
                        <input type="hidden" value="{{ $product->name }}" name="name">
                        <input type="hidden" value="{{ $product->price }}" name="price">
                        <input type="hidden" value="{{ $product->image }}"  name="image">
                        <input type="hidden" value="{{ $product->stock }}" name="stock">
                        <input type="hidden" value="1" name="quantity">
                        @if ($product->categories == 'Desayuno')
                        <p style="color: darkgoldenrod" value="🥓 {{$product->categories}}" name="categories">🥓 {{$product->categories}}</p>
                        @elseif ($product->categories == 'Favoritos')
                        <p style="color:darkorange" value="{{$product->categories}}" name="categories">{{$product->categories}}</p>
                        @elseif ($product->categories == 'Vegetariano')
                        <p style="color:rgb(7, 186, 7)" value="{{$product->categories}}" name="categories">🥬 {{$product->categories}}</p>
                        @elseif ($product->categories == 'Nuevo')
                        <p style="color:rgb(208, 188, 6)" value="{{$product->categories}}" name="categories">🌟 {{$product->categories}}</p>
                        @elseif ($product->categories == '100% saludable')
                        <p style="color:rgb(66, 69, 224)" value="{{$product->categories}}" name="categories">🥗 {{$product->categories}}</p>
                        @else
                        <p value="{{$product->categories}}" name="categories">{{$product->categories}}</p>
                        @endif
                        <button class="px-4 py-2 text-white bg-blue-800 rounded">{{ __('Add to cart') }}</button>
                    </form>
                </div>
                
            </div>
            @endforeach
            <div class="mt-6 p-4">
              {{$products->links()}}
          </div>
        </div>
    </div>
    <footer class="bg-gray-900">
		<div class="container max-w-6xl mx-auto flex items-center px-2 py-8">

			<div class="w-full mx-auto flex flex-wrap items-center">
				<div class="flex w-full md:w-1/2 justify-center md:justify-start text-white font-extrabold">
					<a class="text-gray-900 no-underline hover:text-gray-900 hover:no-underline" href="/">
					    <span class="text-base text-gray-200">Food&Fit</span>
					</a>
				</div>
				<div class="flex w-full pt-2 content-center justify-between md:w-1/2 md:justify-end">
					<ul class="list-reset flex justify-center flex-1 md:flex-none items-center">
					  <li>
						<a class="inline-block text-gray-600 no-underline hover:text-gray-200 hover:underline py-2 px-3" href="{{route('faq')}}">{{ __('FAQs') }}</a>
					  </li>
					  <li>
						<a class="inline-block text-gray-600 no-underline hover:text-gray-200 hover:underline py-2 px-3" href="https://www.facebook.com/people/Comidas-Nutritivas-Y-Saludables/100066570821806/">Facebook</a>
					  </li>
					</ul>
				</div>
			</div>



		</div>
	</footer>
@endsection

<button type="button" class="btn btn-danger btn-floating btn-lg" id="btn-back-to-top">
<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-up-circle" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M1 8a7 7 0 1 0 14 0A7 7 0 0 0 1 8zm15 0A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-7.5 3.5a.5.5 0 0 1-1 0V5.707L5.354 7.854a.5.5 0 1 1-.708-.708l3-3a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1-.708.708L8.5 5.707V11.5z"/>
</svg>
</button>

