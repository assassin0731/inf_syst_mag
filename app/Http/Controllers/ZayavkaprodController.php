<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Zayavkaprod;
use Auth;
use DB;

class ZayavkaprodController extends Controller
{
    public function submit (Request $req)
    {

      $zayav=new Zayavkaprod();
      $sal=$req->input('cost');
      $dad = $req->input('actt');
      $dad1=$req->input('pokaz');
      $cost=DB::select('select * from meat');
      foreach ($cost as $pudge){
        foreach ($dad1 as $vbros)
        {
        if ($pudge->product==$vbros)
        {
          $sal=$sal+$pudge->price;
        }
      }
    }
      $pokaz=implode(", ",$dad1);
      $actt=implode(", ",$dad);
      $zayav->id_zayav=$req->input('id_zayav');
      $zayav->prodname=$req->input('prodname');
      $zayav->act=$req->input('act');
      $zayav->doc=$actt;
      $zayav->pokaz=$pokaz;
      DB::update('update zayavkas set cost = ? where id = ?',[$sal,$zayav->id_zayav]);
      $zayav->save();
      return redirect()->route('products')->with( ['zayav' => $zayav,'cost'=>$sal ] );

    }
    public function submit1 (Request $req)
    {

      $zayav=new Zayavkaprod();

      $zayav->id_zayav=$req->input('id_zayav');


      return redirect()->route('otbor')->with( ['zayav' => $zayav] );

    }
    public function submit2 (Request $req)
    {

      $zayav=new Zayavkaprod();

      $zayav->id_zayav=$req->input('id_zayav');


      return redirect()->route('done')->with( ['zayav' => $zayav] );

    }
    public function index()
    {
        return view('products');
    }
    public function index1()
    {
        return view('otbor');
    }
    public function index2()
    {
        return view('done');
    }
}
