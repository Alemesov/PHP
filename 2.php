<html>
 <head>
  <title>Тестируем PHP</title>
 </head>
 <body>
<?php
    $arr = ['a', 'b', 'c'];
    var_dump($arr)
?>
 </body>
  <body>
<?php
	$arr = ['a', 'b', 'c', 'd'];
	echo $arr[0].'+'. $arr[1].', '.$arr[2].'+'.$arr[3]; 
?>
 </body>
   <body>
<?php
	$arr = ['2', '5', '3', '9'];
	echo $arr[0]* $arr[1]+$arr[2]*$arr[3]; 
  echo $result;
?>
 </body>
   <body>
<?php
	$arr = ['a'=>1, 'b'=>2, 'c'=>3];
	echo $arr['c'];
?>
 </body>
    <body>
<?php
	$arr = ['a'=>1, 'b'=>2, 'c'=>3];
	echo $arr['a'] + $arr['b'] + $arr['c'];
?>
 </body>
     <body>
<?php
	$arr = ['Коля'=>'1000$', 'Вася'=>'500$', 'Петя'=>'200$'];
	echo $arr['Петя'].' '.$arr['Коля'];
?>
 </body>
      <body>
<?php
	$arr = [
		'cms'=>['joomla', 'wordpress', 'drupal'],
		'colors'=>['blue'=>'голубой', 'red'=>'красный', 'green'=>'зеленый']
	];

	echo $arr['cms'][0]; 
	echo $arr['cms'][2];
	echo $arr['colors']['green']; 
	echo $arr['colors']['red']; 
?>
 </body>
</html>