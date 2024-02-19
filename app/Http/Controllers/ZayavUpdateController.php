<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Auth;

class ZayavUpdateController extends Controller {
  public function index(){
     $users = DB::select('select * from zayavka_profiles');
     return view('edit_view',['users'=>$users]);
  }
  public function show() {
     $users = DB::select('select * from zayavka_profiles where id_user = ?',[Auth::user()->id]);
     return view('zayav_update',['users'=>$users]);
  }
  public function edit(Request $request) {
     $adr = $request->input('adr');
$inn = $request->input('inn');
$ogrn = $request->input('ogrn');
     DB::update('update zayavka_profiles set adr = ? where id_user = ?',[$adr,Auth::user()->id]);
     DB::update('update zayavka_profiles set inn = ? where id_user = ?',[$inn,Auth::user()->id]);
     DB::update('update zayavka_profiles set ogrn = ? where id_user = ?',[$ogrn,Auth::user()->id]);
     return redirect()->route('profile');
  }
  public function index1()
  {
      return view('profile');
  }
}
