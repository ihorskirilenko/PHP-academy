<p>Написать функцию, которая переворачивает строку. Было "abcde", должна выдать "edcba". Ввод текста реализовать с помощью формы.</p>

<form method="post" action="09.php">
	<textarea name="text1" cols=50 rows=5></textarea>
	<br><input type="submit"/>
</form>

<?php
header ("Content-Type: text/html; charset=windows-1251");
setlocale(LC_ALL, 'ru_RU.CP1251', 'rus_RUS.CP1251', 'Russian_Russia.1251');
	$a = ($_POST['text1']);
	function chrReplace ($a) {
		$a = implode('', array_reverse(str_split($a, 1)));
		return $a;
	}

echo "<pre>";
var_dump(chrReplace($a));
echo "</pre>";

?>