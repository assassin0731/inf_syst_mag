<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title></title>
	<style>
        figure {
            float: left;
            margin: 0 20px 0;
        }
            figcaption {
                text-align: center;
            }
    </style>
<meta name="keywords" content="" />
<meta name="description" content="" />
<link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,600,700,900|Quicksand:400,700|Questrial" rel="stylesheet" />
<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
<link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->
<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->

<link rel="stylesheet" type="text/css" href="css/util.css">
<link rel="stylesheet" type="text/css" href="css/main.css">


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.15/jquery.mask.min.js"></script>
<script type="text/javascript">
var mask = $.noConflict(true);
</script>

<script src="https://code.jquery.com/jquery-2.1.0.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.js"></script>
<script type="text/javascript" charset="utf8" src="js/dataTables.js"></script>


<script>
$(document).ready(function () {
    $('#cssmenu li.has-sub > a').on('click', function(){
        $(this).removeAttr('href');
        var element = $(this).parent('li');
        if (element.hasClass('open')) {
            element.removeClass('open');
            element.find('li').removeClass('open');
            element.find('ul').slideUp();
        }
        else {
            element.addClass('open');
            element.children('ul').slideDown();
            element.siblings('li').children('ul').slideUp();
            element.siblings('li').removeClass('open');
            element.siblings('li').find('li').removeClass('open');
            element.siblings('li').find('ul').slideUp();
        }
    });

    $('#cssmenu>ul>li.has-sub>a').append('<span class="holder"></span>');
});
</script>
<script>
		$(document).ready(function(){

				$('#btn1').click(function(){
						$.ajax({
								url: "/zayavnaisl",
								cache: false,
								success: function(html){
										$("#banner").html(html);
								}
						});
				});
		});

		$(document).ready(function(){

				$('#btn2').click(function(){
						$.ajax({
								url: "/rastvor",
								cache: false,
								success: function(html){
										$("#banner").html(html);
								}
						});
				});
		});

		$(document).ready(function(){

				$('#btn3').click(function(){
						$.ajax({
								url: "/register1",
								cache: false,
								success: function(html){
										$("#banner").html(html);
								}
						});
				});
		});

		$(document).ready(function(){

				$('#btn4').click(function(){
						$.ajax({
								url: "/rabotnik",
								cache: false,
								success: function(html){
										$("#banner").html(html);
								}
						});
				});
		});
		$(document).ready(function(){

				$('#btn5').click(function(){
						$.ajax({
								url: "/zayavkanew",
								cache: false,
								success: function(html){
										$("#banner").html(html);
								}
						});
				});
		});
		$(document).ready(function(){

				$('#btn6').click(function(){
						$.ajax({
								url: "/obrazeznew",
								cache: false,
								success: function(html){
										$("#banner").html(html);
								}
						});
				});
		});
		$(document).ready(function(){

				$('#btn7').click(function(){
						$.ajax({
								url: "/neobrabotobr",
								cache: false,
								success: function(html){
										$("#banner").html(html);
								}
						});
				});
		});
		$(document).ready(function(){

				$('#btn8').click(function(){
						$.ajax({
								url: "/obrabotobr",
								cache: false,
								success: function(html){
										$("#banner").html(html);
								}
						});
				});
		});
</script>

</head>
<style>
body {
  background-image: url('../images/fontip.jpg');
}
select:required:invalid {
  color: #a6a8a9;
}
option[value=""][disabled] {
  display: none;
}
option {
  color: black;
}
</style>

<body bgcolor="#979797">

<div id="top" style="border-right: 1px solid #1682ba;">
<img src="../images/logowhite.png" width="100" />
<span style="font-size:30px; position: absolute; margin-left: 10px; margin-top:5px;">
  Информационная система<br> испытательной лаборатории
</span>
<span style="font-size:30px;  position:absolute; right: 120px; margin-top:23px;">
  <?php
  $d=Auth::user()->name;
  echo $d;
    ?>
</span>
  <a id="forexit" href="{{ url('/logout') }}"></a>
