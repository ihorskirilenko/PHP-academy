<?php
/*Функция повторяет стандартный print_r, по крайней мере, в печати многомерного массива*/

	echo "<br><b>";
	echo "Задание части 66, Аргументы и параметры, 71 Рекурсиные функции";
	echo "</b>, <br>";
	echo "(https://devionity.com/ru/courses/php-fundamentals/php-arguments-parameters), (https://devionity.com/ru/courses/php-fundamentals/php-recurcise-functions)";

	$arr = array('One', 'Two','Three', array('Six', 'Seven', array('Nine', 'Ten', 'Eleven'), 'Eight'), 'Four', 'Five');

	echo "<table><tr><td style='border:1px solid' width=300px><pre>";
	print_r($arr);
	echo "</pre></td>";

	function my_print_r ($a) {
		$step = '        ';
		static $level = 0;
		if (is_array($a)) {
			echo "Array\n";
			$level++;
			$p = str_repeat($step, $level - 1);
			echo $p . "(\n";
			foreach ($a as $k => $v) {
				echo $p . "    [{$k}] => ";
				echo my_print_r($v);
				echo "\n";
			}
		echo $p . ")\n";
		$level--;
		} else {
			echo "{$a}";
		}
	}

	echo "<td style='border:1px solid' width=300px><pre>";
	my_print_r($arr);
	echo "</pre></td></table>";
?>
