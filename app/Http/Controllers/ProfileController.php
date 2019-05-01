<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
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
    return view('profile.edit', [
      'profile'=> Auth::user()
    ]);
  }

  public function update(Request $request){
    $user = Auth::user();

      $data = $this->validate($request, [
          'name' => 'required',
          'email' => 'required',
      ]);

      $user->name = $data['name'];
      $user->email = $data['email'];

    if (request('image') != null){
      $image = $request->file('image');
      $extension = $image->getClientOriginalExtension();
      Storage::disk('public')->put($image->getFilename().'.'.$extension,  File::get($image));

      $mime = $image->getClientMimeType();
      $original_filename = $image->getClientOriginalName();
      $imagename = $image->getFilename().'.'.$extension;

      $user->mime = $mime;
      $user->original_filename= $original_filename;
      $user->profile_photo = $imagename;

      $user->save();

      return redirect('/profile');

    }else{
        $user->save();

      return redirect('/profile');
    }
  }
}
