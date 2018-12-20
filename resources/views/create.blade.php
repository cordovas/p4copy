@extends('layouts.master')

@section('title')
    Delete Fox News!
@endsection

@section('content')



    <form action='/messages/search' method='POST'>
        {{ csrf_field() }}

        <div class="form-group top-spacing">
            <label for="usr">Name:*</label>

            @if($errors->get('name'))
                <div class='error'>{{ $errors->first('name') }}</div>
            @endif

            {{--@if(count($errors) > 0)--}}

            {{--<input type="text" class="form-control" id="usr" name='name'>--}}
                {{--<small id="emailHelp" class="form-text">--}}
                    {{--@foreach($errors->all() as $error)--}}
                        {{--{{$error}}--}}
                    {{--@endforeach--}}
                {{--</small>--}}
            {{--@else--}}
            <input type="text" class="form-control" id="usr" name='name'>

        </div>


        <div class="form-group">
            <label for="pwd">Location*</label>
            @if($errors->get('location'))
                <div class='error'>{{ $errors->first('location') }}</div>
            @endif
            <input type="text" class="form-control" id="pwd" name='location'>
        </div>


        <div class="form-group">
            <label for="story">Tell us your story: (500 character limit)*</label>
            @if($errors->get('story'))
                <div class='error'>{{ $errors->first('story') }}</div>
            @endif
            {{--@if(count($errors) > 0)--}}
                {{--<textarea placeholder="Describe yourself here..."--}}
                          {{--id="story"--}}
                          {{--class='form-control'--}}
                          {{--name="story"--}}
                          {{--rows="5"></textarea>--}}
                {{--{{old('story')}}--}}


                {{--<small id="emailHelp" class="form-text">--}}
                    {{--@foreach($errors->all() as $error)--}}
                    {{--{{$error}}--}}
                    {{--@endforeach--}}
                {{--</small>--}}
            {{--@else--}}
                <textarea id="story"
                          class='form-control'
                          name="story"
                          rows="5"
                          placeholder="How has Fox News ruined your relationship with loved ones?">
                          {{--{{($story}}--}}
                </textarea>
            {{--@endif--}}
        </div>


        <p class='requiredText textColor right'> * Required fields </p>


        <button type="submit" class="btn btn-primary">Submit</button>
    </form>




@endsection

