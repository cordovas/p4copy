@extends('layouts.master')

@section('title')
    Delete Fox News!
@endsection

@section('content')



    <form action='/messages/post' method='POST'>
        {{ csrf_field() }}

        <div class="form-group top-spacing">
            <label for="usr">Name:*</label>

            @if($errors->get('name'))
                <small id="emailHelp" class="form-text">
                    <div class='error'>{{ $errors->first('name') }}</div>
                </small>
            @endif

            <input type="text" class="form-control" id="usr" name='name' value='{{ old('name')}}'>

        </div>


        <div class="form-group">
            <label for="pwd">Location*</label>
            @if($errors->get('location'))
                <small id="emailHelp" class="form-text">
                    <div class='error'>{{ $errors->first('location') }}</div>
                </small>
            @endif
            <input type="text" class="form-control" id="pwd" name='location' value='{{ old('location')}}'>
        </div>


        <div class="form-group">
            <label for="story">Tell us your story: (500 character limit)*</label>
            @if($errors->get('story'))
                <small id="emailHelp" class="form-text">
                    <div class='error'>{{ $errors->first('story') }}</div>
                </small>
            @endif

            <textarea placeholder='How has Fox News ruined your relationship with loved ones?' id="story" class='form-control' name="story" rows="5">{{ old('story')}}</textarea>
        </div>


        <p class='requiredText textColor right'> * Required fields </p>


        <button type="submit" class="btn btn-primary">Submit</button>
    </form>




@endsection

