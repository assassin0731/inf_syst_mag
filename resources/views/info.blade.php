<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" >
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
	<link rel="stylesheet" type="text/css" href="css/dataTables.css">
<script type="text/javascript" src="/js/jquery-1.4.min.js" ></script>
<script type="text/javascript">
var jQuery2 = $.noConflict(true);
</script>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>


	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.15/jquery.mask.min.js"></script>
	<script type="text/javascript">
	var mask = $.noConflict(true);
	</script>

	<script src="https://code.jquery.com/jquery-2.1.0.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.js"></script>
	<script type="text/javascript" charset="utf8" src="js/dataTables.js"></script>


    <style type="text/css">

        #tabs {position:absolute; margin-left:379px; margin-top:-23px; padding:0; list-style:none; overflow:hidden; }
        #tabs li { float:left; display:block; padding:2px;
					background: rgb(54,170,231); /* Old browsers */
			    background: -moz-linear-gradient(top,  rgba(54,170,231,1) 0%, rgba(31,160,228,1) 100%); /* FF3.6+ */
			    background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,rgba(54,170,231,1)), color-stop(100%,rgba(31,160,228,1))); /* Chrome,Safari4+ */
			    background: -webkit-linear-gradient(top,  rgba(54,170,231,1) 0%,rgba(31,160,228,1) 100%); /* Chrome10+,Safari5.1+ */
			    background: -o-linear-gradient(top,  rgba(54,170,231,1) 0%,rgba(31,160,228,1) 100%); /* Opera 11.10+ */
			    background: -ms-linear-gradient(top,  rgba(54,170,231,1) 0%,rgba(31,160,228,1) 100%); /* IE10+ */
			    background: linear-gradient(to bottom,  rgba(54,170,231,1) 0%,rgba(31,160,228,1) 100%); /* W3C */
					border: 2px solid #1682ba;
			border-radius: 8px;
					 margin-right:5px;}
        #tabs li a { color:#fff; text-decoration:none; }
        #tabs li.current {

					background: -webkit-linear-gradient(top,  rgba(54,200,255,1) 0%,rgba(31,180,228,1) 100%); /* Chrome10+,Safari5.1+ */
					background: -o-linear-gradient(top,  rgba(54,200,255,1) 0%,rgba(31,180,228,1) 100%); /* Opera 11.10+ */
					background: -ms-linear-gradient(top,  rgba(54,200,255,1) 0%,rgba(31,180,228,1) 100%); /* IE10+ */
					background: linear-gradient(to bottom,  rgba(54,200,255,1) 0%,rgba(31,180,228,1) 100%); /* W3C */
				}
        #tabs li.current a { color:white; text-decoration:none; }
        #tabs li a.remove { color:black; margin-left:5px;}




    </style>


		<script type="text/javascript">
        $(document).ready(function() {
          var i = 0;
          var a=[];
          var p=0;
            $("#cssmenu a.class").click(function() {
              console.log(a);
              i++;
              a[i]=$(this).attr("rel");
              p=0;
              addTab($(this));

              for (p; p < i; p++) {
                if (a[p] === $(this).attr("rel")) {
                  a.splice(i,100);
                  i--;
                }

              }

            });


            jQuery2('#tabs a.tab').live('click', function() {
                // Get the tab name
                var bannername = $(this).attr("id") + "_banner";


                // hide all other tabs
                $("#banner > div").hide();
                $("#tabs li").removeClass("current");

                // show current tab
                $("#" + bannername).show();
                $(this).parent().addClass("current");
            });

            jQuery2('#tabs a.remove').live('click', function() {
                // Get the tab name
                var tabid = $(this).parent().find(".tab").attr("id");

                // remove tab and related banner
                var k=1;
                while(a[k]!=tabid) {k++;}

                a.splice(k, 1);
                i--;
                k--;

                var bannername = tabid + "_banner";
                $("#" + bannername).remove();
                $(this).parent().remove();

                // if there is no current tab and if there are still tabs left, show the first one
                if ($("#tabs li.current").length == 0 && $("#tabs li").length > 0) {



                    // find the first tab
                    var firsttab = $("#tabs li:nth-child("+k+")");



                    firsttab.addClass("current");

                    // get its link name and show related banner
                    var firsttabid = $(firsttab).find("a.tab").attr("id");

                    $("#" + firsttabid + "_banner").show();
                }
            });


        function addTab(link) {
            // If tab already exist in the list, return
            if ($("#" + $(link).attr("rel")).length != 0)
            {
              var k=1;



              $("#tabs li").removeClass("current");
              $("#banner > div").hide();


              while(a[k]!=$(link).attr("rel")) {k++;}
                // find the first tab
                var firsttab = $("#tabs li:nth-child("+k+")");

                console.log(a);
                firsttab.addClass("current");

                // get its link name and show related banner
                var firsttabid = $(firsttab).find("a.tab").attr("id");

                $("#" + firsttabid + "_banner").show();
                return;
            }


            // hide other tabs
            $("#tabs li").removeClass("current");
            $("#banner > div").hide();

            // add new tab and related banner
            $("#tabs").append("<li class='current'><a class='tab' id='" +
                $(link).attr("rel") + "' href='#'>" + $(link).html() +
                "</a><a href='#' class='remove'>x</a></li>");

			const page = $(link).attr("rel")

			$.ajax({
				url:'/'+ page,
				success (html) {
					$("#banner").append("<div id='" + page + "_banner'>" + html + "</div>");
					$("#" + $(link).attr("rel") + "_banner").show();
				}
			})
        }
        });
    </script>
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
	<span style="font-size:30px; position:absolute; margin-left: 1330px; margin-top:23px;">
	  <?php
	  $d=Auth::user()->name;
	  echo $d;
	    ?>
	</span>
	  <a id="forexit" href="{{ url('/logout') }}"></a>
	<input type="button" style="background-image: url(images/knopk.png);">
	</div>


