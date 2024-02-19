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
<link href="/css/default_test.css" rel="stylesheet" type="text/css" media="all" />
<link href="fonts.css" rel="stylesheet" type="text/css" media="all" />
<link href="/css/default_test.css" rel="stylesheet" type="text/css">
<link href="fonts.css" rel="stylesheet" type="text/css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.15/jquery.mask.min.js"></script>
</head>
<body>

	 <div id="topNavLine" class="container2">
		 <div id="list-contact">

			 <div id="mail" >

				 <img src="../images/image1-460x460.png" width="23" height="" align="left" />
					 <a href="#" style="font-size:16px; color:#bbbbbb;">foodlab@ncsm.ru</a>

			 </div>

				 <div id="phone" >
				 <img src="../images/telefono-png-8.png" width="23" height="" align="left"  />

					 <a href="#" style="font-size:16px; color:#bbbbbb;">(383)210-00-65</a>
			 </div>
			 <div id="address" >
				 <img src="../images/download-036d71fe5368cf7116041cb575433e28.png" width="23" height="" align="left"  />

					 <a href="#" style="font-size:16px; color:#bbbbbb;">630004, г. Новосибирск, ул. Революции, 36</a>
			 </div>

		 </div>
	</div>
<div id="header-wrapper">

  <div id="header" class="container">

	  <div id="logo1">
		  <img src="../images/logo.png" width="100" height="" align="left" />
	  </div>
	<nav>
	<div class="left" id="logo">
			<h2><a >Испытательная лаборатория</a></h2><br>
			<h3><a >ФБУ Новосибирский ЦСМ</a></h3>
		</div>



	  </nav>

		<div id="menu">
			<ul>
				<li ><a href="/" accesskey="1" title="">Главная</a></li>
				<li><a href="/zakaz" accesskey="2" title="">Заказчику</a></li>
				<li ><a href="/info" accesskey="3" title="">О нас</a></li>
				<li><a href="/contacts" accesskey="4" title="">Контакты</a></li>
				@if (Auth::check())
				<!--	<li ><a href="/profile" accesskey="1" title="" style="width:100px; overflow:hidden; text-overflow: ellipsis;">1111111111111111111111</a></li> -->
				<li ><a href="/profile" accesskey="1" title=""  style="	 width:133px; 	padding: 0em 1.5em; padding-top:17px;  padding-bottom:3px; border: 2px solid #42aaff;">
				<div class="forimg" style="position:relative; bottom:6px;">
				<img src="../images/ava1.png" class="img2" width="30" height="" align="left" />
					<img src="../images/ava.png" class="image1" width="30" height="" align="left" style="margin-left:-33px;"  />
				</div>
				<?php
				$d=Auth::user()->name;
				$arr=explode(' ',$d);
				echo $arr[1];
				?>
				</a></li>
				@else
				<li ><button onclick="document.getElementById('id01').style.display='block'" style="width:auto; background-color: #42aaff;color:#FFFFFF">Личный кабинет</button>

<div id="id01" class="modal">

  <form class="modal-content animate" action="/action_page.php">


    <div class="container7">
      <label for="uname"><b>E-mail</b></label>
      <input type="text" placeholder="Введите e-mail" name="email" required><br><br>
      <label for="psw"><b>Пароль</b></label>
      <input type="password" placeholder="Введите пароль" name="psw" required>

      <button id="buttonenter" class="buttonenter" type="submit">Войти</button><br><br>
      <label>
        <input type="checkbox" checked="checked" name="remember"> Запомнить меня
      </label>
    </div>

    <div id="container7" class="container7" style="background-color:#f1f1f1" align="left">
      <button id="button1" type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Закрыть</button>
		<a href="/reg">Регистрация</a>
      <span class="psw">Забыли<a href="#">пароль?</a></span>
    </div>
  </form>
</div>

<script>
// Get the modal
var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>
</li>
@endif
		  </ul>
	</div>

  </div>
	<br>
	<div id="banner4" class="container2">
		<span>Личный кабинет</span>

	</div>
	<br>
	<!--<b align="center" style="font-size:30px;line-height:1; position:relative; left:17.55%;">Меню</b><br>

		<img src="images/razd.png" width="330" style="position:relative; left:17.55%; margin-bottom: 10px;" /><br>-->
	<div style="position: relative; left:16.7%;">
<a href="#" align="center" style="font-size:18px;line-height:2.5; color:#4E4E4E; position:relative;left:1%; bottom: 8px;">Главная</a>
		<a align="center" style="font-size:18px;line-height:2.5; color:#909090; position:relative;left:1%; bottom:8px"> / </a>
			<a href="/profile" align="center" style="font-size:18px;line-height:2.5; color:#4E4E4E; position:relative;left:1%; bottom: 8px;">Личный кабинет</a>
			<a align="center" style="font-size:18px;line-height:2.5; color:#909090; position:relative;left:1%; bottom:8px"> / </a>
				<a  align="center" style="font-size:18px;line-height:2.5; color:#4E4E4E; position:relative;left:1%; bottom: 8px;">Изменение пароля</a>
	</div>


<div id="banner5" style=" height: 462px; width: 1235px; ">
	<div id="banner9" style=" height: 63px; width: 1235px; ">
	<br>
	<b>Изменение пароля</b>
	</div>
	<form method="POST" action="{{ route('change.password') }}">
											 @csrf

												@foreach ($errors->all() as $error)
													 <p class="text-danger">{{ $error }}</p>
												@endforeach

											 <div class="form-group row">
													<label for="oldpassword" class="col-md-4 col-form-label text-md-right" style="position:absolute; left:13.2%; top:119px;font-weight: bold;">{{ __('Старый пароль:') }}</label>

													 <div class="col-md-6" style="position:absolute; left:25.5%; top:100px; width: 600px;">
															 <input id="password" type="password" class="form-control" name="current_password" autocomplete="current-password">
													 </div>
											 </div>

											 <div class="form-group row">
													 <label for="password" class="col-md-4 col-form-label text-md-right" style="position:absolute; left:13.7%; top:219px;font-weight: bold;">{{ __('Новый пароль:') }}</label>

													 <div class="col-md-6" style="position:absolute; left:25.5%; top:200px; width: 600px;">
															 <input id="new_password" type="password" class="form-control" name="new_password" autocomplete="current-password">
													 </div>
											 </div>

											 <div class="form-group row">
													 <label for="password-confirm" class="col-md-4 col-form-label text-md-right" style="position:absolute; left:8%; top:319px;font-weight: bold;">{{ __('Подтверждение пароля:') }}</label>

													 <div class="col-md-6" style="position:absolute; left:25.5%; top:300px; width: 600px;">
															 <input id="new_confirm_password" type="password" class="form-control" name="new_confirm_password" autocomplete="current-password">
													 </div>
											 </div>

											 <div class="form-group row mb-0" style="position:absolute; left:44.4%; top:380px; color: #FFF !important;">
													 <div class="col-md-8 offset-md-4">
														 <button type="submit" id="buttonenter1" class="buttonenter1">
																	{{ __('Отправить') }}
															</button>
													 </div>
											 </div>
									 </form>

                </div>
							</div>


@extends('layouts.podval')

</body>
</html>
