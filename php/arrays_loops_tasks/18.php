<?php
echo "<b>Выходные дни:</b>";
$days = array('Понедельник', 'Вторник', 'Среда', 'Четверг', 'Пятница', 'Суббота', 'Воскресенье');
foreach ($days as $key => $value) {
	if ($key == date("5") or $key == date("6")) {
		echo "<br><b>{$value}</b>";
	} else {
		echo "<br>{$value}";
	}
}
?>