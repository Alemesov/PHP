<html>
 </head> 
   <meta charset="utf-8">
  <title>PHP</title>
 </head>
 <body>
   <?php
//1
function cut($str,$sym=10){
	return substr($str,0,$sym);
}
//3
function sum($num){
	$arr=str_split($num,1);
	$result = array_sum($arr);
	if ($resullt > 9) {
		$result = sum($result);
	}
	return $result;	
}
?>
 </body>
</html>