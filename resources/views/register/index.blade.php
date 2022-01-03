@extends('layouts.app')

@section('content')
    <div class="min-h-screen flex items-center justify-center">
        <div class="bg-gray-700 rounded-lg -mt-24">
            <h1 class="text-gray-200 underline decoration-sky-400 text-3xl text-center -mb-5 mt-3">Register</h1>
            <div class="p-10 space-y-2">
                <form action="" method="POST" class="space-y-3">
                    @csrf
                    <div class="flex flex-col space-y-1">
                        <label for="name" class="form-label">Name</label>
                        <input type="text" id="name" placeholder="Danang Hapis Fadillah" name="name" class="form-input @error('name') outline outline-2 outline-red-800  @enderror" required value="{{ old('name') }}">

                        @error('name')
                            <div class="text-sm text-semibold text-red-400">{{ $message }}</div>
                        @enderror

                    </div>
                    <div class="flex flex-col space-y-1">
                        <label for="username" class="form-label">Username</label>
                        <input type="text" id="username" placeholder="xeraphit01" name="username" class="form-input @error('username') outline outline-2 outline-red-800 @enderror" required value="{{ old('username') }}">

                        @error('username')
                            <div class="text-sm text-semibold text-red-400">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="flex flex-col space-y-1">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" id="email" placeholder="yourEmail@example.com" name="email" class="form-input @error('email') outline outline-2 outline-red-800 @enderror" required value="{{ old('email') }}">

                        @error('email')
                            <div class="text-sm text-semibold text-red-400">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="flex flex-col space-y-1">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" id="password" placeholder="Password" name="password" class="form-input @error('password') outline outline-2 outline-red-800 @enderror" required>
                        
                        @error('password')
                            <div class="text-sm text-semibold text-red-400">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="flex items-center justify-center flex-col space-y-2">
                        <button type="submit" class="px-5 py-1 rounded-md mt-3 bg-gradient-to-br from-sky-400 to-green-400 text-semibold text-gray-100 hover:-translate-y-2 transform transition">Register</button>
                        <small class="text-gray-400">Already register?<a href="{{ route('login') }}" class="underline decoration-sky-400 text-gray-300"> Login</a></small>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection