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

<div class="container px-4 md:px-0 max-w-6xl mx-auto -mt-24">
			
			<div class="mx-0 sm:mx-6">
				
<section class="mx-auto flex flex-row items-center text-gray-600">
    
        <div class="container px-6 py-24 mx-auto ">
        <form action="blog">
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
      @if(count($blogs) == 0)
        <h3 class="text-center">Blog no encontrados</h3>
    @endif
    <div class="w-full lg:w-1/4">
    <label for="category" class="block text-gray-700 font-bold mb-2">Categoría:</label>
    <form action="blog">
                <select name="category" class="bg-white border border-gray-400 rounded py-2 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" aria-label="Default select example">
                <option value="">Todas las categorias</option>
                @foreach($Category_blogs as $category)
                <option value="{{$category->id}}">{{$category->name}}</option>
                @endforeach
                </select>
                <button type="submit" class="bg-gray-500 hover:bg-gray-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">Elegir categoria</button>
        </form>
    </div>

      <br>
      @if(@Auth::user()->hasRole('admin'))
    <div class="container">
        <p>Add a blog as Admin</p>
        <button type="button" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800"><a style="all:unset" href="{{route('add_blog')}}">Add a Blog</a></button>
    </div>
@endif
<br>
@hasrole('BlogCreator')
    <div class="container">
        <p>Add a blog as BlogCreator</p>
        <button type="button" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800"><a style="all: unset;" href="{{route('add_blog')}}">Add a Blog</a></button>
    </div>
@endrole
<br>
<div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4">
    @foreach($blogs as $Blog)
            
            <div style="background-color:white" class="rounded overflow-hidden shadow-lg">
                <a href="{{route('ShowBlog', $Blog->id)}}">
                    <img  class="lg:h-72 md:h-48 w-full object-cover object-center" src="../public/{{$Blog->image}}" alt="Sunset in the mountains">
                </a>
                <p
                @foreach($Category_blogs as $category)
                    @if($Blog->category_id == $category->id)
                            {{$Blog->category_id = $category->name}}
                    @endif
                @endforeach class="w-full text-gray-600 text-xs md:text-sm px-6">{{$Blog->category_id}}</p>
                <div class="px-6 py-4">
                    <div class="font-bold text-xl mb-2"><a href="{{route('ShowBlog', $Blog->id)}}">{{$Blog->title}}</a></div>
                    <p class=" truncate ... text-gray-700 text-base">
                        {{$Blog->description}}
                    </p>
                </div>
                <div class="px-6 pt-4 pb-2">
                   
                <!---->
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
    <div class="flex flex-row items-center text-gray-600">
              {{$blogs->links()}}
    </div>
    </div>
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
						<a class="inline-block text-gray-600 no-underline hover:text-gray-200 hover:underline py-2 px-3" href="{{ route('faqs') }}">Faqs</a>
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
