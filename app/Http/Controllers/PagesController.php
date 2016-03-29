<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class PagesController extends Controller
{
    //

    public function welcome()
    {
    	return view('pages.welcome');
    }

    public function about()
    {
    	$person = ['Taylo', 'Mark', 'Sander'];

    	return view('pages.about', compact('person'));
    }
}
