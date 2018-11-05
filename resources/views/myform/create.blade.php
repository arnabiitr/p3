@extends('layouts.master')

@section('title')
    Arnab's Project 3
@endsection

@section('content')

    <h1>Find Count</h1>

    <h5 class="text-center">The program counts the number of email occurrences </h5>
    <h5 class="text-center">in  the inputed text in the comments and appends the count to the website url </h5>
    <h6 class="text-center">e.g for the below input the result will be Website: http://p3.dwa-fall2018-arnab.me/2</h6>

    <form method='POST' action='/myform'>
        <div class='details'>* Required fields</div>
        {{ csrf_field() }}


        <div class="form-group">

        <label for='email'>* Email (required|email)</label>
        @if(count($errors) > 0)
        <input type='text' name='email' id='email' value='{{old('email')}}'>
        @else
        <input type='text' name='email' id='email' value='{{$email}}'>
        @endif
        </div>
        @include('modules.field-error', ['field' => 'email'])


         <div class="form-group">
        <label for='url'>Website: (required|url)</label>
        @if(count($errors) > 0)
        <input type='text' name='url' id='url' value='{{old('url')}}'>
        @else
        <input type='text' name='url' id='url' value='{{$url}}'>
        @endif
        @include('modules.field-error', ['field' => 'url'])
         </div>

        <div class="form-group">
        <input type='checkbox' name='duplicate' id='duplicate' {{ ($duplicate) ? 'checked' : '' }}><label for='duplicate'>* Duplicate</label>
        </div>
        <p></p>

        <div class="form-group">
        <label for='comment'>Comment (required)</label>
        @if(count($errors) > 0)
            <textarea name="comment" id="comment" rows="5" cols="40" >{{old('comment')}}</textarea>
        @else
            <textarea name="comment" id="comment" rows="5" cols="40" >{{$comment}}</textarea>
        @endif
        @include('modules.field-error', ['field' => 'comment'])
        </div>



        <input type='submit' value='submit' class='btn btn-primary'>
    </form>

    @if($count)

        <div class="text-center">
        <h2>Results for query the final url is: <em>{{$url}}/{{ $count }}</em></h2>


        @else
        <h2>Results for query are zero </h2>


    @endif

    @if(count($errors) > 0)
        <div class='alert alert-danger'>
           Please correct the errors above.
        </div>
    @endif
@endsection