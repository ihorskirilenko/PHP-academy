<?php
$arr = array(2, 5, 9, 15, 0, 4);
	echo "<b>Массив (2, 5, 9, 15, 0, 4)</b>";
foreach ($arr as $value) {
	if  ($value > 3 and $value < 10) {
		echo "<br>{$value}";
	};
}
?>