<html lang="en">
<head>
    <title>Laravel Ajax jquery Validation Tutorial</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
</head>
<body>

  <div id="banner5" style="width: 650px; ">

    <form id="contactForm">
      <div class="form-group">
      <div class="order">
        <div class="fororder">
          <label for="otdels">{{ __('Отдел') }}</label>
        </div>
      <div class="fororder1">
         <script>
         $(document).ready(function () {
        $('#nameot').chosen()
      });
        </script>
        <?php
        $sql = DB::select('select id,nameot from otdels');
            echo "<select class='form-control' name = 'nameot' id='nameot' >";
            echo "<option value='' selected disabled></option>";
              foreach($sql as $row){
          echo "<option value = '$row->id' > $row->nameot </option>";}
            echo "</select>";
            ?>
      </div>
</div>
</div>
<div class="form-group">
  <div class="order">
    <div class="fororder">
      <label for="rastvor">{{ __('Наименование раствора') }}</label>
    </div>
    <div class="fororder1">
    <input id="namerast" type="lalka" class="form-control" name="namerast" autocomplete="off" autofocus>
    </div>
</div>
</div>



<div class="form-group">
    <div class="order">
      <div class="fororder">
        <label for="dateprig">{{ __('Дата приготовления') }}</label>
      </div>
      <div class="fororder1">
        <input id="dateprig" type="date" class="form-control" name="dateprig" autocomplete="off" autofocus>
        </div>
    </div>
    </div>




    <div class="form-group">
    <div class="order">
      <div class="fororder">
        <label for="method">{{ __('Методика приготовления') }}</label>
      </div>
      <div class="fororder1">
        <input id="method" type="lalka" class="form-control pudge" name="method" autocomplete="off" autofocus>
        </div>
    </div>
    </div>

      <div class="form-group">
    <div class="order">
      <div class="fororder">
        <label for="kolvo">{{ __('Количество приготовленного') }}</label>
      </div>
      <div class="fororder1">
        <input id="kolvo" type="lalka" class="form-control pudge" name="kolvo" autocomplete="off" autofocus>
        </div>
    </div>
    </div>

    <div class="form-group">
    <div class="order">
      <div class="fororder">
        <label for="cons">{{ __('Концентрация раствора') }}</label>
      </div>
      <div class="fororder1">
        <input id="cons" type="lalka" class="form-control pudge" name="cons" autocomplete="off" autofocus>
        </div>
    </div>
    </div>

    <div class="form-group">
    <div class="order">
      <div class="fororder">
        <label for="coef">{{ __('Поправочный коэффициент') }}</label>
      </div>
      <div class="fororder1">
        <input id="coef" type="lalka" class="form-control pudge" name="coef" autocomplete="off" autofocus>
        </div>
    </div>
    </div>

    <div class="form-group">
    <div class="order">
      <div class="fororder">
        <label for="dategodn">{{ __('Срок годности') }}</label>
      </div>
      <div class="fororder1">
        <input id="dategod" type="date" class="form-control pudgeno" name="dategod" autocomplete="name" autofocus>
        </div>
    </div>
    </div>
    <div class="form-group">
    <button class="close_popap btn btn-success" id="submit"></button>
  </div>
</form>



<!--
    <div  class="form-group row mb-0" style="position:absolute; left:33.3%; top:453px; color: #FFF !important;">
        <div  class="col-md-6 offset-md-4" >
            <button type="submit" id="buttonenter1" class="buttonenter1">
                {{ __('Перейти к выбору продукции на испытания') }}
            </button>
        </div>
    </div>
  </form>-->

                    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.js"></script>

   <script>

    $('#contactForm').on('submit',function(event){
        event.preventDefault();

        let id_otdel = $('#nameot').val();
        let name = $('#namerast').val();
        let date = $('#dateprig').val();
        let method = $('#method').val();
        let kolvo = $('#kolvo').val();
        let cons = $('#cons').val();
        let coef = $('#coef').val();
        let dategod = $('#dategod').val();

        $.ajax({
          url: "/contact-form",
          type:"POST",
          data:{
            "_token": "{{ csrf_token() }}",
            id_otdel:id_otdel,
            name:name,
            date:date,
            method:method,
            kolvo:kolvo,
            cons:cons,
            coef:coef,
            dategod:dategod
          },
          success:function(response){
            console.log(response);
          },
         });
        });
      </script>
 </body>
</html>
