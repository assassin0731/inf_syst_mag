
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

  <a id='change' class="change" onclick="show_popap('modal-1')" href="#"></a>
  <a id='rules' class="rules" onclick="show_popap('modal-2')" href="#"></a>
  <a class="delete"  href="#" onclick='Geeks()'></a>
</div>


<!-- Окно 1 -->




      <div id="banner13" style="width: 100%; ">



          <div class="form-group">
          <div class="order">
            <div class="fororder2">
              <p class='forp1'>Логин пользователя</p>
            </div>
            <div class="fororder22">
            <p class='forp'> <?php $sql=DB::select('select * from users where id=?',[$id]);
              foreach($sql as $row){
                $log=$row->log;
                echo $row->log;
              }
             ?>
           </p>
            </div>
          </div>
          </div>

          <div class="form-group">
          <div class="order">
            <div class="fororder2">
                <p class='forp1'>ФИО работника</p>
            </div>
            <div class="fororder22">
              <p class='forp'> <?php
                foreach($sql as $row){
                  $fio=$row->name;
                  echo $row->name;
                }
               ?>
             </p>
            </div>
          </div>
          </div>

          <div class="form-group">
          <div class="order">
            <div class="fororder2">
              <p class='forp1'>Отдел</p>
            </div>
          <div class="fororder22">
            <p class='forp'> <?php $sql1=DB::select('select id_otdel,otdels.nameot from users join otdels on otdels.id=users.id_otdel where users.id=?',[$id]);
              foreach($sql1 as $row){
                $nameot=$row->nameot;
                $id_otdel=$row->id_otdel;
                echo $row->nameot;
              }
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
            foreach($sql as $row){
              $tel=$row->tel;
              echo $row->tel;
            }
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
            foreach($sql as $row){
              $email=$row->email;
              echo $row->email;
            }
           ?>
          </p>
        </div>
      </div>
      </div>

      <div class="form-group">
      <div class="order">
        <div class="fororder2">
          <p class='forp1'>Пароль</p>
        </div>
        <div class="fororder22">
          <p class='forp'> <?php
            foreach($sql as $row){
              $pass=$row->nohashpass;
              echo $row->nohashpass;
            }
           ?>
          </p>
        </div>
      </div>
      </div>

      <div class="form-group">
        <div class="order">
          <div class="fororder2">
            <p class='forp1'>Дата начала работы</p>
          </div>
          <div class="fororder22">
            <p class='forp'> <?php

              foreach($sql as $row){
                $arr1=explode(' ',$row->startwork);
                $arr2=explode('-',$arr1[0]);
                $startwork=implode('-',array($arr2[0],$arr2[1],$arr2[2]));
                echo "$arr2[2].$arr2[1].$arr2[0]";
              }
             ?>
            </p>
            </div>
        </div>
        </div>

        <div class="form-group">
      <div class="order">
        <div class="fororder2">
          <p class='forp1'>Номер трудового договора</p>
        </div>
        <div class="fororder22">
          <p class='forp'> <?php
            foreach($sql as $row){
              $dogovor=$row->dogovor;
              echo $row->dogovor;
            }
           ?>
          </p>
          </div>
      </div>
      </div>

      <div class="form-group">
        <div class="order">
          <div class="fororder2">
            <p class='forp1'>Дата трудового договора</p>
          </div>
          <div class="fororder22">
            <p class='forp'> <?php
            foreach($sql as $row){
              $arr1=explode(' ',$row->datedog);
              $arr2=explode('-',$arr1[0]);
              $datedog=implode('-',array($arr2[0],$arr2[1],$arr2[2]));
                echo "$arr2[2].$arr2[1].$arr2[0]";
            }
             ?>
            </p>
            </div>
        </div>
        </div>

        <div class="form-group">
          <div class="order">
            <div class="fororder2">
              <p class='forp1'>Дата рождения</p>
            </div>
            <div class="fororder22">
              <p class='forp'> <?php
              foreach($sql as $row){
                $arr1=explode(' ',$row->datebirth);
                $arr2=explode('-',$arr1[0]);
                $datebirth=implode('-',array($arr2[0],$arr2[1],$arr2[2]));
                  echo "$arr2[2].$arr2[1].$arr2[0]";
              }
               ?>
              </p>
              </div>
          </div>
          </div>

          <div class="form-group">
        <div class="order">
          <div class="fororder2">
            <p class='forp1'>СНИЛС</p>
          </div>
          <div class="fororder22">
            <p class='forp'> <?php
              foreach($sql as $row){
                $snils=$row->snils;
                echo $row->snils;
              }
             ?>
            </p>
            </div>
        </div>
        </div>

        <div class="form-group">
      <div class="order">
        <div class="fororder2">
          <p class='forp1'>Сведения об образовании</p>
        </div>
        <div class="fororder22">
          <p class='forp'> <?php
            foreach($sql as $row){
              $educate=$row->educate;
              echo $row->educate;
            }
           ?>
          </p>
          </div>
      </div>
      </div>

      <div class="form-group">
    <div class="order">
      <div class="fororder2">
        <p class='forp1'>Сведения о повышении квалификации</p>
      </div>
      <div class="fororder22">
        <p class='forp'> <?php
          foreach($sql as $row){
            $classif=$row->classif;
            echo $row->classif;
          }
         ?>
        </p>
        </div>
    </div>
    </div>

    <div class="form-group">
  <div class="order">
    <div class="fororder2">
      <p class='forp1'>Сведения о выполняемых функциях</p>
    </div>
    <div class="fororder22">
      <p class='forp'> <?php
        foreach($sql as $row){
          $func=$row->func;
          echo $row->func;
        }
       ?>
      </p>
      </div>
  </div>
  </div>

  <div class="form-group">
