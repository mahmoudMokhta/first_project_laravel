@extends('layout.header')

@section('title', 'Login')

@section('content')
    <div class="container">
        @if (Session::has('success'))
            <div class="alert alert-success">{{ Session::get('success') }} </div>
        @endif
        @if (Session::has('error'))
            <div class="alert alert-danger">{{ Session::get('error') }} </div>
        @endif
        @if (Session::has('errorNoLogin'))
            <div class="alert alert-danger">{{ Session::get('errorNoLogin') }} </div>
        @endif

        <div>
            <h1 class="text-center my-4">Login</h1>
        </div>

        <div class="card p-4">
            <form action="{{ route('users.check') }} "method="post">
                @csrf
                {{-- @method('post') --}}
                <!-- Email input -->
                <div class="form-outline mb-4">
                    <label class="form-label" for="form1Example1">Email address</label>
                    <input name="email" type="email" id="form1Example1" class="form-control" />
                </div>

                <!-- Password input -->
                <div class="form-outline mb-4">
                    <label class="form-label" for="form1Example2">Password</label>
                    <input name="password" type="password" id="form1Example2" class="form-control" />
                </div>

                <!-- Submit button -->
                <button type="submit" class="btn btn-primary btn-block">Sign in</button>
            </form>
        </div>
    </div>


@endsection
