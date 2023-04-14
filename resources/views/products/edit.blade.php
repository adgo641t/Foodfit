<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ __('Edit product') }} - Food&Fit</title>
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
        <div class="p-4 mb-3 bg-red-400 rounded" x-data="{show: true}" x-init="setTimeout(()=> show = false, 3000)" x-show="show">
            <strong>{{ __('Whoops!') }}</strong> {{ __('There have been some errors in your input.') }}<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    @if ($message = Session::get('error'))
    <div class="p-4 mb-3 bg-red-400 rounded" x-data="{show: true}" x-init="setTimeout(()=> show = false, 3000)" x-show="show">
        <p class="text-green-800">{{ $message }}</p>
    </div>
@endif

    <div class="flex h-screen items-center justify-center  mt-32 mb-32">
        <div class="grid bg-white rounded-lg shadow-xl w-11/12 md:w-9/12 lg:w-1/2">
          <div class="flex justify-center py-4">
            <img src="public/favicon.ico" alt="" class="logo-img">
          </div>

          <div class="flex justify-center">
            <div class="flex">
              <h1 class="text-gray-500 font-bold md:text-2xl text-xl">{{ __('Edit product') }}</h1>
            </div>
          </div>

          <form action="{{ route('products.update',$product->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')

              <div class="grid grid-cols-1 md:grid-cols-2 gap-5 md:gap-8 mt-5 mx-7">
                <div class="grid grid-cols-1">
                  <label class="uppercase md:text-sm text-xs text-gray-500 font-semibold">{{ __('Name') }}</label>
                  <input class="py-2 px-3 rounded-lg border-2 border-teal-200 mt-1 focus:outline-none focus:ring-2 focus:ring-teal-500 focus:border-transparent" value="{{ $product->name }}" type="text" name="name"/>
                </div>
                <div class="grid grid-cols-1">
                  <label class="uppercase md:text-sm text-xs text-gray-500 font-semibold">{{ __('Price') }}</label>
                  <input class="py-2 px-3 rounded-lg border-2 border-teal-200 mt-1 focus:outline-none focus:ring-2 focus:ring-teal-500 focus:border-transparent" value="{{ $product->price }}" type="text" name="price"/>
                </div>
                <div class="grid grid-cols-1">
                  <label class="uppercase md:text-sm text-xs text-gray-500 font-semibold">{{ __('Category') }}</label>
                  <select class="form-select" name="categories">
                    @foreach ($categories as $item)
                        <option value="{{$item->name}}">{{$item->name}}</option>
                    @endforeach
                  </select>
                </div>
              </div>

              <div class="grid grid-cols-1 mt-5 mx-7">
                <label class="uppercase md:text-sm text-xs text-gray-500 font-semibold">{{ __('Description') }}</label>
                <input class="py-2 px-3 rounded-lg border-2 border-teal-200 mt-1 focus:outline-none focus:ring-2 focus:ring-teal-500 focus:border-transparent" value="{{ $product->description }}" type="text" name="description"/>
              </div>

              <div class="grid grid-cols-1 mt-5 mx-7">
                <label class="uppercase md:text-sm text-xs text-gray-500 font-semibold">{{ __('Quantity') }}</label>
                <input class="py-2 px-3 rounded-lg border-2 border-teal-200 mt-1 focus:outline-none focus:ring-2 focus:ring-teal-500 focus:border-transparent" value="{{ $product->stock }}" type="text" name="quantity" placeholder="quantity" />
              </div>

              <div class="grid grid-cols-1 mt-5 mx-7">
                <label class="uppercase md:text-sm text-xs text-gray-500 font-semibold mb-1">{{ __('Image') }}</label>
                  <div class='flex items-center justify-center w-full'>
                      <label class='flex flex-col border-4 border-dashed w-full h-32 hover:bg-gray-100 hover:border-teal-200 group'>
                          <div class='flex flex-col items-center justify-center pt-7'>
                            <svg class="w-10 h-10 text-teal-200 group-hover:text-teal-500" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>
                            <p class='lowercase text-sm text-gray-200 group-hover:text-teal-500 pt-1 tracking-wider'>{{ __('Select a photo') }}</p>
                          </div>
                          <input type="file" name="image" class="hidden" placeholder="image" />
                          <img src="public/{{$product->image}}" width="100px" class="mt-5">
                        </label>
                  </div>
              </div>

             <div class='flex items-center justify-center  md:gap-8 gap-4 pt-5 pb-5'>
                <button class='w-auto bg-teal-500 hover:bg-teal-700 rounded-lg shadow-xl font-medium text-white px-4 py-2'>{{ __('Edit') }}</button>
              </div>
              <div class='flex items-center justify-center  md:gap-8 gap-4 pt-2 pb-5'>
                <a class="btn btn-primary" href="{{ route('products.index') }}"> {{ __('Back') }}</a>
            </div>

        </form>

        </div>
      </div>
</body>
</html>
