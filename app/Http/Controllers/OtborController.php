<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Otbor;
use Auth;

class OtborController extends Controller
{
    public function submit (Request $req)
    {

      $zayav=new Otbor();

      $zayav->id_zayav=$req->input('id_zayav');
      $zayav->data=$req->input('data');
      $zayav->mesto=$req->input('mesto');
      $zayav->save();
      return redirect()->route('obrazez')->with( ['zayav' => $zayav] );

    }

    public function index()
    {
        return view('obrazez');
    }

}
