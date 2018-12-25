@extends('layouts.master')

@section('title')
    Delete Fox News!
@endsection

@section('content')



    <form action='/messages/{{$message->id}}' method='POST'>
        {{ csrf_field() }}
        {{method_field('put') }}

        <div class="form-group top-spacing">
            <label for="usr">Name:*</label>

            @if($errors->get('name'))
                <small id="emailHelp" class="form-text">
                    <div class='error'>{{ $errors->first('name') }}</div>
                </small>
            @endif

            <input type="text" class="form-control" id="usr" name='name' value='{{ $message->name}}'>

        </div>


        <div class="form-group">
            <label for="pwd">Location*</label>
            @if($errors->get('location'))
                <small id="emailHelp" class="form-text">
                    <div class='error'>{{ $errors->first('location') }}</div>
                </small>
            @endif
            <input type="text" class="form-control" id="pwd" name='location' value='{{ $message->location}}'>
        </div>


        <div class="form-group">
            <label for="story">Tell us your story: (500 character limit)*</label>
            @if($errors->get('story'))
                <small id="emailHelp" class="form-text">
                    <div class='error'>{{ $errors->first('story') }}</div>
                    {{--<div class='error'>{{ $message->('story') }}</div>--}}

                </small>
            @endif

            <textarea placeholder='How has Fox News ruined your relationship with loved ones?'
                      id="story"
                      class='form-control'
                      name="story"
                      rows="5">{{ $message->story}}</textarea>
        </div>

        <p class='requiredText textColor right'> * Required fields </p>


        <label>Who are you trying to save?</label>

        @foreach($tags as $tagId => $tagName)
            <div class="form-group form-check">
                <label class="form-check-label">
                    <input
                            {{ (in_array($tagId, $tagsForThisMessage)) ? 'checked' : '' }}
                            type='checkbox'
                            class="form-check-input"
                            name='tags[]'
                            value='{{ $tagId }}'>
                    {{ $tagName }}
                </label>
            </div>
        @endforeach

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>


@endsection

