<?php
echo "<b>Массив с элементами 4, 2, 5, 19, 13, 0, 10:</b>";
$arr = array(4, 2, 5, 19, 13, 0, 10);
$count = 0;
foreach ($arr as $value) {
	++$count;
}
echo "<br>Количество элеменов в массиве: ". $count;
?>