@extends('layouts.app')

@section('content')
<h1 class="text-3xl underline decoration-sky-400 font-semibold text-center text-gray-300 mt-5">{{ $title }}</h1>
<div class="container grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-5 mt-5 mx-5 md:0">
    @foreach ($posts as $post)
    <div class="card border-gray-200 rounded overflow-hidden shadow bg-gray-100 mx-5 md:mx-0">
        <div class="p-5 space-y-2 h-60 max-h-[80%]">
            <a href="/post/{{ Str::slug($post->title) }}" class="font-semibold text-3xl lg:text-2xl text-gray-700 underline decoration-sky-400">{{ $post->title }}</a>
            <p class="text-gray-600 first-letter:text-xl first-letter:font-bold first-letter:text-sky-400">{{ Str::limit($post->body, 100) }}</p>
            <p class="text-gray-500 text-xs"><span class="underline decoration-green-400 text-gray-500 text-xs">Category</span> : <a class="hover:underline" href="/posts/{{ Str::slug($post->category->name) }}">{{ $post->category->name }}</a></p>
            <div class="">
                <a href="/post/{{ Str::slug($post->title) }}" class="font-semibold underline decoration-sky-400 text-gray-700 hover:text-gray-500">See Detail..</a>
            </div>
        </div>
        <figcaption class="flex space-x-3 items-center justify-between bg-gray-300 py-2 px-5 text-gray-700 mt-1">
            <img class="w-10 rounded-full" src="{{ asset('img/saya.png') }}" alt="Danang Hapis Fadillah">
            <div class="flex flex-col">
                <p class="text-md text-gray-600 font-semibold -mb-1 lg:text-sm">{{ $post->author->name }}</p>
                <p class="text-sm text-gray-400 underline decoration-sky-400">{{ $post->author->job }}</p>
            </div>
            <a href="#">
                <?xml version="1.0"?><svg fill="#1DA1F2" xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 30 30" width="30px" height="30px">    <path d="M28,6.937c-0.957,0.425-1.985,0.711-3.064,0.84c1.102-0.66,1.947-1.705,2.345-2.951c-1.03,0.611-2.172,1.055-3.388,1.295 c-0.973-1.037-2.359-1.685-3.893-1.685c-2.946,0-5.334,2.389-5.334,5.334c0,0.418,0.048,0.826,0.138,1.215 c-4.433-0.222-8.363-2.346-10.995-5.574C3.351,6.199,3.088,7.115,3.088,8.094c0,1.85,0.941,3.483,2.372,4.439 c-0.874-0.028-1.697-0.268-2.416-0.667c0,0.023,0,0.044,0,0.067c0,2.585,1.838,4.741,4.279,5.23 c-0.447,0.122-0.919,0.187-1.406,0.187c-0.343,0-0.678-0.034-1.003-0.095c0.679,2.119,2.649,3.662,4.983,3.705 c-1.825,1.431-4.125,2.284-6.625,2.284c-0.43,0-0.855-0.025-1.273-0.075c2.361,1.513,5.164,2.396,8.177,2.396 c9.812,0,15.176-8.128,15.176-15.177c0-0.231-0.005-0.461-0.015-0.69C26.38,8.945,27.285,8.006,28,6.937z"/></svg>
            </a>
        </figcaption>
    </div>
    @endforeach
</div>
@endsection