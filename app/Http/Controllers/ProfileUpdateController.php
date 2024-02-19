<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Auth;

class ProfileUpdateController extends Controller {
  public function index(){
     $users = DB::select('select * from users');
     return view('edit_view',['users'=>$users]);
  }
  public function show() {
     $users = DB::select('select * from users where id = ?',[Auth::user()->id]);
     return view('user_update',['users'=>$users]);
  }
  public function edit(Request $request) {
     $org = $request->input('org');
$name = $request->input('name');
$jmp__input_tel = $request->input('jmp__input_tel');
$email = $request->input('email');
     DB::update('update users set org = ? where id = ?',[$org,Auth::user()->id]);
     DB::update('update users set name = ? where id = ?',[$name,Auth::user()->id]);
     DB::update('update users set jmp__input_tel = ? where id = ?',[$jmp__input_tel,Auth::user()->id]);
     DB::update('update users set email = ? where id = ?',[$email,Auth::user()->id]);
     return redirect()->route('profile');
  }
  public function index1()
  {
      return view('profile');
  }
}
