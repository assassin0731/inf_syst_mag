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
				<a  align="center" style="font-size:18px;line-height:2.5; color:#4E4E4E; position:relative;left:1%; bottom: 8px;">Редактирование профиля</a>
	</div>


<div id="banner5" style=" height: 545px; width: 1235px; ">
	<div id="banner9" style=" height: 63px; width: 1235px; ">
	<br>
	<b>Редактирование профиля</b>
	</div>
	<form action="/profile/edit/edit" method="post">
		@csrf
												<p style="position:absolute; left:33%; top:85px; font-weight: bold;" > Физическое лицо </p>
												<p style="position:absolute; left:53%; top:85px; font-weight: bold;" > Юридическое лицо </p>
												<input type="radio" name="active_field"
												<?php if (Auth::user()->org=='') {?>
												 checked="true"
											 <?php }?>
												  class="active_field" style="position:absolute; left:38%; top:117px;"/>
												<input type="radio" name="active_field"
												<?php if (!Auth::user()->org=='') {?>
												 checked="true"
											 <?php }?>
											  class="active_field" style="position:absolute; left:58.5%; top:117px;"/>
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
												<div class="form-group row">
                            <label for="org" class="col-md-4 col-form-label text-md-right" style="position:absolute; left:8.6%; top:161px; font-weight: bold;">{{ __('Название организации:') }}</label>

                         <div class="col-md-6" style="position:absolute; left: 25.5%; top:140px;width: 600px;">
                                <input id="org" type="text" class="form-control @error('org') is-invalid @enderror" name="org" autocomplete="org" autofocus
																<?php if (Auth::user()->org=='') {?>
																 disabled
															 <?php }?>
																 value = '<?php
																$users = DB::select('select org from users where id = ?',[Auth::user()->id]);
																echo $users[0]->org;
																?>'>

                                @error('org')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right" style="position:absolute; left:20%; top:241px; font-weight: bold;">{{ __('ФИО:') }}</label>

                            <div class="col-md-6" style="position:absolute; left: 25.5%; top:220px;width: 600px;">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" required autocomplete="name" autofocus value = '<?php
																$users = DB::select('select name from users where id = ?',[Auth::user()->id]);
																echo $users[0]->name;
																?>'>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
</div>

<div class="form-group row">



		<label for="jmp__input_tel" class="col-md-4 col-form-label text-md-right" style="position:absolute; left:17.5%; top:321px; font-weight: bold;">{{ __('Телефон:') }}</label>

		<div class="col-md-6" style="position:absolute; left: 25.5%; top:300px;width: 600px;">
			<script>
 $(function() {
   $('.jmp__input_tel').mask('+7(000)000-00-00');
 });
</script>

			<input type="text" id="jmp__input_tel" class="jmp__input_tel" name="jmp__input_tel" required autocomplete="jmp__input_tel" autofocus placeholder="+7 (XXX) XXX-XX-XX" value = '<?php
			$users = DB::select('select jmp__input_tel from users where id = ?',[Auth::user()->id]);
			echo $users[0]->jmp__input_tel;
			?>'>

				@error('jmp__input_tel')
						<span class="invalid-feedback" role="alert">
								<strong>{{ $message }}</strong>
						</span>
				@enderror
		</div>
</div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right" style="position:absolute; left:19.5%; top:401px;font-weight: 1000;">{{ __('E-Mail:') }}</label>

                            <div class="col-md-6" style="position:absolute; left:25.5%; top:380px; width: 600px;">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email"  required autocomplete="email" value = '<?php
																$users = DB::select('select email from users where id = ?',[Auth::user()->id]);
																echo $users[0]->email;
																?>'>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>





                        <div  class="form-group row mb-0" style="position:absolute; left:44.4%; top:459px; color: #FFF !important;">
                            <div  class="col-md-6 offset-md-4" >
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
