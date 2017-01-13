<form method="post" action="23.php">
    <input type="text" name="text"/>
    <input type="submit"/>
</form><br>
<?php
echo "<b>Сумма цифр числа:</b>";
$i = (int)$_POST['text'];
if ($i <> 0) {
	echo "<br>" . array_sum(str_split($i));
} else {
	echo "<br>Введите целое число!";
}
?>