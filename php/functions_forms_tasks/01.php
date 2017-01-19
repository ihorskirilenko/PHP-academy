<p>Создать форму с двумя элементами textarea. При отправке формы скрипт должен выдавать только те слова,
которые есть и в первом и во втором поле ввода. Реализацию это логики необходимо поместить в функцию
getCommonWords($a, $b), которая будет возвращать массив с общими словами.</p>

<form method="post" action="01.php">
	<textarea name="text1" cols=50 rows=5></textarea>
	<br><textarea name="text2" cols=50 rows=5></textarea>
	<br><input type="submit"/>
</form>

<?php
header ("Content-Type: text/html; charset=windows-1251");
setlocale(LC_ALL, 'ru_RU.CP1251', 'rus_RUS.CP1251', 'Russian_Russia.1251');
$a = ($_POST['text1']);
$b = ($_POST['text2']);

function getCommonWords ($a, $b) {
	$a = array_diff(explode(' ', preg_replace('@[\W\s]+@', ' ', strtolower($a))), array('', NULL, false));
	$b = array_diff(explode(' ', preg_replace('@[\W\s]+@', ' ', strtolower($b))), array('', NULL, false));
	$same = array_unique(array_intersect($a, $b));
	return array_unique($same);
}

echo "<pre>";
print_r(getCommonWords($a, $b));
echo "</pre>";

?>