<header class="flex lg:fixed w-full mb-2 items-center justify-between px-5 py-2.5 lg:px-10 lg:py-5 bg-gray-700 text-gray-100 z-50" x-data="{dropdownLogout : false}">
    <form action="">
        <input type="text" class="w-[20rem] lg:w-[26rem] py-[0.25rem] px-3 rounded-xl focus:outline-none focus:ring focus:ring-sky-500 text-gray-600" placeholder="Search...">
    </form>
    <button @click="open = true" class="lg:hidden" :class="{'hidden':open === true}">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
    </svg>
    </button>
        @auth
        <div class="hidden md:flex text-md text-gray-200 space-x-1 mr-[17rem]">
            <button @click="dropdownLogout = !dropdownLogout" 
            @keydown.escape="dropdownLogout = false" >
                <p class="cursor-pointer">
                    {{ auth()->user()->username }}<svg xmlns="http://www.w3.org/2000/svg" class="inline-block ml-2 mb-1" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img" width="10" height="10" preserveAspectRatio="xMidYMid meet" viewBox="0 0 616 614"><path d="M602.442 200l-253 317c-24 29-61 29-84 0l-253-317c-24-30-12-53 25-53h540c38 0 49 23 25 53z" fill="#e5e7eb"/></svg>
                </p>
            </button>
        </div>
        <div class="absolute right-14 top-16 bg-gray-700 px-5 py-2 w-40 rounded text-gray-300 space-y-2 mr-[16rem] mt-3" 
            x-show="dropdownLogout" 
            @click.away="dropdownLogout = false" 
            x-transition:enter="transition ease-out duration-300"
            x-transition:enter-start="opacity-0 scale-90"
            x-transition:enter-end="opacity-100 scale-100"
        >
            <a href="/">Home</a>
            <form action="logout/" method="POST">
                @csrf
                <button type="submit">Logout</button>
            </form>
        </div>
        @endguest
</header>