<?php
echo "<b>Деление 1000 на 2:</b>";
$num = 0;
for ($n = 1000; $n > 50; $n = $n / 2) {
	$num = $num + 1;
}
echo "<br>Конечное значение \$n: {$n}";
echo "<br>Количество итераций цикла: {$num}";
?>