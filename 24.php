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
	//Соединяемся с базой данных используя наши доступы:
	        $link = mysqli_connect($host, $user, $password, $db_name);
		mysqli_connect($host, $user, $password, $db_name) or die(mysqli_error($link));
	//Устанавливаем кодировку (не обязательно, но поможет избежать проблем):
		mysqli_query($link, "SET NAMES 'utf8'");
	//Формируем тестовый запрос:
		$query = "SELECT * FROM workers WHERE id > 0";
	//Делаем запрос к БД, результат запроса пишем в $result:
		$result = mysqli_query($link, $query) or die(mysqli_error($link));
	//Проверяем что же нам отдала база данных, если null – то какие-то проблемы:
		var_dump($result);
//1
$query = "SELECT name FROM workers WHERE id = 3";
//3
$query = "SELECT * FROM workers WHERE age = 23";
//5
$query = "SELECT * FROM workers WHERE salary >= 500";
//7
$query = "SELECT * FROM workers WHERE salary <= 900";
//9
$query = "SELECT * FROM workers WHERE age > 25 AND age <= 28";
//11
$query = "SELECT * FROM workers WHERE name = 'Петя' OR name = 'Вася'";
//13
$query = "SELECT * FROM workers WHERE age = 27 OR salary = 1000";
//15
$query = "SELECT * FROM workers WHERE (age >= 23 AND age < 27) OR (salary > 400 AND salary < 1000)";	
//17
$query = "INSERT INTO workers SET name='Никита', age=26, salary=300";
//19
$query = "INSERT INTO workers (name, age, salary) VALUES ('Ярослав', 30, 1200), VALUES ('Петя', 31, 1000)";
//21
$query = "DELETE FROM workers WHERE name = 'Коля'";
//23
$query = "UPDATE workers SET salary = 200 WHERE name = 'Вася'";
//25
$query = "UPDATE workers SET salary = 700 WHERE salary = 500";
//27
$query = "UPDATE workers SET age = 23 WHERE id > 2 AND id <= 5";
?>
 </body>
</html>