@extends('layouts.master')

@section('content')

    <h1>Login</h1>

    Don't have an account? <a href='/register'>Register here...</a>

    <form method='POST' action='{{ route('login') }}'>

        {{ csrf_field() }}

        <div class="form-group top-spacing">
        <label for='email'>E-Mail Address</label>
        <input id='email' type='email' class="form-control" name='email' value='{{ old('email') }}' required autofocus>
        @include('modules.field-error', ['field' => 'email'])
        </div>

        <div class="form-group">
        <label for='password'>Password</label>
        <input id='password' type='password' class="form-control" name='password' required>
        @include('modules.field-error', ['field' => 'password'])
        </div>

        <label>
            <input type='checkbox' name='remember' {{ old('remember') ? 'checked' : '' }}> Remember Me
        </label>

        <div>
        <button type='submit' class='btn btn-primary'>Login</button>

        <a class='btn btn-link' href='{{ route('password.request') }}'>Forgot Your Password?</a>
        </div>
    </form>

@endsection
