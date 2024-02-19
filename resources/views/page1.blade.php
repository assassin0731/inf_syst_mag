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
		var max_pages = 100;
var page_count = 0;

var $firstPage,
  $firstTable,
  $currentTable,
  $currentPage,
  pageHeight,
  pagePaddingTop;

function checkRow() {
  var $row = $(this);
  var position = $row.position().top;
  var height = $row.outerHeight();

  if (position + height > pageHeight - pagePaddingTop) {
    if (page_count < max_pages) {
      page_count++;
      $currentPage = $('<div class="A4">').insertAfter($currentPage);
      $currentTable = $('<table>').appendTo($currentPage);
      $row.nextAll().appendTo($currentTable);
      $row.prependTo($currentTable);
      $firstTable.find('tr:first').clone().insertBefore($row);

      $currentTable.find('tr').each(checkRow);

    } else {
      $row.nextAll().remove();
      $row.remove();
    }

    return false;
  }
}

function checkElement() {
  var $el = $(this);
  var index = $el.index();
  var position = $el.position().top;
  var height = $el.outerHeight(true);

  if ($el[0].tagName !== 'TABLE') {
    if ((position + height > pageHeight - pagePaddingTop) && index > 0) {
      $currentPage = $('<div class="A4">').insertAfter($currentPage);
      $el.nextAll().appendTo($currentPage);
      $el.prependTo($currentPage);
    }
  } else {
    $firstTable = $el;
    $el.find('tr').each(checkRow);
    $el.nextAll().insertAfter($currentTable).each(checkElement);
    return false;
  }
}

$(document).ready(function() {
  $firstPage = $('.A4:first');
  $currentPage = $firstPage;
  $currentTable = $firstPage.find('table')

  pageHeight = $firstPage.height();
  pagePaddingTop = parseInt($firstPage.css('padding-top')) || 0;

  $currentPage.children().each(checkElement);
});
		</script>
		<script>
$(function($){
	$(".action-print").click(function(){
		window.print();
		return false;
	});
});
</script>

	</head>
	<body>

<a href="#" class="action-print">Распечатать</a>
		<?php
	$url=\Request::url();
	$city_name = explode("/", $url);

	 ?>
		<div class="A4">



			<p align="center" style="font-size:12px;">ФБУ «Новосибирский ЦСМ»  ИСПЫТАТЕЛЬНЫЙ ЦЕНТР  г. Новосибирск,  ул. Революции, 36, тел. 210-07-65</p>
			<p align="center" style="font-size:16px; font-weight:bold;">ЗАЯВКА НА ПРОВЕДЕНИЕ ИСПЫТАНИЙ ПРОДУКЦИИ</p>
			<p align="center" style="font-size:16px;"><b>№ {{$city_name[5]}}</b> от "<?php $info=DB::select('select created_at from zayavkas where id = ?',[$city_name[5]]); $_monthsList = array("01" => "января", "02" => "февраля",
"03" => "марта", "04" => "апреля", "05" => "мая", "06" => "июня",
"07" => "июля", "08" => "августа", "09" => "сентября",
"10" => "октября", "11" => "ноября", "12" => "декабря");
foreach($info as $info1){
	$day=explode(' ',$info1->created_at);
	$day1=explode('-',$day[0]);
	echo $day1[2];
	$_mD = date("m");
	$day1[1]=str_replace($_mD, " ".$_monthsList[$_mD]." ", $day1[1]);}
?>
"
{{$day1[1]}}
{{$day1[0]}}
</p>
  <p align="left" style="font-size:16px; font-weight:bold;">Наименование заказчика:</p>
  <p align="justify" style="font-size:16px;line-height: 1.5;">
	<?php $check=1; $info=DB::select('select org from users,zayavkas where zayavkas.id = ? and users.id = zayavkas.id_user',[$city_name[5]]); foreach($info as $info1){echo $info1->org; if ($info1->org!='') {$check=0;} } ?>
	<?php if ($check==1) {$info=DB::select('select name from users,zayavkas where zayavkas.id = ? and users.id = zayavkas.id_user',[$city_name[5]]); foreach($info as $info1){echo $info1->name;} }?>