<input type="button" style="background-image: url(images/knopk.png);">
</div>
<div id="banner">

</div>
<div id="top2">
  <span style="font-size:30px; margin-top:5px;">
    Главное меню
  </span>
</div>

  <div id='cssmenu'>
      <ul>
         <li class='has-sub'><a href='#'><img src="../images/zayav.png" width="35" style="position:absolute; margin-top:-7px;" /><span style="margin-left:45px">Работа с заявками</span></a>
					 <ul>
						 <li><a id="btn5" href='#'><span class="otstup">Регистрация заявок</span></a>
						 </li>
						 <li><a id="btn7" href='#'><span class="otstup">Образцы не обработаны</span></a>
						 </li>
						 <li><a id="btn8" href='#'><span class="otstup">Образцы обработаны</span></a>
						 </li>
						 <li><a id="NO" href='#'><span class="otstup">Архив заявок</span></a>
						 </li>
					 </ul>
				 </li>
         <li class='has-sub'><a href='#'><img src="../images/obraz.png" width="35" style="position:absolute; margin-top:-7px;" /><span style="margin-left:45px">Работа с образцами</span></a>
            <ul>
               <li><a id="btn6" href='#'><span class="otstup">Образцы в обработке</span></a>
               </li>
               <li><a href='#'><span class="otstup">Работа работа работа</span></a>
               </li>
            </ul>
         </li>

         <li class='has-sub'><a href='#'><img src="../images/journal.png" width="35" style="position:absolute; margin-top:-7px;" /><span style="margin-left:45px">Журналы</span></a>
					 <ul>
							<li><a id="btn2" href='#'><span class="otstup">Приготовление растворов</span></a>
							</li>
							<?php
							$right=DB::table('rules')->where('id_user',Auth::user()->id)->value('rules');
							if($right[0]==2)
							{
							?>
							<li><a id="btn2" href='#'><span class="otstup">Учёт реактивов</span></a>
							</li>
							<?php
						}
							?>
							<li><a id="btn2" href='#'><span class="otstup">Регистрация химпосуды</span></a>
							</li>
					 </ul>
				 </li>

         <li class='has-sub'><a href='#'><img src="../images/spravoch.png" width="35" style="position:absolute; margin-top:-7px;" /><span style="margin-left:45px">Справочники</span></a>
					 <ul>
							<li><a id="btn2" href='#'><span class="otstup">Учёт реактивов</span></a>
							</li>
					 </ul>
				 </li>

         <li class='has-sub'><a href='#'><img src="../images/otchet.png" width="35" style="position:absolute; margin-top:-7px;" /><span style="margin-left:45px">Отчёты</span></a>
					 <ul>
							<li><a id="btn2" href='#'><span class="otstup">Приготовление растворов</span></a>
							</li>
					 </ul>
				 </li>
         <li class='has-sub'><a href='#'><img src="../images/borud.png" width="35" style="position:absolute; margin-top:-7px;" /><span style="margin-left:45px">Оборудование</span></a>
					 <ul>
							<li><a id="btn2" href='#'><span class="otstup">Приготовление растворов</span></a>
							</li>
					 </ul>
				 </li>
         <li class='has-sub'><a href='#'><img src="../images/dokum.png" width="35" style="position:absolute; margin-top:-7px;" /><span style="margin-left:45px">Документы</span></a>
					 <ul>
							<li><a id="btn2" href='#'><span class="otstup">Приготовление растворов</span></a>
							</li>
					 </ul>
				 </li>
         <li class='has-sub'><a href='#'><img src="../images/uprav.png" width="35" style="position:absolute; margin-top:-7px;" /><span style="margin-left:45px">Упарвление лабораторией</span></a>
					 <ul>
					 	 <li><a id="btn3" href='#'><span class="otstup">Создание пользователя</span></a>
					 	 </li>
						 <li><a id="btn4" href='#'><span class="otstup">Работники лаборатории</span></a>
					 	 </li>
					 </ul>
				 </li>
      </ul>
  </div>




	</div>


</body>
</html>
