<?php
$arr = array(1, 2, 3, 4, 5, 6, 7, 8, 9);
	echo "<b>Массив (1, 2, 3, 4, 5, 6, 7, 8, 9):</b>";
	$rez = "";
foreach ($arr as $value) {
	$rez .= $value;
}
echo "<br>{$rez}";
?>