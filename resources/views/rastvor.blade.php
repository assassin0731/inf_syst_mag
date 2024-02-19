
<script>
$(function()  {
  $('.preloader').fadeOut('fast');
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





<div id="top3">
  <span style="font-size:30px; margin-top:5px;">
    Приготовление растворов
  </span>
</div>
<div id="top4">

  <a class="adder" onclick="show_popap('modal-1')" href="#"></a>
  <a class="duble" href="#"></a>
<a id='change' class="change" onclick="show_popap('modal-2')" href="#"></a>
<a class="poisk" href="#"></a>

<a class="delete" href="#" onclick='Geeks()'></a>

</div>

<!-- Окно 1 -->



<div class="overlay" id="modal-1">
  <div class="flex-popap">
    <div class="popap">
      <div id="top5">
        <span style="font-size:30px; top:7px!important; position:relative!important; margin-left:25px;cursor: default;">
          Добавить запись
        </span>

        <a class="close_popap"></a>
      </div>

      <div id="banner5" style="width: 650px; ">

        <form id="contactForm">
          <div class="form-group">
          <div class="order">
            <div class="fororder">
              <label for="otdels">{{ __('Отдел') }}</label>
            </div>
          <div class="fororder1">

            <?php
            $sql = DB::select('select id,nameot from otdels');
                echo "<select class='form-control' name = 'nameot' id='nameot' >";
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
          <label for="rastvor">{{ __('Наименование раствора') }}</label>
        </div>
        <div class="fororder1">
        <input id="namerast" type="lalka" class="form-control pudge" name="namerast" autocomplete="off" autofocus>
        </div>
      </div>
      </div>



      <div class="form-group">
        <div class="order">
          <div class="fororder">
            <label for="dateprig">{{ __('Дата приготовления') }}</label>
          </div>
          <div class="fororder1">
            <input id="dateprig" type="date" class="form-control pudge" name="dateprig" autocomplete="off" autofocus>
            </div>
        </div>
        </div>




        <div class="form-group">
        <div class="order">
          <div class="fororder">
            <label for="method">{{ __('Методика приготовления') }}</label>
          </div>
          <div class="fororder1">
            <input id="method" type="lalka" class="form-control pudge" name="method" autocomplete="off" autofocus>
            </div>
        </div>
        </div>

          <div class="form-group">
        <div class="order">
          <div class="fororder">
            <label for="kolvo">{{ __('Количество приготовленного') }}</label>
          </div>
          <div class="fororder1">
            <input id="kolvo" type="lalka" class="form-control pudge" name="kolvo" autocomplete="off" autofocus>
            </div>
        </div>
        </div>

        <div class="form-group">
        <div class="order">
          <div class="fororder">
            <label for="cons">{{ __('Концентрация раствора') }}</label>
          </div>
          <div class="fororder1">
            <input id="cons" type="lalka" class="form-control pudge" name="cons" autocomplete="off" autofocus>
            </div>
        </div>
        </div>

        <div class="form-group">
        <div class="order">
          <div class="fororder">
            <label for="coef">{{ __('Поправочный коэффициент') }}</label>
          </div>
          <div class="fororder1">
            <input id="coef" type="lalka" class="form-control pudge" name="coef" autocomplete="off" autofocus>
            </div>
        </div>
        </div>

        <div class="form-group">
        <div class="order">
          <div class="fororder">
            <label for="dategodn">{{ __('Срок годности') }}</label>
          </div>
          <div class="fororder1">
            <input id="dategod" type="date" class="form-control pudgeno" name="dategod" autocomplete="name" autofocus>
            </div>
        </div>
        </div>
        <div class="form-group">
        <button class="close_popap btn btn-success" id="submit"></button>
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

        $('#contactForm').on('submit',function(event){
            event.preventDefault();

            let id_otdel = $('#nameot').val();
            let name = $('#namerast').val();
            let date = $('#dateprig').val();
            let method = $('#method').val();
            let kolvo = $('#kolvo').val();
            let cons = $('#cons').val();
            let coef = $('#coef').val();
            let dategod = $('#dategod').val();
            let forchose = $("#nameot option:selected").text();

            $.ajax({
              url: "/contact-form",
              type:"POST",
              data:{
                "_token": "{{ csrf_token() }}",
                id_otdel:id_otdel,
                name:name,
                date:date,
                method:method,
                kolvo:kolvo,
                cons:cons,
                coef:coef,
                dategod:dategod
              },
              success:function(response){

                console.log(response.name);
                jsvarplus=jsvarplus+1;
                var a = [];
                a=response.date.split("-");
                year=a[2]+"."+a[1]+"."+a[0];
                var a = [];
                a=response.dategod.split("-");
                year1=a[2]+"."+a[1]+"."+a[0];
                row = $("<tr id="+jsvarplus+"></tr>");
                col1 = $("<td data-id="+response.id+">"+response.id+"</td>");
                col2 = $("<td>"+forchose+"</td>");
                col3 = $("<td>"+response.name+"</td>");
                col4 = $("<td>"+year+"</td>");
                col5 = $("<td>"+response.method+"</td>");
                col6 = $("<td>"+response.kolvo+"</td>");
                col7 = $("<td>"+response.cons+"%</td>");
                col8 = $("<td>"+response.coef+"</td>");
                col9 = $("<td>"+year1+"</td>");
                col10 = $("<td style='display:none;'>"+ id_otdel +"</td>");
                col11 = $("<td style='display:none;'>"+ jsvarplus +"</td>");
                row.append(col1,col2,col3,col4,col5,col6,col7,col8,col9,col10,col11).prependTo("#myTable");
                document.forms["contactForm"].reset();
                document.forms["contactForm1"].reset();
              },
             });


            });
          </script>




    </div>
  </div>
</div>

<div class="overlay" id="modal-2">
  <div class="flex-popap">
    <div class="popap">
      <div id="top5">
        <span style="font-size:30px; top:7px!important; position:relative!important; margin-left:25px;cursor: default;">
          Добавить запись
        </span>

        <a class="close_popap"></a>
      </div>

      <div id="banner5" style="width: 650px; ">

        <form id="contactForm1">
          <div class="form-group">
          <div class="order">
            <div class="fororder">
              <label for="otdels">{{ __('Отдел') }}</label>
            </div>
          <div class="fororder1">

            <?php
            $sql = DB::select('select id,nameot from otdels');
                echo "<select class='form-control' name = 'nameot1' id='nameot1' >";
                echo "<option selected disabled id='selectedotdel'></option>";
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
          <label for="rastvor">{{ __('Наименование раствора') }}</label>
        </div>
        <div class="fororder1">
        <input id="namerast1" type="lalka" class="form-control" name="namerast1" autocomplete="off" autofocus>
        </div>
      </div>
      </div>



      <div class="form-group">
        <div class="order">
          <div class="fororder">
            <label for="dateprig">{{ __('Дата приготовления') }}</label>
          </div>
          <div class="fororder1">
            <input id="dateprig1" type="date" class="form-control" name="dateprig1" autocomplete="off" autofocus>
            </div>
        </div>
        </div>




        <div class="form-group">
        <div class="order">
          <div class="fororder">
            <label for="method">{{ __('Методика приготовления') }}</label>
          </div>
          <div class="fororder1">
            <input id="method1" type="lalka" class="form-control pudge" name="method1" autocomplete="off" autofocus>
            </div>
        </div>
        </div>

          <div class="form-group">
        <div class="order">
          <div class="fororder">
            <label for="kolvo">{{ __('Количество приготовленного') }}</label>
          </div>
          <div class="fororder1">
            <input id="kolvo1" type="lalka" class="form-control pudge" name="kolvo1" autocomplete="off" autofocus>
            </div>
        </div>
        </div>

        <div class="form-group">
        <div class="order">
          <div class="fororder">
            <label for="cons">{{ __('Концентрация раствора') }}</label>
          </div>
          <div class="fororder1">
            <input id="cons1" type="lalka" class="form-control pudge" name="cons1" autocomplete="off" autofocus>
            </div>
        </div>
        </div>

        <div class="form-group">
        <div class="order">
          <div class="fororder">
            <label for="coef">{{ __('Поправочный коэффициент') }}</label>
          </div>
          <div class="fororder1">
            <input id="coef1" type="lalka" class="form-control pudge" name="coef1" autocomplete="off" autofocus>
            </div>
        </div>
        </div>

        <div class="form-group">
        <div class="order">
          <div class="fororder">
            <label for="dategodn">{{ __('Срок годности') }}</label>
          </div>
          <div class="fororder1">
            <input id="dategod1" type="date" class="form-control pudgeno" name="dategod1" autocomplete="name" autofocus>
            <input id="forid" type="text" class="form-control pudgeno" name="forid" autocomplete="name" autofocus hidden>
            </div>
        </div>
        </div>
        <div class="form-group">
        <button class="close_popap btn btn-success" id="submit"></button>
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

            let id_otdel = $('#nameot1').val();
            let name = $('#namerast1').val();
            let date = $('#dateprig1').val();
            let method = $('#method1').val();
            let kolvo = $('#kolvo1').val();
            let cons = $('#cons1').val();
            let coef = $('#coef1').val();
            let dategod = $('#dategod1').val();
            let id = $('#forid').val();
            let forchose = $("#nameot1 option:selected").text();
            if (!id_otdel) {id_otdel=tenth;}

            $.ajax({
              url: "/contact-form1",
              type:"POST",
              data:{
                "_token": "{{ csrf_token() }}",
                id:id,
                id_otdel:id_otdel,
                name:name,
                date:date,
                method:method,
                kolvo:kolvo,
                cons:cons,
                coef:coef,
                dategod:dategod
              },
              success:function(response){

                console.log(response.name);
                jsvarplus=jsvarplus+1;
                var a = [];
                a=response.date.split("-");
                year=a[2]+"."+a[1]+"."+a[0];
                var a = [];
                a=response.dategod.split("-");
                year1=a[2]+"."+a[1]+"."+a[0];
                new_tr = "<tr id="+jsvarplus+"><td data-id="+response.id+">"+response.id+"</td><td>"+forchose+"</td><td>"+response.name+"</td><td>"+year+"</td><td>"+response.method+"</td><td>"+response.kolvo+"</td><td>"+response.cons+"%</td><td>"+response.coef+"</td><td>"+year1+"</td><td style='display:none;'>"+ id_otdel +"</td><td style='display:none;'>"+ jsvarplus +"</td></tr>";
                tr = $('#'+$fordel);
                tr.after(new_tr);
                tr.remove();
                document.forms["contactForm"].reset();
                document.forms["contactForm1"].reset();
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
			<th>Отдел</th>
			<th>Наименование раствора</th>
			<th>Дата приготовления</th>
			<th>Методика приготовления</th>
			<th>Количество приготовленного</th>
      <th>Концентрация раствора</th>
			<th>Поправочный коэффициент</th>
			<th>Срок годности</th>
      <th style='display:none;'>1</th>
      <th style='display:none;'>1</th>
		<!-- Table Header -->
	</thead>
	<tbody>
		<?php
		    $rastvor=DB::select('select rastvors.id, id_otdel,name,date,method,kolvo,coef,cons,dategod,otdels.nameot from rastvors join otdels on otdels.id=rastvors.id_otdel order by rastvors.id');
        $rowid=0;
		    foreach (array_reverse($rastvor) as $rastvors) {
          $rowid=$rowid+1;
		        echo "<tr id='$rowid'>";


            echo "<td  data-id={$rastvors->id}>$rastvors->id</td>";
		        echo "<td>$rastvors->nameot</td>";
            echo "<td>$rastvors->name</td>";
            $arr1=explode(' ',$rastvors->date);
            $arr2=explode('-',$arr1[0]);
            echo "<td>$arr2[2].$arr2[1].$arr2[0]</td>";
            echo "<td>$rastvors->method</td>";
            echo "<td>$rastvors->kolvo</td>";
            echo "<td>$rastvors->cons</td>";
            echo "<td>$rastvors->coef</td>";
            $arr1=explode(' ',$rastvors->dategod);
            $arr2=explode('-',$arr1[0]);
            echo "<td>$arr2[2].$arr2[1].$arr2[0]</td>";
             echo "<td style='display:none;'>$rastvors->id_otdel</td>";
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
