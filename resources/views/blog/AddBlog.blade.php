@extends('layouts.menu')
@section('content')
<br>
<br>
<br>
<br>
<div class="container">
    <form action="{{ route('blog.store') }}" method="post" enctype="multipart/form-data">
   
    @csrf

    <div class="flex flex-wrap -mx-3 mb-6">
    <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
      <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name">
        Title of Blog
      </label>
      <input value="{{old('title')}}" name="title" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-red-500 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" id="grid-first-name" type="text" placeholder="Jane">
      @error('title')
          <small style="color: red;">{{$message}}</small>
        @enderror
    </div>
  </div>
  <div class="flex flex-wrap -mx-3 mb-6">
    <div class="w-full px-3">
      <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-password">
        Description of Blog
      </label>
      <textarea  name="description" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-password" type="text-area" placeholder="Description of the new blog here.....">{{old('description')}}</textarea>
        @error('description')
            <small style="color: red;">{{$message}}</small>
          @enderror
    </div>
  </div>
  <div class="flex flex-wrap -mx-3 mb-2">
    <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
      <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-state">
        Category Blog 
      </label>
      <div class="relative">
        <select name="category_id" id="category_id" class="block appearance-none w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-state">
        @foreach($category_blog as $id)
            <option value="{{$id->id}}">{{$id->name}}</option>
        @endforeach
        </select>
        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-state">
          Category Blog 2
        </label>
        <select name="category_id_2" id="category_id_2" class="block appearance-none w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-state">
        @foreach($category_blog as $id)
            <option value="{{$id->id}}">{{$id->name}}</option>
        @endforeach
        </select>
        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-state">
           Category Blog 3
        </label>
        <select name="category_id_3" id="category_id_3" class="block appearance-none w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-state">
        @foreach($category_blog as $id)
            <option value="{{$id->id}}">{{$id->name}}</option>
        @endforeach
        </select>
        @if ($errors->has('category_id_3'))
            <div class="alert alert-danger">
                {{ $errors->first('category_id_3') }}
            </div>
        @endif
          <br>
          <a href="{{ route('ShowAddCategory') }}" type="button" name="add" id="dynamic-ar" class="btn btn-outline-primary">Add Category</a>  
        <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
          <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
        </div>
      </div>
    </div>
  </div>
      <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" for="file_input">Upload file</label>
      <input value="{{old('file')}}" class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" id="file" type="file" name="file">
         @error('file')
            <small style="color: red;">{{$message}}</small>
          @enderror
      <br> 
    <input name="store" type="submit" button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 border border-blue-700 rounded">
</form>
</div>
@endsection
