@extends('master')

@section('content')
<div class="row">
	<div class="col-md-10 col-md-offset-1">

		<h3>{{$card->title}}</h3>
		<hr>

		<p> Created At: {{ $card->created_at }} </p>
		
		<p> Updated At: {{ $card->updated_at }} </p>
		
		<ul class="list-group">
			@foreach ($card->notes as $note)

			<li class="list-group-item"> {{ $note->body }} </li>

			@endforeach
		</ul>
	</div>
</div>
@endsection