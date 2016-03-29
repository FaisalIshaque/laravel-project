@extends('master')

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