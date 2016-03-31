@extends('master')

@include('partials.flash')

@section('content')
	
	@if (empty($person))
	
	 No person found 

	@else
		<ul>
			@foreach ($person as $person)
				<li> {{ $person }} </li>
			@endforeach
		</ul>
	@endif
	
@endsection