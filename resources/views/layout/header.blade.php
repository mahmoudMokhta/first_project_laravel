<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('./css/bootstrap.css') }}">
    <title> @yield('title')</title>
</head>

<body>
    <header>
        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container">
                <button class="navbar-toggler" type="button" data-mdb-toggle="collapse"
                    data-mdb-target="#navbarExample01" aria-controls="navbarExample01" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <i class="fas fa-bars"></i>
                </button>
                <div>
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <a class="navbar-brand" href="/">Home</a>

                        @if (isset(Session::get('user')["id"]))
                        <li class="nav-item">
                            <a class="nav-link" href="{{'posts'}}">Posts</a>
                        </li>
                        @endif
                    </ul>
                </div>
                <div class="collapse navbar-collapse" id="navbarExample01">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        @if (isset(Session::get('user')["name"]))
                        <li class="nav-item">
                            <a class="nav-link" href="#">Welcome {{Session::get('user')["name"]}} </a>
                        </li>
                        <li class="nav-item">
                            <a class="btn btn-success" href="{{route('users.profile')}}">Profile</a>
                        </li>
                        <li class="nav-item">
                            <a class=" btn btn-danger mx-2" href="{{route('users.logout')}}">Logout</a>
                        </li>


                          @else
                          <li class="nav-item">
                            <a class="nav-link" href="/register">Register</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/login">Login</a>
                        </li>
                        @endif


                    </ul>
                </div>
            </div>
        </nav>
        <!-- Navbar -->
@yield('content')

    </header>

</body>

</html>
