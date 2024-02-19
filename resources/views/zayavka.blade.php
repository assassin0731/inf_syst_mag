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
				<li class="current_page_item"><a href="/zakaz" accesskey="2" title="">Заказчику</a></li>
				<li ><a href="/info" accesskey="3" title="">О нас</a></li>
				<li ><a href="/contacts" accesskey="4" title="">Контакты</a></li>
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
				<li><button onclick="document.getElementById('id01').style.display='block'" style="width:auto;">Личный кабинет</button>

					<div id="id01" class="modal">

					  <form class="modal-content animate" method="POST" action="{{ route('login') }}">

					@csrf
					    <div class="container7">
								<div class="form-group row">
										<label for="email" class="col-md-4 col-form-label text-md-right"><b>{{ __('E-mail') }}</b></label>

										<div class="col-md-6">
												<input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

												@error('email')
														<span class="invalid-feedback" role="alert">
																<strong>{{ $message }}</strong>
														</span>
												@enderror
										</div>
								</div><br>
								<div class="form-group row">
										<label for="password" class="col-md-4 col-form-label text-md-right"><b>{{ __('Пароль') }}</b></label>

										<div class="col-md-6">
												<input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

												@error('password')
														<span class="invalid-feedback" role="alert">
																<strong>{{ $message }}</strong>
														</span>
												@enderror
										</div>
								</div>





					    </div>

							<div class="form-group row mb-0">
									<div class="col-md-8 offset-md-4">
											<button id="buttonenter" type="submit" class="buttonenter">
													{{ __('Войти') }}
											</button>
									</div>
							</div>
							<div class="col-md-6 offset-md-4">
									<div class="form-check">

											<label style="margin-left:15px; padding-top:5px;padding-bottom:5px;">
													<input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>{{ __('Запомнить меня') }}
											</label>

									</div>
							</div>

					    <div id="container7" class="container7" style="background-color:#f1f1f1" align="left">
					      <button id="button1" type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Закрыть</button>
							<a href="/register">Регистрация</a>
								@if (Route::has('password.request'))
					      <span class="psw">Забыли<a href="{{ route('password.request') }}">пароль?</a></span>
								@endif
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
@endif
</li>
		  </ul>
	</div>

  </div>
	<br>
	<div id="banner4" class="container2">
		<span>Заказчику</span>

	</div>
	<br>
	<!--<b align="center" style="font-size:30px;line-height:1; position:relative; left:17.55%;">Меню</b><br>

		<img src="images/razd.png" width="330" style="position:relative; left:17.55%; margin-bottom: 10px;" /><br>-->
	<div style="position: relative; left:16.7%;">
