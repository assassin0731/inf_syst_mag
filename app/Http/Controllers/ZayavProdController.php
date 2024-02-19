<?php

namespace App\Http\Controllers;
use App\Models\ZayavProd;
use Illuminate\Http\Request;
use DB;

class ZayavProdController extends Controller
{
  public function store(Request $request) {
   $contact = new ZayavProd;
   $sql=DB::select('select id FROM zayav_infos ORDER BY id DESC LIMIT 1;');
   foreach($sql as $sqls){
     $contact->id_zayav=$sqls->id;
     $next=$sqls->id;
   }
   $contact->prodname = $request->prodname;
   $contact->act = $request->act;
   $contact->datepost=$request->datepost;
   $contact->dateotbor=$request->dateotbor;
   $contact->mesto=$request->mesto;
   $contact->ktootobr=$request->ktootobr;
   $contact->numact=$request->numact;
   $contact->kolobr=$request->kolobr;
   $contact->adrizg=$request->adrizg;
   $contact->izgotov=$request->izgotov;
   $contact->sved=$request->sved;
   $contact->dateizgotov=$request->dateizgotov;
   $contact->razmer=$request->razmer;
   $contact->numpar=$request->numpar;
   $contact->srok=$request->srok;


   $contact->save();

   foreach($request->pokaz as $pokaz)
   {
     $date='123';
     $sql=DB::insert('insert into results (id_zayav,id_zayavprods,id_pokaz) values (?,?,?)',[$next,$contact->id,$pokaz]);
   }
 }
}
