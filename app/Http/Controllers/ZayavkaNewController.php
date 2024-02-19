<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class ZayavkaNewController extends Controller
{
  public function getProducts($id)
{
  return view('newselect', [
      'id' => $id,
  ]);
}

public function getNormdoc($id)
{
return view('newselect1', [
    'id' => $id,
]);
}

public function getPokaz($id)
{
return view('newselect2', [
    'id' => $id,
]);
}

}
