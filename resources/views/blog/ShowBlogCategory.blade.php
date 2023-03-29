@extends('layouts.menu')
@section('content')
<br>
<br>
<br>
<br>
<section class="flex flex-row items-center text-gray-600">
        <div class="container px-6 py-24 mx-auto ">
        <div class="grid grid-cols-3 gap-3">
    @foreach($blog as $Blog)
            <div class="rounded overflow-hidden shadow-lg">
                <img class="lg:h-72 md:h-48 w-full object-cover object-center" src="/public/card-top.jpg" alt="Sunset in the mountains">
                <div class="px-6 py-4">
                    <div class="font-bold text-xl mb-2"><a href="{{route('ShowBlog', $Blog->id)}}">{{$Blog->title}}</a></div>
                    <p class=" truncate ... text-gray-700 text-base">
                        {{$Blog->description}}
                    </p>
                </div>
                <div class="px-6 pt-4 pb-2">
                   
                <button><span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2"><a style=" text-decoration: none; color: inherit" href="{{route('ShowCategoryBlog', $Blog->Categori_blog)}}">#{{$Blog->Categori_blog}}</a></span></button>
                </div>
            </div>
    @endforeach
    </div>
    </div>
    </section>
@endsection
