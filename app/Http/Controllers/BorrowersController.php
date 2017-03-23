<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\borrowers;

class BorrowersController extends Controller
{
    public function forms(Request $request)
    {
        $borrowersname = $request->borrowersname;
        $course = $request->course;
        $date_loaned = $request->date_loaned;
        $author = $request->author;
        $title = $request->title;
        $date_returned = $request->date_returned;

        $borrow = new borrowers;
        // echo $borrow;
        $borrow->borrowersname=$borrowersname;
        $borrow->course=$course;
        $borrow->date_loaned=$date_loaned;
        $borrow->author=$author;
        $borrow->title=$title;
        $borrow->date_returned=$date_returned;
        $borrow->save();
        // echo $borrow;
        \Session::flash('chy', 'OK!');
        return redirect('/home');

    }
    public function delete(Request $request, $id){
    	$danger = borrowers::find($id);
    	$danger->delete();
    	return back();

    }
    public function edit(Request $request, $id){
    	$edit = borrowers::find($id);
    	return view('edit_input', compact('edit'));
    }
    public function save(Request $request, $id){
    	$borrowersname = $request->borrowersname;
        $course = $request->course;
        $date_loaned = $request->date_loaned;
        $author = $request->author;
        $title = $request->title;
        $date_returned = $request->date_returned;

        $borrow = borrowers::find($id);
       	echo $borrow;
        $borrow->borrowersname=$borrowersname;
        $borrow->course=$course;
        $borrow->date_loaned=$date_loaned;
        $borrow->author=$author;
        $borrow->title=$title;
        $borrow->date_returned=$date_returned;
        $borrow->save();
     
        \Session::flash('chy', 'Edited inputs has saved!');
        return redirect('/home');

    }
}
