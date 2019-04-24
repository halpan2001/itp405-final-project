<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CommissionController extends Controller
{
  public function home()
  {
    return view('/home');
  }

  public function index($commissionId=null)
  {
    return view('commissions.index');
  }

  public function create()
  {
    return view('commissions.create');
  }

  public function edit($commissionId=null)
  {
    return view('commissions.edit');
  }
}
