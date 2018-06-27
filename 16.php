<html>
 </head> 
   <meta charset="utf-8">
  <title>PHP</title>
 </head>
 <body>
   <?php
//1
$arr=[];
$str = 'х';
for ($i=1;$i<=5;$i++){
    $arr[]=$str;
	$str .= 'x';
}
var_dump($arr);
//3
	function arrayFill($str, $num)
	{
		$arr1 = [];
		for ($i = 1; $i <= $num; $i++) {
			$arr1[] = $str;
		}
		return $arr1;
	}
	
	var_dump(arrayFill('x', 5));
	
//5
$arr2 = [[1, 2, 3], [4, 5], [6,8]];
$sum2 = 0;
foreach ($arr2 as $elem) {
	foreach($elem as $num) {
		$sum2 += $num;
	}
}
echo $sum2;
//7
$arr3 = [];
$count = 1;
for ($i = 0; $i < 3; $i++) {
	for ($j = 0; $j < 3; $j++) {
		$arr3[$i][$j] = $count;
		$count++;
	}
}
var_dump($arr3);
?>
 </body>
</html>