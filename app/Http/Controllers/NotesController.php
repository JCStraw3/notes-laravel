<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

use App\Note;

use Auth;

class NotesController extends Controller {

// Middleware

	// Only authenticated users can see certain pages.

	public function __construct(){
		$this->middleware('auth');
	}

// Will need to figure something else out for passing $user to the view
// other than passing it on every controller.
// Will also need to figure out view partials.

// Views

	// View all notes.

	public function viewReadAll(){

		// Display notes attached to a specific user.

		$user = Auth::user();

		$notes = Note::where('user_id', '=', $user->id)->latest()->get();

		return view('notes.viewReadAll')->with('notes', $notes)->with('user', $user);

	}

	// View one note.

	public function viewReadOne($id){

		$user = Auth::user();

		$note = Note::where('user_id', '=', $user->id)->findOrFail($id);

		return view('notes.viewReadOne')->with('note', $note)->with('user', $user);

	}

	// View page to create a note.

	public function viewCreate(){

		$user = Auth::user();

		return view('notes.viewCreate')->with('user', $user);

	}

	// View page to update a note.

	public function viewUpdate($id){

		$user = Auth::user();

		$note = Note::where('user_id', '=', $user->id)->findOrFail($id);

		return view('notes.viewUpdate')->with('note', $note)->with('user', $user);

	}

// Actions

	// Create a new note to the database.

	public function actionCreate(Requests\CreateNoteRequest $request){

		$note = new Note($request->all());

		Auth::user()->notes()->save($note);

		return redirect('notes');

	}

	// Update an existing note in the database.

	public function actionUpdate($id, Requests\UpdateNoteRequest $request){

		$user = Auth::user();

		$note = Note::where('user_id', '=', $user->id)->findOrFail($id);

		$note->update($request->all());

		return redirect('notes');

	}

	// Delete a note from the database.

	public function actionDelete($id){

		$user = Auth::user();

		$note = Note::where('user_id', '=', $user->id)->findOrFail($id);

		$note->delete($note);

		return redirect('notes');
	}

}