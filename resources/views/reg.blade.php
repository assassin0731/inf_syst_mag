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
</head>
<body>
	 <div id="topNavLine" class="container2">
		 <div id="list-contact">

			 <div id="mail" >

				 <img src="images/image1-460x460.png" width="23" height="" align="left" />
					 <a href="#" style="font-size:16px; color:#bbbbbb;">foodlab@ncsm.ru</a>

			 </div>

				 <div id="phone" >
				 <img src="images/telefono-png-8.png" width="23" height="" align="left"  />

					 <a href="#" style="font-size:16px; color:#bbbbbb;">(383)210-00-65</a>
			 </div>
			 <div id="address" >
				 <img src="images/download-036d71fe5368cf7116041cb575433e28.png" width="23" height="" align="left"  />

					 <a href="#" style="font-size:16px; color:#bbbbbb;">630004, г. Новосибирск, ул. Революции, 36</a>
			 </div>

		 </div>
	</div>
<div id="header-wrapper">

  <div id="header" class="container">

	  <div id="logo1">
		  <img src="images/logo.png" width="100" height="" align="left" />
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
		  </ul>
	</div>

  </div>
	<br>
	<div id="banner4" class="container2">
		<span>Регистрация</span>

	</div>
	<br>
	<!--<b align="center" style="font-size:30px;line-height:1; position:relative; left:17.55%;">Меню</b><br>

		<img src="images/razd.png" width="330" style="position:relative; left:17.55%; margin-bottom: 10px;" /><br>-->
	<div style="position: relative; left:16.7%;">
<a href="#" align="center" style="font-size:18px;line-height:2.5; color:#4E4E4E; position:relative;left:1%; bottom: 8px;">Главная</a>
		<a align="center" style="font-size:18px;line-height:2.5; color:#909090; position:relative;left:1%; bottom:8px"> / </a>
			<a align="center" style="font-size:18px;line-height:2.5; color:#4E4E4E; position:relative;left:1%; bottom: 8px;">Регистрация</a>

	</div>

  <div id="banner5" style=" height: 545px; width: 1235px; "><br>
 <form role="form" method="post" action="{{ url('auth/register') }}">
          {!! csrf_field() !!}
          <div class="form-group">
            <label for="email">Email</label>
            <input type="email" class="form-control" id="email" placeholder="Email" name='email'>
          </div>
          <div class="form-group">
            <label for="password">Пароль</label>
            <input type="password" class="form-control" id="password" placeholder="Пароль" name="password">
          </div>
          <div class="form-group">
            <label for="confirm_password">Повторите пароль</label>
            <input type="password" class="form-control" id="confirm_password" placeholder="Повторите пароль" name="password_confirmation">
          </div>
          <button type="submit" class="btn btn-default">Отправить</button>
        </form>


	</div>


</div>

<div id="topNavLine2" class="container2">
	<div id="navlogo">
	<img src="images/logowhite.png" width="80" height="" align="left" />
		<a  style="font-size:25px; color:#FFF;">Испытательная лаборатория</a><br>
		<a1  style="font-size:18px; color:#FFF;">ФБУ Новосибирский ЦСМ</a1>
	</div>
	<div id="navmenu">
		<a href="#" style="font-size:18px; color:#FFF;">Главная</a>
		<a href="#" style="font-size:18px; color:#FFF;">Заказчику</a>
		<a href="#" style="font-size:18px; color:#FFF;">О нас</a>
		<a href="#" style="font-size:18px; color:#FFF;">Контакты</a>
		<a href="#" style="font-size:18px; color:#FFF;">Личный кабинет</a>
	</div>
	</div>
<div id="topNavLine1" class="container2">
		 <div id="list-contact1">
			 <div id="mail1" >

				 <img src="images/image1-460x460.png" width="23" height="" align="left" />
					 <a href="#" style="font-size:16px; color:#bbbbbb;">email@mail.ru</a>

			 </div>

				 <div id="phone1" >
				 <img src="images/telefono-png-8.png" width="23" height="" align="left"  />
					 <a href="#" style="font-size:16px; color:#bbbbbb;">(383)210-00-65</a>
			 </div>
			 <div id="address1" >
				 <img src="images/download-036d71fe5368cf7116041cb575433e28.png" width="23" height="" align="left"  />

					 <a href="#" style="font-size:16px; color:#bbbbbb;">630004, г. Новосибирск, ул. Революции, 36</a>
			 </div>
		 </div>
	</div>
</body>
</html>
