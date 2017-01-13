<?php
echo "<b>Прозведение данных массива с парными индексами:</b>";
$arr = array();
$i = 0;
while ($i < 10) {
	$arr[] = rand(1,100);
	$i++;
}
echo "<pre>";
print_r($arr);
echo "</pre>";
$p = 1;
$n = "";
foreach ($arr as $key => $value) {
	if ($key % 2 == 0) {
		$p *= $value;
	} elseif ($key % 2 <> 0) {
		$n = $n . $value . ", ";
	}
}
echo "<br><b>Произведение элементов с парными индексами:</b> {$p}";
echo "<br><b>Элементы с непарными индексами: </b>" . substr($n, 0, strlen($n)-2);

?>