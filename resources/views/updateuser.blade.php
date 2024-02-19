<?php
$sql = DB::update("update users set log=?,name=?,id_otdel=?,tel=?,email=?,password=?,nohashpass=?,startwork=?,dogovor=?,datedog=?,datebirth=?,snils=?,educate=?,classif=?,func=?,staj=? where id=?",[$log,$name,$id_otdel,$tel,$email,$password,$nohashpass,$startwork,$dogovor,$datedog,$datebirth,$snils,$educate,$classif,$func,$staj,$id]);
