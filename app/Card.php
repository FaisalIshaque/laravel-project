<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Card extends Model
{
    //
	protected $fillable = [
		'title'
	];

    public function notes()
    {
    	return $this->hasMany('App\Note');
    }

    public function addNote(Note $note)
    {
        return $this->notes()->save($note);
    }
}
