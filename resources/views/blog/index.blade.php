@extends('layouts.menu')
@section('content')
<br>
<br>
<br>
<br>
<h1>Blogs</h1>
<span class="h-1 w-full bg-green-600 lg:w-1/3"></span>
<div class="container">
    <button type="button" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800"><a style="all: unset;" href="{{route('add_blog')}}">Add a Blog</a></button>
</div>
<br>
<section class="flex flex-row items-center text-gray-600">
        <div class="container px-6 py-24 mx-auto ">
        <div class="grid grid-cols-3 gap-3">
    @foreach($blog as $Blog)
            <div class="rounded overflow-hidden shadow-lg">
                <img class="lg:h-72 md:h-48 w-full object-cover object-center" src="public/card-top.jpg" alt="Sunset in the mountains">
                <div class="px-6 py-4">
                    <div class="font-bold text-xl mb-2"><a href="{{route('ShowBlog', $Blog->id)}}">{{$Blog->title}}</a></div>
                    <p class=" truncate ... text-gray-700 text-base">
                        {{$Blog->description}}
                    </p>
                </div>
                <div class="px-6 pt-4 pb-2">
                   
                <button><span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2"><a style=" text-decoration: none; color: inherit">#{{$Blog->category}}</a></span></button>
                </div>
            </div>
    @endforeach
    </div>
    </div>
    </section>
@endsection
