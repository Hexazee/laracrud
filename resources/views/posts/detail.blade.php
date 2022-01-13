@extends('layouts.app')

@section('content')
<div class="container bg-transfarent mt-10 shadow py-5 rounded-sm">
    <section class="space-y-2">
        <h1 class="text-3xl underline decoration-sky-400 font-semibold text-gray-100">{{ $post->title }}</h1>
        <h3 class="text-xl text-gray-400">Category : <a href="/posts/{{ Str::slug($post->category->name) }}" class="underline decoration-sky-400">{{ $post->category->name }}</a></h3>
        <h3 class="text-md text-gray-400">By : {{ $post->author->name }}</h3>
        <p class="text-gray-200 first-letter:text-5xl first-letter:text-sky-400">{!! $post->body !!}</p>
    </section>
</div>
@endsection