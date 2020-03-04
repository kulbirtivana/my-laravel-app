@extends('layouts.app')

{{--the title will be unique for each section--}}
@section('title')
Create Tweet Form
@endsection

{{--the content will be unique for each section--}}
@section('content')


<p>Fill out this form to create a Tweet!</p>


@include('partials.errors')
<form method="post" action="{{ route('tweets.store') }}">
@csrf
{{--Cross-site request forgery protection--}}
<label for="message">
<strong>Input a Message:</strong>
<textarea name="message" id="message" cols="30" rows="10"></textarea>
</label>
<label for="author">
	{{--<strong>Author name:</strong>
<input type="text" name="author" id="author">
</label>--}}
<input type="submit" Value="Publish Tweet">
</form>

@endsection
