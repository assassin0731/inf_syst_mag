<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Models\Forlogin;

class ForloginController extends Controller
{
  public function submit (Request $req)
  {

    $sql = DB::select('select id, name from users where log = ? and password = ?',[$req->input('log'),$req->input('password')]);

    return view('home2',['sql'=>$sql]);

  }
  public function index()
  {


    return view('home2');
  }
}
