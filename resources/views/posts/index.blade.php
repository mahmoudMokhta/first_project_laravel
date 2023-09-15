@extends('layout.header')

@section('title', 'Posts')

@section('content')
    <div class="container">

        <div>
            <h1>Posts</h1>
        </div>
        <div class="text-center">
            <a href="{{ route('posts.create') }}" class="btn btn-outline-dark">Create Post</a>
        </div>
        <div>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Title</th>
                        <th scope="col">Description</th>
                        <th scope="col">Created at</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($posts as $post)
                        <tr>
                            <th scope="row">{{ $post->id }}</th>
                            <td>{{ $post->title }}</td>
                            <td>{{ $post->body }}</td>
                            <td>{{ $post->created_at }}</td>
                            <td class="d-flex ">

                                <form action="{{ route('posts.edit', $post->id) }}" method="POST" >
                                    @csrf
                                    <button type="submit" class="btn btn-outline-success">Edit</button>
                                </form>
                                <form class="mx-2" action="{{ route('posts.destroy', $post->id) }}" method="POST" >
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-outline-danger">Delete</button>
                                </form>

                            </td>
                        </tr>
                        @endforeach
                </tbody>
            </table>
        </div>

    </div>

@endsection
