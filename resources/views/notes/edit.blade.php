@extends('master')

@section('content')

	{!! Form::open(array('url' => "notes/" . $note->id . "", 'method' => "PATCH")) !!}

		@include('partials.form', ['submitBtnTxt' => 'Add Note', 'value' => $note->body  ])

	{!! Form::close() !!}

@stop