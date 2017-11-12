<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Response;
use App\Wish;

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
        $rsvp = Response::orderBy('created_at', 'desc')->get();
        $wishes = Wish::orderBy('created_at', 'desc')->get();
        return view('home', compact('rsvp', 'wishes'));
    }
}
