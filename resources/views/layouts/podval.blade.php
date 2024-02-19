

<div id="topNavLine2" class="container2">
	<div id="navlogo">
	<img src="../../../images/logowhite.png" width="80" height="" align="left" />
		<a  style="font-size:25px; color:#FFF;">Испытательная лаборатория</a><br>
		<a1  style="font-size:18px; color:#FFF;">ФБУ Новосибирский ЦСМ</a1>
	</div>
	<div id="navmenu">
		<a href="/" style="font-size:18px; color:#FFF;">Главная</a>
		<a href="/zakaz" style="font-size:18px; color:#FFF;">Заказчику</a>
		<a href="/info" style="font-size:18px; color:#FFF;">О нас</a>
		<a href="/contacts" style="font-size:18px; color:#FFF;">Контакты</a>
    @if (Auth::check())
  <!--	<li ><a href="/profile" accesskey="1" title="" style="width:100px; overflow:hidden; text-overflow: ellipsis;">1111111111111111111111</a></li> -->
    <a href="/profile" style="font-size:18px; color:#FFF;">

<?php
$d=Auth::user()->name;
$arr=explode(' ',$d);
echo $arr[1];
?>
    </a></li>
    @else
    <a onclick="document.getElementById('id01').style.display='block'" style="width:auto; cursor: pointer;font-size:18px; color:#FFF; ">Личный кабинет</a>

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
	</div>
	</div>
<div id="topNavLine1" class="container2">
		 <div id="list-contact1">
			 <div id="mail1" >

				 <img src="../../../images/image1-460x460.png" width="23" height="" align="left" />
					 <a href="#" style="font-size:16px; color:#bbbbbb;">foodlab@ncsm.ru</a>

			 </div>

				 <div id="phone1" >
				 <img src="../../../images/telefono-png-8.png" width="23" height="" align="left"  />
					 <a href="#" style="font-size:16px; color:#bbbbbb;">(383)210-00-65</a>
			 </div>
			 <div id="address1" >
				 <img src="../../../images/download-036d71fe5368cf7116041cb575433e28.png" width="23" height="" align="left"  />

					 <a href="#" style="font-size:16px; color:#bbbbbb;">630004, г. Новосибирск, ул. Революции, 36</a>
			 </div>
		 </div>
	</div>
