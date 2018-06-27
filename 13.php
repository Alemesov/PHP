<html>
 </head> 
   <meta charset="utf-8">
  <title>PHP</title>
 </head>
 <body>
   <?php
//1
$arr=[1,2,3,4,6,7,8,9,40];
$flag=false;
foreach($arr as $elem)
{if ($elem==5){$flag=true;break;}}
if ($flag == true) {
echo 'да';
} else {
echo 'нет';
}
//3
$arr1 = [1, 2, 3, 3, 4, 5, 5];
$flag1 = false;
foreach ($arr1 as $key=>$elem) {
	if ($key > 0 and $elem == $arr[$key - 1]) {
		$flag1 = true;
		break;
	}
}
if ($flag1 == true) {
	echo 'да';
} else {
	echo 'нет';	
}
?>
 </body>
</html>