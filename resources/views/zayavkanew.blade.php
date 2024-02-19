<script>
$(function()  {
  $('.preloader').fadeOut('fast');
});
</script>
<script src="/js/jquery.select-multiple.js" type="text/javascript"></script>
<link href="/css/select-multiple.css" media="screen" rel="stylesheet" type="text/css">
<script>
mask(function() {
mask('.jmp__input_tel').mask('+7(000)000-00-00');
});
</script>
<link rel="stylesheet" type="text/css" href="css/dataTables.css">
<script>
$(document).ready( function () {
    $('#myTable').DataTable();
} );
</script>

<script>
let $fordel=0;
</script>
<div id="banner6">
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
<script>

               function Geeks() {

                   $('#myTable').find('tr#'+$fordel).remove();

                   document.forms["contactForm1"].reset();

               }

           </script>

<script>
$(document).ready(function(){
	$(document).on('hover', '.table tr', function(){
		$(this).addClass('hover');
	}, function() {
		$(this).removeClass('hover');
	});

$(document).on('click', '.table tr', function(){
		$('.table tr').removeClass('active');
		$(this).addClass('active');
    $fordel=$(this).children('td:last-child').text();
    $fordell=$(this).children('td:first-child').text();
    first=$(this).children('td:first-child').text();
    second=$(this).children('td:nth-child(2)').text();
    third=$(this).children('td:nth-child(3)').text();
    forth=$(this).children('td:nth-child(4)').text();
    fifth=$(this).children('td:nth-child(5)').text();
    sixth=$(this).children('td:nth-child(6)').text();
    seventh=$(this).children('td:nth-child(7)').text();
    eigth=$(this).children('td:nth-child(8)').text();
    ninth=$(this).children('td:nth-child(9)').text();
    tenth=$(this).children('td:nth-child(10)').text();

	});
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
		let id = $fordell;


    $.ajax({
      url: "/rastvor/" + $fordell,
      method: 'get',
      data: {
        value: $fordell
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

  $("a.duble").click(function() {
		let id = $fordell;

    $.ajax({
      url: "/rastvor/duble/" + $fordell,
      method: 'get',
      data: {
        value: $fordell
		},
    success:function(){

      jsvarplus=jsvarplus+1;
      row = $("<tr id="+jsvarplus+"></tr>");
      col1 = $("<td' data-id="+first+">"+first+"</td>");
      col2 = $("<td>"+second+"</td>");
      col3 = $("<td>"+third+"</td>");
      col4 = $("<td>"+forth+"</td>");
      col5 = $("<td>"+fifth+"</td>");
      col6 = $("<td>"+sixth+"</td>");
      col7 = $("<td>"+seventh+"%</td>");
      col8 = $("<td>"+eigth+"</td>");
      col9 = $("<td>"+ninth+"</td>");
      col10 = $("<td style='display:none;>"+tenth+"</td>");
      col11 = $("<td style='display:none;'>"+ jsvarplus +"</td>");
      row.append(col1,col2,col3,col4,col5,col6,col7,col8,col9,col10,col11).prependTo("#myTable");

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
<script>
$(document).ready(function() {
let age=25;
  $("select.SelectId").change(function() {
    $.ajax({
      url: "/zayavkanew/" + $(this).children("option:selected").val(),
      method: 'get',
      data: {
        value: $(this).children("option:selected").val()
      }
    }).done(function(data) {
      $("select.newselect").html(data);
			$(".newselect").trigger("chosen:updated");
    });
  });
});

$(document).ready(function() {
  $("select.newselect").change(function() {
    $.ajax({
      url: "/zayavkanew1/" + $(this).children("option:selected").val(),
      method: 'get',
      data: {
        value: $(this).children("option:selected").val()
      }
    }).done(function(data) {
      $("select.newselect1").html(data);
			$(".newselect1").trigger("chosen:updated");
    });
  });
});

$(document).ready(function() {
  $("select.newselect1").change(function() {

    $.ajax({
      url: "/zayavkanew2/" + $('#normdoc').val(),
      method: 'get',
      data: {
        value: $('#normdoc').val()
      }
    }).done(function(data) {
      $("select.newselect2").html(data);
			$(".newselect2").trigger("chosen:updated");
    });
  });
});
</script>




<div id="top3">
  <span style="font-size:30px; margin-top:5px;">
    Регистрация заявок
  </span>
</div>
<div id="top4">

  <a class="adder" onclick="show_popap('modal-1')" href="#"></a>
  <a class="duble" href="#"></a>
<a class="change" onclick="show_popap('modal-3')" href="#"></a>
<a class="poisk" href="#"></a>

<a class="delete" href="#" onclick='Geeks()'></a>

</div>

<!-- Окно 1 -->



<div class="overlay" id="modal-1">
  <div class="flex-popap">
    <div class="popap">
      <div id="top5">
        <span style="font-size:30px; top:7px!important; position:relative!important; margin-left:25px;cursor: default;">
          Новая заявка
        </span>

        <a class="close_popap"></a>
      </div>

      <div id="banner5" style="width: 650px; ">

        <form id="contactForm">

          <div class="form-group">
            <div class="order">

              <div class="fororder1">
                <div class="fororder23" style="width:49.8%!important;">
              <input type="radio" class="form-control pudge active_field" name="active_field" checked="true"><p>Физическое лицо</p></div><div class="fororder23" style="width:49.8%!important;">
              <input type="radio" class="form-control pudge active_field" name="active_field"><p>Юридическое лицо</p></div>
              </div>
            </div>
          </div>
          <script>
          document.querySelectorAll('.active_field')[1].oninput = (ev) => {
            if (ev.target.checked) {
              document.querySelector('#org').disabled = false;
            document.querySelector('#org').required = true;
            }
          }
          document.querySelectorAll('.active_field')[0].oninput = (ev) => {
            if (ev.target.checked) {
              document.querySelector('#org').disabled = true;


            }
          }
          </script>
          <div class="form-group">
          <div class="order">
            <div class="fororder">
              <label for="otdels">{{ __('Организация') }}</label>
            </div>
          <div class="fororder1">
            <input id="org" type="lalka" class="form-control pudge" name="org" autocomplete="off" autofocus disabled>
          </div>
      </div>
      </div>
      <div class="form-group">
      <div class="order">
        <div class="fororder">
          <label for="rastvor">{{ __('ФИО') }}</label>
        </div>
        <div class="fororder1">
        <input id="fio" type="lalka" class="form-control pudge" name="fio" autocomplete="off" autofocus>
        </div>
      </div>
      </div>



      <div class="form-group">
      <div class="order">
        <div class="fororder">
          <label for="jmp__input_tel">{{ __('Телефон') }}</label>
        </div>
        <div class="fororder1">

        <input id="jmp__input_tel" type="lalka" class="form-control pudge jmp__input_tel" name="jmp__input_tel" value="{{ old('jmp__input_tel') }}" required autocomplete="jmp__input_tel" autofocus placeholder="+7 (XXX) XXX-XX-XX">
        </div>
      </div>
      </div>

        <div class="form-group">
        <div class="order">
          <div class="fororder">
            <label for="method">{{ __('Электронная почта') }}</label>
          </div>
          <div class="fororder1">
            <input id="email" type="lalka" class="form-control pudge" name="email" autocomplete="off" autofocus>
            </div>
        </div>
        </div>

          <div class="form-group">
        <div class="order">
          <div class="fororder">
            <label for="kolvo">{{ __('Адрес') }}</label>
          </div>
          <div class="fororder1">
            <input id="adr" type="lalka" class="form-control pudge" name="adr" autocomplete="off" autofocus>
            </div>
        </div>
        </div>

        <div class="form-group">
        <div class="order">
          <div class="fororder">
            <label for="cons">{{ __('ИНН') }}</label>
          </div>
          <div class="fororder1">
            <input id="inn" type="lalka" class="form-control pudge" name="inn" autocomplete="off" autofocus>
            </div>
        </div>
        </div>

        <div class="form-group">
        <div class="order">
          <div class="fororder">
            <label for="coef">{{ __('ОГРН') }}</label>
          </div>
          <div class="fororder1">
            <input id="ogrn" type="lalka" class="form-control pudge" name="ogrn" autocomplete="off" autofocus>
            </div>
        </div>
        </div>

        <div class="form-group">
          <div class="order">

              <label class='fororder4'><p class='forp1'>Плательщик</p></label>

            <div class="fororder1">
              <div class="fororder23"  style="width:49.8%!important;" >
            <input id="plat" type="radio" class="form-control pudge" name="plat" value="Заказчик" autocomplete="off"><p >Заказчик</p></div><div class="fororder23" style="width:49.8%!important;">
            <input id="plat" type="radio" class="form-control pudge" name="plat" value="Иное лицо" autocomplete="off"><p>Иное лицо</p></div>
            </div>
          </div>
    </div>

    <div class="form-group">
      <div class="order">

          <label class='fororder4'><p class='forp1'>Цель испытаний</p></label>

        <div class="fororder1">
          <div class="fororder23" style="width:49.8%!important;">
        <input id="aim-1" type="radio" class="form-control pudge aim" name="aim" value="декларирование" autocomplete="off"><p>декларирование</p></div><div class="fororder23" style="width:49.8%!important;">
        <input id="aim-2" type="radio" class="form-control pudge aim" name="aim" value="производственный контроль" autocomplete="off"><p>производственный контроль</p></div><div class="fororder23" style="width:99.6%!important;">
        <input id="aim-3" type="radio" class="form-control pudge aim" name="aim" value="получение информации о фактическом качестве продукции" autocomplete="off"><p>получение информации о фактическом качестве продукции</p></div><div class="fororder23" style="position:relative;" >
        <input id="aim-4" type="radio" class="form-control pudge aim" name="aim" autocomplete="off" style="position:absolute; display:inline-block; margin-top: 5px; margin-left:-86px;"><p style="display:flex; margin-left:45px;">другое</p>
      </div><input id="aim-text" type="lalka" class="form-control pudge1" style="width:66.2%!important;" name="aim" autocomplete="aim" autofocus disabled>
      </div>


                   <script>
                   document.querySelectorAll('.aim')[3].oninput = (ev) => {
                 if (ev.target.checked) {
                 document.querySelector('#aim-text').disabled = false;
                 }
                 }
                 document.querySelectorAll('.aim')[2].oninput = (ev) => {
                 if (ev.target.checked) {
                 document.querySelector('#aim-text').disabled = true;
                 }
                 }
                 document.querySelectorAll('.aim')[1].oninput = (ev) => {
                 if (ev.target.checked) {
                 document.querySelector('#aim-text').disabled = true;
                 }
                 }
                 document.querySelectorAll('.aim')[0].oninput = (ev) => {
                 if (ev.target.checked) {
                 document.querySelector('#aim-text').disabled = true;
                 }
                 }
                   </script>

      </div>
</div>


<div class="form-group">
  <div class="order">

      <label class='fororder4'><p class='forp1'>Выезд специалиста ИЦ на отбор образцов</p></label>

    <div class="fororder1">
      <div class="fororder23" style="width:49.8%!important;">
    <input id="viezd" type="radio" class="form-control pudge" name="viezd" value="требуется" autocomplete="off"><p>требуется</p></div><div class="fororder23" style="width:49.8%!important;">
    <input id="viezd" type="radio" class="form-control pudge" name="viezd" value="не требуется" autocomplete="off"><p>не требуется</p></div>
    </div>
  </div>
</div>

<div class="form-group">
  <div class="order">

      <label class='fororder4'><p class='forp1'>Выбор метода испытаний предоставляется сотрудникам ИЦ</p></label>

    <div class="fororder1">
      <div class="fororder23" style="width:49.8%!important;">
    <input id="metod" type="radio" class="form-control pudge" name="metod" value="ДА" autocomplete="off"><p>ДА</p></div><div class="fororder23" style="width:49.8%!important;">
    <input id="metod" type="radio" class="form-control pudge" name="metod" value="НЕТ" autocomplete="off"><p>НЕТ</p></div>
    </div>
  </div>
</div>

<div class="form-group">
  <div class="order">

      <label class='fororder4'><p class='forp1'>Возврат образцов</p></label>

    <div class="fororder1">
      <div class="fororder23" style="width:49.8%!important;">
    <input id="vozvr" type="radio" class="form-control pudge" name="vozvr" value="подлежат возврату" autocomplete="off" style="width:49.8%!important;"><p>подлежат возврату</p></div><div class="fororder23" style="width:49.8%!important;">
    <input id="vozvr" type="radio" class="form-control pudge" name="vozvr" value="не подлежат возврату" autocomplete="off"><p>не подлежат возврату</p></div>
    </div>
  </div>
</div>

        <div class="form-group">
        <button class="btn btn-success" id="submit"></button>
      </div>
      </form>



                        </div>


       <script>

        $('#contactForm').on('submit',function(event){
            event.preventDefault();

            let plat = document.querySelector('input[name="plat"]:checked').value;
            let aim = document.querySelector('input[name="aim"]:checked').value;
            let viezd = document.querySelector('input[name="viezd"]:checked').value;
            let metod = document.querySelector('input[name="metod"]:checked').value;
            let vozvr = document.querySelector('input[name="vozvr"]:checked').value;
            if (aim==='on') aim=$('#aim-text').val();
            let org = $('#org').val();
            let name = $('#fio').val();
            let tel = $('#jmp__input_tel').val();
            let email = $('#email').val();
            let adr = $('#adr').val();
            let inn = $('#inn').val();
            let ogrn = $('#ogrn').val();
            let forclass='odd';
            $.ajax({
              url: "/newzayav",
              type:"POST",
              data:{
                "_token": "{{ csrf_token() }}",
                org:org,
                name:name,
                tel:tel,
                email:email,
                adr:adr,
                inn:inn,
                aim:aim,
                ogrn:ogrn,
                plat:plat,
                viezd:viezd,
                metod:metod,
                vozvr:vozvr
              },
              success:function(response){

                console.log(response);
                if (jsvarplus % 2 == 0) {
                  forclass='even';
                }
                jsvarplus=jsvarplus+1;

                if (!response.org) response.org="";
                row = $("<tr class="+forclass+" id="+jsvarplus+"></tr>");
                col1 = $("<td class='sorting_1' data-id="+response.id+">"+response.id+"</td>");
                col2 = $("<td>"+response.org+"</td>");
                col3 = $("<td>"+response.name+"</td>");
                col4 = $("<td>"+response.tel+"</td>");
                col5 = $("<td>"+response.email+"</td>");
                col6 = $("<td>"+response.adr+"</td>");
                col7 = $("<td>"+response.inn+"</td>");
                col8 = $("<td>"+response.ogrn+"</td>");
                col9 = $("<td>"+response.plat+"</td>");
                col10 = $("<td>"+response.aim+"</td>");
                col11 = $("<td>"+response.viezd+"</td>");
                col12 = $("<td>"+response.metod+"</td>");
                col13 = $("<td>"+response.vozvr+"</td>");
                col14 = $("<td style='display:none;'>"+ jsvarplus +"</td>");
                row.append(col1,col2,col3,col4,col5,col6,col7,col8,col9,col10,col11,col12,col13,col14).prependTo("#myTable");
                show_popap('modal-3');

                document.forms["contactForm"].reset();
                document.forms["contactForm1"].reset();
              },
             });


            });
          </script>




    </div>
  </div>
</div>

<div class="overlay" id="modal-3">
  <div class="flex-popap">
    <div class="popap">
      <div id="top5">
        <span style="font-size:30px; top:7px!important; position:relative!important; margin-left:25px;cursor: default;">
          Добавить образец
        </span>

        <a class="close_popap"></a>
      </div>

      <div id="banner66" style="width: 650px; ">

        <form id="contactForm1">

      <div class="form-group">
      <div class="order">
        <div class="fororder" style="margin-left:-388px;">
          <label for="rastvor">{{ __('Тип продукции') }}</label>
        </div>
        <div  class="fororder1" style="position:absolute; margin-right:-254px; margin-top:-10px;">
          <script>
          $(document).ready(function () {
         $('#prodtype').chosen()
       });
         </script>
         <?php
         $sql = DB::select('select * from prodtype');


             echo "<select class='SelectId' name = 'prodtype' id='prodtype'>";
             echo "<option value='0' disabled selected='selected'>Тип продукции</option>";
               foreach($sql as $row){
           echo "<option value = '$row->id' > $row->type </option>";}
             echo "</select>";

             ?>

        </div>
      </div>
      </div>

      <div class="form-group">
      <div class="order">
        <div class="fororder" style="margin-left:-388px;">
          <label for="actt">{{ __('Подтип продукции') }}</label>
        </div>
        <div class="fororder1" style="position:absolute; margin-right:-254px; margin-top:-10px;">

          <script>
           $(document).ready(function () {
          $('.newselect').chosen()
        });
          </script>
          <select class="newselect pudge" name = 'prodpodtype[]' id="prodpodtype">
            <option selected disabled hidden></option>
          </select>

          </div>
      </div>
      </div>

      <div class="form-group">
      <div class="order">
        <div class="fororder" style="margin-left:-388px;height:70px;">
          <label for="actt">{{ __('Нормативный документ') }}</label>
        </div>
        <div class="fororder1" style="position:absolute; margin-right:-221px; margin-top:">

          <script>
           $(document).ready(function () {
          $('.newselect1').chosen()
        });
          </script>
          <select class="newselect1 pudge" multiple name = 'normdoc[]' id="normdoc">
            <option selected disabled hidden></option>
          </select>

          </div>
      </div>
      </div>

      <div class="form-group">
      <div class="order">
        <div class="fororder" style="margin-left:-388px; height:70px;">
          <label for="actt">{{ __('Показатели') }}</label>
        </div>
        <div class="fororder1" style="position:absolute; margin-right:-221px; margin-top:">

          <script>
           $(document).ready(function () {
          $('.newselect2').chosen()
        });
          </script>
          <select class="newselect2 pudge" multiple name = 'pokaz[]' id="pokaz">
            <option selected="selected" disabled hidden></option>
          </select>

          </div>
      </div>
      </div>



        <div class="form-group">
        <div class="order">
          <div class="fororder">
            <label for="method">{{ __('Название продукции') }}</label>
          </div>
          <div class="fororder1">
            <input id="nameprod" type="lalka" class="form-control pudge" name="nameprod" autocomplete="off" autofocus>
            </div>
        </div>
        </div>

        <div class="form-group">
        <div class="order">
          <div class="fororder" style="width:26%;">
            <label for="method">{{ __('Дата изготовления') }}</label>
          </div>
          <div class="fororder11">
            <input id="dateizgotov"   type="date" class="form-control pudge" name="izgotov" autocomplete="off" autofocus>
            </div>
            <div class="fororder" style="width:22%;">
              <label for="method">{{ __('Срок годности') }}</label>
            </div>
            <div class="fororder1">
              <input id="srok" style="width:99%;height:45px;" type="lalka" class="form-control pudge" name="srok" autocomplete="off" autofocus>
              </div>
        </div>
        </div>

        <div class="form-group">
        <div class="order">
          <div class="fororder" style="width:26%;">
            <label for="method">{{ __('Размер партии') }}</label>
          </div>
          <div class="fororder11" style="width:165px;">
            <input id="razmer"   type="lalka" class="form-control pudge" name="izgotov" autocomplete="off" autofocus>
            </div>
            <div class="fororder" style="width:22%;">
              <label for="method">{{ __('Номер партии') }}</label>
            </div>
            <div class="fororder11" style="width:171px;">
              <input id="numpar"   type="lalka" class="form-control pudge" name="izgotov" autocomplete="off" autofocus>
              </div>
        </div>
        </div>

        <div class="form-group">
        <div class="order">
          <div class="fororder">
            <label for="method">{{ __('Количество образца, поступившего на испытание') }}</label>
          </div>
          <div class="fororder1">
            <input id="kolobr" style="height:99%;" type="lalka" class="form-control pudge" name="nameprod" autocomplete="off" autofocus>
            </div>
        </div>
        </div>

        <div class="form-group">
        <div class="order">
          <div class="fororder">
            <label for="method">{{ __('Сведения об упаковке образца') }}</label>
          </div>
          <div class="fororder1">
            <input id="sved" style="height:99%;" type="lalka" class="form-control pudge" name="nameprod" autocomplete="off" autofocus>
            </div>
        </div>
        </div>

        <div class="form-group">
        <div class="order">
          <div class="fororder">
            <label for="method">{{ __('Изготовитель продукции') }}</label>
          </div>
          <div class="fororder1">
            <input id="izgotov" style="height:99%;" type="lalka" class="form-control pudge" name="nameprod" autocomplete="off" autofocus>
            </div>
        </div>
        </div>

        <div class="form-group">
        <div class="order">
          <div class="fororder">
            <label for="method">{{ __('Адрес изготовителя') }}</label>
          </div>
          <div class="fororder1">
            <input id="adrizg" style="height:99%;" type="lalka" class="form-control pudge" name="nameprod" autocomplete="off" autofocus>
            </div>
        </div>
        </div>


          <div class="form-group">
        <div class="order">
            <div class="fororder">
              <label for="method">{{ __('Акт отбора образца №') }}</label>
            </div>
            <div class="fororder11" style="width:171px;">
              <input id="act" style="height:99%;"  type="lalka" class="form-control pudge" name="izgotov" autocomplete="off" autofocus>
              </div>
              <div class="fororder" style="width:8%;">
                <label for="method">{{ __('от') }}</label>
              </div>
              <div class="fororder11" style="width:165px;">
                <input id="numact"   type="date" class="form-control pudge" name="izgotov" autocomplete="off" autofocus>
                </div>
        </div>
        </div>

        <div class="form-group">
        <div class="order">
          <div class="fororder">
            <label for="method">{{ __('Кем отобран образец') }}</label>
          </div>
          <div class="fororder1">
            <input id="ktootobr" type="lalka" class="form-control pudge" name="nameprod" autocomplete="off" autofocus>
            </div>
        </div>
        </div>


        <div class="form-group">
        <div class="order">
          <div class="fororder">
            <label for="method">{{ __('Место отбора') }}</label>
          </div>
          <div class="fororder1">
            <input id="mesto" type="lalka" class="form-control pudge" name="nameprod" autocomplete="off" autofocus>
            </div>
        </div>
        </div>

        <div class="form-group">
        <div class="order">
          <div class="fororder" style="width:26%;">
            <label for="method">{{ __('Дата отбора') }}</label>
          </div>
          <div class="fororder11">
            <input id="dateotbor" style="height:99%;"  type="date" class="form-control pudge" name="izgotov" autocomplete="off" autofocus>
            </div>
            <div class="fororder" style="width:22%;">
              <label for="method">{{ __('Дата поступления') }}</label>
            </div>
            <div class="fororder1">
              <input id="datepost" style="width:99%; height:99%;" type="date" class="form-control pudge" name="srok" autocomplete="off" autofocus>
              </div>
        </div>
        </div>





        <div class="form-group">
        <button class="btn btn-success"  id="submit"></button>
      </div>
      </form>



      <!--
        <div  class="form-group row mb-0" style="position:absolute; left:33.3%; top:453px; color: #FFF !important;">
            <div  class="col-md-6 offset-md-4" >
                <button type="submit" id="buttonenter1" class="buttonenter1">
                    {{ __('Перейти к выбору продукции на испытания') }}
                </button>
            </div>
        </div>
      </form>-->

                        </div>


       <script>

        $('#contactForm1').on('submit',function(event){
            event.preventDefault();


            let prodname = $('#nameprod').val();
            let act = $('#act').val();
            let pokaz = $('#pokaz').val();
            let datepost = $('#datepost').val();
            let dateotbor = $('#dateotbor').val();
            let mesto = $('#mesto').val();
            let ktootobr = $('#ktootobr').val();
            let numact = $('#numact').val();
            let kolobr = $('#kolobr').val();
            let adrizg = $('#adrizg').val();
            let izgotov = $('#izgotov').val();
            let sved = $('#sved').val();
            let dateizgotov = $('#dateizgotov').val();
            let razmer = $('#razmer').val();
            let numpar = $('#numpar').val();
            let srok = $('#srok').val();

            $.ajax({
              url: "/newzayavprod",
              type:"POST",
              data:{
                "_token": "{{ csrf_token() }}",

                prodname:prodname,
                act:act,
                pokaz:pokaz,
                datepost:datepost,
                dateotbor:dateotbor,
                mesto:mesto,
                ktootobr:ktootobr,
                numact:numact,
                kolobr:kolobr,
                adrizg:adrizg,
                izgotov:izgotov,
                sved:sved,
                dateizgotov:dateizgotov,
                razmer:razmer,
                srok:srok,
                numpar:numpar
              },
              success:function(response){

                document.forms["contactForm1"].reset();
                document.getElementById("prodtype").selectedIndex = 1;
              },
             });


            });
          </script>




    </div>
  </div>
</div>

<div id="banner3">

  <table id="myTable" style="width:100%;" class="table display" cellspacing='0'>
		<thead>
      <th>Номер</th>
			<th>Организация</th>
			<th>ФИО</th>
			<th>Телефон</th>
			<th>Электронная почта</th>
			<th>Адрес</th>
      <th>ИНН</th>
			<th>ОГРН</th>
			<th>Плательщик</th>
      <th>Цель испытаний</th>
      <th>Выезд</th>
      <th>Метод</th>
      <th>Возврат</th>

      <th style='display:none;'>1</th>
		<!-- Table Header -->
	</thead>
	<tbody >
		<?php
		    $zayavka=DB::select('select * from zayav_infos order by id');
        $rowid=0;
		    foreach (array_reverse($zayavka) as $zayavkas) {
          $rowid=$rowid+1;
		        echo "<tr id='$rowid'>";


            echo "<td  data-id={$zayavkas->id}>$zayavkas->id</td>";
		        echo "<td>$zayavkas->org</td>";
            echo "<td>$zayavkas->name</td>";
            echo "<td>$zayavkas->tel</td>";
            echo "<td>$zayavkas->email</td>";
            echo "<td>$zayavkas->adr</td>";
            echo "<td>$zayavkas->inn</td>";
            echo "<td>$zayavkas->ogrn</td>";
            echo "<td>$zayavkas->plat</td>";
            echo "<td>$zayavkas->aim</td>";
            echo "<td>$zayavkas->viezd</td>";
            echo "<td>$zayavkas->metod</td>";
            echo "<td>$zayavkas->vozvr</td>";


             echo "<td style='display:none;'>$rowid</td>";

		        echo "</tr>";

		    }
		?>
    <script>
    <?php
           echo "var jsvar ='$rowid';";
       ?>
       console.log(jsvar);
       jsvarplus=+jsvar;
    </script>

</tbody>
		</table>
</div>
</div>
<div class="preloader">

</div>
