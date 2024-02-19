<!DOCTYPE html>
<!--
 * HTML-Sheets-of-Paper (https://github.com/delight-im/HTML-Sheets-of-Paper)
 * Copyright (c) delight.im (https://www.delight.im/)
 * Licensed under the MIT License (https://opensource.org/licenses/MIT)
-->
<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="description" content="Emulating real sheets of paper in web documents (using HTML and CSS)">
		<title>Заявка</title>
		<link rel="stylesheet" type="text/css" href="/css/sheets-of-paper.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<script src="https://code.jquery.com/jquery-2.1.0.js"></script>
		<script>
		var official_elements = document.getElementsByClassName('official');
		for (var i=0; i<official_elements.length; i++) {
		official_elements[i].innerHTML =  official_elements[i].innerHTML.replace(/(.)/g, '<span class="official-squared">$1</span>');
		}

		</script>
		<script>
		$(document).ready(function() {
		  $("input.delete").click(function() {
				let id = $(this).attr('data-id');

		    $.ajax({
		      url: "/profile/" + $(this).attr('data-id'),
		      method: 'get',
		      data: {
		        value: $(this).attr('data-id')

				}


		    });
		  });
		});

		</script>
		<script>
		$(document).ready(function() {
			$("input.change1").click(function() {
				let id = $(this).attr('data-id');

				$.ajax({
					url: "/adminshow/" + $(this).attr('data-id'),
					method: 'get',
					data: {
						value: $(this).attr('data-id')

				}


				});
			});
		});

		</script>
		<script>
		$(document).ready(function() {
			$("input.change2").click(function() {
				let id = $(this).attr('data-id');

				$.ajax({
					url: "/adminshow1/" + $(this).attr('data-id'),
					method: 'get',
					data: {
						value: $(this).attr('data-id')

				}


				});
			});
		});

		</script>
	</head>
	<body>

		<script>
		function change1(r) {
  var table = document.getElementById('myTable');
  r.parentNode.parentNode.getElementsByTagName('TD')[2].innerText = 'Одобрена';

};
function change2(r) {
var table = document.getElementById('myTable');
  r.parentNode.parentNode.getElementsByTagName('TD')[2].innerText = 'Отклонена';
};
function deleteRow(r)
{
var i=r.parentNode.parentNode.rowIndex;
document.getElementById('myTable').deleteRow(i);
};
function change3(r) {
var table = document.getElementById('myTable1');
  r.parentNode.parentNode.getElementsByTagName('TD')[2].innerText = 'Одобрена';

};
function change4(r) {
var table = document.getElementById('myTable1');
  r.parentNode.parentNode.getElementsByTagName('TD')[2].innerText = 'Отклонена';
};
function deleteRow1(r)
{
var i=r.parentNode.parentNode.rowIndex;
document.getElementById('myTable1').deleteRow(i);
};
function change5(r) {
var table = document.getElementById('myTable2');
  r.parentNode.parentNode.getElementsByTagName('TD')[2].innerText = 'Одобрена';

};
function change6(r) {
var table = document.getElementById('myTable2');
  r.parentNode.parentNode.getElementsByTagName('TD')[2].innerText = 'Отклонена';
};
function deleteRow2(r)
{
var i=r.parentNode.parentNode.rowIndex;
document.getElementById('myTable2').deleteRow(i);
};
		</script>

		<table id="myTable" style="font-size:13px;width:25%; float:left; margin-right:10px;">
			<caption style="font-size:16px;"><b>Сегодняшние заявки</b></caption>
			<tr>
				<th style="width:70px;">Дата подачи</th>
						<th>Заказчик</th>
				<th>Статус</th>

				<th>Одобрить</th>
				<th>Отклонить</th>
				<th>Просмотр</th>
				<th>Удаление</th>
			</tr><!-- Table Header -->
			<?php
			    $zayavki=DB::select('select * from zayavkas');

			    foreach ($zayavki as $zayava) {

			        $arr1=explode(' ',$zayava->created_at);

if ($arr1[0]==date("20y-m-d")){
								echo "<tr>";
							$arr2=explode('-',$arr1[0]);
			        echo "<td>$arr2[2].$arr2[1].$arr2[0]</td>";
							$user=DB::select('select name,org from users,zayavkas where zayavkas.id_user=users.id and zayavkas.id=?',[$zayava->id]);
							foreach ($user as $zayava_user){
							if (!$zayava_user->org){
							echo "<td>$zayava_user->name</td>";
						}
						else {
							echo "<td>$zayava_user->org</td>";
						}
						 }
			        echo "<td>$zayava->status</td>";

							echo "<td><input type='button' data-id={$zayava->id} class='change1' value='Одобрить' style='font-weight:bold; cursor: pointer;' onclick='change1(this)'/></td>";
							echo "<td><input type='button' data-id={$zayava->id} class='change2' value='Отклонить' style='font-weight:bold; cursor: pointer;' onclick='change2(this)'/></td>";
							echo "<td><a class='button123' href='/profile/page1/{$zayava->id}' style='font-weight:bold; cursor: pointer;'>Просмотреть</a></td>";
			        echo "<td><input type='button' value='Удалить' data-id={$zayava->id} style='font-weight:bold; color:#ff6666; cursor: pointer;' onclick='deleteRow(this)' class='delete'/></td>";
			        echo "</tr>";}

}
			?>

			</table>

			<table id="myTable1" style="font-size:13px;width:25%;  float:left;margin-right:10px;">
				<caption style="font-size:16px;"><b>Вчерашние заявки</b></caption>
				<tr>
							<th>Дата подачи</th>
							<th>Заказчик</th>
					<th>Статус</th>

					<th>Принять</th>
					<th>Отклонить</th>
					<th>Просмотр</th>
					<th>Удаление</th>
				</tr><!-- Table Header -->
				<?php
						$zayavki=DB::select('select * from zayavkas');

						foreach ($zayavki as $zayava) {

								$arr1=explode(' ',$zayava->created_at);

								if ($arr1[0]==date("20y-m-d", time() - 86400)){
									echo "<tr>";
									$arr2=explode('-',$arr1[0]);
					        echo "<td>$arr2[2].$arr2[1].$arr2[0]</td>";
								$user=DB::select('select name,org from users,zayavkas where zayavkas.id_user=users.id and zayavkas.id=?',[$zayava->id]);
								foreach ($user as $zayava_user){
								if (!$zayava_user->org){
								echo "<td>$zayava_user->name</td>";
							}
							else {
								echo "<td>$zayava_user->org</td>";
							}
							 }
								echo "<td>$zayava->status</td>";

								echo "<td><input type='button' data-id={$zayava->id} class='change1' value='Одобрить' style='font-weight:bold; cursor: pointer;' onclick='change3(this)'/></td>";
								echo "<td><input type='button' data-id={$zayava->id} class='change2' value='Отклонить' style='font-weight:bold; cursor: pointer;' onclick='change4(this)'/></td>";
								echo "<td><a class='button123' href='/profile/page1/{$zayava->id}' style='font-weight:bold; cursor: pointer;'>Просмотреть</a></td>";
								echo "<td><input type='button' value='Удалить' data-id={$zayava->id} style='font-weight:bold; color:#ff6666; cursor: pointer;' onclick='deleteRow1(this)' class='delete'/></td>";
								echo "</tr>";}

						}
				?>

				</table>
				<table id="myTable2" style="font-size:13px;width:25%;">
					<caption style="font-size:16px;"><b>Более старые заявки</b></caption>
					<tr>
						<th >Дата подачи</th>
						<th>Заказчик</th>
						<th>Статус</th>
						<th>Принять</th>
						<th>Отклонить</th>
						<th>Просмотр</th>
						<th>Удаление</th>
					</tr><!-- Table Header -->
					<?php
							$zayavki=DB::select('select * from zayavkas');

							foreach (array_reverse($zayavki) as $zayava) {

									$arr1=explode(' ',$zayava->created_at);

									if (!($arr1[0]==date("20y-m-d", time() - 86400)) and !($arr1[0]==date("20y-m-d"))){
										echo "<tr>";
										$arr2=explode('-',$arr1[0]);
						        echo "<td>$arr2[2].$arr2[1].$arr2[0]</td>";

									$user=DB::select('select name,org from users,zayavkas where zayavkas.id_user=users.id and zayavkas.id=?',[$zayava->id]);
									foreach ($user as $zayava_user){
									if (!$zayava_user->org){
									echo "<td>$zayava_user->name</td>";
								}
								else {
									echo "<td>$zayava_user->org</td>";
								}
								 }

									echo "<td>$zayava->status</td>";

									echo "<td><input type='button' data-id={$zayava->id} class='change1' value='Одобрить' style='font-weight:bold; cursor: pointer;' onclick='change5(this)'/></td>";
									echo "<td><input type='button' data-id={$zayava->id} class='change2' value='Отклонить' style='font-weight:bold; cursor: pointer;' onclick='change6(this)'/></td>";
									echo "<td><a class='button123' href='/profile/page1/{$zayava->id}' style='font-weight:bold; cursor: pointer;'>Просмотреть</a></td>";
									echo "<td><input type='button' value='Удалить' data-id={$zayava->id} style='font-weight:bold; color:#ff6666; cursor: pointer;' onclick='deleteRow2(this)' class='delete'/></td>";
									echo "</tr>";}

							}
					?>

					</table>
	</body>
</html>
