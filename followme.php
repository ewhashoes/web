<?php include ('shoes_dao.php');
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
   <div class="imgcontainer">
     <a href="http://localhost/followme.php"<center><img src="http://imageshack.com/a/img924/8268/9iaouH.png" alt="Banner" class="Banner_img" id="logo" width=600px style="margin-left: auto; margin-right: auto; display: block;"></center></a>
   </div>

    <div class="searchDiv">
      <input type="text" name="station"  class="searchInput" placeholder="목적지를 입력하세요.">
     <input type="submit" value="검 색" class="searchBtn">

     </div>
       </form>


         <canvas id="canvas" width="1500" height="500"></canvas>
   </body>
   <script type="text/javascript">

   function shortestPath(edges, numVertices, startVertex) {
     var done = new Array(numVertices);
     done[startVertex] = true;
     var pathLengths = new Array(numVertices);
     var predecessors = new Array(numVertices);
     for (var i = 0; i < numVertices; i++) {
       pathLengths[i] = edges[startVertex][i];
       if (edges[startVertex][i] != Infinity) {
         predecessors[i] = startVertex;
       }
     }
     pathLengths[startVertex] = 0;
     for (var i = 0; i < numVertices - 1; i++) {
       var closest = -1;
       var closestDistance = Infinity;
       for (var j = 0; j < numVertices; j++) {
         if (!done[j] && pathLengths[j] < closestDistance) {
           closestDistance = pathLengths[j];
           closest = j;
         }
       }
       done[closest] = true;
       for (var j = 0; j < numVertices; j++) {
         if (!done[j]) {
           var possiblyCloserDistance = pathLengths[closest] + edges[closest][j];
           if (possiblyCloserDistance < pathLengths[j]) {
             pathLengths[j] = possiblyCloserDistance;
             predecessors[j] = closest;
           }
         }
       }
     }
     return { "startVertex": startVertex,
              "pathLengths": pathLengths,
              "predecessors": predecessors };
   }

   function constructPath(shortestPathInfo, endVertex) {
     var path = [];
     while (endVertex != shortestPathInfo.startVertex) {
       path.unshift(endVertex);
       endVertex = shortestPathInfo.predecessors[endVertex];
     }
     return path;
   }
   var _ = Infinity;
   var e = [
   <?php echo $res; ?>
   ];
   var shortestPathInfo = shortestPath(e, 5, 5);
   var path1to6 = constructPath(shortestPathInfo,0);


   document.write(path1to6);

       $(function() {
         //canvas 가져오기
       var ctx = $('#canvas')[0].getContext('2d');

       ctx.fillStyle = '#58626C';
       ctx.beginPath();
        ctx.arc(400, 200, 50, 0, Math.PI*2, false);
        ctx.closePath();
        ctx.fill();
        ctx.font="30px Arial";
        ctx.fillText(shortestPathInfo.startVertex, 400,300);

        ctx.beginPath();
        ctx.lineWidth="5";
        ctx.strokeStyle="white"; // Green path
        ctx.moveTo(450,200);
        ctx.lineTo(550,200);
        ctx.stroke(); // Draw it

         for(var j=0;j<path1to6.length;j++) {
         ctx.fillStyle = '#58626C';  //Color
         ctx.beginPath();
         ctx.arc(200*(j+2)+200, 200, 50, 0, Math.PI*2, false);
         ctx.closePath();
         ctx.fill();
         ctx.font="30px Arial";
         ctx.fillText(path1to6[j], 200*(j+2)+200,300);

         if(j < path1to6.length-1) {
           ctx.beginPath();
           ctx.lineWidth="5";
           ctx.strokeStyle="white"; // Green path
           ctx.moveTo(200*(j+2)+250,200);
           ctx.lineTo(200*(j+3)+150,200);
           ctx.stroke(); // Draw it
         }
       }

       });
   </script>
</html>
