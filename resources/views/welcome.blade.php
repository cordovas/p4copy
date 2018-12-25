@extends('layouts.master')

@section('content')
    <h2 class='center top-spacing'>Welcome to {{ config('app.name') }}</h2>

    <p>
    @include('modules.description')

@endsection