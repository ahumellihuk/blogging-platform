@extends('layout')

@section('content')
	@foreach($posts as $post)
		{{ $post }}
	@endforeach
@stop
