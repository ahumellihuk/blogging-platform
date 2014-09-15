@extends('layout')

@section('content')
	<profile>
		<ul>
			<li>
				<span>Name:</span>
				<span>{{ $user->name }}</span>
			</li>
			<li>
				<span>Email:</span>
				<span><a href='mailto:{{ $user->email }}'>{{ $user->email }}</a></span>
			</li>
		</ul>
	</profile>
@stop
