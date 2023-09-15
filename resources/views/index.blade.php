
@extends('layout.header')
@section("title","Home")

@section("content")

     <div class="p-5 text-center bg-light">
        <h1 class="mb-3">Welcome To Posts webSite</h1>
        <h4 class="mb-3">You Can Make Posts Here</h4>
        @if (isset(Session::get('user')["id"]))
        <a class="btn btn-primary" href="{{route('posts.index')}}" role="button">Create Post</a>
        @else
        <a class="btn btn-primary" href="{{route('login.fromHome')}}" role="button">Create Post</a>
        @endif
    </div>
    {{-- {{Session::get('user')['id']}} --}}

@endsection
