<html>
 </head> 
   <meta charset="utf-8">
  <title>PHP</title>
 </head>
 <body>
 <?php
    $arr=['a','b','c'];               //1
	var_dump ($arr);      
	echo $arr[0];                     //2 
	echo $arr[1];
	echo $arr[2];
	
	$arr1 = ['a', 'b', 'c', 'd'];      //3
	echo $arr[0].'+'. $arr[1].', '.$arr[2].'+'.$arr[3]; 
	
	$arr=['a'=>1, 'b'=>2, 'c'=>3];     //6
	echo $arr['c'];
	
	$arr = ['Коля'=>'1000$', 'Вася'=>'500$', 'Петя'=>'200$']; //8
	echo $arr['Петя'].' '.$arr['Коля'];
	                                                         //11
	$arr = [                                                  
	'cms'=>['joomla', 'wordpress', 'drupal'],
	'colors'=>['blue'=>'голубой', 'red'=>'красный', 'green'=>'зеленый']
];
     echo $arr['cms'][0]; 
	echo $arr['cms'][2] ;
	echo $arr['colors']['green']; 
	echo $arr['colors']['red'];
 ?> 
 </body>
</html>