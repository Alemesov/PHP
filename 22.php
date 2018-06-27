<html>
 </head> 
   <meta charset="utf-8">
  <title>PHP</title>
 </head>
 <body>
   <?php
 //1
$res = mktime(0, 0, 0, 1, 1, date('Y')+1) - time();
$d = ceil($res /86400);
echo 'До Нового Года осталось: ' . $d . ' дней';
?>

<form action="" method="post">
<input type="text" name="year" value="" placeholder="Введите год">
<input type="submit">
</form>

<?php
//2
$year = $_POST['year'];
if($year){
$res = date('L', mktime(0, 0, 0, 2, 1, $year));
if($res == 1){
echo 'високосный год';
}else{
echo 'не високосный год';
}
}
?>

<form action="" method="post">
<input type="text" name="date" value="" placeholder="DD.MM.YYYY">
<input type="submit">
</form>

<?php
//3
$date = $_POST['date'];
if($date){
$arr = explode('.', $date);
$week = ['вс', 'пн', 'вт', 'ср', 'чт', 'пт', 'сб'];
$d = date('w', mktime(0, 0, 0, $arr[1], $arr[0], $arr[2]));
echo $week[$d];
}
?>

<?php
//4
$week = ['вс', 'пн', 'вт', 'ср', 'чт', 'пт', 'сб'];
$d = date('w', mktime(0, 0, 0, date('m'), date('d'), date('Y')));
$d = $week[$d];
$m_arr = [1=>'Январь', 'Февраль', 'Март', 'Апрель', 'Май', 'Июнь', 'Июль', 'Август', 'Сентябрь', 'Ноябрь', 'Декабрь'];
$m = date('n', mktime(0, 0, 0, date('m'), date('d'), date('Y')));
$m = $m_arr[$m];
echo date('d') . ' ' . $m . ' ' . date('Y') . ' год, ' . $d; 
?>

<form action="" method="post">
<input type="text" name="date" value="" placeholder="DD.MM.YYYY">
<input type="submit">
</form>


<?php
//5
$date = $_POST['date'];
if($date){
$arr = explode('.', $date);
$date_x = mktime(0, 0, 0, $arr[1], $arr[0], date('Y'));
if($date_x < time()){
$date_x = mktime(0, 0, 0, $arr[1], $arr[0], date('Y')+1);
}
$res = $date_x - time();
$res = ceil($res /86400);
echo 'до Дня Рождения осталось: ' . $res . ' дней';
}
?>
<?php
//8
$arr = ['Новый Год' => '01.01', 'Рождество' => '01.07', 'День Победы' => '08.05' ];
$date = date('d.m', time());
foreach($arr as $key=>$elem){
if($date == $elem){
echo 'Сегодня празднуют: ' . $key . '!<br> C Праздником!';
}
}
?>

<form action="" method="post">
<textarea name="text" id="" cols="30" rows="10"></textarea>
<input type="submit">
</form>

<?php
//10
if( $_POST['text']){
$text = $_POST['text'];
$words = str_word_count($text);
$all_symbols = strlen($text);
$symbols = explode(' ', $text);
$symbols = implode('', $symbols);
$symbols = strlen($symbols);
echo $words . ' слолов, ' . $all_symbols . ' симвлов, ' . $symbols . ' симвлов без пробелов';
}
?>
<form action="" method="post">
<input type="text" name="str" value="">
<input type="submit">
</form>

<?php
//12
$arr = ['botany', 'exist', 'rhyme', 'insect', 'ride', 'epitomize', 'climate', 'scrip', 'speculator'];
if( $_POST['str']){
$str = $_POST['str'];
foreach($arr as $el){
$res = strpbrk($el, $str);
if($res == true){
echo $el . '<br>';
}
}
}
?>
 </body>
</html>