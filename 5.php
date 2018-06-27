<html>
 </head> 
   <meta charset="utf-8">
  <title>PHP</title>
 </head>
 <body>
 <?php
$arr=['html', 'css', 'php', 'js', 'jq'];   //1
foreach ($arr as $elem){echo $elem.'<br>';}

$arr1=[1, 2, 3, 4, 5];                      //3
$result=0;
foreach ($arr1 as $elem){$result+=$elem*$elem;}
echo $result.'<br>';
 
$arr2=[ 'Коля'=>'200', 'Вася'=>'300', 'Петя'=>'400'];  //5
foreach ($arr2 as $key=>$elem) {echo $key.' - зарплата '.$elem.' долларов'.'<br>';}

for ($i=11;$i<=33;$i++){echo $i.'<br>';}               //7

$i=1;                                                 //9
$sum=0;
while ($i<=100){
	$sum += $i;
	$i++;
	}
	

$sum1 = 0;                                          //11
$arr3 = [2, -5, -2, -9, 5, 15, 11, -7];
foreach ($arr3 as $elem) {
if ($elem > 0) {
	$sum1 += $elem;
}
}	

$arr4=['10', '20', '30', '50', '235', '3000'];	      //13
foreach ($arr4 as $elem) {
if ($elem[0] == '1' or $elem[0] == '2' or $elem[0] == '5'){echo $elem.'<br>';}
}

	$arr5 = ['пн', 'вт', 'ср', 'чт', 'пт', 'сб', 'вс'];    //15
	foreach ($arr5 as $key=>$elem) {
		if ($key == 5 or $key == 6) {
			echo '<b>'.$elem.'</b><br>';
		} else {
			echo $elem.'<br>';
		}
	}

$arr6=[];                                                    //17
for ($i=1;$i<=100;$i++) {$arr6[]=$i;}	
var_dump($arr6);

$num2=1000;                                                //19
$j=0;
while ($num2>=50){
	$num2=$num2/2;
	$j++;
}
echo $num2.'<br>';
echo $j;
	?>
 </body>
</html>