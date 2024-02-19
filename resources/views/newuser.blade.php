<?php
$sql = DB::insert("insert into users(log,name,id_otdel,tel,email,password,nohashpass,startwork,dogovor,datedog,datebirth,snils,educate,classif,func,staj) values (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)",[$log,$name,$id_otdel,$tel,$email,$password,$nohashpass,$startwork,$dogovor,$datedog,$datebirth,$snils,$educate,$classif,$func,$staj]);
$sql2=DB::select("select MAX(`id`) as userid FROM `users`");
 foreach (($sql2) as $users) {
   $iduser=$users->userid;
 }

$sql1=DB::insert("insert into rules (id_user,rules) values(?,'3,3,3')",[$iduser]);
