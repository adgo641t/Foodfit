@extends('layouts.menu')
@section('content')
<body class="bg-gray-200 font-sans leading-normal tracking-normal">
	<!--Header-->
	<div class="w-full m-0 p-0 bg-cover bg-bottom" style="background-image:url('https://tailwindtoolbox.github.io/Ghostwind/cover.jpg'); height: 60vh; max-height:460px;">
			<div class="container max-w-4xl mx-auto pt-16 md:pt-32 text-center break-normal">
				<!--Title-->
					<p class="text-white font-extrabold text-3xl md:text-5xl">
						{{ __('blog1') }}
					</p>
					<p class="text-xl md:text-2xl text-gray-500">{{ __('blog2') }}</p>
			</div>
		</div>

<div class="container px-4 md:px-0 max-w-6xl mx-auto -mt-24">

			<div class="mx-0 sm:mx-6">

<section class="mx-auto flex flex-row items-center text-gray-600">
    <div class="container px-6 py-24 mx-auto ">
        @if(@Auth::user()->hasRole('admin'))
        <form action="AdminBlog">
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
                  placeholder="{{ __('Search for a post...') }}"
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
      @elseif(@Auth::user()->hasRole('BlogCreator'))
      <form action="CreatorsBlogs">
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
                  placeholder="{{ __('Search for a post...') }}"
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
      @else
      <form action="ClientBlogs">
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
                  placeholder="{{ __('Search for a post...') }}"
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
    @endif
      <br>

    @if(count($blogs) == 0)
        <h3 class="text-center">{{ __('blog3') }}</h3>
    @endif

    @if(count($users) == 0)
        <h3 class="text-center">{{ __('blog4') }}</h3>
    @endif
   <!---Filtrar por categorias-->
    <div id="selectCategory" class="w-full lg:w-1/4">
    <label for="category" class="block text-gray-700 font-bold mb-2">{{ __('Filter by categories:') }}</label>
    @if(@Auth::user()->hasRole('admin'))
        <form action="AdminBlog">
                <select name="category" class="bg-white border border-gray-400 rounded py-2 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" aria-label="Default select example">
                <option value="">{{ __('All categories') }}</option>
                @foreach($Category_blogs as $category)
                @if($category->id == 1) {
                    @continue
                }
                @endif
                <option value="{{$category->id}}">{{$category->name}}</option>
                @endforeach
                </select>
                <button type="submit" class="bg-gray-500 hover:bg-gray-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">{{ __('Choose category') }}</button>
        </form>
    @elseif(@Auth::user()->hasRole('BlogCreator'))
    <form action="CreatorsBlogs">
                <select name="category" class="bg-white border border-gray-400 rounded py-2 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" aria-label="Default select example">
                <option value="">{{ __('All categories') }}</option>
                @foreach($Category_blogs as $category)
                @if($category->id == 1) {
                    @continue
                }
                @endif
                <option value="{{$category->id}}">{{$category->name}}</option>
                @endforeach
                </select>
                <button type="submit" class="bg-gray-500 hover:bg-gray-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">{{ __('Choose category') }}</button>
        </form>
    @else
    <form action="ClientBlogs">
                <select name="category" class="bg-white border border-gray-400 rounded py-2 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" aria-label="Default select example">
                <option value="">{{ __('All categories') }}</option>
                @foreach($Category_blogs as $category)
                @if($category->id == 1) {
                    @continue
                }
                @endif
                <option value="{{$category->id}}">{{$category->name}}</option>
                @endforeach
                </select>
                <button type="submit" class="bg-gray-500 hover:bg-gray-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">{{ __('Choose category') }}</button>
        </form>
    @endif
    </div>
    <br>
    <!------Filtrar por usuarios-------->
    <div id="selectUser" class="w-full lg:w-1/4">
    <label for="category" class="block text-gray-700 font-bold mb-2">{{ __('Filter by users:') }}</label>
    @if(@Auth::user()->hasRole('admin'))
    <form action="AdminBlog">
                <select name="users" class="bg-white border border-gray-400 rounded py-2 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" aria-label="Default select example">
                <option value="">{{ __('All users') }}</option>
                @foreach($users as $user)
                <option value="{{$user->id}}">{{$user->name}}</option>
                @endforeach
            </select>
            <button type="submit" class="bg-gray-500 hover:bg-gray-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">{{ __('Choose user') }}</button>
        </form>
    @elseif(@Auth::user()->hasRole('BlogCreator'))
    <form action="CreatorsBlogs">
                <select name="users" class="bg-white border border-gray-400 rounded py-2 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" aria-label="Default select example">
                <option value="">{{ __('All users') }}</option>
                @foreach($users as $user)
                <option value="{{$user->id}}">{{$user->name}}</option>
                @endforeach
            </select>
            <button type="submit" class="bg-gray-500 hover:bg-gray-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">{{ __('Choose user') }}</button>
        </form>
    @else
    <form action="ClientBlogs">
                <select name="users" class="bg-white border border-gray-400 rounded py-2 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" aria-label="Default select example">
                <option value="">{{ __('All users') }}</option>
                @foreach($users as $user)
                <option value="{{$user->id}}">{{$user->name}}</option>
                @endforeach
            </select>
            <button type="submit" class="bg-gray-500 hover:bg-gray-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">{{ __('Choose user') }}</button>
        </form>
    @endif
    </div>

      <br>
      @if(@Auth::user()->hasRole('admin'))
    <div class="container">
        <p>{{ __('Add a post as Admin') }}</p>
        <button type="button" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800"><a style="all:unset" href="{{route('add_blogAdmin')}}">{{ __('Add a post') }}</a></button>
    </div>
