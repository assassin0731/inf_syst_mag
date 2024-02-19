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
<script src="https://code.jquery.com/jquery-2.1.0.js"></script>
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
				@if (Auth::check())
				<li ><a href="/profile" accesskey="1" title=""  style="	 width:133px; 	padding: 0em 1.5em; padding-top:17px;  padding-bottom:3px; border: 2px solid #42aaff;">
			<div class="forimg" style="position:relative; bottom:6px;">
				<img src="images/ava1.png" class="img2" width="30" height="" align="left" />
					<img src="images/ava.png" class="image1" width="30" height="" align="left" style="margin-left:-33px;"  />
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


	                <div class="card-header">{{ __('Login') }}</div>

	                <div class="card-body">
	                    <form method="POST" action="{{ route('login') }}">
	                        @csrf
<div class="container7">
	                        <div class="form-group row">
	                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

	                            <div class="col-md-6">
	                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

	                                @error('email')
	                                    <span class="invalid-feedback" role="alert">
	                                        <strong>{{ $message }}</strong>
	                                    </span>
	                                @enderror
	                            </div>
	                        </div>

	                        <div class="form-group row">
	                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

	                            <div class="col-md-6">
	                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

	                                @error('password')
	                                    <span class="invalid-feedback" role="alert">
	                                        <strong>{{ $message }}</strong>
	                                    </span>
	                                @enderror
	                            </div>
	                        </div>

	                        <div class="form-group row">
	                            <div class="col-md-6 offset-md-4">
	                                <div class="form-check">
	                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

	                                    <label class="form-check-label" for="remember">
	                                        {{ __('Remember Me') }}
	                                    </label>
	                                </div>
	                            </div>
	                        </div>
</div>
	                        <div class="form-group row mb-0">
	                            <div class="col-md-8 offset-md-4">
	                                <button type="submit" class="btn btn-primary">
	                                    {{ __('Login') }}
	                                </button>

	                                @if (Route::has('password.request'))
	                                    <a class="btn btn-link" href="{{ route('password.request') }}">
	                                        {{ __('Forgot Your Password?') }}
	                                    </a>
	                                @endif
	                            </div>
	                        </div>
	                    </form>
	                </div>
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
		<span>Личный кабинет</span>

	</div>
	<br>
	<!--<b align="center" style="font-size:30px;line-height:1; position:relative; left:17.55%;">Меню</b><br>

		<img src="images/razd.png" width="330" style="position:relative; left:17.55%; margin-bottom: 10px;" /><br>-->
	<div style="position: relative; left:16.7%;">
<a href="#" align="center" style="font-size:18px;line-height:2.5; color:#4E4E4E; position:relative;left:1%; bottom: 8px;">Главная</a>
		<a align="center" style="font-size:18px;line-height:2.5; color:#909090; position:relative;left:1%; bottom:8px"> / </a>
			<a align="center" style="font-size:18px;line-height:2.5; color:#4E4E4E; position:relative;left:1%; bottom: 8px;">Личный кабинет</a>

	</div>

  <div id="banner5" style=" height: 645px; width: 1235px; "><br>
		<div id="img_profile">
<img src="images/blank-profile-picture-973460_640.png" width="250">

</div>

<div id="text_profile">
	<a>Заказчик:</a></p><a style="position:absolute;border-bottom: 1px solid rgba(0,0,0,.2); width:200px; padding-right:500px;"></a><br>
	<a>Организация:</a></p><a style="position:absolute;border-bottom: 1px solid rgba(0,0,0,.2); width:200px; padding-right:500px;"></a><br>
	<a>ФИО:</a></p><a style="position:absolute;border-bottom: 1px solid rgba(0,0,0,.2); width:200px; padding-right:500px;"></a><br>
	<a>Телефон:</a></p><a style="position:absolute;border-bottom: 1px solid rgba(0,0,0,.2); width:200px; padding-right:500px;"></a><br>
	<a>E-mail:</a></p><a style="position:absolute;border-bottom: 1px solid rgba(0,0,0,.2); width:200px; padding-right:500px;"></a><br>