<div class="order">
  <div class="fororder2">
    <p class='forp1'>Стаж работы в годах</p>
  </div>
  <div class="fororder22">
    <p class='forp'> <?php
      foreach($sql as $row){
        $staj=$row->staj;
        echo $row->staj;
      }
     ?>
    </p>
    </div>
</div>
</div>

<label class='fororder3'><p class='forp1'>Права пользователя</p></label>

<div class="form-group">
<div class="order">
<div class="fororder2">
  <p class='forp1'>Учёт реактивов</p>
</div>
<div class="fororder22"><p class='forp'>
  <?php $sql2=DB::select('select rules.rules from rules join users on users.id=rules.id_user where users.id=?',[$id]);

    foreach($sql2 as $row){
      $arr1=explode(' ',$row->rules);
      $arr2=explode(',',$arr1[0]);
      $react=$arr2[0];
      $oborud=$arr2[1];
      $rast=$arr2[2];
      if ($arr2[0]==='1') echo "Редактирование";
      if ($arr2[0]==='2') echo "Просмотр";
      if ($arr2[0]==='3') echo "Нет";
    }

    ?></p>
  </div>
</div>
</div>

<div class="form-group">
<div class="order">
<div class="fororder2">
  <p class='forp1'>Управление оборудованием</p>
</div>
<div class="fororder22"><p class='forp'>
  <?php
  foreach($sql2 as $row){
    $arr1=explode(' ',$row->rules);
    $arr2=explode(',',$arr1[0]);
    if ($arr2[1]==='1') echo "Редактирование";
    if ($arr2[1]==='2') echo "Просмотр";
    if ($arr2[1]==='3') echo "Нет";
  }
    ?></p>
  </div>
</div>
</div>

<div class="form-group">
<div class="order">
<div class="fororder2">
  <p class='forp1'>Приготовление растворов</p>
</div>
<div class="fororder22"><p class='forp'>
  <?php
  foreach($sql2 as $row){
    $arr1=explode(' ',$row->rules);
    $arr2=explode(',',$arr1[0]);
    if ($arr2[2]==='1') echo "Редактирование";
    if ($arr2[2]==='2') echo "Просмотр";
    if ($arr2[2]==='3') echo "Нет";
  }
    ?></p>
  </div>
</div>
</div>




</div>
</div>

<div class="overlay" id="modal-1">
  <div class="flex-popap">
    <div class="popap">
      <div id="top5">
        <span style="font-size:30px; top:7px!important; position:relative!important; margin-left:25px;cursor: default;">
          Редактирование пользователя
        </span>

        <a class="close_popap"></a>
      </div>

      <div id="banner5" style="width: 650px; ">

        <form id="contactForm2">
