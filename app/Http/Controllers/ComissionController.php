<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ComissionController extends Controller
{
  public function home()
  {
    return view('/home');
  }

  public function index($genreId=null)
  {
    return view('comissions.index');
  }

  public function create()
  {
    return view('comissions.create');
  }

  public function edit($genreId=null)
  {
    return view('comissions.edit');
  }

  public function profile()
  {
    return view('/profile');
  }
}
