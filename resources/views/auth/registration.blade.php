@extends('template.dlogin')
@section('content')
<form action="{{ route('register.custom') }}" method="POST">
    @csrf
    <div class="login-container">
        <div class="login-box" style="width: 500px; height:400px">
        <!-- <div class="kiri"> -->
            <div class="login-box-content">
                <h1 class="title">Welcome back!</h1>
                <h4 class="subtitle">We're so excited to see you again!</h4>
                <label for="username">Username</label>
                <input type="text" placeholder="name" id="username" class="form-control" name="name" required autofocus>
                <label for="password">Password</label>
                <input type="password" placeholder="Password" id="password" class="form-control" name="password" required>
                <div class="submit">
                <button type="submit" name="btn_login" class="btn btn-success mb-2">Register</button>
                <p style="margin: 0; margin-top:5px;">Already have an account <a class="register" href="{{ url('login') }}">Login</a></p>
                </div>
                </div>
                    </div>	
                     </div>
    {{-- <div class="form-group mb-3">
        <input type="text" placeholder="Name" id="name" class="form-control" name="name"
            required autofocus>
        @if ($errors->has('name'))
        <span class="text-danger">{{ $errors->first('name') }}</span>
        @endif
    </div>
    <div class="form-group mb-3">
        <input type="password" placeholder="Password" id="password" class="form-control"
            name="password" required>
        @if ($errors->has('password'))
        <span class="text-danger">{{ $errors->first('password') }}</span>
        @endif
    </div>
    <div class="form-group mb-3">
    </div>
    <div >
        <button type="submit" class="btn btn-dark btn-block">Sign up</button>
    </div> --}}
</form>
@endsection