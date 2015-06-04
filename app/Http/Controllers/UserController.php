<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

use App\User;

use Auth;

class UserController extends Controller {

// Middleware

	// Only authenticated users can see certain pages.

	public function __construct(){
		$this->middleware('auth');
	}

// Will need to figure something else out for passing $user to the view
// other than passing it on every controller.
// Will also need to figure out view partials.

// Views

	// View a single user's profile.

	public function viewReadOne($id){

		$user = User::findOrFail($id);

		return view('user.viewReadOne')->with('user', $user);

	}

	// View the page to update user information.

	public function viewUpdate($id){

		$user = User::findOrFail($id);

		return view('user.viewUpdate')->with('user', $user);

	}

// Actions

	// Update user information in the database.

	public function actionUpdate($id, Requests\UpdateUserRequest $request){

		$user = User::findOrFail($id);

		$user->update($request->all());

		return redirect('notes');

	}

}
