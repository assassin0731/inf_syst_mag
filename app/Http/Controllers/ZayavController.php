<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ZayavkaProfile;
use Auth;

class ZayavController extends Controller
{
    public function submit (Request $req)
    {
      $d=Auth::user()->id;
      $zayav=new ZayavkaProfile();
      $zayav->id_user=$d;
      $zayav->adr=$req->input('adr');
      $zayav->inn=$req->input('inn');
      $zayav->ogrn=$req->input('ogrn');

      $zayav->save();
      return redirect()->route('profile');
    }
    public function index()
    {
        return view('profile');
    }
}
