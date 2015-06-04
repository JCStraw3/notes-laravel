<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

use Auth;

class HomeController extends Controller {

	// If not logged in, view home page.
	// If logged in, redirect to notes page.

	public function viewHome(){

		$user = Auth::user();

		if(!$user){
			return view('viewHome');
		} else {
			return redirect('notes');
		}

	}

}