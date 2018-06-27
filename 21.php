<html>
 </head> 
   <meta charset="utf-8">
  <title>PHP</title>
 </head>
 <body>
   <?php
//1
for ($i=1;$i<=100;$i++){
    echo $i.'<br>';
}
//3
$sum=0;
for ($j=1;$j<=100;$j++){
    $sum+=$j;
	echo $sum;
}
//5
$sum1 = 0;
for ($i = 1; $i <= 15; $i++) {
	$sum1 += sqrt($i);
}
echo round($sum1, 2);
//7
	$arr = [];
	for ($i = 1; $i <= 10; $i++) {
		$arr[] = 'x';
	}
	var_dump($arr);
	
//9
	$arr1 = [];
	for ($i = 10; $i > 0; $i--) {
		$arr1[] = $i;
	}
	var_dump($arr1);
	
//11
	$str = '';
	for ($i = 1; $i <= 6; $i++) {
		$str .= rand(1, 9);
	}
	echo $str;
	
//13
	$arr2 = [1, 2, 3, 4, 6, 9, 11];
	$sum2 = 0;
	foreach ($arr2 as $elem) {
		$sum2 += $elem * $elem;
	}
	echo $sum2;	
//15
	$arr3 = [1, 2, 3, 4, 6, 9, 11];
	$sum3 = 0;
	foreach ($arr3 as $elem) {
		if ($elem > 0 and $elem < 10)
			$sum3+= $elem;
		}
	}
	echo $sum3;
//17
	$str4 = '';
	for ($i = 1; $i <= 10; $i++) {
		for ($j = 1; $j <= $i; $j++) {
			$str4 .= $i;
		}
	}
	echo $str4;	
	
//19
	$arr5 = [];
	for ($i = 0; $i < 10; $i++) {
		for ($j = 0; $j < 10; $j++)
			$arr5[$i][] = mt_rand(1, 10);
		}
	}
	var_dump($arr5);
//21
	$str21 ='chelovek-pauk';
	$arr21 = str_split($arr21, 1);
	$arr21 = array_reverse($arr21);
	$str21 = implode($arr21);
	echo $str21;	
//23
	$str23 = 'apple';
	$str231 = str_split($str23);
	$str232 = '';
	foreach ($str23 as $elem) {
		if(ord($elem) >= 97 && ord($elem) <= 122) {
			$str232 .= strtoupper($elem);
		} else {
			$str232 .= strtolower($elem);
		}
	}
	echo $str232;
//25
	for ($i = 1; $i <= 9; $i++) {
		echo str_repeat($i , $i) . '<br>';
	}
//27
	$arr27 = [1, 2, 3, 4];
	$newArr = [];
	foreach ($arr27 as $elem) {
		for ($i = 1; $i <= $elem; $i++) {
			$newArr[] = $elem;
		}
	}
	var_dump($newArr);	
	
//29
	$str29 = 'aazzqqq';
	$i29 = 0;
	$res29 = '';
	while ($i <= strlen($str29)) {
		$res29 .= substr($str29, $i29, 1);
		$i29 += 2;
	}
	echo $res29;
//31
	function getArrUnique($arr)
	{
		$result = [];
		foreach ($arr as $elem) {
			if (in_array($elem, $result) == false) {
				$result[] = $elem;
			}
		}
		return $result;
	}	
//33
	$num33 = 31;
	$flag = false;
	for ($i = 2; $i < $num33; $i++) {
		if ($num33 % $i == 0) {
			$flag = true;
			break;
		}
	}
	if ($flag33	== true) {
		echo'Простое число';
	} else {
		echo 'Сложное число'
	}	
?>
 </body>
</html>