@extends('layouts.app')

@section('title')
Show Tweet
@endsection
@section('content')
<h2>{{$tweetUser->name}}</h2>
<p>
	{{$tweet->message}}
</p>
@endsection
