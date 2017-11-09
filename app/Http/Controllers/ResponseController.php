<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Response;
use Session;

class ResponseController extends Controller
{
  public function save(Request $request)
  {
    $this->validate(request(),[
      'rsvpName' => 'required',
      'rsvp' => 'required'
    ]);

    $rsvp = Response::create([
      'name' => request('rsvpName'),
      'rsvp' => request('rsvp')
    ]);

    return $rsvp;
  }

  public function saveForm(Request $request)
  {
    $this->validate(request(),[
      'rsvpName' => 'required',
      'rsvp' => 'required'
    ]);

    $rsvp = Response::create([
      'name' => request('rsvpName'),
      'rsvp' => request('rsvp')
    ]);

    return redirect()->route('home');
  }
}
