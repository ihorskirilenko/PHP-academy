<?php
echo "<b>Пирамидка 123456789:</b>";
$s = 1;
$i = 1;
while ($i < 10) {
	echo "<br>" . str_repeat($s, $i);
	$i++;
	$s++;
}
?>