@extends('layouts.app')

@section('content')
    @if (session()->has('success'))
    <div class="absolute w-96 py-2 px-4 text-green-600 bg-green-200 m-10 lg:m-20 rounded shadow-lg">
        <p>{{ session('success') }}</p>
    </div>
    @endif

    <div class="min-h-screen flex items-center justify-center flex-col">
        <div class="bg-gray-700 rounded-lg -mt-24">
            <h1 class="text-gray-200 underline decoration-sky-400 text-3xl text-center -mb-5 mt-3">Login</h1>
            <div class="p-10 space-y-2">
                <form action="" class="space-y-3">
                    <div class="flex flex-col space-y-1">
                        <label for="username" class="form-label">Username</label>
                        <input type="text" id="username" placeholder="ex : xeraphit01" name="username" class="form-input">
                    </div>
                    <div class="flex flex-col space-y-1">
                        <label for="password" class="form-label">Password</label>
                        <input type="text" id="password" placeholder="Password" name="password" class="form-input">
                    </div>
                    <div class="flex items-center justify-center flex-col space-y-2">
                        <button type="submit" class="px-5 py-1 rounded-md mt-3 bg-gradient-to-br from-sky-400 to-green-400 text-semibold text-gray-100 hover:-translate-y-2 transform transition">Login</button>
                        <small class="text-gray-400">No have account?<a href="{{ route('register') }}" class="underline decoration-sky-400 text-gray-300"> Register</a></small>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection