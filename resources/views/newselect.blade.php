<?php
$sql = DB::select('select * from prodpodtype where id_prodtype = ?',[$id]);
echo "<option selected disabled hidden>Подтип продукции</option>";
foreach($sql as $row){
echo "<option value = '$row->id' > $row->podtype </option>";
}
