<html>
 </head> 
   <meta charset="utf-8">
  <title>PHP</title>
 </head>
 <body>
  <?php
//1
echo time();
//3
echo mktime(0, 0, 0, 12, 31);
//5
$sec = time() - mktime(7, 23, 48); //количество часов
echo floor($sec / (60 * 60));
//7
echo ' ';
echo date('Y-m-j');
echo ' ';
echo date('j.m.Y');
echo ' ';
echo date('j.m.y');
echo ' ';
echo date('H:i:s');
//9
$week = ['вс', 'пн', 'вт', 'ср','чт', 'пт', 'сб'];
echo $week[date('w',  mktime(0, 0, 0, 6, 6, 2006))];
//11
echo date('t');
?>
<form action="" method="GET">
	<input type="text" name="date">
	<input type="submit">
</form>
<?php
//13
if (isset($_REQUEST['date'])) {
	$date = explode('.', $_REQUEST['date']);
	$week = ['вс', 'пн', 'вт', 'ср','чт', 'пт', 'сб'];
	echo $week[date('w',  mktime(0, 0, 0, $date[1], $date[0], $date[2]))];
}
?>
<form action="" method="GET">
	<input type="text" name="date1">
	<input type="text" name="date2">
	<input type="submit">
</form>

<?php
//15
	if (isset($_REQUEST['date1']) and isset($_REQUEST['date2'])) {
		$date1 = $_REQUEST['date1'];
		$date2 = $_REQUEST['date2'];
		if ($date1 > $date2) {
			echo $date1;
		} else {
			echo $date2;
		}
	}
?>
<form action="" method="GET">
	<input type="text" name="date">
	<input type="submit">
</form>

<?php
//17
	if (isset($_REQUEST['date'])) {
		echo date('H:i:s d.m.Y', strtotime($_REQUEST['date']));
	}
?>
<?php
//19
	
	$time = mktime(23, 59, 59, 12, 31);
		
	$time = $time + 1;
	
	echo floor(($time - time()) / (60 * 60 * 24));
?>
 </body>
</html>