@extends('dashboard.layouts.app')

@section('content')
    <h1 class="text-3xl text-gray-100 font-sans border-b-2 pb-2 mt-5">Hello, {{ auth()->user()->name }}</h1>

    <div class="flex flex-col justify-center mx-auto space-y-1">
        <a href="/dashboard/posts/create/" class="my-3 w-full lg:w-1/5 text-center font-semibold text-gray-50 bg-blue-600 rounded-lg shadow-md uppercase px-4 py-2">Create a New Post</a>
        <table class="table-auto my-12 text-gray-200">
            <thead>
                <tr class="bg-gray-400">
                    <th>#</th>
                    <th>Title</th>
                    <th>Body</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($posts as $post)
                <tr class="{{ $loop->iteration % 2 == 0 ? 'bg-gray-500' : '' }}">
                    <td class="p-2">{{ $loop->iteration }}</td>
                    <td>{{ $post->title }}</td>
                    <td>{{ Str::limit($post->body, 30) }}</td>
                    <td class="flex items-center justify-center flex-col lg:flex-row space-y-1 py-3 space-x-1 text-center">
                        <a href="" class="px-3 py-1 rounded-md hover:shadow-lg bg-blue-700">View</a>
                        <a href="" class="px-3 py-1 rounded-md hover:shadow-lg bg-yellow-400">Edit</a>
                        <a href="" class="px-3 py-1 rounded-md hover:shadow-lg bg-red-700">Delete</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection