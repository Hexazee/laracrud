<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title }}</title>

    {{-- style tailwind --}}
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    {{-- alpine js --}}
    <script src="//unpkg.com/alpinejs" defer></script>

    {{-- trix editor --}}
    <link rel="stylesheet" href="{{ asset('css/trix.css') }}">
    <script src="{{ asset('js/trix.js') }}"></script>

</head>
<body class="antialiased bg-gray-600">

    <!-- sidebar and navbar -->
    <div class="lg:grid grid-cols-5" x-data="{open: false}">
        <!-- sidebar -->
        <nav class="col-span-1 tranform -translate-x-full lg:translate-x-0 fixed bg-gray-900 lg:bg-gray-900/60 text-gray-100 px-14 py-2 min-h-screen lg:block z-20" :class="{'translate-x-0 transform transition duration-300 ease-in':open === true, '-translate-x-full transform transition duration-300 ease-out':open === false}">
            <header  class="flex items-start mt-3 justify-between">
                <div class="flex flex-col space-y-3 items-center ">
                    <h3 class="text-2xl font-bold underline decoration-green-400 mb-5 flex">
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" class="mr-2 mt-1" role="img" width="30" height="30" preserveAspectRatio="xMidYMid meet" viewBox="0 0 1024 1024"><path d="M924.8 385.6a446.7 446.7 0 0 0-96-142.4a446.7 446.7 0 0 0-142.4-96C631.1 123.8 572.5 112 512 112s-119.1 11.8-174.4 35.2a446.7 446.7 0 0 0-142.4 96a446.7 446.7 0 0 0-96 142.4C75.8 440.9 64 499.5 64 560c0 132.7 58.3 257.7 159.9 343.1l1.7 1.4c5.8 4.8 13.1 7.5 20.6 7.5h531.7c7.5 0 14.8-2.7 20.6-7.5l1.7-1.4C901.7 817.7 960 692.7 960 560c0-60.5-11.9-119.1-35.2-174.4zM761.4 836H262.6A371.12 371.12 0 0 1 140 560c0-99.4 38.7-192.8 109-263c70.3-70.3 163.7-109 263-109c99.4 0 192.8 38.7 263 109c70.3 70.3 109 163.7 109 263c0 105.6-44.5 205.5-122.6 276zM623.5 421.5a8.03 8.03 0 0 0-11.3 0L527.7 506c-18.7-5-39.4-.2-54.1 14.5a55.95 55.95 0 0 0 0 79.2a55.95 55.95 0 0 0 79.2 0a55.87 55.87 0 0 0 14.5-54.1l84.5-84.5c3.1-3.1 3.1-8.2 0-11.3l-28.3-28.3zM490 320h44c4.4 0 8-3.6 8-8v-80c0-4.4-3.6-8-8-8h-44c-4.4 0-8 3.6-8 8v80c0 4.4 3.6 8 8 8zm260 218v44c0 4.4 3.6 8 8 8h80c4.4 0 8-3.6 8-8v-44c0-4.4-3.6-8-8-8h-80c-4.4 0-8 3.6-8 8zm12.7-197.2l-31.1-31.1a8.03 8.03 0 0 0-11.3 0l-56.6 56.6a8.03 8.03 0 0 0 0 11.3l31.1 31.1c3.1 3.1 8.2 3.1 11.3 0l56.6-56.6c3.1-3.1 3.1-8.2 0-11.3zm-458.6-31.1a8.03 8.03 0 0 0-11.3 0l-31.1 31.1a8.03 8.03 0 0 0 0 11.3l56.6 56.6c3.1 3.1 8.2 3.1 11.3 0l31.1-31.1c3.1-3.1 3.1-8.2 0-11.3l-56.6-56.6zM262 530h-80c-4.4 0-8 3.6-8 8v44c0 4.4 3.6 8 8 8h80c4.4 0 8-3.6 8-8v-44c0-4.4-3.6-8-8-8z" fill="currentColor"/></svg>Dashboard
                    </h3>
                    <img src="{{ asset('img/saya.png') }}" alt="Danang Hapis Fadillah" class="object-cover rounded-full w-24">
                    <p class="text-md text-center">
                        {{ auth()->user()->name }}
                        <small class="text-gray-300/40 text-md block underline decoration-sky-400">{{ auth()->user()->job }}</small>
                    </p>     
                </div> 
                <button class="focus:outline-none p-2 hover:transform transition duration-200 hover:rounded-md hover:bg-gray-400/30 lg:hidden absolute right-0 top-0 m-2" @click="open = false">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-7" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                      </svg>
                </button>
            </header>
            <ul class="mt-10 text-md space-y-2 absolute inset-x-0 px-5 w-full">
                <li>
                    <a href="/dashboard" class="flex items-cente {{ Request::is('dashboard') ? 'bg-sky-400' : '' }} w-full py-2 px-4 rounded-full transform transition duration-200">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
                        </svg>
                        Dashboard
                    </a>
                </li>
                <li>
                    <a href="/dashboard/posts" class="flex items-cente {{ Request::is('dashboard/posts*') ? 'bg-sky-400' : '' }} w-full py-2 px-4 rounded-full transform transition duration-200">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
                        </svg>
                        My Posts
                    </a>
                </li>
                <li x-data="{isOpen : false}">
                    <button class="flex items-center w-full py-2 px-4 rounded-full transform transition duration-200" @click="isOpen = true" @keydown.escape="isOpen=false">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 3.055A9.001 9.001 0 1020.945 13H11V3.055z" />
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20.488 9H15V3.512A9.025 9.025 0 0120.488 9z" />
                        </svg>
                        Features
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 absolute right-3" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                          </svg>
                    </button>
                    <div class="ml-9 lg:ml-12 space-y-2 bg-gray-900 lg:bg-gray-600 w-auto lg:w-full p-3 rounded-l-md" x-show="isOpen" @click.away="isOpen=false">
                        <div>
                            <a href="">items 1</a>
                        </div>
                        <div>
                            <a href="">items 2</a>
                        </div>
                        <div>
                            <a href="">items 3</a>
                        </div>
                    </div>
                </li>
                <li>
                    <a href="#" class="flex items-center w-full py-2 px-4 rounded-full transform transition duration-200">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                        Pricing
                    </a>
                </li>
                <li>
                    <a href="#" class="flex lg:hidden hover:bg-gray-500 w-full py-2 px-4 rounded-full transform transition duration-200">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 mr-2 cursor-pointer" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1" />
                            </svg>
                        Logout
                    </a>
                </li>
            </ul>
        </nav>
        
        <div class="col-span-4 lg:ml-[17rem]">
            <!-- navbar -->
            @include('dashboard.layouts.navbar')
        </div>
    </div>

    <!-- content -->
    <div class="grid grid-cols-5 lg:mt-20">
        <div class="col-span-1"></div>
        <div class="grid col-span-5 lg:col-span-4">
            <div class="px-10">
                @yield('content')            
            </div>
        </div>
    </div>

</body>
</html>