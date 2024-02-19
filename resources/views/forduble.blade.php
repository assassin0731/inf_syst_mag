<?php
$sql = DB::insert('insert INTO rastvors (id_otdel,name,date,method,kolvo,cons,coef,dategod) SELECT id_otdel,name,date,method,kolvo,cons,coef,dategod FROM rastvors WHERE id = ?',[$id]);
