<!DOCTYPE html>
<html lang="en">
<head>
	<title>Авторизация</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
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
<!--===============================================================================================-->
</head>
<body>

<?php
if (Auth::check()):
header( 'Refresh: 0; url=/home' );
else:
?>

	<div class="limiter" >
		<div class="container-login100" style="background-image: url(images/fone.jpg);">
			<div class="wrap-login100">

				<div class="login100-form-title" style="background-image: url(images/bg-01.jpg);">
					<img src="../images/logowhite.png" width="100" style="position:absolute; margin-left:-500px; margin-top:-40px;" /> <!--тут было -50px-->
				<!--<hr class="style-eight" width=120% style="position:absolute; margin-top: 45px;">-->
					<span class="login100-form-title-2">
						Информационная система испытательной лаборатории
					</span>

					<!--<span class="login100-form-title-1">
						Авторизация
					</span>-->

				</div>


				<form method="POST" action="{{ route('login') }}" class="login100-form validate-form">
							@csrf
					<div class="wrap-input100 validate-input m-b-26" data-validate="Username is required">
						<span class="label-input100">Логин</span>
							<input id="log" type="text" class="form-control @error('log') is-invalid @enderror" name="log" value="{{ old('log') }}" required autocomplete="log">

					</div>

					<div class="wrap-input100 validate-input m-b-18" data-validate = "Password is required">
						<span class="label-input100">Пароль</span>
						<input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

					</div>

					<div class="flex-sb-m w-full p-b-30">



					</div>
					<div class="form-group row mb-0" style="margin-left: 35px">
							<div class="col-md-8 offset-md-4">
									<button type="submit" class="custom-btn btn-1">
											{{ __('Войти в систему') }}
									</button>


							</div>
					</div>


				</form>



			</div>
		</div>
	</div>

<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>
<?php endif; ?>
</body>
</html>
