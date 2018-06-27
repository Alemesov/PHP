<html>
 </head> 
   <meta charset="utf-8">
  <title>PHP</title>
 </head>
 <body>
 <?php
    $a = 1;                   //1
	if ($a == 0) {
		echo 'Верно';
	} else {
		echo 'Неверно';
	}
	$a1 = 1;                 //3
	if ($a1 < 0) {
		echo 'Верно';
	} else {
		echo 'Неверно';
	}
	$a3 = 1;                  //6
	if ($a3 != 0) {
		echo 'Верно';
	} else {
		echo 'Неверно';
	}
	$a4 = '';                  //9
	if (empty($a4)) {            
		echo 'Верно';
	} else {
		echo 'Неверно';
	}
	$a5 = 3;                   //11
	if (isset($a5)) {
		echo 'Верно';
	} else {
		echo 'Неверно';
	}
	
	$var = true;              //13
	if ($var == true) {
		echo 'Верно';
	} else {
		echo 'Неверно';
	}
	
	$a6 = 5;                    //16
	if ($a6 == 0 or $a6 == 2) {
		$a6 += 7;
	} else {
		$a6 /= 10;
	}
	echo $a6;
 ?> 
 </body>
</html>