@endif
<br>
@hasrole('BlogCreator')
    <div class="container">
        <p>{{ __('Add a post as BlogCreator') }}</p>
        <button type="button" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800"><a style="all: unset;" href="{{route('add_blogCreator')}}">{{ __('Add a post') }}</a></button>
    </div>
@endrole
<br>
<div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4">
    @foreach($blogs as $Blog)

            <div style="background-color:white" class="rounded overflow-hidden shadow-lg">
            @if(@Auth::user()->hasRole('BlogCreator'))
                <a href="{{route('ShowBlogCreator', $Blog->id)}}">
                    <img  class="lg:h-72 md:h-48 w-full object-cover object-center" src="public/{{$Blog->image}}" alt="Sunset in the mountains">
                </a>
            @elseif(@Auth::user()->hasRole('admin'))
                <a href="{{route('ShowBlogAdmin', $Blog->id)}}">
                    <img  class="lg:h-72 md:h-48 w-full object-cover object-center" src="public/{{$Blog->image}}" alt="Sunset in the mountains">
                </a>
            @else
            <a href="{{route('ShowBlogClient', $Blog->id)}}">
                    <img  class="lg:h-72 md:h-48 w-full object-cover object-center" src="public/{{$Blog->image}}" alt="Sunset in the mountains">
                </a>
            @endif
                <p
                @foreach($Category_blogs as $category)
                    @if($Blog->category_id == $category->id)
                        @if($category->name  != 'Ninguna categoria')
                            {{$Blog->category_id = $category->name}}
                        @else
                            {{$Blog->category_id = null}}
                        @endif
                    @endif

                    @if($Blog->category_id_2 == $category->id)
                        @if($category->name != 'Ninguna categoria')
                            {{$Blog->category_id_2 = $category->name}}
                         @else
                         {{$Blog->category_id_2 = null}}
                        @endif
                    @endif

                    @if($Blog->category_id_3 == $category->id)
                        @if($category->name  != 'Ninguna categoria')
                            {{$Blog->category_id_3 = $category->name}}
                        @else
                        {{$Blog->category_id_3 = null}}
                        @endif
                    @endif
                @endforeach  class="w-full text-gray-600 text-xs md:text-sm px-6">
                         {{$Blog->category_id}} {{$Blog->category_id_2}} {{$Blog->category_id_3}}</p>

                <div class="px-6 py-4">
                    <div class="font-bold text-xl mb-2">
                    @if(@Auth::user()->hasRole('BlogCreator'))
                    <h3><a href="{{route('ShowBlogCreator', $Blog->id)}}">{{$Blog->title}}</a></h3>
                    @elseif(@Auth::user()->hasRole('admin'))
                    <h3><a href="{{route('ShowBlogAdmin', $Blog->id)}}">{{$Blog->title}}</a></h3>
                    @else
                    <h3><a href="{{route('ShowBlogClient', $Blog->id)}}">{{$Blog->title}}</a></h3>
                    @endif
                    </div>
                    <p class=" truncate ... text-gray-700 text-base">
