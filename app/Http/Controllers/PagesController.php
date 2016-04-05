<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class PagesController extends Controller
{
    //

     public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('admin');
    }

    //only user with name 'FrankAdminGreen' can access this page, check MustBeAdmin middleware.

    public function about()
    {
    	$person = ['Taylor Otwell', 'Jeffery Way', 'Sander van Doorn'];

    	return view('pages.about', compact('person'));
    }
}
