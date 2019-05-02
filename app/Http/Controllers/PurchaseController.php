<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Purchase;
use DB;
use Validator;
use Auth;

class PurchaseController extends Controller
{
    public function index($purchaseId = null){
      $query = DB::table('purchases')
      ->where('id', '=', $purchaseId);
      $purchase =  $query->first();

      $cquery = DB::table('commissions')
      ->where('id', '=', $purchase->post_id);
      $commission = $cquery->first();

      $aquery = DB::table('users')
      ->where('id', '=', $commission->artist_id);
      $artist = $aquery->first();

      return view('purchase.index', [
        'purchase' => $purchase,
        'commission'=> $commission,
        'artist' => $artist
      ]);
    }

    public function view($purchaseId = null){
      $query = DB::table('purchases')
      ->where('id', '=', $purchaseId);
      $purchase =  $query->first();

      $cquery = DB::table('commissions')
      ->where('id', '=', $purchase->post_id);
      $commission = $cquery->first();

      $customer = DB::table('users')->where('id', '=', $purchase->user_id)->first();

      return view('purchase.view', [
        'purchase' => $purchase,
        'commission' => $commission,
        'customer' => $customer
      ]);
    }

    public function new($commissionId = null){
      $query = DB::table('commissions')->where('id', '=', $commissionId);
      $commission =  $query->first();

      $aquery = DB::table('users')->where('id', '=', $commission->artist_id);
      $artist = $aquery->first();

      return view('purchase.new', [
        'commission' => $commission,
        'artist' => $artist
      ]);
    }

    public function create(Request $request, $commissionId = null){
      $input = $request->all();
      $validation = Validator::make($input, [
          'notes' => 'required|min:10',
        ]);

        //if validation fails, redirect back to form with errors
        if($validation->fails()){
          return redirect('/purchase/'.$commissionId)
            ->withInput() //returns the previous inputs so you can use them
            ->withErrors($validation);
        }

      $purchase = new Purchase();
      $purchase->user_id = Auth::id();
      $purchase->post_id = $commissionId;
      $purchase->notes = request('notes');

      $purchase->save();

      return redirect('/profile');
    }
}