</div>
<div id="textbd_profile">
	<?php
	$d=Auth::user()->org;
	if ($d=='')
	{?>
<a>Физическое лицо</a></p><br>
	<?php
} else{
?>
<a>Юридическое лицо</a></p><br>
<?php
}
?>
<?php
$d=Auth::user()->org;
if ($d=='')
{?>
<a>   -</a></p><br>
<?php
} else{
?>
<a>{{Auth::user()->org}}</a></p><br>
<?php
}
?>
<a>{{Auth::user()->name}}</a></p><br>
<a>{{Auth::user()->jmp__input_tel}}</a></p><br>
<a>{{Auth::user()->email}}</a></p><br>
</div>
<div align="left" style="position:relative; left:32.6%; font-weight:bold; font-size:20px; margin-bottom:5px;margin-top:5px;">
	Ваши заявки:
</div>
<div align="left" class="fortable" style="position:relative; left:32.6%; ">
<script>
function deleteRow(r)
{
var i=r.parentNode.parentNode.rowIndex;
document.getElementById('myTable').deleteRow(i);
}
</script>

	<table id="myTable" class="simple-little-table" cellspacing='0'>
		<thead>
		<tr>
			<th>Дата подачи</th>
			<th>Примерная стоимость</th>
			<th>Статус</th>
			<th>Просмотр</th>
			<th>Удаление</th>
		</tr><!-- Table Header -->
	</thead>
	<tbody>
		<?php
		    $zayavki=DB::select('select * from zayavkas where id_user=?',[Auth::user()->id]);

		    foreach (array_reverse($zayavki) as $zayava) {
		        echo "<tr>";
		        $arr1=explode(' ',$zayava->created_at);
		        session(['key1' => $zayava]);
						$arr2=explode('-',$arr1[0]);
						echo "<td>$arr2[2].$arr2[1].$arr2[0]</td>";

		        echo "<td>$zayava->cost руб.</td>";
		        echo "<td>$zayava->status</td>";
		        echo "<td><a href='/profile/page1/{$zayava->id}'>Просмотреть</a></td>";

		        echo "<td><input type='button' value='Удалить' data-id={$zayava->id} style='font-weight:bold; cursor: pointer;' onclick='deleteRow(this)' class='delete'/></td>";
		        echo "</tr>";

		    }
		?>
</tbody>
		</table>

</div>
<p style="font-size:22px; position:absolute; left:40px; bottom:280px;"><b>Управление аккаунтом:</b></p>
<div id="container10" class="container10" align="left" >

	<?php
	$users = DB::select('select adr from zayavka_profiles where id_user = ?',[Auth::user()->id]);

	if ($users==ARRAY ( ))
	{
		?>
<a href="/profile/dlya_zayavki" style="position:absolute; bottom:242px;left:27px;text-align:  center; padding-left:62px !important;padding-right:62px !important;">Внести данные<br> для заявки</a>
<?php
} else {
?>
	<a href="/profile/update_zayavki" style="position:absolute; bottom:242px;left:27px;text-align:  center;padding-left:49px !important;padding-right:49px !important;">Обновить данные<br> для заявки</a>
<?php
}
?>
	<a href="/profile/edit" style="position:absolute; bottom:200px;left:27px;text-align:  center;">Редактировать профиль</a>
	<a href="/profile/newpass" style="position:absolute; bottom:158px;left:27px;text-align:  center; padding-left:52px !important;padding-right:52px !important;">Изменить пароль</a>
	<a href="{{ url('/logout') }}" style="position:absolute; bottom:116px;left:27px;text-align:  center; padding-left:103px !important;padding-right:103px !important;">Выход</a>
</div>
</div>

</div>

@extends('layouts.podval')

</body>
</html>
