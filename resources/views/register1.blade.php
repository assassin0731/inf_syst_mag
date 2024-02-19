
<script>
$(function()  {
  $('.preloader').fadeOut('fast');
});
</script>
<script>
mask(function() {
mask('.jmp__input_tel').mask('+7(000)000-00-00');
});
</script>
<script>
$(document).ready( function () {
    $('#myTable').DataTable();
} );
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





<div id="top3">
  <span style="font-size:30px; margin-top:5px;">
    Создание нового пользователя
  </span>
</div>


<!-- Окно 1 -->

<div style="background:#ecf3ff;">



      <div id="banner5" style="width: 100%; height:775px; ">

        <form  id="contactForm2">

          <div class="form-group">
          <div class="order">
            <div class="fororder">
              <label for="log">{{ __('Логин пользователя') }}</label>
            </div>
            <div class="fororder1">
            <input id="log" type="lalka" class="form-control pudge" name="log" autocomplete="off">
            </div>
          </div>
          </div>

          <div class="form-group">
          <div class="order">
            <div class="fororder">
              <label for="fio">{{ __('ФИО работника') }}</label>
            </div>
            <div class="fororder1">
            <input id="fio" type="lalka" class="form-control pudge" name="fio" autocomplete="off">
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
                echo "<option value='' selected disabled></option>";
                  foreach($sql as $row){
              echo "<option value = '$row->id' name='$row->nameot' > $row->nameot </option>";}
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

        <input id="jmp__input_tel" type="lalka" class="form-control pudge jmp__input_tel" name="jmp__input_tel" value="{{ old('jmp__input_tel') }}" required autocomplete="jmp__input_tel" autofocus placeholder="+7 (XXX) XXX-XX-XX">
        </div>
      </div>
      </div>

      <div class="form-group">
      <div class="order">
        <div class="fororder">
          <label for="email">{{ __('Электронная почта') }}</label>
        </div>
        <div class="fororder1">
        <input id="email" type="lalka" class="form-control pudge" name="email" autocomplete="off">
        </div>
      </div>
      </div>

      <div class="form-group">
      <div class="order">
        <div class="fororder">
          <label for="password">{{ __('Пароль') }}</label>
        </div>
        <div class="fororder1">
        <input id="password" type="lalka" class="form-control pudge" name="password" autocomplete="off">
        </div>
      </div>
      </div>

      <div class="form-group">
        <div class="order">
          <div class="fororder">
            <label for="startwork">{{ __('Дата начала работы') }}</label>
          </div>
          <div class="fororder1">
            <input id="startwork" type="date" class="form-control pudge" name="startwork" autocomplete="off" autofocus>
            </div>
        </div>
        </div>

        <div class="form-group">
      <div class="order">
        <div class="fororder">
          <label for="dogovor">{{ __('Номер трудового договора') }}</label>
        </div>
        <div class="fororder1">
          <input id="dogovor" type="lalka" class="form-control pudge" name="dogovor" autocomplete="off" autofocus>
          </div>
      </div>
      </div>

      <div class="form-group">
        <div class="order">
          <div class="fororder">
            <label for="datedog">{{ __('Дата трудового договора') }}</label>
          </div>
          <div class="fororder1">
            <input id="datedog" type="date" class="form-control pudge" name="datedog" autocomplete="off" autofocus>
            </div>
        </div>
        </div>

        <div class="form-group">
          <div class="order">
            <div class="fororder">
              <label for="datebirth">{{ __('Дата рождения') }}</label>
            </div>
            <div class="fororder1">
              <input id="datebirth" type="date" class="form-control pudge" name="datebirth" autocomplete="off" autofocus>
              </div>
          </div>
          </div>

          <div class="form-group">
        <div class="order">
          <div class="fororder">
            <label for="snils">{{ __('СНИЛС') }}</label>
          </div>
          <div class="fororder1">
            <input id="snils" type="lalka" class="form-control pudge" name="snils" autocomplete="off" autofocus>
            </div>
        </div>
        </div>

        <div class="form-group">
      <div class="order">
        <div class="fororder">
          <label for="educate">{{ __('Сведения об образовании') }}</label>
        </div>
        <div class="fororder1">
          <input id="educate" type="lalka" style="height:62px;" class="form-control pudge" name="educate" autocomplete="off" autofocus>
          </div>
      </div>
      </div>

      <div class="form-group">
    <div class="order">
      <div class="fororder">
        <label for="classif">{{ __('Сведения о повышении классификации') }}</label>
      </div>
      <div class="fororder1">
        <input id="classif" type="lalka" style="height:62px;" class="form-control pudge" name="classif" autocomplete="off" autofocus>
        </div>
    </div>
    </div>

    <div class="form-group">
  <div class="order">
    <div class="fororder">
      <label for="func">{{ __('Сведения о выполняемых функциях') }}</label>
    </div>
    <div class="fororder1" >
      <input id="func" style="height:62px;" type="lalka" class="form-control pudge" name="func" autocomplete="off" autofocus>
      </div>
  </div>
  </div>

  <div class="form-group">
<div class="order">
  <div class="fororder">
    <label for="staj">{{ __('Стаж работы в годах') }}</label>
  </div>
  <div class="fororder1">
    <input id="staj" type="lalka" class="form-control pudge" name="staj" autocomplete="off" autofocus>
    </div>
</div>
</div>
<br>
<div  align="center" class="form-group">
<button class="custom-btn btn-1 btn btn-success" id="submit">Создать нового пользователя</button>
</div>
<br>
</form>


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
            let id=1;
            let forchose = $("#nameot option:selected").text();

            $.ajax({
              url: "/newuser/" + id,
              method: 'get',
              data:{
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

                console.log(response);

              },
             });


            });
          </script>


</div>

</div>
<div class="preloader">

</div>
