@extends('layout.header')

@section('title', 'Register')

@section('content')
    <div class="container">
        <div>
            <h1 class="text-center my-4">Register</h1>
        </div>
        <div class="card p-4">
            <form  action="{{route('users.create')}}" >
                @method('POST')
                @csrf
                <!-- Text input -->
                <div class="form-outline mb-4">
                    <label class="form-label" for="form6Example3">Your Name</label>
                    <input value="{{old('name')}}" name="name" type="text" id="form6Example3" class="form-control" />
                    <span class="text-danger">@error('name') {{$message}} @enderror</span>
                </div>
                <!-- Email input -->
                <div class="form-outline mb-4">
                    <label class="form-label" for="form6Example5">Email</label>
                    <input value="{{old('email')}}" name="email" type="email" id="form6Example5" class="form-control" />
                    <span class="text-danger">@error('email') {{$message}} @enderror</span>
                </div>

                <div class="form-outline mb-4">
                    <label class="form-label" for="form6Example4">Password</label>
                    <input  name="password" type="password" id="form6Example4" class="form-control" />
                    <span class="text-danger">@error('password') {{$message}} @enderror</span>
                </div>

                <!-- Submit button -->
                <button name="submit" type="submit" class="btn btn-primary btn-block mb-4">Submit</button>
            </form>
        </div>

    </div>

@endsection