<div id="wrapper">
		<ul id="tabs">
				<!-- Tabs go here -->
		</ul>

<div id="banner">

</div>

</div>

<div id="top2">
  <span style="font-size:30px; margin-top:5px;">
    Главное меню
  </span>
</div>

  <div id='cssmenu'>
      <ul>
         <li class='has-sub'><a href='#'><img src="../images/zayav.png" width="35" style="position:absolute; margin-top:-7px;" /><span style="margin-left:45px">Заявки на исследование</span></a>
					 <ul>
							<li><a class="class" href="#" rel="zayavkanew"><span>Регистрация заявок</span></a>
							</li>
							<li><a class="class" href="#" rel="rastvor" ><span class="otstup">Работа работа работа</span></a>
							</li>
					 </ul>
				 </li>
         <li class='has-sub'><a href='#'><img src="../images/obraz.png" width="35" style="position:absolute; margin-top:-7px;" /><span style="margin-left:45px">Работа с образцами</span></a>
            <ul>
               <li><a class="class" href="#" rel="obrazeznew"><span>Образцы в обработке</span></a>
               </li>
               <li><a class="class" href="#" rel="rastvor" ><span class="otstup">Работа работа работа</span></a>
               </li>
            </ul>
         </li>

         <li class='has-sub'><a><img src="../images/journal.png" width="35" style="position:absolute; margin-top:-7px;" /><span style="margin-left:45px">Журналы</span></a>
					 <ul>
							<li><a class="class" href="#" rel="rastvor"><span>Приготовление растворов</span></a>
							</li>
					 </ul>
				 </li>

         <li><a href='#'><img src="../images/spravoch.png" width="35" style="position:absolute; margin-top:-7px;" /><span style="margin-left:45px">Справочники</span></a></li>

         <li><a href="#" rel="rastvor"><img src="../images/otchet.png" width="35" style="position:absolute; margin-top:-7px;" /><span style="margin-left:45px">Отчёты</span></a></li>
         <li><a href="#" rel="zayavnaisl"><img src="../images/borud.png" width="35" style="position:absolute; margin-top:-7px;" /><span style="margin-left:45px">Оборудование</span></a></li>
         <li><a href='#'><img src="../images/dokum.png" width="35" style="position:absolute; margin-top:-7px;" /><span style="margin-left:45px">Документы</span></a></li>
         <li><a href='#'><img src="../images/uprav.png" width="35" style="position:absolute; margin-top:-7px;" /><span style="margin-left:45px">Упарвление лабораторией</span></a></li>
      </ul>
  </div>



</body>
</html>
