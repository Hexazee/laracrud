@extends('layouts.app')

@section('content')
    <h1 class="text-2xl text-gray-200 text-center">Hello {{ auth()->user()->name }}</h1>
@endsection