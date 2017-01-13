<?php
$num = array(1, 20, 15, 17, 24, 35);
$result = 0;
foreach ($num as $value) {
	$result += $value;
}
echo "<b>Результат сложения массива \$num:</b><br>{$result}";
?>