<!--{{$Blog->description}}-->
                        {!!substr($Blog->description, 0, 100)!!}...                    </p>
                </div>
                <div class="px-6 pt-4 pb-2">

                <!---->
                <!--Admin-->
                @if(@Auth::user()->hasRole('admin'))
                     <!--Delete-->
                    @if(@Auth::user()->hasPermissionTo('DeleteBlog'))
                        <form action="{{ route('deleteBlogAdmin',  $Blog->id) }}" method="post">
                        @csrf
                        <button type="submit" class="btn btn-primary"><a style=" text-decoration: none; color: inherit">{{ __('Delete') }}</a></button>
                        <br>
                        <br>
                        </form>
                    @endif
                    <!--Update-->
                    @if(@Auth::user()->hasPermissionTo('UpdateBlog'))
                        <form action="{{ route('UpdateBlogAdmin',  $Blog->id) }}" method="post">
                        @csrf
                        <button type="submit" class="btn btn-primary"><a style=" text-decoration: none; color: inherit">{{ __('Update post') }}</a></button>
                        </form>
                    @endif
                <!--Blog Creator-->
                @endif
                @hasrole('BlogCreator')
                     <!--Delete-->
                    @if(@Auth::user()->hasPermissionTo('DeleteBlog'))
                        <form action="{{ route('deleteBlogCreator',  $Blog->id) }}" method="post">
                        @csrf
                        <button type="submit" class="btn btn-primary"><a style=" text-decoration: none; color: inherit">{{ __('Delete') }}</a></button>
                        <br>
                        <br>
                        </form>
                    @endif
                    <!--Update-->
                    @if(@Auth::user()->hasPermissionTo('UpdateBlog'))
                        <form action="{{ route('UpdateBlogCreator',  $Blog->id) }}" method="post">
                        @csrf
                        <button type="submit" class="btn btn-primary"><a style=" text-decoration: none; color: inherit">{{ __('Update post') }}</a></button>
                        </form>
                    @endif
                <!--Blog Creator-->
                @endrole
            </div>
            <div class="px-6 pt-4 pb-2">
                <div class="text-sm font-light text-gray-500 dark:text-gray-400">{{ __('Creator:') }} <b
                @foreach ($users as $user)
                    @if($user->id == $Blog->creator)
                     {{$Blog->creator = $user->name}}

                    @endif
                @endforeach>{{$Blog->creator}}</b></div>
                <div class="text-sm font-light text-gray-500 dark:text-gray-400">{{ __('Created:') }} <b>{{$Blog->created_at->format('d-m-Y')}}</b></div>
                <div class="text-sm font-light text-gray-500 dark:text-gray-400">{{ __('Updated:') }} <b>{{$Blog->updated_at->format('d-m-Y')}} at {{$Blog->updated_at->format('H:i')}}</b></div>
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
<script>
    document.addEventListener("DOMContentLoaded", function(){
        let selectCategory = document.getElementById("selectCategory");
        let selectUser = document.getElementById("selectUser");

        selectCategory.addEventListener("click", function() {
            selectUser.style.display="none";
            selectCategory.style.display="block";
        });

        selectUser.addEventListener("click", function() {
            selectCategory.style.display="none";
            selectUser.style.display="block";
        });
    });
</script>
@endsection
