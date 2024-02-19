<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Rastvor;
use Auth;

class RastvorController extends Controller
{


  public function store(Request $request) {
   $contact = new Rastvor;

   $contact->id_otdel = $request->id_otdel;
   $contact->name = $request->name;
   $contact->date = $request->date;
   $contact->method = $request->method;
   $contact->kolvo = $request->kolvo;
   $contact->cons = $request->cons;
   $contact->coef = $request->coef;
   $contact->dategod = $request->dategod;

   $contact->save();

   return response()->json($contact->toArray());

 }

 public function change(Request $request) {
  $contact = Rastvor::find($request->id);
  $contact->id_otdel = $request->id_otdel;
  $contact->name = $request->name;
  $contact->date = $request->date;
  $contact->method = $request->method;
  $contact->kolvo = $request->kolvo;
  $contact->cons = $request->cons;
  $contact->coef = $request->coef;
  $contact->dategod = $request->dategod;

  $contact->update();

  return response()->json($contact->toArray());

}

 public function dubleRastvor($id)
 {
   $contact = $id->replicate();
   $contact->save();

 }

}
