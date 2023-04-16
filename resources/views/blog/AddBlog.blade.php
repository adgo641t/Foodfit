@extends('layouts.menu')
@section('content')
<br>
<br>
<br>
<br>
<div class="container">
@if(@Auth::user()->hasRole('admin'))
    <form action="{{ route('blogAdmin.store') }}" method="post" enctype="multipart/form-data">
    @csrf
    <div class="flex flex-wrap -mx-3 mb-6">
    <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
      <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name">
        {{ __('Title of post') }}
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
         {{ __('Description of post') }}
      </label>
      <textarea class="ckeditor form-control appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" name="description"></textarea>
        @error('description')
            <small style="color: red;">{{$message}}</small>
          @enderror
    </div>
  </div>
  <div class="flex flex-wrap -mx-3 mb-2">
    <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
      <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-state">
        {{ __('Category post') }}
      </label>
      <div class="relative">
        <select name="category_id" id="category_id" class="block appearance-none w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-state">
        @foreach($category_blog as $id)
            <option value="{{$id->id}}">{{$id->name}}</option>
        @endforeach
        </select>
        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-state">
          {{ __('Category post 2') }}
        </label>
        <select name="category_id_2" id="category_id_2" class="block appearance-none w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-state">
        @foreach($category_blog as $id)
            <option value="{{$id->id}}">{{$id->name}}</option>
        @endforeach
        </select>
        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-state">
           {{ __('Category post 3') }}
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
          <a href="{{ route('ShowAddCategory') }}" type="button" name="add" id="dynamic-ar" class="btn btn-outline-primary">{{ __('Add category') }}</a>
        <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
          <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
        </div>
      </div>
    </div>
  </div>
      <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" for="file_input">{{ __('Upload file') }}</label>
      <input value="{{old('file')}}" class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" id="file" type="file" name="file">
         @error('file')
            <small style="color: red;">{{$message}}</small>
          @enderror
      <br>
    <input name="store" type="submit" button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 border border-blue-700 rounded">
</form>
@elseif(@Auth::user()->hasRole('BlogCreator'))
<form action="{{ route('blogCreator.store') }}" method="post" enctype="multipart/form-data">
    @csrf
    <div class="flex flex-wrap -mx-3 mb-6">
    <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
      <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name">
        {{ __('Title of post') }}
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
        {{ __('Description of post') }}
      </label>
      <textarea  name="description" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-password" type="text-area" placeholder="{{ __('Description of the new post here....') }}">{{old('description')}}</textarea>
        @error('description')
            <small style="color: red;">{{$message}}</small>
          @enderror
    </div>
  </div>
  <div class="flex flex-wrap -mx-3 mb-2">
    <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
      <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-state">
        {{ __('Category post') }}
      </label>
      <div class="relative">
        <select name="category_id" id="category_id" class="block appearance-none w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-state">
        @foreach($category_blog as $id)
            <option value="{{$id->id}}">{{$id->name}}</option>
        @endforeach
        </select>
        @error('category_id')
        <br>
            <small style="color: red;">{{$message}}</small>
        @enderror
        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-state">
            {{ __('Category post 2') }}
        </label>
        <select name="category_id_2" id="category_id_2" class="block appearance-none w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-state">
        @foreach($category_blog as $id)
            <option value="{{$id->id}}">{{$id->name}}</option>
        @endforeach
        </select>
        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-state">
            {{ __('Category post 3') }}
        </label>
        <select name="category_id_3" id="category_id_3" class="block appearance-none w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-state">
        @foreach($category_blog as $id)
            <option value="{{$id->id}}">{{$id->name}}</option>
        @endforeach
        </select>
          <br>
          <a href="{{ route('ShowAddCategory') }}" type="button" name="add" id="dynamic-ar" class="btn btn-outline-primary">{{ __('Add category') }}</a>
        <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
          <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
        </div>
      </div>
    </div>
  </div>
      <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" for="file_input">{{ __('Upload file') }}</label>
      <input value="{{old('file')}}" class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" id="file" type="file" name="file">
         @error('file')
            <small style="color: red;">{{$message}}</small>
          @enderror
      <br>
    <input name="store" type="submit" button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 border border-blue-700 rounded">
</form>
@endif
</div>
@endsection