</p>
<p align="left" style="font-size:16px; font-weight:bold;">Юридический адрес заказчика:</p>
<p align="justify"style="font-size:16px; line-height: 1.5;">
<?php $info=DB::select('select adr from zayavka_profiles,zayavkas where zayavkas.id = ? and zayavka_profiles.id_user = zayavkas.id_user',[$city_name[5]]); foreach($info as $info1){echo $info1->adr;} ?>
</p>
<b style="border-left: 1px solid black;border-bottom: 1px solid black;border-top: 1px solid black;padding: 0.07em 0 0.1em .25em;">ИНН заказчика </b><span><?php $info=DB::select('select inn from zayavka_profiles,zayavkas where zayavkas.id = ? and zayavka_profiles.id_user = zayavkas.id_user',[$city_name[5]]);foreach($info as $info1){echo $info1->inn;} ?>
</span>
</p>
<b style="border-left: 1px solid black;border-bottom: 1px solid black;border-top: 1px solid black;padding: 0.07em 0 0.1em .25em;">ОГРН/ОГРНИП заказчика </b><span><?php $info=DB::select('select ogrn from zayavka_profiles,zayavkas where zayavkas.id = ? and zayavka_profiles.id_user = zayavkas.id_user',[$city_name[5]]);foreach($info as $info1){echo $info1->ogrn;} ?>
</span>
<p align="left" style="font-size:16px;"><b>Телефон, факс заказчика:</b>
	<?php $info=DB::select('select jmp__input_tel from users,zayavkas where zayavkas.id = ? and users.id = zayavkas.id_user',[$city_name[5]]); foreach($info as $info1){echo $info1->jmp__input_tel;} ?><b>;</b>
<b>e-mail заказчика:</b>
<?php $info=DB::select('select email from users,zayavkas where zayavkas.id = ? and users.id = zayavkas.id_user',[$city_name[5]]); foreach($info as $info1){echo $info1->email;} ?>
</p>
<p align="left" style="font-size:16px;"><b>Плательщик:</b>
	<?php $info=DB::select('select * from zayavkas where zayavkas.id = ?',[$city_name[5]]); foreach($info as $info1){echo $info1->plat;} ?>
</p>
<p align="left" style="font-size:16px;"><b>Цель испытаний:</b>
	<?php foreach($info as $info1){echo $info1->aim;} ?>
</p>
<p align="left" style="font-size:16px;"><b>Выезд специалиста ИЦ на отбор образцо:</b>
	<?php foreach($info as $info1){echo $info1->viezd;} ?>
</p>
<table>
	<tr>
		<th>№ п/п</th>
		<th>Наименование продукции, нормативный документ, по которому продукция изготовлена</th>
		<th>Акт отбора образцов, (направление; сопроводительная и др.); номер, дата</th>
		<th>Испытания следует провести на соотвествие требованиям нормативных документов</th>
		<th>Испытания следует провести по следующим показателям в соответствии с нормативными документами на методы испытаний (Программа испытаний)</th>
	</tr><!-- Table Header -->
	<?php
	$zayavki=DB::select('select * from zayavkas,zayavkaprods where zayavkas.id = ? and zayavkaprods.id_zayav=?',[$city_name[5],$city_name[5]]);
	$count=0;
	foreach ($zayavki as $zayava)
	{
		$count=$count+1;
	echo "<tr>";
		echo "<td style='width:25px;'>$count</td>";
		echo "<td>$zayava->prodname</td>";
		echo "<td>$zayava->act</td>";
	echo "<td>$zayava->doc</td>";
		echo "<td>$zayava->pokaz</td>";
		echo "</tr>";

	}
	 ?>
