<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Wish;
use Session;

class WishController extends Controller
{
  public function save(Request $request)
  {
    $this->validate(request(),[
      'wishName' => 'required',
      'wishMessage' => 'required'
    ]);

    $wish = Wish::create([
      'name' => request('wishName'),
      'wish' => request('wishMessage')
    ]);

    return $wish;
  }

  public function saveForm(Request $request)
  {
    $this->validate(request(),[
      'wishName' => 'required',
      'wishMessage' => 'required'
    ]);

    $wish = Wish::create([
      'name' => request('wishName'),
      'wish' => request('wishMessage')
    ]);

    return redirect()->route('home');
  }
}
