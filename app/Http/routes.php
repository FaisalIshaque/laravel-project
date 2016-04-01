<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
/**
* 
*/


Route::group(['middlewareGroups' => ['web']], function () {

	 
    Route::get('/home', 'HomeController@index');
    Route::get('/', 'HomeController@index');
    Route::get('about', 'PagesController@about');	

	Route::get('cards', 'CardsController@index');
	Route::get('cards/create', 'CardsController@create');
	Route::get('cards/{card}', 'CardsController@show');
	Route::post('cards', 'CardsController@store');


	Route::post('cards/{card}/notes', 'NotesController@store');
	Route::get('notes/{note}/edit', 'NotesController@edit');
	Route::patch('notes/{note}', 'NotesController@update');

	Route::auth();

	Route::get('dummy', function()
	{
		flash('Hello World Status', 'info');
		return redirect('about');
	});

});


/***************************************************************************************************************/
/*class Mailer
{

}

class RegisterUsers
{
	protected $mailer;

	public function __construct(Mailer $mailer)
	{
		$this->mailer = $mailer;
	}

	public function setmailer(Mailer $mailer)
	{
		$this->mailer = $mailer;
	}
}


App::bind('RegisterUsers', function()
{
	return new RegisterUsers(new Mailer);
});

App::singleton('RegisterUsers', function()
{
	return new RegisterUsers(new Mailer);
});
*/
//App::bind 		=> instantiates different objects in $one and $two
//App::singleton	=> instantiates same objects in $one and $two

//when passing RegisterUsers in the bind/singleton method make sure to namespace is.
//in our case we are defining and instantiating RegisterUsers in the same namespace.


/*$one = (app('RegisterUsers'));
$two = (app('RegisterUsers'));

var_dump($one, $two);*/
/*
class Football
{

}

class RegisterUsers
{
	protected $football;

	public function __construct(Football $football)
	{
		$this->football = $football;
	}

	public function setmailer(Football $football)
	{
		$this->football = $football;
	}
}



/*App::singleton('RegisterUsers', function()
{
	return new RegisterUsers(new Football);
});

Route::get('foo', function(RegisterUsers $registration){
	var_dump($registration);
});
*/