@extends('layouts.master')

@section('content')
    <h1>Register</h1>

    Already have an account? <a href='/login'>Login here...</a>

    <form method='POST' action='{{ route('register') }}'>
        {{ csrf_field() }}

        <div class="form-group top-spacing">
        <label for='name'>Name</label>
        <input id='name' class="form-control" type='text' name='name' value='{{ old('name') }}' required autofocus>
        @include('modules.field-error', ['field' => 'name'])
        </div>

        <div class="form-group">
        <label for='email'>E-Mail Address</label>
        <input id='email' class="form-control" type='email' name='email' value='{{ old('email') }}' required>
        @include('modules.field-error', ['field' => 'email'])
        </div>

        <div class="form-group">
        <label for='password'>Password (min: 6)</label>
        <input id='password' class="form-control" type='password' name='password' required>
        @include('modules.field-error', ['field' => 'password'])
        </div>

        <div class="form-group">
        <label for='password-confirm'>Confirm Password</label>
        <input id='password-confirm' class="form-control" type='password' name='password_confirmation' required>
        </div>

        <button type='submit' class='btn btn-primary'>Register</button>
    </form>
@endsection

