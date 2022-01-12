@extends('dashboard.layouts.app')

@section('content')
<h1 class="text-3xl text-gray-100 font-sans border-b-2 pb-2 mt-5">
    Welcome back, {{ auth()->user()->name }}
</h1>
@endsection