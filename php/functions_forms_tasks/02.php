<p>Создать форму с элементом textarea. При отправке формы скрипт должен выдавать
 ТОП3 длинных слов в тексте. Реализовать с помощью функции.</p>

<form method="post" action="02.php">
	<textarea name="text1" cols=50 rows=5></textarea>
	<br><input type="submit"/>
</form>

<?php
header ("Content-Type: text/html; charset=windows-1251");
setlocale(LC_ALL, 'ru_RU.CP1251', 'rus_RUS.CP1251', 'Russian_Russia.1251');
	$a = ($_POST['text1']);
	$a = array_unique(array_diff(explode(' ', preg_replace('@[\W\s]+@', ' ', strtolower($a))), array('', NULL, false)));
	function sortStrlen ($a, $b) {
		if (strlen($a) == strlen($b)) {}
    return (strlen($a) <strlen( $b)) ? -1 : 1;
	}
	usort($a, "sortStrlen");
	$a = array_splice($a, -3);

echo "<pre>";
print_r($a);
echo "</pre>";

?>