<?php
include ("shoes_dao.php");
?>

<!DOCTYPE html>
<html>
   <head>
   	   <title>따라오슈</title>
   	   <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
       <link rel="stylesheet" type="text/css" href="css/mainstyle.css" />

       <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
   	   <script>
   	      $(function(){
   	      	var pull=$('#pull');
   	      	    menu=$('nav ul');
   	      	    menuHeight=menu.height();
   	      $(pull).on('click', function(e){
   	      	e.preventDefault();
   	      	menu.slideToggle();
   	      });
   	      $(window).resize(function(){
   	      	var w=$(window).width();
   	      	if(w>600 && menu.is(':hidden'))
   	      		{menu.removeAttr('style');}
   	      });
   	  });
   	   </script>
   </head>
   <body>
     <form action="search.php" method="post">
   	  <nav class="clearfix">
   	      <ul class="clearfix">
   	         <li><a href="http://localhost/followme.php">Home</a></li>
   	         <li><a href="#">History</a></li>
   	         <li><a href="#">Q&A</a></li>
              <li><a href="#">UserInfo</a></li>
   	         <li><a href="http://localhost/">LogOut</a></li>
   	      </ul>
   	      <a id="pull" href="#">Menu</a>
   	  </nav>
   </body>
   <div class="imgcontainer">
     <a href="http://localhost/followme.php"<center><img src="http://imageshack.com/a/img924/8268/9iaouH.png" alt="Banner" class="Banner_img" id="logo" width=600px style="margin-left: auto; margin-right: auto; display: block;"></center></a>
   </div>

    <div class="searchDiv">
      <input type="text" name="station"  class="searchInput" placeholder="목적지를 입력하세요.">
     <input type="submit" value="검색" class="searchBtn">
     </div>
       </form>
   </body>
</html>
