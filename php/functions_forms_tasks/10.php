<p>Написать функцию, которая считает количество уникальных слов в тексте.
Слова разделяются пробелами. Текст должен вводиться с формы.</p>

<form method="post" action="10.php">
	<textarea name="text1" cols=50 rows=5></textarea>
	<br><input type="submit"/>
</form>

<?php
header ("Content-Type: text/html; charset=windows-1251");
setlocale(LC_ALL, 'ru_RU.CP1251', 'rus_RUS.CP1251', 'Russian_Russia.1251');
$a = ($_POST['text1']);

function getUniqueWords ($a) {
	$a = array_diff(explode(' ', preg_replace('@[\W\s]+@', ' ', strtolower($a))), array('', NULL, false));
	$a = array_unique($a);
	echo "Количество уникальных элементов: " . count(array_unique($a));
}

echo "<pre>";
print_r(getUniqueWords($a));
echo "</pre>";

?>