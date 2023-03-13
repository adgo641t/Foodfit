@extends('layouts.menu')
@section('content')


<br>
<br>
<br>
<br>
<br>
<br>
<br>

<br>
        <div class="container mx-auto">
        <div class="row">
            <div class="max-w-sm rounded overflow-hidden shadow-lg">
                <img class="w-50" src="public/card-top.jpg" alt="Sunset in the mountains">
                <div class="px-6 py-4">
                    <div class="font-bold text-xl mb-2">{{$blog->title}}</div>
                    <p class="text-gray-700 text-base">
                        {{$blog->description}}
                    </p>
                </div>
                <div class="px-6 pt-4 pb-2">
                    <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">#{{$blog->Categori_blog}}</span>
                </div>
            </div>
        </div>
        </div>
@endsection