</table>
<p align="left" style="font-size:16px;"><b>Выбор метода испытаний предоставляю работникам ИЦ:</b>
	<?php foreach($info as $info1){echo $info1->metod;} ?>
</p>
<p align="left" style="font-size:16px;"><b>Заказчик уведомлен, что при проведении испытаний образцов продукции происходит их частичное или полное разрушение!</b></p>
<p align="left" style="font-size:16px;"><b>Возврат образцов:</b>
	<?php foreach($info as $info1){echo $info1->vozvr;} ?>
</p>
<p>Заказчик обязуется оплатить работы вне зависимости от их результатов.</p>


<p><em>Заявку составил представитель заказчика</em>______________________________________&nbsp; ________
<em align="right" style="font-size:12px;margin-left:58%;">должность, ФИО
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;подпись&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</em></p>
<p><em>Анализ заявки проведен и согласован с заказчиком</em>_____________________________&nbsp; ________
	<em align="right" style="font-size:12px;margin-left:52%;">Ф.И.О. работника ИЦ, принявшего заявку
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		подпись&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</em></p>



</div>

		<?php
		foreach($info as $info1){$viezd=$info1->viezd;}
		if ($viezd=='требуется') {?>
<div class="A4">

						<p align="right" style="font-size:16px;">Приложение к заявке<br>на проведение испытаний</p>
						<p align="center" style="font-size:16px; font-weight:bold;">ЗАЯВКА НА ОТБОР ОБРАЗЦОВ (ПРОБ), ВЗЯТИЕ СМЫВОВ</p>
						<p align="left" style="font-size:16px;"><b>Дата планируемого отбора:</b>
							<?php $info=DB::select('select data from zayavkas,otbors where zayavkas.id = ? and zayavkas.id=otbors.id_zayav',[$city_name[5]]);
							foreach($info as $info1){
								$day1=explode('-',$info1->data);
								echo $day1[2];
								echo ".";
								echo $day1[1];
								echo ".";
								echo $day1[0];
							}
							?>
						</p>
						<p align="left" style="font-size:16px;"><b>Место отбора образцов (проб):</b>
							<?php $info=DB::select('select mesto from zayavkas,otbors where zayavkas.id = ? and zayavkas.id=otbors.id_zayav',[$city_name[5]]);foreach($info as $info1){echo $info1->mesto;} ?>
						</p>
						<table style="font-size:16px;">
							<tr>
								<th style='width:30px;'>№ п/п</th>
								<th>Наименование продукции,  нормативный документ по которому изготовлена продукция/место взятия смыва</th>
								<th>Дата изготовления</th>
								<th>Вид упаковки,  размер партии* (количество упаковок в партии, количество транспортной тары в партии)</th>

							</tr><!-- Table Header -->
							<?php
							$zayavki=DB::select('select * from zayavkas,otbors,obrazezs where zayavkas.id = ? and otbors.id_zayav=zayavkas.id and otbors.id=obrazezs.id_otbor',[$city_name[5],$city_name[5]]);
							$count=0;
							foreach ($zayavki as $zayava)
							{
								$count=$count+1;
								$pidge=$zayava->data;

									$day1=explode('-',$pidge);

							echo "<tr>";
								echo "<td >$count</td>";
								echo "<td>$zayava->name</td>";
								echo "<td>$day1[2].$day1[1].$day1[0]</td>";
							echo "<td>$zayava->vid</td>";

								echo "</tr>";

							}
							 ?>
						</table>
						<p><em>* если не указывается размер партии, от которой должен производиться отбор, то количество образца определяется исходя из минимального количества, достаточного для корректного выполнения испытаний.</em></p>
						<p><em>Заявку составил представитель заказчика</em>______________________________________&nbsp; ________
						<em align="right" style="font-size:12px;margin-left:58%;">должность, ФИО
							&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
							&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;подпись&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</em></p>


				</div>
			<?php }?>

	</body>
</html>
