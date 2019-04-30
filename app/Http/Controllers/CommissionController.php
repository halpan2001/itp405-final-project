<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use App\Commission;
use DB;
use Auth;

class CommissionController extends Controller
{
  public function post(Request $request){

    $commission = new Commission();
    $commission->title = request('title');
    $commission->description = request('description');
    $commission->price = request('price');
    $commission->slots = request('slots');
    $commission->paid = True;
    $commission->workTime = request('workTime');
    $commission->artist_id = Auth::id();

    //Store image into the folder (if image inputed)
    $image = $request->file('image');
    $extension = $image->getClientOriginalExtension();
    Storage::disk('public')->put($image->getFilename().'.'.$extension,  File::get($image));

    $commission->mime = $image->getClientMimeType();
    $commission->original_filename = $image->getClientOriginalName();
    $commission->imagename = $image->getFilename().'.'.$extension;

    $commission->save();

    return redirect('/profile');
  }

  public function delete($commissionId=null){

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
    $cquery = DB::table('commissions')
      ->where('id', '=', $commissionId);
    $commission = $cquery->first();

    return view('commissions.edit', [
      'commission' => $commission
    ]);
  }

  public function update($commissionId=null){

  }

  public function byebye($commissionId=null){
    $query= DB::table('commissions')
      ->where('id', '=', $commissionId);
    $deleted = $query->delete();

    return redirect('/profile');

  }
}
