<nav>
	<h2>CRUD Navigation</h2>
	<ul>
		<li>
			<a href="{{ route('tweets.index') }}">
				Index
			</a>
		</li>

		<li>
			@auth
			<a href="{{ route('tweets.create') }}">
				Edit
			</a>
		</li>
			@endauth
			<li>
				<a href="{{ route('teams')}}">
					Teams
				</a>
			</li>
		</ul>
