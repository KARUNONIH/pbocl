@extends('template.dlogin')
@section('content')


<form method="POST" action="{{ route('login.custom') }}">
    @csrf
    <div class="login-container">
      <div class="login-box">
        <div class="kiri col-8">
          <div class="login-box-content">
            <h1 class="title pt-2">Welcome back!</h1>
            <h4 class="subtitle">We're so excited to see you again!</h4>
            <label for="username">Username</label>
            <input type="text" placeholder="name" id="username" class="form-control" name="name" required autofocus>
            <label for="password">Password</label>
            <input type="password" placeholder="Password" id="password" class="form-control" name="password" required>
            <div class="submit">
              <input type="submit" name="btn_login" value="Login" class="btn btn-success mb-2">
            </div>
            <p>Need an account? <a class="register" href="{{ route('register-user') }}">Register</a></p>
          </div>
        </div>
        <div class="kanan col-4">
          <img src="{{ url('img/g1.png') }}" alt="">
        </div>  
      </div>
    </div>
  </form>
{{-- <main class="login-form">
    <div class="cotainer">
        <div class="row justify-content-center">
            <div class="col-md-4">
                <div class="card">
                    <h3 class="card-header text-center">Login</h3>
                    <div class="card-body">
                        <form method="POST" action="{{ route('login.custom') }}">
                            @csrf
                            <div class="form-group mb-3">
                                <input type="text" placeholder="name" id="name" class="form-control" name="name" required
                                    autofocus>
                                @if ($errors->has('name'))
                                <span class="text-danger">{{ $errors->first('name') }}</span>
                                @endif
                            </div>
                            <div class="form-group mb-3">
                                <input type="password" placeholder="Password" id="password" class="form-control" name="password" required>
                                @if ($errors->has('password'))
                                <span class="text-danger">{{ $errors->first('password') }}</span>
                                @endif
                            </div>
                            <div >
                                <button type="submit" class="btn btn-dark btn-block">Login</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main> --}}
@endsection