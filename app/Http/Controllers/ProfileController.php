<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use DB;

class ProfileController extends Controller
{
  public function index()
  {
    $cquery = DB::table('commissions')
      ->where('artist_id', '=', Auth::id());
    $commissions = $cquery->get();

    return view('profile.index',[
      'user' => Auth::user(),
      'commissions' => $commissions
    ]);
  }

  public function edit()
  {
    return view('profile.edit');
  }
}
