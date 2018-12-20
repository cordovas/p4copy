@extends('layouts.master')

@section('title')
    All messages
@endsection

@section('content')



    <section id='allMembers'>
        <h2>All Messages</h2>
        @foreach($messages as $message)
            @include('messagesShow')
        @endforeach
    </section>
@endsection