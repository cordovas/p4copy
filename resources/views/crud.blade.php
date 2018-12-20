
@extends('layouts.master')

@section('title')
    {{ $message->id }}
@endsection

@section('content')
    <h1><strong>Message Id:</strong>{{ $message->id }}</h1>

    <div>
        <p><strong>Name </strong> {{ $message->name }} </p>
        <p><strong>Location </strong> ({{ $message->location}})</p>
        <p><strong>Story</strong>{{ $message->story }}</p>


        <ul>

            <li><a href='/messages/{{ $message->id }}/edit'><i class="fas fa-pencil-alt"></i> Edit</a>
            <li><a href='/messages/{{ $message->id }}/delete'><i class="fas fa-trash-alt"></i> Delete</a>
        </ul>
    </div>
@endsection

