<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class DeleteController extends Controller
{
  public function deleteRastvor($id)
{
  return view('fordelete', [
      'id' => $id,
  ]);
}

public function dubleRastvor($id)
{
return view('forduble', [
    'id' => $id,
]);
}


}
