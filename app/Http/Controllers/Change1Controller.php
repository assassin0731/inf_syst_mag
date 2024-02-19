<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class Change1Controller extends Controller
{
  public function getProducts($id)
{
  return view('change1', [
      'id' => $id,
  ]);
}

}
