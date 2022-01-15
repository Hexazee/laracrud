@extends('dashboard.layouts.app')

@section('content')
    <h1 class="text-3xl text-gray-100 font-sans border-b-2 pb-2 mt-5">Hello, {{ auth()->user()->name }}</h1>
    @if(session()->has('success'))
        <h4 class="bg-gray-100 text-green-600 p-2 rounded overflow-hidden mt-3 w-48">{{ session('success') }}</h4>
    @endif
    <div class="flex flex-col justify-center mx-auto space-y-1">
        <a href="/dashboard/posts/create/" class="my-3 w-full lg:w-1/5 text-center font-semibold text-gray-50 bg-blue-600 rounded-lg shadow-md uppercase px-4 py-2">Create a New Post</a>
        <table class="table-auto my-12 text-gray-200">
            <thead>
                <tr class="bg-gray-400">
                    <th>#</th>
                    <th>Title</th>
                    <th>Category</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($posts as $post)
                <tr class="{{ $loop->iteration % 2 == 0 ? 'bg-gray-500' : '' }}">
                    <td class="p-2">{{ $loop->iteration }}</td>
                    <td>{{ $post->title }}</td>
                    <td>{{ $post->category->name }}</td>
                    <td class="flex items-center justify-center flex-col lg:flex-row space-y-1 py-3">
                        <div class="flex items-center space-x-1">
                            <a href="/dashboard/posts/{{ $post->slug }}" class="p-1 rounded-md hover:shadow-lg bg-blue-700">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                                  </svg>
                            </a>
                            <a href="/dashboard/posts/{{ $post->slug }}/edit" class="p-1 rounded-md hover:shadow-lg bg-yellow-400">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                                  </svg>
                            </a>
                            <form action="/dashboard/posts/{{ $post->slug }}" method="POST">
                                @method('delete')
                                @csrf
                                <button class="p-1 rounded-md hover:shadow-lg bg-red-700" onclick="return alert('Are you sure?')"><svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                  </svg></button>
                            </form>
                        </div>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection