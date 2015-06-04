<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Note extends Model {

	// Attributes that are mass assignable.

	protected $fillable = [
		'title',
		'body',
	];

	// Notes belong to a specific user.

	public function user(){
		return $this->belongsTo('App\User');
	}

}