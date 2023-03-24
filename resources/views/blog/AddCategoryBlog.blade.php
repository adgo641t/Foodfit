@extends('layaouts.menu')
@section('contet')
<div id="Add_category">
              <div class="modal-dialog">
                  <div class="modal-content">
                  <form action="{{ route('Add_new_category') }}" method="post">
                  @csrf
                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name">
                      Name of Category
                    </label>
                    <input value="{{old('category_name')}}" id="category_name" name="category_name" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-red-500 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" id="grid-first-name" type="text" placeholder="Creator">
                    <input name="StoreCategory" type="submit" button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 border border-blue-700 rounded">
                    @error('creator')
                        <small style="color: red;">{{$message}}</small>
                      @enderror
                    </form> 
                </div>
              </div>
            </div>
          @error('category')
            <small style="color: red;">{{$message}}</small>
          @enderror
@endsection