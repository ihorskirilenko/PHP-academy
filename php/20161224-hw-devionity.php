<b>Задание части 28, Предопределенные переменные"</b><br>
(https://devionity.com/ru/courses/php-fundamentals/php-predefined-variables)<br>
<b>POST</b>
<form action="20161224-hw-devionity.php" method="post">
    <input type="text" name="username"/>
	<input type="text" name="email"/>
	<input type="text" name="phone"/>
    <input type="submit"/>
</form>
<?php
    print_r($_POST);
?>
<br><b>GET</b>
<form action="20161224-hw-devionity.php" method="get">
    <input type="text" name="username"/>
	<input type="text" name="email"/>
	<input type="text" name="phone"/>
    <input type="submit"/>
</form>
<?php
    print_r($_GET);
?>

<br><b>Задание части 31, Сериализация"</b>
<br>(https://devionity.com/ru/courses/php-fundamentals/php-serialization)<br>
<form action="20161224-hw-devionity.php" method="post">
    <input type="text" name="username"/>
	<input type="text" name="email"/>
	<input type="text" name="message"/>
    <input type="submit"/>
</form>
<?php
    echo $str  = serialize($_POST);
?>

<?php
	echo "<br><b>";
	echo "Задание части 33, Арифметические операторы";
	echo "</b>, <br>";
	echo "(https://devionity.com/ru/courses/php-fundamentals/php-arithmetic-operators)";
	$year = 2017;
	if ($year % 4 == 0) {
		$days = 366;
	}
	else {
		$days = 365;
	}
	$sec = $days * 24 * 60 * 60;
	echo "<br> Количество секунд в {$year}-м году: $sec";
	echo "<br> Остаток от деления {$sec} секунд на 2: " . $sec % 2;
?>

<?php
	echo "<br><b>";
	echo "Задание части 35, Строковые операторы";
	echo "</b>, <br>";
	echo "(https://devionity.com/ru/courses/php-fundamentals/php-string-operators)";
	$numbers = array(1, 2, 3, 4 , 5);
	echo "<br>" . "$numbers[0]" . "$numbers[1]" . "$numbers[2]" . "$numbers[3]" . "$numbers[4]";
?>
<?php
	echo "<br><b>";
	echo "Задание части 36, Логические операторы";
	echo "</b>, <br>";
	echo "(https://devionity.com/ru/courses/php-fundamentals/php-logical-operators)";
	$f_t = false && true || false && true || !false && true;
	echo '<br> false && true || false && true || !false && true = ';
	var_dump($f_t);
	$x = 5;
	$rez = !($x / 2);
	echo "<br> {$x} делится на 2: ";
	var_dump($rez);
?>

<?php
	echo "<br><b>";
	echo "Задание части 37, Операторы присвоения";
	echo "</b>, <br>";
	echo "(https://devionity.com/ru/courses/php-fundamentals/php-assignment-operators)";
	$a = 2;
	$b = 5;
	$a += $b;
	$b = $a-$b;
	$a -=$b;
	echo "<br> \$a = {$a}, \$b = {$b}";
?>

<?php
	echo "<br><b>";
	echo "Задание части 44, Конструкции условий: if / else / elseif";
	echo "</b>, <br>";
	echo "(https://devionity.com/ru/courses/php-fundamentals/php-condition-structures-if-else-elseif)";
	$a = -5;
	$b = 5;
	if ($a > $b) {
		$rez = "\$a больше \$b";
	} elseif ($a < $b){
		$rez = "\$a меньше \$b";
	} else {
		$rez = "\$a и \$b равны";
	}
	echo "<br>{$rez}";
?>

<?php
	echo "<br><b>";
	echo "Задание части 45, Тернарный оператор";
	echo "</b>, <br>";
	echo "(https://devionity.com/ru/courses/php-fundamentals/php-ternary-operator)";
	$a = 4;
	$b = 4;
	$a < $b ? $rez = "\$b больше \$a" : $rez = "\$a больше \$b";
	echo "<br>{$rez}";
?>

<?php
	echo "<br><b>";
	echo "Задание части 46, Конструкция switch / case";
	echo "</b>, <br>";
	echo "(https://devionity.com/ru/courses/php-fundamentals/php-switch-case-construction)";
	unset($a, $b);
	$a = 5;
	$b = 4;
	$c = $a > $b;
	var_dump($c);
	switch ($c) {
		case true: echo "<br>\$a больше \$b"; break;
		case false: echo "<br>\$b бол6ьше \$a"; break;
	}
?>

<?php
	echo "<br><b>";
	echo "Задание части 47, Циклы: for";
	echo "</b>, <br>";
	echo "(https://devionity.com/ru/courses/php-fundamentals/php-loops-for)";
	$is_easy = true;
	for($i = 2; $i <= 100; $i++) {
		for($d = 2; $d < $i; $d++) {
			if($i % $d == 0) {
				$is_easy = false;
				break;
			}
		}
	if($is_easy) echo "<br>" . $i;
	$is_easy = true;
}	
?>

<?php
	echo "<br><b>";
	echo "Задание части 48, Циклы: while / do-while";
	echo "</b>, <br>";
	echo "(https://devionity.com/ru/courses/php-fundamentals/php-loops-while-do-while)";
	$i = 2;
	$is_easy = true;
	while ($i <=100) {
		$d = 2;
		while ($d < $i) {
			if($i % $d == 0) {
				$is_easy = false;
				break;
			}
			$d++;
		}
		if($is_easy) echo "<br>" . $i;
		$is_easy = true;
		$i++;
	}
	//Вариант с do-while
	/*	do {
		$d = 2;
		do {
			if($i % $d == 0) {
				$is_easy = false;
				break;
			}
			$d++;
		} while ($d < $i);
		if($is_easy) echo "<br>" . $i;
		$is_easy = true;
		$i++;
	} while ($i <= 500);*/
?>

<?php
	echo "<br><b>";
	echo "Задание части 49, Цикл foreach";
	echo "</b>, <br>";
	echo "(https://devionity.com/ru/courses/php-fundamentals/php-loops-foreach)";
	$arr = array();
	for ($a = 0; $a <11; $a++) {
		$arr[] = rand(1, 100);
	}
	echo "<pre>";
	print_r($arr);
	echo "</pre>";
	foreach ($arr as $v):
		if ($v % 3 == 0) echo "<br>" . $v;
	endforeach;
?>

<?php
	echo "<br><b>";
	echo "Задание части 51, Инструкции break & continue";
	echo "</b>, <br>";
	echo "(https://devionity.com/ru/courses/php-fundamentals/php-continue-break-statements)";
	$is_easy = true;
	for($i = 200; $i <= 400; $i++) {
		for($d = 2; $d < $i; $d++) {
			if($i % $d == 0) {
				$is_easy = false;
				break;
			}
		}
	if($is_easy) {
		echo "<br>" . $i;
		break;
	}
	$is_easy = true;
}	
?>

<?php
	echo "<br><b>";
	echo "Задание части 51, Инструкции exit & die";
	echo "</b>, <br>";
	echo "(https://devionity.com/ru/courses/php-fundamentals/php-exit-die-statements)";
	function test($x, $y) {
			if ($y == 0) {
			die('Error');
		}
		return $x / $y;
	}

	echo test(1, 0);
	echo 'Unreached line';
?>