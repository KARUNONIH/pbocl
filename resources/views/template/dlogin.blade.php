<!DOCTYPE html>
<html>
<head>
    <title>Login | PBO</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ url('css/login.css') }}">
</head>
<body>
    <nav class="navbar navbar-dark bg-dark navbar-expand-lg mb-5" >
        <div class="container">
            <a class="navbar-brand mr-auto" href="#">Tugas PBO</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                {{-- <ul class="navbar-nav">
                    
                    <li class="nav-item">
                        <a class="nav-link " href="{{ route('login') }}">Login</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('register-user') }}">Register</a>
                    </li>
                    
                </ul> --}}
            </div>
        </div>
    </nav>
    @yield('content')
</body>
</html>