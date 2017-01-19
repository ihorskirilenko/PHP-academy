<?php
/*Функция определяет, является ли число, подставленное в переменную $a простым или нет*/

	echo "<br><b>";
	echo "Задание части 70, Возвращение значений функциями";
	echo "</b>, <br>";
	echo "(https://devionity.com/ru/courses/php-fundamentals/php-returning-values)";
	
	$a = 3463;
	function is_easy ($i) {
		for($easy = true, $d = 2; $d < $i; $d++) {
			if($i % $d == 0) {
				$easy = false;
				break;
			}
		}
		return $easy != 0 ? 'Число простое' : 'Число НЕ простое';
	}
	echo "<br>" . is_easy($a);
?>

