@extends('layouts.menu')
@section('content')
<br>
<br>
<br>
<br>
<span class="h-1 w-full bg-green-600 lg:w-1/3"></span>
@if(@Auth::user()->hasRole('admin'))
    <div class="container">
    <h1>Blogs</h1>
        <p>Add a blog as Admin</p>
        <button type="button" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800"><a style="all: unset;" href="{{route('add_blog')}}">Add a Blog</a></button>
    </div>
@endif
@hasrole('BlogCreator')
    <div class="container">
    <h1>Blogs</h1>
        <p>Add a blog as BlogCreator</p>
        <button type="button" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800"><a style="all: unset;" href="{{route('add_blog')}}">Add a Blog</a></button>
    </div>
@endrole
<br>
<section class="flex flex-row items-center text-gray-600">
    
        <div class="container px-6 py-24 mx-auto ">
        <form action="/blog">
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
                  placeholder="Busca un blog...."
              />
              <div class="absolute top-2 right-2">
                  <button
                      type="submit"
                      class="h-10 w-20 text-white rounded-lg bg-red-500 hover:bg-red-600"
                  >
                      Search
                  </button>
              </div>
          </div>
      </form>
      <br>
        <div class="grid grid-cols-3 gap-3">
    @foreach($blog as $Blog)
            <div class="rounded overflow-hidden shadow-lg">
                <img class="lg:h-72 md:h-48 w-full object-cover object-center" src="public/{{$Blog->image}}" alt="Sunset in the mountains">
                <div class="px-6 py-4">
                    <div class="font-bold text-xl mb-2"><a href="{{route('ShowBlog', $Blog->id)}}">{{$Blog->title}}</a></div>
                    <p class=" truncate ... text-gray-700 text-base">
                        {{$Blog->description}}
                    </p>
                </div>
                <div class="px-6 pt-4 pb-2">
                   
                <button><span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2"><a style=" text-decoration: none; color: inherit">{{$Blog->category}}</a></span></button>
                <!--Admin-->
                @if(@Auth::user()->hasRole('admin'))
                     <!--Delete-->
                    @if(@Auth::user()->hasPermissionTo('DeleteBlog'))
                        <form action="{{ route('deleteBlog',  $Blog->id) }}" method="post">
                        @csrf                
                        <button type="submit" class="btn btn-primary"><a style=" text-decoration: none; color: inherit">Delete</a></button>   
                        <br>
                        <br>
                        </form>
                    @endif
                    <!--Update-->
                    @if(@Auth::user()->hasPermissionTo('UpdateBlog'))
                        <form action="{{ route('UpdateBlog',  $Blog->id) }}" method="post">
                        @csrf                
                        <button type="submit" class="btn btn-primary"><a style=" text-decoration: none; color: inherit">Update Blog</a></button>  
                        </form> 
                    @endif
                <!--Blog Creator-->
                @endif
                @hasrole('BlogCreator')
                     <!--Delete-->
                    @if(@Auth::user()->hasPermissionTo('DeleteBlog'))
                        <form action="{{ route('deleteBlog',  $Blog->id) }}" method="post">
                        @csrf                
                        <button type="submit" class="btn btn-primary"><a style=" text-decoration: none; color: inherit">Delete</a></button>   
                        <br>
                        <br>
                        </form>
                    @endif
                    <!--Update-->
                    @if(@Auth::user()->hasPermissionTo('UpdateBlog'))
                        <form action="{{ route('UpdateBlog',  $Blog->id) }}" method="post">
                        @csrf                
                        <button type="submit" class="btn btn-primary"><a style=" text-decoration: none; color: inherit">Update Blog</a></button>  
                        </form> 
                    @endif
                <!--Blog Creator-->
                @endrole
            </div>
            <div class="px-6 pt-4 pb-2">
                <div class="text-sm font-light text-gray-500 dark:text-gray-400">Creator: <b>{{$Blog->creator}}</b></div>
                <div class="text-sm font-light text-gray-500 dark:text-gray-400">Created: <b>{{$Blog->created_at->format('d-m-Y')}}</b></div>
                <div class="text-sm font-light text-gray-500 dark:text-gray-400">Updated: <b>{{$Blog->updated_at->format('d-m-Y')}} at {{$Blog->updated_at->format('H:i')}}</b></div>
            </div>
            </div>
    @endforeach
    </div>
    </div>
    </section>
@endsection
