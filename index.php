<?php 
	$title = date('o');

	$a = 10;
	$b = 26;

	$a = $a+$b;
	$b = $a-$b;
	$a = $a-$b;		
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title><?=$title?></title>
</head>
<body>
	<h1>Текущий год: <?=$title?></h1>	
    <?php echo "<strong>Поменять значения двух переменных местами, не прибегая к третьей:</strong><br>a: $a \n b: $b"; ?><br>    
    <br>    
    <strong>Объяснить работу кода:<br></strong>
	$a = 5;<br>
	$b = '05';<br>
	var_dump($a == $b); // Почему true? <strong>Переменные неявно преобразуются к целочисленному типу. При преобразовании строки '05' к целому числу - поулчаем 5</strong><br>
	var_dump((int)'012345'); // Почему 12345? <strong>Перед выводом происходит явное преобразование к целочисленному значению, для которого ведущие нули не выводятся.</strong><br>
	var_dump((float)123.0 === (int)123.0); // Почему false? <strong>Потому что оператор тождественного сравнения выозвращает false при сравнении переменных разных типов.</strong><br>
	var_dump((int)0 === (int)'hello, world'); // Почему true? <strong>Потому что при приведении строки к целочисленному типу получим 0 (строка не начинается с цифр). При этом тождественное равенство соблюдается (обе переменные целочисленные)</strong><br>
</body>
</html>