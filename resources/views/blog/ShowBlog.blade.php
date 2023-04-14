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
<br>

        <div class="container mx-auto mr-auto">
		@if(@Auth::user()->hasRole('BlogCreator'))
        	<a href="{{ route('CreatorsBlogs') }}" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">{{ __('Back') }}</a>
        @elseif(@Auth::user()->hasRole('admin'))
        	<a href="{{ route('AdminBlog') }}" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">{{ __('Back') }}</a>
        @else
        	<a href="{{ url('ClientBlogs') }}" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">{{ __('Back') }}</a>
        @endif
        <div class="row">
            <div style="background-color:white" class=" py-12 sw-75 rounded overflow-hidden shadow-lg">
                <img  src="../public/{{$blog->image}}" alt="Sunset in the mountains">
                <br>
                <div class="px-6 py-4">
                <p
                @foreach($Category_blogs as $category)
                    @if($blog->category_id == $category->id)
                        @if($category->name  != 'Ninguna categoria')
                            {{$blog->category_id = $category->name}}
                        @else
                            {{$blog->category_id = null}}
                        @endif
                    @endif

                    @if($blog->category_id_2 == $category->id)
                        @if($category->name != 'Ninguna categoria')
                            {{$blog->category_id_2 = $category->name}}
							@else
                         {{$blog->category_id_2 = null}}
                        @endif
                    @endif

                    @if($blog->category_id_3 == $category->id)

                        @if($category->name  != 'Ninguna categoria')
                            {{$blog->category_id_3 = $category->name}}
                        @else
                        {{$blog->category_id_3 = null}}
                        @endif

                    @endif
                @endforeach  class="w-full text-gray-600 text-xs md:text-sm px-6">
                         {{$blog->category_id}}
						 {{$blog->category_id_2}}
						 {{$blog->category_id_3}}</p>
                    <p class="text-gray-700 text-base">
						{!! $blog->description !!}

                    </p>
                </div>
                <div class="px-6 pt-4 pb-2">
                <div class="px-6 pt-4 pb-2">
				<div class="text-sm font-light text-gray-500 dark:text-gray-400">{{ __('Creator:') }} <b
								@foreach ($users as $user)
									@if($user->id == $blog->creator)
									{{$blog->creator = $user->name}}

									@endif
								@endforeach>{{$blog->creator}}</b></div>
				    <div class="text-sm font-light text-gray-500 dark:text-gray-400">{{ __('Created:') }} <b>{{$blog->created_at->format('d-m-Y')}}</b></div>
                	<div class="text-sm font-light text-gray-500 dark:text-gray-400">{{ __('Updated:') }} <b>{{$blog->updated_at->format('d-m-Y')}} at {{$blog->updated_at->format('H:i')}}</b></div>
            	</div>
                </div>

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
						<a class="inline-block text-gray-600 no-underline hover:text-gray-200 hover:underline py-2 px-3" href="#">Faqs</a>
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
