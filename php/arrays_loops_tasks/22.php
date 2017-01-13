<?php
echo "<b>Пирамидка двойных иксов:</b>";
$l = 0;
for ($x = "xx"; $l < 5;) {
	$l++;
	echo "<br>" . str_repeat($x, $l);
}
?>