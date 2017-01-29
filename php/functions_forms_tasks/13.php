<p>13. Есть строка $string = 'яблоко черешня вишня вишня черешня груша яблоко черешня вишня яблоко вишня вишня черешня
груша яблоко черешня черешня вишня яблоко вишня вишня черешня вишня черешня груша яблоко черешня черешня вишня яблоко
вишня вишня черешня черешня груша яблоко черешня вишня';
<br>
<br>
Подсчитайте, сколько раз каждый фрукт встречается в этой строке. Выведите в виде списка в порядке уменьшения количества:
<br>
<br>
Пример вывода:
<br>яблоко - 12
<br>черешня - 8
<br>груша - 5
<br>слива - 3
</p>

<form method="post" action="13.php">
	<textarea name="text1" cols=50 rows=5></textarea>
	<br><input type="submit"/>
</form>

<?php
/*header ("Content-Type: text/html; charset=windows-1251");
setlocale(LC_ALL, 'ru_RU.CP1251', 'rus_RUS.CP1251', 'Russian_Russia.1251');*/
$a = ($_POST['text1']);

function countSamevalues ($a) {
	$a = explode(' ',  $a);
	$b = array_unique($a);
	sort($b);
	for($i = 0; $i <= count($b)-1; $i++) {
		$nmb = 0;
		$var_b = $b[$i];
		foreach ($a as $v) {
			if ($v == $var_b) {
				++$nmb;
			} 
		}
		$c[$var_b] = $nmb;
		$nmb = 0;
	}
	arsort($c);
	$res = '';
	foreach ($c as $key => $value) {
		$res = $res . $key . ' - ' . $value . '<br>';
	}
	return $res;
	//print_r array_count_values($a);
}

echo "<pre>";
print_r(countSamevalues($a));
echo "</pre>";

?>