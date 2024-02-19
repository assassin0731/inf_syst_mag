<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class RabotnikController extends Controller
{
  public function deleteRabotnik($id)
{
  return view('deleteRabotnik', [
      'id' => $id,
  ]);
}

public function getRabotnik($id) {


  return view('rabotnikinfo', [
      'id' => $id,
  ]);

}




}