<input hidden class="form-control pudge" name="id" id="iduser" value="<?php echo $id; ?>">
          <div class="form-group">
          <div class="order">
            <div class="fororder">
              <label for="log">{{ __('Логин пользователя') }}</label>
            </div>
            <div class="fororder1">
            <input id="log" type="lalka" class="form-control pudge" name="log" value="<?php echo $log; ?>" autocomplete="off">
            </div>
          </div>
          </div>

          <div class="form-group">
          <div class="order">
            <div class="fororder">
              <label for="fio">{{ __('ФИО работника') }}</label>
            </div>
            <div class="fororder1">
            <input id="fio" type="lalka" class="form-control pudge" name="fio" value="<?php echo $fio; ?>" autocomplete="off">
            </div>
          </div>
          </div>

          <div class="form-group">
          <div class="order">
            <div class="fororder">
              <label for="otdels">{{ __('Отдел') }}</label>
            </div>
          <div class="fororder1">
             <script>
             $(document).ready(function () {
            $('#nameot2').chosen()
          });
            </script>
            <?php
            $sql = DB::select('select id,nameot from otdels');
                echo "<select class='form-control pudge' name = 'nameot2' id='nameot2' >";

                  foreach($sql as $row){
                    if ($id_otdel===$row->id)
                    {
                        echo "<option value = '$row->id' name='$row->nameot' selected> $row->nameot </option>";
                    }
                    else{
                      echo "<option value = '$row->id' name='$row->nameot' > $row->nameot </option>";}

              }
              echo "</select>";
                ?>
          </div>
      </div>
      </div>
      <div class="form-group">
      <div class="order">
        <div class="fororder">
          <label for="jmp__input_tel">{{ __('Телефон') }}</label>
        </div>
        <div class="fororder1">

        <input id="jmp__input_tel" type="lalka" value="<?php echo $tel; ?>" class="form-control pudge jmp__input_tel" name="jmp__input_tel" value="{{ old('jmp__input_tel') }}" required autocomplete="jmp__input_tel" autofocus placeholder="+7 (XXX) XXX-XX-XX">
        </div>
      </div>
      </div>

      <div class="form-group">
      <div class="order">
        <div class="fororder">
          <label for="email">{{ __('Электронная почта') }}</label>
        </div>
        <div class="fororder1">
        <input id="email" type="lalka" class="form-control pudge" name="email" value="<?php echo $email; ?>" autocomplete="off">
        </div>
      </div>
      </div>

      <div class="form-group">
      <div class="order">
        <div class="fororder">
          <label for="password">{{ __('Пароль') }}</label>
        </div>
        <div class="fororder1">
        <input id="password" type="lalka" class="form-control pudge" name="password" value="<?php echo $pass; ?>" autocomplete="off">
        </div>
      </div>
      </div>

      <div class="form-group">
        <div class="order">
          <div class="fororder">
            <label for="startwork">{{ __('Дата начала работы') }}</label>
          </div>
          <div class="fororder1">
            <input id="startwork" type="date" class="form-control pudge" name="startwork" value="<?php echo $startwork; ?>" autocomplete="off" autofocus>
            </div>
        </div>
        </div>

        <div class="form-group">
      <div class="order">
        <div class="fororder">
          <label for="dogovor">{{ __('Номер трудового договора') }}</label>
        </div>
        <div class="fororder1">
          <input id="dogovor" type="lalka" class="form-control pudge" name="dogovor" value="<?php echo $dogovor; ?>" autocomplete="off" autofocus>
          </div>
      </div>
      </div>

      <div class="form-group">
        <div class="order">
          <div class="fororder">
            <label for="datedog">{{ __('Дата трудового договора') }}</label>
          </div>
          <div class="fororder1">
            <input id="datedog" type="date" class="form-control pudge" name="datedog" value="<?php echo $datedog; ?>" autocomplete="off" autofocus>
            </div>
        </div>
        </div>

        <div class="form-group">
          <div class="order">
            <div class="fororder">
              <label for="datebirth">{{ __('Дата рождения') }}</label>
            </div>
            <div class="fororder1">
              <input id="datebirth" type="date" class="form-control pudge" name="datebirth" value="<?php echo $datebirth; ?>" autocomplete="off" autofocus>
              </div>
          </div>
          </div>

          <div class="form-group">
        <div class="order">
          <div class="fororder">
            <label for="snils">{{ __('СНИЛС') }}</label>
          </div>
          <div class="fororder1">
            <input id="snils" type="lalka" class="form-control pudge" name="snils" value="<?php echo $snils; ?>" autocomplete="off" autofocus>
            </div>
        </div>
        </div>

        <div class="form-group">
      <div class="order">
        <div class="fororder">
          <label for="educate">{{ __('Сведения об образовании') }}</label>
        </div>
        <div class="fororder1">
          <input id="educate" type="lalka" class="form-control pudge" name="educate" value="<?php echo $educate; ?>" autocomplete="off" autofocus>
          </div>
      </div>
      </div>

      <div class="form-group">
    <div class="order">
      <div class="fororder">
        <label for="classif">{{ __('Сведения о повышении классификации') }}</label>
      </div>
      <div class="fororder1">
        <input id="classif" type="lalka" class="form-control pudge" name="classif" value="<?php echo $classif; ?>" autocomplete="off" autofocus>
        </div>
    </div>
    </div>

    <div class="form-group">
  <div class="order">
    <div class="fororder">
      <label for="func">{{ __('Сведения о выполняемых функциях') }}</label>
    </div>
    <div class="fororder1">
      <input id="func" type="lalka" class="form-control pudge" name="func" value="<?php echo $func; ?>" autocomplete="off" autofocus>
      </div>
  </div>
  </div>

  <div class="form-group">
