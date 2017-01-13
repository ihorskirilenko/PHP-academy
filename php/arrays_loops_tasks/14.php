<?php
echo "<b>Массив с элементами 4, 2, 5, 19, 13, 0, 10:</b>";
$arr = array(4, 2, 5, 19, 13, 0, 10);
foreach ($arr as $value) {
	$e = $value;
	if  ($e == 2 or $e == 3 or $e == 4) {
		echo "<br>{$value} Есть!";
	};
}
?>