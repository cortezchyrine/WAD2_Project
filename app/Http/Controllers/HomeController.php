<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\borrowers;
use DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $books = borrowers::all();
        // echo $data;
        return view('home', compact('books'));
    }
    public function inputs()
    {
        return view('input_user');
    }
    
}
