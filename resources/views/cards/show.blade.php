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

			<li class="list-group-item"> 
				
				{{ $note->body }}

  				<a href="#" class="pull-right">{{ $note->user->name }}</a>

			</li>

			@endforeach
		</ul>
		<hr>

		<h4>Add A New Note</h4>
		
		{!! Form::open(array('action' => array('NotesController@store', $card->id))) !!}
	
			@include('partials.form', ['submitBtnTxt' => 'Add Note', 'value' => null  ])

		{!! Form::close() !!}

		@if (count($errors))

			<ul class="alert alert-danger">

				@foreach ($errors->all() as $error)

					<li> {{ $error }} </li>

				@endforeach
				
			</ul>

		@endif


	</div>
</div>
@endsection