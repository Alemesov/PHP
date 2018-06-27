<html>
 </head> 
   <meta charset="utf-8">
  <title>PHP</title>
 </head>
 <body>
 <?php
     $day = 12;
	
	if ($day <= 10) {
		$decade = 1;
	}
	if ($day >= 11 and $day <= 20) {
		$decade = 2;
	}
	if ($day >= 21 and $day <= 31) {
		$decade = 3;
	}
	echo $decade;
 ?> 
 </body>
</html>