@extends('layouts.app')

@section('title')
Teams & Users Index
@endsection
@section('content')
@if (session()->get('success'))
<div role="alert">
	{{ session()->get('success')}}
</div>
@endif
<p>List of Teams</p>
<ul>
	@foreach ( $teamAndUsers as $tu)
	<li>
		<h2>{{ $tu->team->team_name}}</h2>
		@if( isset ($tu->users) && !empty( $tu->users))
		<ul>
			@foreach( $tu->users as $tUser )
			<li>
				<h3>{{ $tUser->name}}</h3>
				<dl>
					<dt>ID:</dt>
					<dd>{{ $tUser->id}}</dd>
					<dt>E-Mail:</dt>
					<dd>{{ $tUser->email}}</dd>
				</dl>
			</li>
			@endforeach
		</ul>
		@endif
	</li>
	@endforeach
</ul>
@endsection