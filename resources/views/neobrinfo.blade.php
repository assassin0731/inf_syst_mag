
<script>
mask(function() {
mask('.jmp__input_tel').mask('+7(000)000-00-00');
});
</script>

<script>
let $fordel=0;
</script>

<script>
function show_popap(id_popap) {
  var id = "#" + id_popap;

  if (!$fordel && id_popap=='modal-2') {alert('Выделите строку для редактирования'); exit();}
  $(id).addClass('active');
  document.getElementById('insertHere').innerHTML = $fordel;
}

$(".close_popap").click( function(){
  $(".overlay").removeClass("active");
});
</script>



<!--
<script>
$(document).ready(function(){
     $("#myTable").on('click','.btnDelete',function(){
         $(this).closest('tr').remove();
      });
  });
</script>-->
<script>
$(document).ready(function() {
  $("a.delete").click(function() {
		let id = $fordel;

    $('#myTable').find('tr#'+$fordell).remove();
    $("#banner12").html("");
    $.ajax({
      url: "/rabotnik/" + id,
      method: 'get',
      data: {
        value: id
		},
    success:function(){
      first=null;
      second=null;
      third=null;
      forth=null;
      fifth=null;
      sixth=null;
      seventh=null;
      eigth=null;
      ninth=null;
      tenth=null;
      $fordel=0;
    },
    });
  });
});
</script>





<script>
$(document).ready(function() {
  $("a.change").click(function() {

		let id = $fordell;
    var option = document.getElementById("selectedotdel");
    option.textContent = second;
    option.value = tenth;
    var input = document.getElementById("namerast1");
    input.value = third;

    var a = [];
    a=forth.split(".");
    year=a[2]+"-"+a[1]+"-"+a[0];

    var input = document.getElementById("dateprig1");
    input.value = year;

    var input = document.getElementById("method1");
    input.value = fifth;

    var input = document.getElementById("kolvo1");
    input.value = sixth;

    seventh = seventh.replace(/[^0-9]/g, '');
    var input = document.getElementById("cons1");
    input.value = seventh;

    var input = document.getElementById("coef1");
    input.value = eigth;

    var a = [];
    a=ninth.split(".");
    year=a[2]+"-"+a[1]+"-"+a[0];

    var input = document.getElementById("dategod1");
    input.value = year;

    var input = document.getElementById("forid");
    input.value = first;

  });
});
</script>



<div id="banner12">




<!-- Окно 1 -->




<div id="banner14" style="width: 100%; ">

<?php
for($cycle=1;$cycle<5;$cycle++)
{

$sql=DB::select('select zayav_prods.id,pokaz.name from zayav_infos join zayav_prods on zayav_infos.id=zayav_prods.id_zayav join results on zayav_prods.id=results.id_zayavprods join pokaz on results.id_pokaz=pokaz.id where (zayav_infos.id=? and pokaz.id_otdel=? and results.result IS NULL)',[$id,$cycle]);
$i=0;
if(count($sql)>0){

?>
<label class='fororder3'><p class='forp1'><?php echo DB::table('otdels')->where('id',$cycle)->value('nameot'); ?></p></label>
<?php

foreach($sql as $result)
{
  $arr[$i]=$result->id;
  $i++;
}
$values=array_count_values($arr);
$num=array_unique($arr);
$i=0;
$arr=array();
foreach($sql as $result)
{
  $ip=0;
  $io=1;
  try
  {
  if ($num[$i]===$result->id)
  {
    ?>

    <div class="order">
      <div class="fororder2">
        <p class="forp1">Образец №<?php echo $result->id; ?></p>
      </div>
      <div class="fororder22">
        <p class='forp'>
    <?php

    foreach($sql as $results)
    {
    if ($num[$i]===$results->id)
    {
      echo $results->name;
        if ($values[$num[$i]]>$io)
        {
          echo "; ";

          $io++;
      }

    }
  }
  ?>
    </p></div>
    </div>
    <?php
    $i++;
  }
}
catch (Exception $e)
{

}
?>
<?php
$ip++;
}
}
?>
<?php

}
?>






</div>
</div>
