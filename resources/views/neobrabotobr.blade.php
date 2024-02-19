<script>
$(function()  {
  $('.preloader').fadeOut('fast');
});
</script>

<link rel="stylesheet" type="text/css" href="css/dataTables1.css">
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
	$(document).on('hover', '.table4 tr', function(){
		$(this).addClass('hover');
	}, function() {
		$(this).removeClass('hover');
	});

$(document).on('click', '.table4 tr', function(){

		$('.table4 tr').removeClass('active');
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
    let id=$fordel;

    $.ajax({
      url: "/neobrinfo/"+id,
      type:"get",
      data:{
        value:id
      },
          success: function(html){
              $("#banner11").html(html);
          }
      });
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
$(document).ready(function(){
    $('.btnRab').click(function(){


    });
});
</script>



<div id="top3">
  <span style="font-size:30px; margin-top:5px;">
    Заявки с необработанными образцами
  </span>
</div>


<!-- Окно 1 -->


<div id="top6">
  <a class="poisk" style="margin-left:125px;" href="#"></a>
</div>
<div id="banner10">

  <table id="myTable" class="table table4 display rabotniktable" style="width:100%; font-size:18px;" cellspacing='0'>
		<thead>
      <th style='display:none;'></th>
			<th style='display:none;'></th>
			<th style='display:none;'></th>

		<!-- Table Header -->
	</thead>
	<tbody>
		<?php
		    $zayav=DB::select('select distinct zayav_infos.id from zayav_infos join results on results.id_zayav=zayav_infos.id where (results.result IS NULL) order by zayav_infos.id desc');
        $rowid=0;
		    foreach (($zayav) as $zayavs) {
          $rowid=$rowid+1;
		        echo "<tr id='$rowid'>";
            echo "<td style='display:none;'>$rowid</td>";

		        echo "<td class='btnRab'><span>Заявка №$zayavs->id</span></td>";
            echo "<td style='display:none;'  data-id={$zayavs->id}>$zayavs->id</td>";

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

<div id="banner11">

</div>

<div class="preloader">

</div>
