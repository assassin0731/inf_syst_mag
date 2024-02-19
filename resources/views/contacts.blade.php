<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" >
<head>
    <title>Dynamic tabs with jQuery - why and how to create them | JankoAtWarpSpeed Demos</title>
    <style type="text/css">
        body { font-family:Lucida Sans, Lucida Sans Unicode, Arial, Sans-Serif; font-size:13px; margin:0px auto;}
        #tabs { margin:0; padding:0; list-style:none; overflow:hidden; }
        #tabs li { float:left; display:block; padding:5px; background-color:#bbb; margin-right:5px;}
        #tabs li a { color:#fff; text-decoration:none; }
        #tabs li.current { background-color:#e1e1e1;}
        #tabs li.current a { color:#000; text-decoration:none; }
        #tabs li a.remove { color:#f00; margin-left:10px;}
        #banner { background-color:#e1e1e1;}
        #banner p { margin: 0; padding:20px 20px 100px 20px;}

        #main { width:900px; margin:0px auto; overflow:hidden;background-color:#F6F6F6; margin-top:20px;
             -moz-border-radius:10px;  -webkit-border-radius:10px; padding:30px;}
        #wrapper, #doclist { float:left; margin:0 20px 0 0;}
        #doclist { width:150px; border-right:solid 1px #dcdcdc;}
        #doclist ul { margin:0; list-style:none;}
        #doclist li { margin:10px 0; padding:0;}
        #documents { margin:0; padding:0;}

        #wrapper { width:700px; margin-top:20px;}

        #header{ background-color:#F6F6F6; width:900px; margin:0px auto; margin-top:20px;
             -moz-border-radius:10px;  -webkit-border-radius:10px; padding:30px; position:relative;}
        #header h2 {font-size:16px; font-weight:normal; margin:0px; padding:0px;}

    </style>

    <script type="text/javascript" src="/js/jquery-1.4.min.js" ></script>
    <script type="text/javascript">
        $(document).ready(function() {
          var i = 0;
          var a=[];
          var p=0;
            $("#documents a").click(function() {
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


            $('#tabs a.tab').live('click', function() {
                // Get the tab name
                var bannername = $(this).attr("id") + "_banner";


                // hide all other tabs
                $("#banner > div").hide();
                $("#tabs li").removeClass("current");

                // show current tab
                $("#" + bannername).show();
                $(this).parent().addClass("current");
            });

            $('#tabs a.remove').live('click', function() {
                // Get the tab name
                var tabid = $(this).parent().find(".tab").attr("id");

                // remove tab and related banner
                var k=1;
                while(a[k]!=tabid) {k++;}
                alert(k);
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
</head>
<body>

    <div id="header">
        <img src="logo.jpg" alt="JankoAtWarpSpeed demos" /><br />
        <h2><span lang="ru"><strong>ДЕМО урока (нажмите на ссылки ниже)</strong></span></h2>
        <img src="help.png" alt="Click on lnks to open 'documents' in tabs" style="position:absolute;left:-170px; top:200px;" />
    </div>
    <div id="main">
    <div id="doclist">
        <h2>Documents</h2>

        <ul id="documents">
            <li><a href="#" rel="zayavnaisl" title="This is the banner of Document1">Document1</a></li>
            <li><a href="#" rel="tester" title="This is the banner of Document2">Document2</a></li>
            <li><a href="#" rel="page3" title="This is the banner of Document3">Document3</a></li>

        </ul>
    </div>
    <div id="wrapper">
        <ul id="tabs">
            <!-- Tabs go here -->
        </ul>
        <div id="banner">
            <!-- Tab banner goes here -->
        </div>

    </div>
    </div>
</body>
</html>
