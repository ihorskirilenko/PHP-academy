<?php
$arr = array('Коля' => 200, 'Вася' => 300, 'Петя' => 400);
	echo "<b>Зарплаты человечиков:</b><br>";
foreach ($arr as $key => $value) {
	echo "{$key} - зарплата {$value} долларов.<br>";
}
?>