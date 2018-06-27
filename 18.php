<html>
 </head> 
   <meta charset="utf-8">
  <title>PHP</title>
 </head>
 <body>
   <?php
//1
function translit($str)
{
$rus_alphabet = array(1 => 
'А', 'Б', 'В', 'Г', 'Д', 'Е', 'Ё', 'Ж', 'З', 'И', 'Й',
'К', 'Л', 'М', 'Н', 'О', 'П', 'Р', 'С', 'Т', 'У', 'Ф',
'Х', 'Ц', 'Ч', 'Ш', 'Щ', 'Ъ', 'Ы', 'Ь', 'Э', 'Ю', 'Я',
'а', 'б', 'в', 'г', 'д', 'е', 'ё', 'ж', 'з', 'и', 'й',
'к', 'л', 'м', 'н', 'о', 'п', 'р', 'с', 'т', 'у', 'ф',
'х', 'ц', 'ч', 'ш', 'щ', 'ъ', 'ы', 'ь', 'э', 'ю', 'я'
);
$rus_alphabet_translit = array(1 => 
'A', 'B', 'V', 'G', 'D', 'E', 'Yo', 'Zh', 'Z', 'I', 'Y',
'K', 'L', 'M', 'N', 'O', 'P', 'R', 'S', 'T', 'U', 'F',
'H', 'Tc', 'Ch', 'Sh', 'Sch', "`", 'Y', "`", 'E', 'Uy', 'Ya',
'a', 'b', 'v', 'g', 'd', 'e', 'yo', 'zh', 'z', 'i', 'y',
'k', 'l', 'm', 'n', 'o', 'p', 'r', 's', 't', 'u', 'f',
'h', 'tc', 'ch', 'sh', 'sch', "`", 'y', "`", 'e', 'uy', 'ya'
);
echo str_replace($rus_alphabet, $rus_alphabet_translit, $str);}
echo translit('Антон');
//3
for ($i = 100000; $i < 1000000; $i++) {
$result = strval($i / 1000);
$firstHalf = $result[0] + $result[1] + $result[2];
$secondHalf = $result[4] + $result[5] + $result[6];
if ($firstHalf == $secondHalf) {
echo $i."<br>";
}
}
?>
 </body>
</html>