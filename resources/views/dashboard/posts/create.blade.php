@extends('dashboard.layouts.app')

@section('content')
    <h1 class="mt-3 text-2xl text-gray-100 text-center">Create a Post</h1>
    <div class="my-5">
        {{-- secara default action langsung ditangani oleh controller (method store) --}}
        <form action="/dashboard/posts" method="post" class="w-full lg:w-2/3" enctype="multipart/form-data">
            @csrf
            <div class="flex flex-col">
                <label for="title" class="text-xl mb-3 mt-10 ml-5 text-gray-50 font-semibold underline decoration-sky-400">Title Post</label>
                <input type="text" class="px-4 py-2 rounded-md w-full focus:outline-none focus:ring focus:ring-sky-400 @error('title') ring ring-red-600 @enderror" id="title" name="title" autofocus value="{{ old('title') }}">
                @error('title')
                    <span class="text-red-600 bg-gray-100 rounded p-2 mt-2 w-1/3 shadow-xl text-center">{{ $message }}</span>
                @enderror
            </div>
            <div class="flex flex-col">
                <label for="category_id" class="text-xl my-3 ml-5 text-gray-50 font-semibold underline decoration-sky-400">Category</label>
                <select name="category_id" id="category_id" class="px-4 py-2 rounded-md w-full focus:outline-none focus:ring focus:ring-sky-400" required>
                    @foreach ($categories as $category)
                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="flex flex-col">
                <label for="image" class="text-xl mb-3 mt-10 ml-5 text-gray-50 font-semibold underline decoration-sky-400">Image (optional)</label>
                <input type="file" class="px-4 py-2 rounded-full w-full focus:outline-none focus:ring focus:ring-sky-400 @error('image') ring ring-red-600 @enderror" id="image" name="image" autofocus value="{{ old('image') }}">
                @error('image')
                    <span class="text-red-600 bg-gray-100 rounded p-2 mt-2 w-1/3 shadow-xl text-center">{{ $message }}</span>
                @enderror
            </div>
            <div class="flex flex-col">
                <label for="body" class="text-xl my-3 ml-5 text-gray-50 font-semibold underline decoration-sky-400">Body</label>
                <input id="body" value="{{ old('body') }}" type="hidden" name="body" required>
                <trix-editor input="body" class="bg-gray-100 rounded-md"></trix-editor>
                @error('body')
                    <span class="text-red-600 bg-gray-100 rounded p-2 mt-2 w-1/3 shadow-xl text-center">{{ $message }}</span>
                @enderror
            </div>

            <button type="submit" class="px-4 py-2 rounded-full bg-sky-400 text-gray-50 font-semibold mt-7">Create Now!</button>
        </form>
    </div>
@endsection