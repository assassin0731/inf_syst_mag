
<div id="top3">
  <span style="font-size:30px; margin-top:5px;">
    Заявки на исследование
  </span>
</div>

<div id="banner2">

<span>заявк</span> <br><br>
<span>заявк</span> <br><br>
<span>заявк</span> <br><br>
<span>заявк</span> <br><br>
<span>заявк</span> <br><br>
<span>заявк</span> <br><br>
<span>заявк</span> <br><br>
<span>заявк</span> <br><br>
<span>заявк</span> <br><br>
<span>заявк</span> <br><br>
<span>заявк</span> <br><br>
<span>заявк</span> <br><br>
<span>заявк</span> <br><br>
<span>заявк</span> <br><br>

<span>заявк</span> <br><br>
<span>заявк</span> <br><br>
<span>заявк</span> <br><br>
<span>заявк</span> <br><br>
<?php
$rastvor1=DB::select('select max(id) as id FROM rastvors;');
foreach (array_reverse($rastvor1) as $rastvors1) {
  echo $rastvors1->id;
}
?>

</div>
