
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
  $(".overlay1").removeClass("active");
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

<?php
$sql=DB::select('select * from zayav_infos where id=?',[$id]);
 ?>


 <div id="top7">

   <span style="font-size:25px; margin-bottom:-135px;">Информация о заявке №<?php echo $id; ?></span>
 </div>

      <div id="banner13" style="width: 100%; ">


<?php
foreach($sql as $info)
{
  if ($info->org){
?>

          <div class="form-group">
          <div class="order">
            <div class="fororder2">
              <p class='forp1'>Организация</p>
            </div>
            <div class="fororder22">
            <p class='forp'> <?php
            echo $info->org;
             ?>
           </p>
            </div>
          </div>
          </div>
          <?php
        }
          ?>


          <div class="form-group">
          <div class="order">
            <div class="fororder2">
                <p class='forp1'>ФИО заказчика</p>
            </div>
            <div class="fororder22">
              <p class='forp'> <?php
              echo $info->name;
               ?>
             </p>
            </div>
          </div>
          </div>

          <div class="form-group">
          <div class="order">
            <div class="fororder2">
              <p class='forp1'>Телефон</p>
            </div>
          <div class="fororder22">
            <p class='forp'> <?php
            echo $info->tel;
             ?>
           </p>
          </div>
      </div>
      </div>
      <div class="form-group">
      <div class="order">
        <div class="fororder2">
          <p class='forp1'>Электронная почта</p>
        </div>
        <div class="fororder22">
          <p class='forp'> <?php
          echo $info->email;
           ?>
          </p>

        </div>
      </div>
      </div>

      <div class="form-group">
      <div class="order">
        <div class="fororder2">
          <p class='forp1'>Адрес</p>
        </div>
        <div class="fororder22">
          <p class='forp'> <?php
          echo $info->adr;
           ?>
          </p>
        </div>
      </div>
      </div>

      <div class="form-group">
      <div class="order">
        <div class="fororder2">
          <p class='forp1'>ИНН</p>
        </div>
        <div class="fororder22">
          <p class='forp'> <?php
          echo $info->inn;
           ?>
          </p>
        </div>
      </div>
      </div>

      <div class="form-group">
        <div class="order">
          <div class="fororder2">
            <p class='forp1'>ОГРН</p>
          </div>
          <div class="fororder22">
            <p class='forp'> <?php
            echo $info->ogrn;
             ?>
            </p>
            </div>
        </div>
        </div>

        <div class="form-group">
      <div class="order">
        <div class="fororder2">
          <p class='forp1'>Плательщик</p>
        </div>
        <div class="fororder22">
          <p class='forp'> <?php
          echo $info->plat;
           ?>
          </p>
          </div>
      </div>
      </div>

      <div class="form-group">
        <div class="order">
          <div class="fororder2">
            <p class='forp1'>Цель испытаний</p>
          </div>
          <div class="fororder22">
            <p class='forp'> <?php
            echo $info->aim;
             ?>
            </p>
            </div>
        </div>
        </div>

        <div class="form-group">
          <div class="order">
            <div class="fororder2">
              <p class='forp1'>Выезд специалиста ИЦ на отбор образцов</p>
            </div>
            <div class="fororder22">
              <p class='forp'> <?php
              echo $info->viezd;
               ?>
              </p>
              </div>
          </div>
          </div>

          <div class="form-group">
        <div class="order">
          <div class="fororder2">
            <p class='forp1'>Выбор метода испытаний предоставляется сотрудникам ИЦ</p>
          </div>
          <div class="fororder22">
            <p class='forp'> <?php
            echo $info->metod;
             ?>
            </p>
            </div>
        </div>
        </div>

        <div class="form-group">
      <div class="order">
        <div class="fororder2">
          <p class='forp1'>Возврат образцов</p>
        </div>
        <div class="fororder22">
          <p class='forp'> <?php
          echo $info->vozvr;
           ?>
          </p>
          </div>
      </div>
      </div>




<label class='fororder5' style="background:#AFDAFC;"><p class='forp1' >Исследуемая продукция</p></label>

<?php
$sql1=DB::select('select distinct zayav_prods.id as zayavid, prodtype.type, prodpodtype.podtype, normdoc.name, zayav_prods.prodname,zayav_prods.act from results, pokaz, normdoc,prodpodtype,prodtype,zayav_prods,zayav_infos where (results.id_pokaz=pokaz.id and pokaz.id_normdoc=normdoc.id and normdoc.id_prodpodtype=prodpodtype.id and prodpodtype.id_prodtype=prodtype.id and results.id_zayavprods=zayav_prods.id and zayav_prods.id_zayav=zayav_infos.id and zayav_infos.id=?)',[$id]);
foreach($sql1 as $product)
{
 ?>


 <div class="form-group">
 <div class="order">
 <div class="fororder2">
   <p class='forp1'>Наименование продукции</p>
 </div>
 <div class="fororder22"><p class='forp'>
   <?php
   echo $product->prodname;
     ?></p>
   </div>
 </div>
 </div>

 <div class="form-group">
 <div class="order">
 <div class="fororder2">
   <p class='forp1'>Акт</p>
 </div>
 <div class="fororder22"><p class='forp'>
   <?php
   echo $product->act;
     ?></p>
   </div>
 </div>
 </div>

<div class="form-group">
<div class="order">
<div class="fororder2">
  <p class='forp1'>Тип продукции</p>
</div>
<div class="fororder22"><p class='forp'>
  <?php
  echo $product->type;
    ?></p>
  </div>
</div>
</div>

<div class="form-group">
<div class="order">
<div class="fororder2">
  <p class='forp1'>Подтип продукции</p>
</div>
<div class="fororder22"><p class='forp'>
  <?php
  echo $product->podtype;
    ?></p>
  </div>
</div>
</div>

<div class="form-group">
<div class="order">
<div class="fororder2">
  <p class='forp1'>Нормативный документ</p>
</div>
<div class="fororder22"><p class='forp'>
  <?php
  echo $product->name;
    ?></p>
  </div>
</div>
</div>
<table class='table1' style="width:100%; font-size:18px; border: none; margin-top:2px;" cellspacing='0'>
  <thead>
    <th style='display:none;'></th>
    <th style='display:none;'></th>
      <th style='display:none;'></th>
</thead>
<tbody>
  <?php
          echo "<tr style='font-weight:bold;background:#D6E6FF'>";
          echo "<td style='border-top: 2px solid #C5DBFF; border-right: 2px solid #C5DBFF;'><span>Показатель</span></td>";
              echo "<td style='border-top: 2px solid #C5DBFF; border-right: 2px solid #C5DBFF;'><span>Метод</span></td>";
          echo "<td style='border-top: 2px solid #C5DBFF; border-right: 2px solid #C5DBFF;'><span>Результат</span></td>";

          echo "</tr>";
    $sql2=DB::select('select results.result, metod.metod, pokaz.name from results,metod,pokaz where results.id_pokaz=pokaz.id and results.id_metod=metod.id and results.id_zayavprods=?',[$product->zayavid]);
    foreach($sql2 as $forresult)
    {
      echo "<tr>";
        echo "<td style='border-top: 2px solid #C5DBFF;border-bottom: 2px solid #C5DBFF; border-right: 2px solid #C5DBFF;'><span>$forresult->name</span></td>";
            echo "<td style='border-top: 2px solid #C5DBFF;border-bottom: 2px solid #C5DBFF;  border-right: 2px solid #C5DBFF;'><span>$forresult->metod</span></td>";
            echo "<td style='border-top: 2px solid #C5DBFF;border-bottom: 2px solid #C5DBFF;  border-right: 2px solid #C5DBFF;'><span>$forresult->result</span></td>";

      echo "</tr>";
    }


  ?>
</tbody>
</table>
<hr>
<?php
}
}
?>

<div align="center" class="form-group row mb-0" style="margin-bottom:20px;">
    <div class="col-md-8 offset-md-4">
        <a target="_blank" href="/page2/<?php echo $id ?>" style="width: 300px!important; height:75px!important;" type="submit" class="custom-btn btn-1">
            {{ __('Cформировать протоколы испытаний') }}
        </a>


    </div>
</div>
<br>

</div>
</div>

<div class="overlay1" id="modal-5">
  <button class="close_popap btn" id="submit">Закрыть</button>
    <a class="close_popap">Закрыть</a>

<div id="banner20">
</div>


</div>
<script>
$(document).ready(function(){

    $('#protocol').click(function(){
        $.ajax({
            url: "/page2",
            cache: false,
            success: function(html){
                $("#banner20").html(html);
            }
        });
    });
});
</script>
