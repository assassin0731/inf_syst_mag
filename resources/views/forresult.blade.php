
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

<div id="top7">
  <span style="font-size:25px; margin-bottom:-135px;">
    Внесение данных
  </span>


</div>


<!-- Окно 1 -->




<div id="banner13" style="width: 100%; ">



<?php
  $d=Auth::user()->id_otdel;
$sql=DB::select('select results.result,results.id_pokaz,results.id,prodtype.type,prodpodtype.podtype,normdoc.name,pokaz.name as pokazname from results join pokaz on results.id_pokaz=pokaz.id join normdoc on pokaz.id_normdoc=normdoc.id join prodpodtype on normdoc.id_prodpodtype=prodpodtype.id join prodtype on prodpodtype.id_prodtype=prodtype.id where (results.id_zayavprods=? and pokaz.id_otdel=?)',[$id,$d])
 ?>
 <?php
 $cycle=0;
 foreach($sql as $results)
{
  $cycle++;
  if(!$results->result)
  {
  ?>

    <table class='table1' style="width:100%; font-size:18px; border: none;" cellspacing='0'>
      <thead>
        <th style='display:none;'></th>
        <th style='display:none;'></th>
    </thead>
    <tbody>
      <?php
              echo "<tr style='border-top: 4px solid #1682ba;font-weight:bold;background:#AFDAFC'>";
              echo "<td style='border-right: 1px solid #1682ba;'><span>Тип продукции</span></td>";
                  echo "<td style='border-right: 1px solid #1682ba;'><span>Подтип продукции</span></td>";
              echo "<td style='border-right: 1px solid #1682ba;'><span>Нормативный документ</span></td>";
                  echo "<td><span>Показатель</span></td>";
              echo "</tr>";



              echo "<tr>";
                echo "<td style='border-right: 1px solid #1682ba;'><span>$results->type</span></td>";
                    echo "<td style='border-right: 1px solid #1682ba;'><span>$results->podtype</span></td>";
          echo "<td style='border-right: 1px solid #1682ba;'><span>$results->name</span></td>";



              echo "<td><span>$results->pokazname</span></td>";
              echo "</tr>";

      ?>
  </tbody>
  </table>
  <br>
  <form id="resultForm">
  <div class="form-group">
  <div class="order">
    <div class="fororder">
      <label for="email">{{ __('Методика испытания') }}</label>
    </div>
    <div class="fororder1">
      <?php
      $sql1 = DB::select('select id,id_pokaz,metod from metod where id_pokaz=?',[$results->id_pokaz]);
          echo "<select class='form-control pudge' name = 'metod' id='metod$cycle' >";
          echo "<option value='' selected disabled></option>";
            foreach($sql1 as $row){
        echo "<option value = '$row->id' name='$row->metod' > $row->metod </option>";}
          echo "</select>";
          ?>
    </div>
  </div>
  </div>
  <div class="form-group">
  <div class="order">
    <div class="fororder">
      <label for="email">{{ __('Полученный результат') }}</label>
    </div>
    <div class="fororder1">
    <input id="result<?php echo $cycle;?>" type="lalka" class="form-control pudge" name="result" autocomplete="off">
    <input hidden id="id<?php echo $cycle;?>" value='<?php echo $results->id; ?>'>
    </div>
  </div>
  </div>


<br>
  <?php
}
}
   ?>
   <div align="center" class="form-group">
   <button class="custom-btn btn-1 btn btn-success" id="submit">Внести данные</button>
 </div>
 </form>
 <script>

  $('#resultForm').on('submit',function(event){
      event.preventDefault();
      <?php
             echo "var cycle ='$cycle';";
         ?>

      cycleplus=+cycle;
      var result=[];
      var metod=[];
      var id=[];
      let i=1;
      while (cycleplus>0)
      {
        result.push($('#result'+i+'').val());
        metod.push($('#metod'+i+'').val());
        id.push($('#id'+i+'').val());
        cycleplus--;
        i++;
      }
      i--;

      $.ajax({
        url: "/resultForm",
        type:"POST",
        data:{
          "_token": "{{ csrf_token() }}",
          id:id,
          metod:metod,
          result:result,
          i:i
        },
        success:function(response){


        },
       });


      });
    </script>





</div>
</div>
