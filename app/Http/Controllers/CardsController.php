<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

Use App\Card;

use App\Note;

use App\User;

class CardsController extends Controller
{
    //
    public function index()
    {
    	$cards = Card::all();

    	return view('cards.index', compact('cards'));
    }

    public function show(Card $card)
    {
        $card->load('notes.user');

        return view('cards.show', compact('card'));
    }

    public function create()
    {
    	return view('cards.create');
    }

    public function store(Request $request)
    {
        /*$this->validate($request,[

            'body' => 'required | min:5'

            ]);


        $card = new Card($request->all());

        $card->save();

         return redirect('cards');*/

//        method-1
        $cards = new Card;

        $cards->title = $request->body;

        $cards->save();

        return redirect('cards');
        

        /*method-2
        $card->save(

            new Card(['title' => $request->body])

        );
        */
/*
        //method-3
        $cards->create([

        'title' => $request->body

        ]);
        return view('cards.index');
        */

        /*method-4
        $card->create($request->all());
        */      

    }
}
