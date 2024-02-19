<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class TypeController extends Controller
{
  public function getProducts($type)
{
  return view('newselect', [
      'type' => $type,
  ]);
}

}
