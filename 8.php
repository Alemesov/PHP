<html>
 </head> 
   <meta charset="utf-8">
  <title>PHP</title>
 </head>
 <body>
 <?php

//1
	$arr = [1, 2, 3, 4, 5];
	echo array_sum($arr) / count($arr);
	
//3
	$arr1 = range(1, 100);
	echo implode('<br>', $arr1);
	
//5
	$arr2 = range(1, 10);
	shuffle($arr2);
	var_dump($arr2);	
//7
	$num = 123;
	$arr3 = str_split($num, 1);
	echo = array_sum($arr3);
//9
	$arr4 = [1, 4, 5, 7, 9];
	$result = array_map('sqrt', $arr4);
	var_dump($result);
//11
	$str = '1234567890';
	$arr5 = str_split($str, 2)
	$result1 = array_sum($arr5);
	echo $result1;	
	?>

	
 </body>
</html>