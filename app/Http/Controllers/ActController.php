<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Act;
use Auth;

class ActController extends Controller
{
    public function submit (Request $req)
    {

      $zayav=new Act();
      $zayav->id_act=$req->input('id_zayav');

      return redirect()->route('vozduh')->with( ['zayav' => $zayav] );

    }


    public function submit1 (Request $req)
    {

      $zayav=new Act();
      $zayav->id_act=$req->input('id_zayav');

      return redirect()->route('smiv')->with( ['zayav' => $zayav] );

    }

    public function submit2 (Request $req)
    {

      $zayav=new Act();
      $zayav->id_act=$req->input('id_zayav');

      return redirect()->route('obr')->with( ['zayav' => $zayav] );

    }

    public function index()
    {
        return view('vozduh');
    }
    public function index1()
    {
        return view('smiv');
    }
    public function index2()
    {
        return view('obr');
    }
}
