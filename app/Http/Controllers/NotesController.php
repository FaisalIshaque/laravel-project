<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Card;

use App\Note;


class NotesController extends Controller
{
    //
	public function store(Request $request, Card $card)
	{
		$this->validate($request,[

			'body' => 'required | min:5'

			]);


		$note = new Note($request->all());

		$note->user_id = 2;

		$card->addNote($note);

		return back();
		/*method-1
		$note = new Note;

		$note->body = $request->body;

		$card->notes()->save($note);
		*/

		/*method-2
		$card->notes()->save(

			new Note(['body' => $request->body])

		);
		*/

		/*method-3
		$card->notes()->create([

		'body' => $request->body

		]);
		*/

		/*method-4
		$card->notes()->create($request->all());
		*/		

	}

	public function edit(Note $note)
	{
		return view('notes.edit', compact('note'));
	}

		public function update(Request $request, Note $note, Card $card)
	{
		$note->update($request->all());

		return back();
		//return view('cards.show');
	}

}
