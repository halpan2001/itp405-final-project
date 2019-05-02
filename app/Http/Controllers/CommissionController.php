<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use App\Commission;
use Validator;
use DB;
use Auth;

class CommissionController extends Controller
{
  public function post(Request $request){
    $input = $request->all();
    $validation = Validator::make($input, [
        'title' => 'required',
        'description' => 'required|min:5',
        'price' => 'required|numeric',
        'workTime' => 'required|numeric',
        'slots' => 'required|numeric',
        'image' => 'required|file|dimensions:max_width=1000,max_height=1000',
      ]);

      //if validation fails, redirect back to form with errors
      if($validation->fails()){
        return redirect('/commission/create')
          ->withInput() //returns the previous inputs so you can use them
          ->withErrors($validation);
      }

    $commission = new Commission();
    $commission->title = request('title');
    $commission->description = request('description');
    $commission->price = request('price');
    $commission->slots = request('slots');
    $commission->paid = False;
    $commission->workTime = request('workTime');
    $commission->artist_id = Auth::id();

    //Store image into the folder (if image inputed)
    if (request('image') != null){
      $image = $request->file('image');
      $extension = $image->getClientOriginalExtension();
      Storage::disk('public')->put($image->getFilename().'.'.$extension,  File::get($image));

      $commission->mime = $image->getClientMimeType();
      $commission->original_filename = $image->getClientOriginalName();
      $commission->imagename = $image->getFilename().'.'.$extension;
    }


    $commission->save();

    return redirect('/profile');
  }

  public function home(){
    $cquery = DB::table('commissions');
    $commissions = $cquery->get();

    return view('/home', [
      'commissions' => $commissions
    ]);
  }

  public function index($commissionId=null){
    $query = DB::table('commissions')->where('id', '=', $commissionId);
    $commission = $query->first();

    $aquery = DB::table('users')->where('id', '=', $commission->artist_id);
    $artist = $aquery->first();

    $cquery = DB::table('users')
    ->join('purchases', 'users.id', '=', 'purchases.user_id')
    ->where('post_id', '=', $commissionId);
    $customers = $cquery->get();

    return view('commissions.index',[
      'commission' => $commission,
      'artist' => $artist,
      'customers' => $customers
    ]);
  }

  public function create(){
    return view('commissions.create');
  }

  public function edit($commissionId=null){
    $cquery = DB::table('commissions')
      ->where('id', '=', $commissionId);
    $commission = $cquery->first();

    return view('commissions.edit', [
      'commission' => $commission
    ]);
  }

  public function update(Request $request, $commissionId=null){
    $input = $request->all();
    $validation = Validator::make($input, [
        'title' => 'required',
        'description' => 'required|min:5',
        'price' => 'required|numeric',
        'slots' => 'required|numeric',
        'image' => 'file|dimensions:max_width=1000,max_height=1000',
      ]);

      //if validation fails, redirect back to form with errors
      if($validation->fails()){
        return redirect('/commission/'. $commissionId.'/edit')
          ->withInput() //returns the previous inputs so you can use them
          ->withErrors($validation);
      }

    $title = request('title');
    $description = request('description');
    $price = request('price');
    $slots = request('slots');

    if (request('image') != null){
      //Delete old image
      $commission = DB::table('commissions')->where('id', '=', $commissionId)->first();
      Storage::disk('public')->delete($commission->imagename);

      //set new image
      $image = $request->file('image');
      $extension = $image->getClientOriginalExtension();
      Storage::disk('public')->put($image->getFilename().'.'.$extension,  File::get($image));

      $mime = $image->getClientMimeType();
      $original_filename = $image->getClientOriginalName();
      $imagename = $image->getFilename().'.'.$extension;

      DB::table('commissions')
            ->where('id', '=', $commissionId)
            ->update(['title' => $title,
                      'description' => $description,
                      'price' => $price,
                      'slots'=> $slots,
                      'mime' => $mime,
                      'original_filename' => $original_filename,
                      'imagename' => $imagename]);

      return redirect('/profile');

    }else{
      DB::table('commissions')
            ->where('id', '=', $commissionId)
            ->update(['title' => $title, 'description' => $description, 'price' => $price, 'slots'=> $slots]);

      return redirect('/profile');
    }
  }

  public function delete($commissionId=null){
    $query= DB::table('commissions')
      ->where('id', '=', $commissionId);
    $deleted = $query->delete();

    return redirect('/profile');

  }
}
