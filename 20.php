<html>
 </head> 
   <meta charset="utf-8">
  <title>PHP</title>
 </head>
 <body>
   <?php
<form action="" method="GET">
	<input type="text" name="name">
	<input type="hidden" name="hello" value="0">
	<input type="checkbox" name="hello" value="1">
	<input type="submit">
</form>
<form action="" method="GET">
	<p>Вы знаете PHP?</p>
	<p>да<input type="radio" name="php" checked value="1"></p>
	<p>нет<input type="radio" name="php" value="0"></p>
	<input type="submit">
</form>
<form action="" method="GET">
	<select size="5"  name="age">
	<option disabled>Сколько вам лет?</option>
	<option value="1">менее 20 лет</option>
	<option value="2">20-25</option>
	<option value="3">26-30</option>
	<option value="4">более 30</option>
 	</select>
	<input type="submit">
</form>
 <body>
 <?php
//1
	if (isset($_REQUEST['hello']) and $_REQUEST['hello'] == 0) {
		echo 'Прощай '.$_REQUEST['name'];
	}
	if (isset($_REQUEST['hello']) and $_REQUEST['hello'] == 1) {
		echo 'Привет '.$_REQUEST['name'];
	}
	
//3	
		if (isset($_REQUEST['php']) and $_REQUEST['php'] == 0) {
		echo 'Вы не знаете PHP';
	}
	if (isset($_REQUEST['php']) and $_REQUEST['php'] == 1) {
		echo 'Вы  знаете PHP!';
	}
	
//5
	if (isset($_REQUEST['age']) and $_REQUEST['age'] == 1) {
		echo 'Вам менее 20 лет';
	}
	if (isset($_REQUEST['age']) and $_REQUEST['age'] == 2) {
		echo 'Вам 20-25 лет';
	}
	if (isset($_REQUEST['age']) and $_REQUEST['age'] == 3) {
		echo 'Вам 26-30 лет';
	}
	if (isset($_REQUEST['age']) and $_REQUEST['age'] == 4) {
		echo 'Вам более 30 лет';
	}	
//7
function input($type, $name, $value)
{
return '<input type="'.$type.'" name="'.$name.'" value="'.$value.'">';
}
echo input('text', 'input', '1');
//9
function input1($name)
{
	return '<input type="hidden" name="'.$name.'" value="0">
	<input type="checkbox" name="'.$name.'" value="1">';
}
	echo input1('checkbox');
?>
 </body>
</html>