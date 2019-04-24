<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
  public function index($profileId=null)
  {
    return view('profile.index');
  }

  public function edit($profileId=null)
  {
    return view('profile.edit');
  }
}
