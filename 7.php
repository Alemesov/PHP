<html>
 </head> 
   <meta charset="utf-8">
  <title>PHP</title>
 </head>
 <body>
 <?php

echo ucfirst('london');                                 //3

echo strlen('html css php');                            //7

echo substr('html css php', 0, 4); //html               //9
echo substr('html css php', 5, 3); //css
echo substr('html css php', 9, 3); //php

//13
$str1 = '1.png';
$check = substr($str1, -4);
if ($check == '.png') {
	echo 'Да';
} else {
	echo 'Нет';
}
//15
$str2 = '123456789';
if(strlen($str2) > 5) {
	echo substr($str2, 0, 5). '...';
} else {
	echo $str2;
}
//17
echo str_replace(['a', 'b', 'c'], [1, 2, 3], 'abcabc');
//19
$str3 = 'abcabc';
echo strtr($str3, 'abc', '123');
//21
echo strpos('abc abc abc', 'b');
//23
echo strpos('abc abc abc', 'b', 3);
//25
$str4 = 'aaa..aaaa';
if(strpos($str4, '..') !== false) {
	echo 'Да';
} else {
	echo 'Нет';
}
//31
var_dump(str_split('1234567890', 1));
//33
	$str5 = ' строка ';
	echo trim($str5);
	
//35
$str6 = 'слова слова слова.';
echo rtrim($str6, '.').'.';
//37
$str7 = 'madam';
$rev = strrev($str7);
if ($rev == $str7) {
	echo $str7. ' - это слово палиндром';
}
//39
$str8 = 'qwertyuiopasdfghjklzxcvbnm'; 
$newStr = str_shuffle($str8); 
echo substr($newStr, 0, 6); 
//41
for ($i = 1; $i <= 9; $i++) {
	echo str_repeat('x' , $i).'<br>';
}
//43
echo strip_tags('html, <b>php</b>, js');
//45
echo htmlspecialchars('html, <b>php</b>, js');

//51
$str11 = 'А';
$code = ord($str11);
if ($code >= 65 and $code <= 90) {
	echo 'большая буква';
}
if ($code >= 97 and $code <= 122) {
	echo 'маленькая буква';
}
//53
	$str12 = 'ab-cd-ef';
	echo strrchr($str12, '-');
//55
$arr13 = explode('_', 'var_test_text');
$str13 = '';
foreach ($arr13 as $key=>$elem) {
	if($key != 0) {
		$str13 .=  ucfirst($elem);
	} else {
		$str13 .= $elem;
	}
}
	echo $str13;

	?>
 </body>
</html>