<div class="order">
  <div class="fororder">
    <label for="staj">{{ __('Стаж работы в годах') }}</label>
  </div>
  <div class="fororder1">
    <input id="staj" type="lalka" class="form-control pudge" name="staj" value="<?php echo $staj; ?>" autocomplete="off" autofocus>
    </div>
</div>
</div>

<div class="form-group">
<button class="close_popap btn btn-success" id="submit"></button>
</div>
</form>

<script>
<?php
       echo "var idjs ='$id';";
       echo "var namers ='$fio';";
   ?>

</script>


       <script>

        $('#contactForm2').on('submit',function(event){
            event.preventDefault();

            let log = $('#log').val();
            let name = $('#fio').val();
            let id_otdel = $('#nameot2').val();
            let tel = $('#jmp__input_tel').val();
            let email = $('#email').val();
            let password = $('#password').val();
            let startwork = $('#startwork').val();
            let dogovor = $('#dogovor').val();
            let datedog = $('#datedog').val();
            let datebirth = $('#datebirth').val();
            let snils = $('#snils').val();
            let educate = $('#educate').val();
            let classif = $('#classif').val();
            let func = $('#func').val();
            let staj = $('#staj').val();
            let id=$('#iduser').val();
            let forchose = $("#nameot2 option:selected").text();

            $.ajax({
              url: "/updateuser/"+id,
              method: 'get',
              data:{
                id:id,
                log:log,
                name:name,
                id_otdel:id_otdel,
                tel:tel,
                email:email,
                password:password,
                startwork:startwork,
                dogovor:dogovor,
                datedog:datedog,
                datebirth:datebirth,
                snils:snils,
                educate:educate,
                classif:classif,
                func:func,
                staj:staj
              },
              success:function(response){
                $.ajax({
                  url: "/rabotnikinfo/"+idjs,
                  type:"get",
                  data:{
                    value:idjs
                  },
                      success: function(html){

                          $("#banner11").html(html);
                          jsvarplus=jsvarplus+1;
                          new_tr = "<tr id="+jsvarplus+"><td style='display:none;'>"+jsvarplus+"</td><td class='btnRab'><span>"+namers+"</span></td><td style='display:none;'  data-id="+idjs+">"+idjs+"</td></tr>";
                          tr = $('#'+$fordell);
                          tr.after(new_tr);
                          tr.remove();
                          $fordell=jsvarplus;
                      }
                  });




              },
             });


            });
          </script>
