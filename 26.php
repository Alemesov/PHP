<html>
 </head> 
   <meta charset="utf-8">
  <title>PHP</title>
 </head>
 <body>
   <?php
 //Устанавливаем доступы к базе данных:
		$host = 'localhost'; //имя хоста, на локальном компьютере это localhost
		$user = 'root'; //имя пользователя, по умолчанию это root
		$password = ''; //пароль, по умолчанию пустой
		$db_name = 'test'; //имя базы данных
//1-2
$link = mysqli_connect($host, $user, $password, $db_name) or die(mysqli_error($link)); 
mysqli_query($link, "SET NAMES 'utf8'"); 
$query = "SELECT * FROM workers WHERE id > 0"; 
$result = mysqli_query($link, $query) or die(mysqli_error($link)); 
for ($data = []; $row = mysqli_fetch_assoc($result); $data[] = $row); 
echo '<table border="1" width="50%" cellpadding="5" style="border-collapse: collapse; text-align: center;">'; 
echo '<tr>'; 
foreach($data[0] as $key => $val) { 
echo '<th>'.$key.'</th>'; 
} 
echo '<th>удаление</th>'; 
echo '</tr>'; 
foreach($data as $arr) { 
echo '<tr>'; 
foreach($arr as $k => $v) { 
echo '<td>'.$v.'</td>'; 
} 
echo '<td><a href="?del='.$arr['id'].'">удалить</a></td>'; 
echo '</tr>'; 
} 
echo '</table>'; 
if(!empty($_GET['del'])) { 
$queryDelUser = "DELETE FROM `workers` WHERE id = ".$_GET['del']; 
mysqli_query($link, $queryDelUser) or die(mysqli_error($link)); 
header('Location: '.$_SERVER['PHP_SELF']); 
}
?>
 </body>
</html>