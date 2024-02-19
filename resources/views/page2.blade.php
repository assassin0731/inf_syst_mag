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

		<link rel="stylesheet" type="text/css" href="/css/sheets-of-paper.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<script src="https://code.jquery.com/jquery-2.1.0.js"></script>
		<script>
		var official_elements = document.getElementsByClassName('official');
		for (var i=0; i<official_elements.length; i++) {
		official_elements[i].innerHTML =  official_elements[i].innerHTML.replace(/(.)/g, '<span class="official-squared">$1</span>');
		}

		</script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.9.3/html2pdf.bundle.js"></script>

		<script>
		function generatePDF() {
    const element = document.getElementById('A4');
    html2pdf()
        .from(element)
        .save();
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
<script type="text/javascript">

$(document).ready(function() {
		var today = new Date();
var dd = String(today.getDate()).padStart(2, '0');
var mm = String(today.getMonth() + 1).padStart(2, '0'); //January is 0!
var yyyy = today.getFullYear();

today = dd + '.' + mm + '.' + yyyy;

        document.getElementById('current_date_time_block').innerHTML = today;
				document.getElementById('current_date_time_block1').innerHTML = today;
});

    /* выводим текущую дату и время на сайт в блок с id "current_date_time_block" */

</script>
	</head>
	<body>

<a href="#" class="action-print">Распечатать</a>
<button onclick="generatePDF()">Сохранить в PDF</button>
		<?php
	$url=\Request::url();
		$ids = explode("/", $url);
		$id=$ids[4];
	 ?>
	 <?php
	 $sql=DB::select('select * from zayav_prods where id_zayav=?',[$id]);
	 foreach($sql as $obrazez)
	 {
	 ?>
	 <div id="A4">
		<div class="A41">



			<p align="center" style="font-size:13px;font-weight:bold;font-style:italic;">ФЕДЕРАЛЬНОЕ АГЕНТСТВО ПО ТЕХНИЧЕСКОМУ РЕГУЛИРОВАНИЮ И МЕТРОЛОГИИ</p>
			<p align="center" style="font-size:13px; font-weight:bold;font-style:italic;">ФЕДЕРАЛЬНОЕ БЮДЖЕТНОЕ УЧРЕЖДЕНИЕ  "ГОСУДАРСТВЕННЫЙ РЕГИОНАЛЬНЫЙ ЦЕНТР<br>
				СТАНДАРТИЗАЦИИ, МЕТРОЛОГИИ И ИСПЫТАНИЙ В НОВОСИБИРСКОЙ ОБЛАСТИ"
                                                                  <br>   (ФБУ "НОВОСИБИРСКИЙ ЦСМ")
</p>
			<p align="left" style="font-size:13px;font-style:italic;">
Юридический адрес: 630004, Россия, Новосибирская область, город Новосибирск, улица Революции, дом 36 <br>
Фактический адрес: 630112, Россия, Новосибирская область, город Новосибирск, проспект Дзержинского, дом 2/1, <br>
Тел. 278-20-00, тел/факс 278-20-10,  csminfo@ncsm.ru, www.ncsm.ru
</p>
<p align="center" style="font-size:13px; font-weight:bold;font-style:italic;">
ИСПЫТАТЕЛЬНЫЙ ЦЕНТР  ФБУ «НОВОСИБИРСКИЙ ЦСМ»<br>
Уникальный номер записи об аккредитации в реестре аккредитованных лиц  RA.RU.21АЯ49<br>
 Дата внесения в реестр 05.09.2016
 </p>

  <p align="left" class="texter" style="font-size:13px; font-style:italic;padding-right:55px;">
Места<br>
осуществления<br>
деятельности:

	</p>
  <p align="justify right" class="texter" style="font-size:13px;font-style:italic;text-decoration:underline;">
		630004, Россия, Новосибирская область, город Новосибирск, улица Революции, дом 36.<br>
	Тел. 210-07-65, тел/факс 210-00-65,  foodlab@ncsm.ru, www.ncsm.ru;<br>
	630112, Россия, Новосибирская область, город Новосибирск, проспект Дзержинского, дом  2/1. <br>
	Тел. 278-20-36, тел/факс 278-20-10, pirozhkova@ncsm.ru, www.ncsm.ru;<br>
	630005, Россия, Новосибирская область, город Новосибирск, улица Писарева, дом 53

</p>
<br><br><br><br>
<p class="nobot" align="left" style="margin-left:480px;font-size:13px; font-weight:bold;margin-bottom:10px;">
УТВЕРЖДАЮ
</p>
<p align="left nobot" style="margin-left:480px;;font-size:13px; font-weight:normal;margin-block-start: 0em!important;margin-block-end: 0em!important;">
Начальник испытательного центра<br>
__________________
И.И. Иванов<br>

</p>
<p style="margin-block-start: 0em!important;text-decoration:underline;margin-left:480px;font-size:13px;" id="current_date_time_block"></p>
<p align="justify" style="font-size:13px;border: solid 1px black;padding:5px;">
□ ведущий инженер  И.В. Лузгина    □ ведущий инженер О.А. Лифанова  уполномочен  подписывать протоколы ис-пытаний согласно Приказу ФБУ «Новосибирский ЦСМ» № 287 от 08.05.2019
</p>

<p align="center" class="texter" style="margin-left:143px;font-size:14px; font-weight:bold;">
ПРОТОКОЛ  ИСПЫТАНИЙ № П {{$obrazez->id}} от&nbsp;</p>
<p class="texter" style="font-size:14px; font-weight:bold;" id="current_date_time_block1"></p>
<p class="texter" style="font-size:14px; font-weight:bold;">&nbsp;на 3 страницах</p>

<br>
<p class="nobot" align="left" style="font-size:14px; font-weight:bold;font-style:italic;margin-left:20px;">
1 ОБЩИЕ СВЕДЕНИЯ</p>

<p align="left" class="noborder" style="font-size:14px;font-style:italic;">
	Наименование продукции: <span class="forspan" style="font-weight:bold;">{{$obrazez->prodname}}</span>
</p>

<p align="left" class="noborder" style="font-size:14px;font-style:italic;">
	Дата изготовления:&nbsp;<span class="forspan">
		<?php
		$arr1=explode(' ',$obrazez->dateizgotov);
		$arr2=explode('-',$arr1[0]);
		echo "$arr2[2].$arr2[1].$arr2[0]";
		?>
</span>&nbsp;Срок годности:&nbsp;<span class="forspan">{{$obrazez->srok}}</span><br>Размер партии:&nbsp;<span class="forspan">{{$obrazez->razmer}}</span>&nbsp;Номер партии:&nbsp;<span class="forspan">{{$obrazez->numpar}}</span>
</p>

<p align="left" class="noborder" style="font-size:14px;font-style:italic;">
	Количество образца, поступившее на испытание: <span class="forspan">{{$obrazez->kolobr}}</span>
</p>

<p align="left" class="noborder" style="font-size:14px;font-style:italic;">
	Сведения об упаковке образца: <span class="forspan">{{$obrazez->sved}}</span>
</p>

<p align="left" class="noborder" style="font-size:14px;font-style:italic;">
	Изготовитель продукции: <span class="forspan">{{$obrazez->izgotov}}</span>
</p>

<p align="left" class="noborder" style="font-size:14px;font-style:italic;">
	Юридический адрес изготовителя: <span class="forspan">{{$obrazez->adrizg}}</span>
</p>

<p align="left" class="noborder" style="font-size:14px;font-style:italic;">
	Фактический адрес изготовителя: <span class="forspan">{{$obrazez->adrizg}}</span>
</p>

<p align="left" class="noborder" style="font-size:14px;font-style:italic;">
	Заказчик испытания: <span class="forspan">
		<?php $sqll=DB::select('select org, name from zayav_infos where id=?',[$id]);
		foreach($sqll as $org)
		if ($org->org) echo $org->org;
		else echo $org->name;
		 ?></span>
</p>

<p align="left" class="noborder" style="font-size:14px;font-style:italic;">
	Юридический адрес заказчика: <span class="forspan">
		<?php $sqll=DB::select('select adr from zayav_infos where id=?',[$id]);
		foreach($sqll as $org)
		echo $org->adr;
		 ?></span>
</p>

<p align="left" class="noborder" style="font-size:14px;font-style:italic;">
	Фактический адрес заказчика: <span class="forspan">
		<?php $sqll=DB::select('select adr from zayav_infos where id=?',[$id]);
		foreach($sqll as $org)
		echo $org->adr;
		 ?></span>
</p>

<p align="left" class="noborder" style="font-size:14px;font-style:italic;">
	ИНН: <span class="forspan">
		<?php $sqll=DB::select('select inn from zayav_infos where id=?',[$id]);
		foreach($sqll as $org)
		echo $org->inn;
		 ?></span>
</p>

<p align="left" class="noborder" style="font-size:14px;font-style:italic;">
	Заявка на проведение испытаний продукции от <span class="forspan">
		<?php $sqll=DB::select('select created_at from zayav_infos where id=?',[$id]);
		foreach($sqll as $org)
		$arr1=explode(' ',$org->created_at);
		$arr2=explode('-',$arr1[0]);
		echo "$arr2[2].$arr2[1].$arr2[0]";
		?>
	</span>
</p>

<p align="left" class="noborder" style="font-size:14px;font-style:italic;">
	Цель проведения испытаний: <span class="forspan">
		<?php $sqll=DB::select('select aim from zayav_infos where id=?',[$id]);
		foreach($sqll as $org)
		echo $org->aim;
		 ?></span>
</p>

<p align="left" class="noborder" style="font-size:14px;font-style:italic;">
	Акт отбора образца: <span class="forspan">{{$obrazez->act}}</span>
		 от <span class="forspan">
			 <?php
			$arr1=explode(' ',$obrazez->numact);
			$arr2=explode('-',$arr1[0]);
			echo "$arr2[2].$arr2[1].$arr2[0]";
	 		 ?>
		 </span>
</p>

<p align="left" class="noborder" style="font-size:14px;font-style:italic;">
	Кем отобран образец: <span class="forspan">{{$obrazez->ktootobr}}</span>
</p>

<p align="left" class="noborder" style="font-size:14px;font-style:italic;">
	Дата отбора: <span class="forspan">
		<?php
	 $arr1=explode(' ',$obrazez->dateotbor);
	 $arr2=explode('-',$arr1[0]);
	 echo "$arr2[2].$arr2[1].$arr2[0]";
		?>
	</span>
</p>

<p align="left" class="noborder" style="font-size:14px;font-style:italic;">
	Место отбора образца: <span class="forspan">{{$obrazez->mesto}}</span>
</p>

<p align="left" class="noborder" style="font-size:14px;font-style:italic;">
	Место проведения испытаний: <span class="forspan">630004, Россия, Новосибирская область, город Новосибирск, улица Революции, дом 36</span>
</p>

<p align="left" class="noborder" style="font-size:14px;font-style:italic;">
	Дата послупления образца в ИЦ: <span class="forspan">
<?php
$arr1=explode(' ',$obrazez->datepost);
$arr2=explode('-',$arr1[0]);
echo "$arr2[2].$arr2[1].$arr2[0]";
 ?>
	</span>
</p>

<p align="left" class="noborder" style="font-size:14px;font-style:italic;">
	Дата проведения испытаний: <span class="forspan">
		<?php
		$fordate=DB::select("select date from results where (id_zayavprods=? and result IS NOT NULL) ORDER BY date ASC LIMIT 1",[$obrazez->id]);
		foreach($fordate as $pudge){
		$arr1=explode(' ',$pudge->date);
		$arr2=explode('-',$arr1[0]);
		echo "$arr2[2].$arr2[1].$arr2[0]-";
	}
		?>
		<?php
		$fordate=DB::select("select date from results where id_zayavprods=? ORDER BY date DESC LIMIT 1",[$obrazez->id]);
		foreach($fordate as $pudge)
		{
		$arr1=explode(' ',$pudge->date);
		$arr2=explode('-',$arr1[0]);
		echo "$arr2[2].$arr2[1].$arr2[0]";
	}
		?>
	</span>
</p>
</div>
<div class="A4">
	<p class="nobot" align="left" style="font-size:14px; font-weight:bold;font-style:italic;margin-left:20px;">
	2 РЕЗУЛЬТАТЫ ИСПЫТАНИЙ</p>

						<table style="font-size:13px;font-weight:normal;">
							<tr>
								<th style="font-size:13px;font-weight:normal;">Наименование показателей</th>
								<th style="font-size:13px;font-weight:normal;">Единицы измерения</th>
								<th style="font-size:13px;font-weight:normal;">НД на методы испытаний</th>
								<th style="font-size:13px;font-weight:normal;">Характеристика и норма</th>
								<th style="font-size:13px;font-weight:normal;">Допустимая погрешность измерений</th>
								<th style="font-size:13px;font-weight:normal;">Результат испытаний</th>
							</tr><!-- Table Header -->
							<?php $otdel=DB::select('select distinct otdels.nameot,otdels.id from results join pokaz on pokaz.id=results.id_pokaz join otdels on otdels.id=pokaz.id_otdel where results.id_zayavprods=?',[$obrazez->id]);
							foreach($otdel as $otdels)
							{
							?>
							<tr>
							     <td colspan="6" style="font-size:13px;font-weight:bold;">{{$otdels->nameot}}</td>
							    </tr>
				<?php
							$fortable=DB::select('select distinct pokaz.name, pokaz.edizm, normdoc.name as normname, pokaz.norm, metod.pogr,metod.metod, results.result  from results,pokaz,metod,normdoc,otdels where (results.id_pokaz=pokaz.id and results.id_metod=metod.id and pokaz.id_otdel=? and pokaz.id_normdoc=normdoc.id and results.id_zayavprods=?)',[$otdels->id,$obrazez->id]);
							foreach($fortable as $newtable)
							{
							 ?>
							 <tr>
 							     <td>{{$newtable->name}}</td>
									 <td>{{$newtable->edizm}}</td>
									 <td>{{$newtable->metod}}</td>
									 <td>{{$newtable->norm}}</td>
									 <td>{{$newtable->pogr}}</td>
									 <td>{{$newtable->result}}</td>
 							    </tr>
									<?php
								}
							}
									 ?>
						</table>
						<p class="nobot" align="left" style="font-size:13px; margin-left:20px;">
						Ответственные за проведение испытаний&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;_____________________&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;И. И. Иванов</p>
						<p class="noborder" align="left" style="font-size:13px; margin-left:268px;">
						_____________________&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;И. И. Иванов</p>
						<p align="center" style="font-size:13px; ">
						<span style="font-weight:bold;">ВНИМАНИЕ!</span> Настоящий протокол испытаний распространяется только на образцы, подвергнутые испытаниям, и не может быть частично воспроизведен, тиражирован и распространен без разрешения испытательного центра.
При отборе образцов (проб) Заказчиком испытаний испытательный центр не несет ответственность за правильность отбора и сведениях о процедуре отбора. Испытательный центр не несет ответственность за информацию, предостав-ленную Заказчиком.
</p>

<p align="center" style="font-size:13px; ">
КОНЕЦ ПРОТОКОЛА ИСПЫТАНИЙ
</p>

				</div>
<?php
}
?>
</div>
	</body>
</html>
