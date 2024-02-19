<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\RastvorChange;
use Auth;

class RastvorChangeController extends Controller
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



}
