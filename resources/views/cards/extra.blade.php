
<form method="POST" action="/Project/public/cards/{{ $card->id }}/notes">

			<div class="form-group">
				<input name="body" class="form-control"></input>
			</div>

			<div class="form-group">
				<button type="submit" class="btn btn-primary">Add Note</button>
			</div>
			
		</form>

{!! Form::open(array('url' => 'cards/$card->id/notes)) !!}
	
	<div class="form-group">

		{!! Form::label('body', 'Note:') !!}
		{!! Form::text('body', null, ['class' => 'form-control']) !!}

	</div>

	<div class="form-group">

		{!! Form::submit('Add Note', ['class' => 'btn btn-primary form-control']) !!}

	</div>

{!! Form::close() !!}


	
		{!! Form::open(array('action' => array('NotesController@store', $card->id))) !!}
		
		{!! Form::open(array('url' => "cards/" . $card->id . "/notes")) !!}

		@include('partials.form', ['submitBtnTxt' => 'Add Note', 'body' => " $note->body "])


		<div class="form-group">

				{!! Form::text('body', " $note->body " , ['class' => 'form-control']) !!}

			</div>

			<div class="form-group">

				{!! Form::submit('Add Note', ['class' => 'btn btn-primary form-control']) !!}

			</div>
