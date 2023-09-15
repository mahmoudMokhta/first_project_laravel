@extends('layout.header')

@section("title","Create_Post")

@section("content")
<div class="container">
    <h1> Create Post</h1>
    <form action="{{route('posts.store')}}" method="post">
        @csrf
        <div class="form-group mb-3">
            <label for="title">Title</label>
            <input value="{{old('title')}}" type="text" name="title" class="form-control" id="title" aria-describedby="emailHelp">
               <span class="text-danger">@error('title') {{$message}} @enderror</span>
        </div>
        <div class="form-group mb-3">
            <label for="body">Body</label>
            <textarea name="body" id="body" cols="30" rows="5" class="form-control">{{old('body')}} </textarea>
               <span class="text-danger">@error('body') {{$message}} @enderror</span>
        </div>
        <button type="submit" class="btn btn-outline-dark">Create Post</button>
    </form>
</div>

@endsection
