<form method="post" action="27.php">
    <b>Введите число строк:</b>
	<br><input type="text" name="rows" pattern="[0-9]{1,1000}"/>
    <br><b>Введите число столбцов:</b>
	<br><input type="text" name="cols" pattern="[0-9]{1,1000}"/>
    <br><input type="submit"/>
</form>

<?php
echo "<b>Генератор случайных таблиц:</b>";

$colors = array('red','yellow','blue','gray','maroon','brown','green','pink');
$row = (int)$_POST['rows'];
$cols = (int)$_POST['cols'];

echo '<table>';
for ($tr = 0; $tr < $row; $tr++) {
	echo '<tr>';
	for ($td = 0; $td < $cols; $td++) {
		$color = array_rand($colors, 1);
		echo "<td style='background-color:" . $colors[$color] . "'>" . rand(1,10000) . "</td>";
	}
}
echo '</tr></table>';
?>