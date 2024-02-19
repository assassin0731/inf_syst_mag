<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Obrazez;
use Auth;

class ObrazezController extends Controller
{
    public function submit (Request $req)
    {

      $zayav=new Obrazez();
      $zayav->id_otbor=$req->input('id_zayav');
      $zayav->name=$req->input('name');
      $zayav->data=$req->input('data');
      $zayav->vid=$req->input('vid');

      $zayav->save();
      return redirect()->route('obrazez')->with( ['zayav' => $zayav] );

    }


    public function submit1 (Request $req)
    {

      $zayav=new Obrazez();

      $zayav->id_zayav=$req->input('id_zayav');
      $zayav->name='1';


      return redirect()->route('done')->with( ['zayav' => $zayav] );

    }

    public function index()
    {
        return view('obrazez');
    }
    public function index1()
    {
        return view('done');
    }
}
