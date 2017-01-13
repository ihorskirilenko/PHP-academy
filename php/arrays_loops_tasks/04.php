<?php
$arr = array('green'=>'зеленый', 'red'=>'красный','blue'=>'голубой');
	echo "<b>Ключи:</b><br>";
foreach ($arr as $key => $value) {
	echo "{$key}<br>";
}
	echo "<b>Значения:</b><br>";
foreach ($arr as $key => $value) {
	echo "{$value}<br>";
}
?>