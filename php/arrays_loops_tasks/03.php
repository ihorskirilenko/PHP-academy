<?php
$num = array(26, 17, 136, 12, 79, 15);
$result = 0;
foreach ($num as $value) {
	$result += $value*$value;
}
echo "<b>Результат сложения квадратов массива \$num:</b><br>{$result}";
?>