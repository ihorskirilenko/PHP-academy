<form method="post" action="24.php">
    <b>Введите целое число:</b>
	<br><input type="text" name="num1" pattern="[0-9]{1,100}"/>
    <br><b>Введите одну цифру:</b>
	<br><input type="text" name="num2" pattern="[0-9]{1}"/>
    <br><input type="submit"/>
</form>
<?php
echo "<b>Вхождение цифры в число:</b>";
$arr = str_split((float)$_POST['num1']);
$num2 = (int)$_POST['num2'];
$count = 0;
foreach ($arr as $value) {
	if ($num2 == $value) {
		++$count;
	}
}
echo "<br>" . $count;
?>