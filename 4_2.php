<html>
 </head> 
   <meta charset="utf-8">
  <title>PHP</title>
 </head>
 <body>
 <?php
     $year = 2000;
	if ($year % 4 == 0 or ($year % 400 == 0 and $year % 100 != 0)) {
		echo 'Високосный';
	} else {
		echo 'Не високосный';
	}
 ?> 
 </body>
</html>