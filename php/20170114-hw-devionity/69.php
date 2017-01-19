<?php
/*Функция считает количество значений в многомерном массиве и добавляет его в этот же массив последним значением.*/

	echo "<br><b>";
	echo "Задание части 69, Передача аргументов по ссылке";
	echo "</b>, <br>";
	echo "(https://devionity.com/ru/courses/php-fundamentals/php-passing-parameters-by-reference)";

	$arr = array('One', 'Two','Three', array('Six', 'Seven', array('Nine', 'Ten', 'Eleven'), 'Eight'), 'Four', 'Five');

	echo "<table><tr><td style='border:1px solid' width=300px><pre>";
	print_r($arr);
	echo "</pre></td>";

	function add_in_arr (& $a) {
		static $sum = 0;
		if (is_array($a)) {
			foreach ($a as $k => $v) {
				add_in_arr($v);
			}
			$sum += count($a);
		}
		//return $sum;
		if (is_array($a)) {
			array_push($a, $sum);
		}
	}

	add_in_arr($arr);
	echo "<td style='border:1px solid' width=300px><pre>";
	print_r($arr);
	echo "</pre></td></table>";

?>
