<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\ZayavInfo;

class ZayavInfoController extends Controller
{
  public function store(Request $request) {
   $contact = new ZayavInfo;

   $contact->org = $request->org;
   $contact->name = $request->name;
   $contact->tel = $request->tel;
   $contact->email = $request->email;
   $contact->adr = $request->adr;
   $contact->inn = $request->inn;
   $contact->ogrn = $request->ogrn;
   $contact->plat = $request->plat;
   $contact->aim = $request->aim;
   $contact->viezd = $request->viezd;
   $contact->metod = $request->metod;
   $contact->vozvr = $request->vozvr;

   $contact->save();

   return response()->json($contact->toArray());

 }

 public function getZayav($id) {


   return view('neobrinfo', [
       'id' => $id,
   ]);

 }

 public function getObrZayav($id) {


   return view('obrabotinfo', [
       'id' => $id,
   ]);

 }

}
