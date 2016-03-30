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
}