<a href="#" align="center" style="font-size:18px;line-height:2.5; color:#4E4E4E; position:relative;left:1%; bottom: 8px;">Главная</a>
		<a align="center" style="font-size:18px;line-height:2.5; color:#909090; position:relative;left:1%; bottom:8px"> / </a>
			<a href="#" align="center" style="font-size:18px;line-height:2.5; color:#4E4E4E; position:relative;left:1%; bottom: 8px;">Заказчику</a>
			<a align="center" style="font-size:18px;line-height:2.5; color:#909090; position:relative;left:1%; bottom:8px"> / </a>
				<a align="center" style="font-size:18px;line-height:2.5; color:#4E4E4E; position:relative;left:1%; bottom: 8px;">Заявка</a>

	</div>

  <div id="banner5" style=" height: 545px; width: 1235px; ">
		<div id="banner9" style=" height: 63px; width: 1235px; ">
	<br>
	<b>Заявка на проведение испытаний продукции</b>
		</div>
		<form action="/zakaz/zayavka/submit" method="post">
			@csrf
		<div class="form-group row">
				<label for="plat" class="col-md-4 col-form-label text-md-right" style="position:absolute; left:8.6%; top:85px; font-weight: bold;">{{ __('Плательщик:') }}</label>

		 <div class="col-md-6" style="position:absolute; left: 18.6%; top:85px;">
						<input id="plat" type="radio" class="form-control @error('plat') is-invalid @enderror" name="plat" value="Заказчик" autocomplete="plat" autofocus >
						<a style="position:relative; left: 1%;   color:rgba(0,0,0,.6); bottom:2px; ">Заказчик</a>
						<input id="plat" type="radio" class="form-control @error('plat') is-invalid @enderror" name="plat" value="Иное лицо" autocomplete="plat" autofocus style="position:relative; left: 10%; ">
						<a style="position:relative; left: 11%;   color:rgba(0,0,0,.6); bottom:2px; ">Иное лицо</a>

						@error('plat')
								<span class="invalid-feedback" role="alert">
										<strong>{{ $message }}</strong>
								</span>
						@enderror
				</div>
		</div>
		<div class="form-group row">
				<label for="aim" class="col-md-4 col-form-label text-md-right" style="position:absolute; left:8.6%; top:135px; font-weight: bold;">{{ __('Цель испытаний:') }}</label>

		 <div class="col-md-6" style="position:absolute; left: 21.6%; top:135px;">
			 <input id="aim-1" type="radio" class="aim form-control @error('aim') is-invalid @enderror" name="aim" value="декларирование" autocomplete="aim" autofocus>
			 <a style="position:relative;   color:rgba(0,0,0,.6); bottom:2px; ">декларирование</a>
 <input id="aim-2" type="radio" class="aim form-control @error('aim') is-invalid @enderror" name="aim" value="производственный контроль" autocomplete="aim" autofocus style="position:relative; left: 3%; ">
 <a style="position:relative; left: 3%; color:rgba(0,0,0,.6); bottom:2px; ">производственный контроль</a><br><br>
 <input id="aim-3" type="radio" class="aim form-control @error('aim') is-invalid @enderror" name="aim" value="получение информации о фактическом качестве продукции" autocomplete="aim" autofocus>
 <a style="position:relative;  color:rgba(0,0,0,.6); bottom:2px; ">получение информации о фактическом качестве продукции</a><br><br>
 <input id="aim-4" type="radio" name="aim" class="aim" autocomplete="aim" autofocus>
 <a style="position:relative;    color:rgba(0,0,0,.6); bottom:2px; ">другое</a>

 <input id="aim-text" type="text" class="form-control @error('aim') is-invalid @enderror" name="aim" autocomplete="aim" autofocus disabled>

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

						@error('aim')
								<span class="invalid-feedback" role="alert">
										<strong>{{ $message }}</strong>
								</span>
						@enderror
				</div>
		</div>
		<div class="form-group row">
				<label for="viezd" class="col-md-4 col-form-label text-md-right" style="position:absolute; left:8.6%; top:300px; font-weight: bold;">{{ __('Выезд специалиста ИЦ на отбор образцов:') }}</label>

		 <div class="col-md-6" style="position:absolute; left: 38%; top:300px;">
						<input id="viezd" type="radio" class="form-control @error('viezd') is-invalid @enderror" name="viezd" value="требуется" autocomplete="viezd" autofocus >
						<a style="position:relative;    color:rgba(0,0,0,.6); bottom:2px; ">требуется</a>
						<input id="viezd" type="radio" class="form-control @error('viezd') is-invalid @enderror" name="viezd" value="не требуется" autocomplete="viezd" autofocus style="position:relative; left: 10%; ">
						<a style="position:relative; left: 10%;   color:rgba(0,0,0,.6); bottom:2px; ">не требуется</a>

						@error('viezd')
								<span class="invalid-feedback" role="alert">
										<strong>{{ $message }}</strong>
								</span>
						@enderror
				</div>
		</div>

		<div class="form-group row">
				<label for="metod" class="col-md-4 col-form-label text-md-right" style="position:absolute; left:8.6%; top:350px; font-weight: bold;">{{ __('Выбор метода испытаний предоставляю сотрудникам ИЦ:') }}</label>

		 <div class="col-md-6" style="position:absolute; left: 48%; top:350px;">
						<input id="metod" type="radio" class="form-control @error('metod') is-invalid @enderror" name="metod" value="ДА" autocomplete="metod" autofocus >
						<a style="position:relative;    color:rgba(0,0,0,.6); bottom:2px; ">ДА</a>
						<input id="metod" type="radio" class="form-control @error('metod') is-invalid @enderror" name="metod" value="НЕТ" autocomplete="metod" autofocus style="position:relative; left: 10%; ">
						<a style="position:relative; left: 10%;  color:rgba(0,0,0,.6); bottom:2px; ">НЕТ</a>

						@error('metod')
								<span class="invalid-feedback" role="alert">
										<strong>{{ $message }}</strong>
								</span>
						@enderror
				</div>
		</div>
		<div class="form-group row">
				<label for="vozvr" class="col-md-4 col-form-label text-md-right" style="position:absolute; left:8.6%; top:400px; font-weight: bold;">{{ __('Возврат образцов:') }}</label>

		 <div class="col-md-6" style="position:absolute; left: 23%; top:400px;">
						<input id="vozvr" type="radio" class="form-control @error('vozvr') is-invalid @enderror" name="vozvr" value="подлежат возврату" autocomplete="vozvr" autofocus >
						<a style="position:relative;    color:rgba(0,0,0,.6); bottom:2px; ">подлежат возврату</a>
						<input id="vozvr" type="radio" class="form-control @error('vozvr') is-invalid @enderror" name="vozvr" value="не подлежат возврату" autocomplete="vozvr" autofocus style="position:relative; left: 7%; ">
						<a style="position:relative; left: 7%;   color:rgba(0,0,0,.6); bottom:2px; ">не подлежат возврату</a>

						@error('vozvr')
								<span class="invalid-feedback" role="alert">
										<strong>{{ $message }}</strong>
								</span>
						@enderror
				</div>
		</div>
		<div  class="form-group row mb-0" style="position:absolute; left:33.3%; top:453px; color: #FFF !important;">
				<div  class="col-md-6 offset-md-4" >
						<button type="submit" id="buttonenter1" class="buttonenter1">
								{{ __('Перейти к выбору продукции на испытания') }}
						</button>
				</div>
		</div>
	</form>

	                  </div>

	</div>


</div>

@extends('layouts.podval')

</body>
</html>
