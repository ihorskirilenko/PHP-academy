<?php
/*Функция выводит переданное значение с помощью print_r или var_dump, в зависимости от значения соответствующей переменной*/

	echo "<br><b>";
	echo "Задание части 67, Необязательные аргументы";
	echo "</b>, <br>";
	echo "(https://devionity.com/ru/courses/php-fundamentals/php-optional-arguments)";

	$arr = array('One', 'Two','Three', array('Six', 'Seven', array('Nine', 'Ten', 'Eleven'), 'Eight'), 'Four', 'Five');
	$f = 'var_dump';

	function pr_vd ($a, $f = 'print_r') {
		echo "<pre>";
		if ($f == 'print_r') {
			print_r($a);
		} elseif ($f == 'var_dump') {
			var_dump($a);
		} else {
			echo "Я не знаю этой функции!";
		}
		echo "</pre>";
	}

	pr_vd($arr, $f);
?>
