<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Commission;
use DB;

class CommissionController extends Controller
{
  public function post(){
    $commission = new Commission();
    $commission->title = request('title');
    $commission->description = request('description');
    $commission->price = request('price');
    $commission->slots = request('slots');
    $commission->paid = True;
    $commission->workTime = request('workTime');
    $commission->save();

    return redirect('/profile');
  }

  public function home()
  {
    $cquery = DB::table('commissions');
    $commissions = $cquery->get();

    return view('/home', [
      'commissions' => $commissions
    ]);
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
