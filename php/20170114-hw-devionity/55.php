<?php
/*Создаем текстовый файл, в нем 10-ю строками записываем цифры от 1 до 10, количество значений в строке равно самому значению*/

	echo "<b>";
	echo "Задание части 55, Запись в файл";
	echo "</b>, <br>";
	echo "(https://devionity.com/ru/courses/php-fundamentals/php-writing-data-to-files)";
	$f = fopen('../../temp/test.txt', 'w');
	for ($v = 1, $s = 1; $s < 11; $v++, $s++):
		fwrite($f, str_repeat($v, $s) . PHP_EOL);
	endfor;
	fclose($f);
?>
