@extends('layouts.menu')
@section('content')
<body class="bg-gray-200 font-sans leading-normal tracking-normal">
	<!--Header-->
	<div class="w-full m-0 p-0 bg-cover bg-bottom" style="background-image:url('https://tailwindtoolbox.github.io/Ghostwind/cover.jpg'); height: 60vh; max-height:460px;">
			<div class="container max-w-4xl mx-auto pt-16 md:pt-32 text-center break-normal">
				<!--Title-->
					<p class="text-white font-extrabold text-3xl md:text-5xl">
						 Food&Fit Blog
					</p>
					<p class="text-xl md:text-2xl text-gray-500">Welcome to Food&Fit Blog</p>
			</div>
		</div>
<div class="container space-y-12">
    <h1 style="text-align: center">Edit the post</h1>
  @if(@Auth::user()->hasRole('admin'))
  <form action="{{ route('UpdateNewBlogAdmin', $blog) }}" method="post" enctype="multipart/form-data">
  <div class="block w-100 p-8 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
    @csrf
    <div class="flex flex-wrap -mx-3 mb-6">
    <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
      <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name">
        {{ __('Title of post') }}
      </label>
      <input value="{{$blog->title}}" name="title" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-red-500 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" id="grid-first-name" type="text" placeholder="Jane">
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
      <textarea class="ckeditor" name="description">{!! ($blog->description) !!}</textarea>
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
          @error('category')
            <small style="color: red;">{{$message}}</small>
          @enderror
        <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
          <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
        </div>
      </div>
      <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" for="file_input">Upload file</label>
      <input  class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" id="file_input" type="file" name="image">
    </div>
  </div>
  <br>
  <input type="submit" class="btn btn-primary">
    </div>

</form>
@elseif(@Auth::user()->hasRole('BlogCreator'))
<form action="{{ route('UpdateNewBlogCreator', $blog) }}" method="post" enctype="multipart/form-data">
  <div class="block w-100 p-8 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
    @csrf
    <div class="flex flex-wrap -mx-3 mb-6">
    <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
      <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name">
        {{ __('Title of post') }}
      </label>
      <input value="{{$blog->title}}" name="title" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-red-500 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" id="grid-first-name" type="text" placeholder="Jane">
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
      <textarea name="description" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-description" type="text-area" placeholder="Description of the new blog here.....">{{$blog->description}}</textarea>
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
          @error('category')
            <small style="color: red;">{{$message}}</small>
          @enderror
        <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
          <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
        </div>
      </div>
      <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" for="file_input">{{ __('Upload file') }}</label>
      <input  class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" id="file_input" type="file" name="image">
    </div>
  </div>
  <br>
  <input type="submit" class="btn btn-primary">
</div>

</form>
@endif
</div>
<br>
<footer class="bg-gray-900">
		<div class="container max-w-6xl mx-auto flex items-center px-2 py-8">

			<div class="w-full mx-auto flex flex-wrap items-center">
				<div class="flex w-full md:w-1/2 justify-center md:justify-start text-white font-extrabold">
					<a class="text-gray-900 no-underline hover:text-gray-900 hover:no-underline" href="#">
					    <span class="text-base text-gray-200">Food&Fit Blog</span>
					</a>
				</div>
				<div class="flex w-full pt-2 content-center justify-between md:w-1/2 md:justify-end">
					<ul class="list-reset flex justify-center flex-1 md:flex-none items-center">
					  <li>
						<a class="inline-block py-2 px-3 text-white no-underline" href="#">Blog</a>
					  </li>
					  <li>
						<a class="inline-block text-gray-600 no-underline hover:text-gray-200 hover:underline py-2 px-3">Faqs</a>
					  </li>
					  <li>
						<a class="inline-block text-gray-600 no-underline hover:text-gray-200 hover:underline py-2 px-3" href="#">Facebook</a>
					  </li>
						<li>
						<a class="inline-block text-gray-600 no-underline hover:text-gray-200 hover:underline py-2 px-3" href="#">Linkedin</a>
					  </li>
					</ul>
				</div>
			</div>


		</div>
	</footer>
</body>
@endsection
