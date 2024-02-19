<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class Change2Controller extends Controller
{
  public function getProducts1($id)
{
  return view('change2', [
      'id' => $id,
  ]);
}

}
