<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $title }}</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body class="antialiased bg-gray-50">
    <div class="bg-gray-100 shadow-lg mt-5 p-5 mx-32">
        <header class="flex flex-col border-b-2 pb-2">
            <h1 class="text-4xl font-semibold underline decoration-sky-400 mb-5">{{ $title }}</h1>
            <h3 class="text-lg">By : {{ $post->author->name }}</h3>
            <h4 class="text-sm">{{ $post->author->job }}</h4>
            <div class="flex justify-between items-center">
                <h6 class="text-md mt-5 italic">{{ $post->created_at->diffForHumans() }}</h6>
                <a href="/dashboard/posts" class="flex items-center bg-gray-300 rounded px-4 py-2"><svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18" />
                  </svg> Back to post</a>
            </div>
        </header>
        <section class="mt-10">
            {!! $post->body !!}
        </section>
    </div>
</body>
</html>