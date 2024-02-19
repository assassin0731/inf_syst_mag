<?php
$sql = DB::select('select * from normdoc where id_prodpodtype = ?',[$id]);
echo "<option selected disabled hidden></option>";
foreach($sql as $row){
echo "<option value = '$row->id' > $row->name </option>";
}
