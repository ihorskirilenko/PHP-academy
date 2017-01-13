<?php
echo "<b>Текущий день:</b>";
$day = date("w");
$days = array('Понедельник', 'Вторник', 'Среда', 'Четверг', 'Пятница', 'Суббота', 'Воскресенье');
foreach ($days as $key => $value) {
	if ($key == $day - 1) {
		echo "<br><i>{$value}</i>";
	} else {
		echo "<br>{$value}";
	}
}
?>