</div>
</div>
</div>
</div>


<div class="overlay" id="modal-2">
  <div class="flex-popap">
    <div class="popap">
      <div id="top5">
        <span style="font-size:30px; top:7px!important; position:relative!important; margin-left:25px;cursor: default;">
          Изменение прав
        </span>

        <a class="close_popap"></a>
      </div>

      <div id="banner5" style="width: 650px; ">

        <form id="contactForm3">
<input hidden class="form-control pudge" name="id" id="iduser" value="<?php echo $id; ?>">
          <div class="form-group">
          <div class="order">
              <label class='fororder4'><p class='forp1'>Учёт реактивов</p></label>
            <div class="fororder1">
              <div class="fororder23">
            <input id="react" type="radio" class="form-control pudge" <?php if ($react==='1') echo 'checked';?> name="react"  value="1" autocomplete="off"> <p>Редактирование</p></div><div class="fororder23">
            <input id="react" type="radio" class="form-control pudge" <?php if ($react==='2') echo 'checked';?> name="react" value="2" autocomplete="off"> <p>Просмотр</p></div><div class="fororder23">
            <input id="react" type="radio" class="form-control pudge" <?php if ($react==='3') echo 'checked';?> name="react" value="3" autocomplete="off"> <p>Нет</p>
            </div>
            </div>
          </div>
          </div>

          <div class="form-group">
            <div class="order">
                <label class='fororder4'><p class='forp1'>Управление оборудованием</p></label>
              <div class="fororder1">
                <div class="fororder23">
              <input id="oborud" type="radio" class="form-control pudge" <?php if ($oborud==='1') echo 'checked';?> name="oborud" value="1" autocomplete="off"> <p>Редактирование</p></div><div class="fororder23">
              <input id="oborud" type="radio" class="form-control pudge" <?php if ($oborud==='2') echo 'checked';?> name="oborud" value="2" autocomplete="off"> <p>Просмотр</p></div><div class="fororder23">
              <input id="oborud" type="radio" class="form-control pudge" <?php if ($oborud==='3') echo 'checked';?> name="oborud" value="3" autocomplete="off"> <p>Нет</p>
              </div>
              </div>
            </div>
          </div>

          <div class="form-group">
            <div class="order">

                <label class='fororder4'><p class='forp1'>Приготовление растворов</p></label>

              <div class="fororder1">
                <div class="fororder23">
              <input id="rast" type="radio" class="form-control pudge" <?php if ($rast==='1') echo 'checked';?> name="rast" value="1" autocomplete="off"><p>Редактирование</p></div><div class="fororder23">
              <input id="rast" type="radio" class="form-control pudge" <?php if ($rast==='2') echo 'checked';?> name="rast" value="2" autocomplete="off"><p>Просмотр</p></div><div class="fororder23">
              <input id="rast" type="radio" class="form-control pudge" <?php if ($rast==='3') echo 'checked';?> name="rast" value="3" autocomplete="off"><p>Нет</p>
                </div>
              </div>
            </div>
      </div>


<div class="form-group">
<button class="close_popap btn btn-success" id="submit"></button>
</div>
</form>

<script>
<?php
       echo "var idjs ='$id';";
       echo "var namers ='$fio';";
   ?>

</script>


       <script>

        $('#contactForm3').on('submit',function(event){
            event.preventDefault();
            const selected = document.querySelector('input[name="react"]:checked').value;
            const selected1 = document.querySelector('input[name="oborud"]:checked').value;
            const selected2 = document.querySelector('input[name="rast"]:checked').value;
            let react = selected+','+selected1+','+selected2;

            let id=$('#iduser').val();


            $.ajax({
              url: "/updaterules/"+id,
              method: 'get',
              data:{
                id:id,
                react:react

              },
              success:function(response){
                $.ajax({
                  url: "/rabotnikinfo/"+idjs,
                  type:"get",
                  data:{
                    value:idjs
                  },
                      success: function(html){

                          $("#banner11").html(html);

                          $fordell=jsvarplus;
                      }
                  });




              },
             });


            });
          </script>
</div>
</div>
</div>
</div>
