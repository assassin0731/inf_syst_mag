<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class ShowController extends Controller
{
  public function showRastvor($id)
{
  return view('forshow', [
      'id' => $id,
  ]);
}


}
