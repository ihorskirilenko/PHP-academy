<?php
$arr = array('green'=>'зеленый', 'red'=>'красный','blue'=>'голубой');
	echo "<b>Массивы \$en и \$ru:</b><br>";
foreach ($arr as $key => $value) {
	$en[] = $key;
	$ru[] = $value;
}
print_r($en);
echo '<br>';
print_r($ru);
?>