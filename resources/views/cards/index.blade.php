@extends('master')

@section('content')

	<h2>Crads Page</h2>
	<hr>

	@foreach ($cards as $card)

		<div>
			
			<a href='{{ url("cards/$card->id") }}'>{{ $card->title }}</a>

		</div>

	@endforeach

@endsection