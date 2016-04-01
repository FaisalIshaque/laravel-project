@extends('master')

@section('content')

{!! Form::open(array('action' => 'CardsController@store')) !!}

	@include('partials.form', ['submitBtnTxt' => 'Add Card', 'value' => null  ])

{!! Form::close() !!}

@stop