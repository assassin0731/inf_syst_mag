<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;

class ResultController extends Controller
{

  public function forResult($id) {


    return view('forResult', [
        'id' => $id,
    ]);
  }

  public function postResult(Request $request) {
    $cycle=$request->i;
    $i=0;

    while($i<$cycle)
    {
      date_default_timezone_set('Asia/Novosibirsk');
      $date = date('Y.m.d', time());
      DB::update('update results set id_metod=?,result=?,date=? where id=?',[$request->metod[$i],$request->result[$i],$date,$request->id[$i]]);
      $i++;

    }



 }
}
