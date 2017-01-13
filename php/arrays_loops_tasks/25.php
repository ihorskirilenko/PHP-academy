<?php
echo "<b>Max и min в массиве случайных чисел:</b>";
echo "<br>(Хотя, наверное, решил грязновато :))";
$arr = array();
$i = 0;
while ($i < 10) {
	$arr[] = rand(1,1000);
	$i++;
}
echo "<pre>";
print_r($arr);
echo "</pre>";
foreach ($arr as $key => $value) {
	if ($value == min($arr)) {
		$_min_k = $key;
		$_min_v = $value;
		echo "<b>Minimum = {$_min_v}</b><br>";
	} elseif ($value == max($arr)) {
		$_max_k = $key;
		$_max_v = $value;
		echo "<b>Maximum = {$_max_v}</b><br>";
	}
}
$arr[$_min_k] = $_max_v;
$arr[$_max_k] = $_min_v;
echo "<pre>";
print_r($arr);
echo "</pre>";

?>