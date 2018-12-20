@extends('layouts.master')

@section('title')
    All messages
@endsection

@section('content')
    <section>
        <h2>Message ID:{{$messages->id}}</h2>
        {{--@foreach($messages as $message)--}}
            {{--@include('messagesShow')--}}
        {{--@endforeach--}}
    </section>
 @endsection