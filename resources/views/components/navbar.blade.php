
<nav class="bg-gray-700 py-3 px-5 md:px-12 shadow-sm shadow-gray-800">
    <!-- for mobile -->
    <div class="md:hidden flex items-center justify-between">
        <div class="text-2xl text-gray-100 underline decoration-sky-400">
            <h2>Hello World</h2>
        </div>
        
            <button id="btn-mobile">
                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img" width="2em" height="2em" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24"><g fill="none"><path d="M21 18H3v-2h18v2zm0-5H3v-2h18v2zm0-5H3V6h18v2z" fill="#fff"/></g></svg>
            </button>
        
    </div>

    <!-- mobile menu -->
    <div class="hidden absolute bg-gray-700 w-52 mt-5 right-0 py-5 px-3 mr-2 shadow-sm shadow-gray-800 rounded" id="menu-mobile">
        <div class="flex justify-end -mt-2" id="btn-close">
            <button>
                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img" width="2em" height="2em" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24"><g fill="none"><path d="M17.59 5L12 10.59L6.41 5L5 6.41L10.59 12L5 17.59L6.41 19L12 13.41L17.59 19L19 17.59L13.41 12L19 6.41L17.59 5z" fill="#fff"/></g></svg>
            </button>
        </div>

        <ul class="space-y-3 text-gray-300 text-lg">
            <li class="nav-link-mobile"><a href="/">Home</a></li>
            <li class="nav-link-mobile"><a href="posts/">Posts</a></li>
            <li class="nav-link-mobile"><a href="#">About</a></li>
            <li class="nav-link-mobile"><a href="#">Contact Us</a></li>
            <li>
                <a href="{{ route('login') }}" class="block border border-sky-400 p-1 text-center rounded-lg hover:bg-gradient-to-br from-sky-400 to-green-400 hover:text-gray-100">Login</a>
            </li>
        </ul>
    </div>

    <!-- for medium > | Breakpoints -->
    <div class="hidden md:flex items-center justify-between">
        <div class="text-2xl underline decoration decoration-sky-400 font-semibold">
            <h2 class="text-gray-100">Hello World!</h2>
        </div>
        <div>
            <ul class="flex space-x-4 text-lg">
                <li class="nav-link"><a href="/">Home</a></li>
                <li class="nav-link"><a href="#posts">Posts</a></li>
                <li class="nav-link"><a href="">About</a></li>
                <li class="nav-link"><a href="">Contact Us</a></li>
            </ul>
        </div>
        
            <a href="{{ route('login') }}" class="px-7 py-2 border text-gray-200 border-sky-400 rounded-lg font-semibold hover:bg-gradient-to-br from-sky-400 to-green-400 hover:outline-none hover:text-gray-100 hover:-translate-y-1 transform transition block
            ">Login</a>
        
    </div>
</nav>