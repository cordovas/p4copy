@extends('layouts.master')

@section('title')
    Delete Fox News!
@endsection

@section('content')



    <form action='/search' method='GET'>

        <div class="form-group top-spacing">
            <label for="usr">Name:*</label>
            <input type="text" class="form-control" id="usr" name='name'>
        </div>
        <div class="form-group">
            <label for="pwd">Location*</label>
            <input type="text" class="form-control" id="pwd" name='location'>
        </div>


        <div class="form-group">
            <label for="story">Tell us your story: (500 character limit)*</label>
            @if(count($errors) > 0)
                <textarea placeholder="Describe yourself here..."
                          id="story"
                          class='form-control'
                          name="story"
                          rows="5"></textarea>


                <small id="emailHelp" class="form-text">

                </small>
            @else
                <textarea id="story"
                          class='form-control'
                          name="story"
                          rows="5"
                          placeholder="How has Fox News ruined your relationship with loved ones?">
                </textarea>
            @endif
        </div>

        <p class='requiredText textColor right'> * Required fields </p>


        <button type="submit" class="btn btn-primary">Submit</button>
    </form>




@endsection
