<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\NewUser;
use Illuminate\Support\Facades\Hash;
use Auth;

class NewUserController extends Controller
{
  public function store(Request $req)
{
  $pass=Hash::make($req->password);
  return view('newuser', [
      'log' => $req->log,
      'name' => $req->name,
      'id_otdel' => $req->id_otdel,
      'tel' => $req->tel,
      'email' => $req->email,
      'password' => $pass,
      'nohashpass'=>$req->password,
      'startwork' => $req->startwork,
      'dogovor' => $req->dogovor,
      'datedog' => $req->datedog,
      'datebirth' => $req->datebirth,
      'snils' => $req->snils,
      'educate' => $req->educate,
      'classif' => $req->classif,
      'func' => $req->func,
      'staj' => $req->staj,
  ]);
}

public function updateRab(Request $req)
{
  $pass=Hash::make($req->password);
return view('updateuser', [
  'id'=>$req->id,
    'log' => $req->log,
    'name' => $req->name,
    'id_otdel' => $req->id_otdel,
    'tel' => $req->tel,
    'email' => $req->email,
    'password' => $pass,
    'nohashpass'=>$req->password,
    'startwork' => $req->startwork,
    'dogovor' => $req->dogovor,
    'datedog' => $req->datedog,
    'datebirth' => $req->datebirth,
    'snils' => $req->snils,
    'educate' => $req->educate,
    'classif' => $req->classif,
    'func' => $req->func,
    'staj' => $req->staj,
]);
}

public function rulesRab(Request $req)
{

return view('updaterules', [
  'id'=>$req->id,
    'react' => $req->react,


]);
}



}
