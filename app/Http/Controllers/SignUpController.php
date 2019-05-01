<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Validator;
use Hash;
use Auth;

class SignUpController extends Controller
{
  public function index()
  {
    return view('/signup');
  }

  public function signup(Request $request){
    $input = $request->all();
    $validation = Validator::make($input, [
        'name' => 'required',
        'email' => 'required|email|unique:users,email'
      ]);

      //if validation fails, redirect back to form with errors
      if($validation->fails()){
        return redirect('/signup')
          ->withInput() //returns the previous inputs so you can use them
          ->withErrors($validation);
      }

    $user = new User();
    $user->name = request('name');
    $user->email = request('email');
    $user->password = Hash::make(request('password'));
    $user->save();

    return redirect('/login');
  }
}
