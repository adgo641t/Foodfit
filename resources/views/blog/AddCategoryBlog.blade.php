@extends('layouts.menu')
@section('content')
<br>
<br>
<br>
<br>
<div class="container">
    <form action="{{ route('StoreCategory') }}" method="post" enctype="multipart/form-data">
    @csrf
    <div class="flex flex-wrap -mx-3 mb-6">
    <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
      <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name">
        {{ __('Name of category') }}
      </label>
      <input value="{{old('category')}}" name="category" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-red-500 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" id="grid-first-name" type="text" placeholder="Salud">
      @error('category')
          <small style="color: red;">{{$message}}</small>
        @enderror
    </div>
  </div>
    <input type="submit" button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 border border-blue-700 rounded">
</form>
</div>
@endsection
