<?php
$arr=explode(',',$id);
$i=count($arr);
$j=0;
while($j<$i)
{
$sql[$j] = DB::select('select * from pokaz where id_normdoc in (?)',[$arr[$j]]);
$j++;
}
echo "<option selected disabled hidden></option>";
$j=0;
while($j<$i)
{
foreach($sql[$j] as $row){
echo "<option value = '$row->id' > $row->name </option>";
}
$j++;
}
