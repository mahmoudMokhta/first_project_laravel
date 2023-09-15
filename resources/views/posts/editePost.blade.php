@extends('layout.header')

@section("title","Edite_Post")

@section("content")
<div class="container">
    <h1> Edite Post</h1>
    <form action="{{route('posts.update',$post["id"])}}" method="post">

        @method('PUT')
        @csrf
        <div class="form-group mb-3">
            <label for="title">Title</label>
            <input value="{{$post["title"]}} "  type="text" name="title" class="form-control" id="title" aria-describedby="emailHelp">
               <span class="text-danger">@error('title') {{$message}} @enderror</span>
        </div>
        <div class="form-group mb-3">
            <label for="body">Body</label>
            <textarea name="body" id="body" cols="30" rows="5" class="form-control"> {{$post["body"]}}</textarea>
               <span class="text-danger">@error('body') {{$message}} @enderror</span>
        </div>
        <button type="submit" class="btn btn-outline-dark">Edite Post</button>
    </form>
</div>

@endsection
