<p>Ќаписать функцию, котора€ в качестве аргумента принимает строку, и форматирует ее таким образом,
что каждое новое предложение начин€етс€ с большой буквы. ѕример:

¬ходна€ строка: 'а васька слушает да ест. а воз и ныне там. а вы друзь€ как ни садитесь, все в музыканты не годитесь.
а король-то Ч голый. а ларчик просто открывалс€.а там хоть трава не расти.';</p>

<form method="post" action="11.php">
	<textarea name="text1" cols=50 rows=5></textarea>
	<br><input type="submit"/>
</form>

<?php
header ("Content-Type: text/html; charset=windows-1251");
setlocale(LC_ALL, 'ru_RU.CP1251', 'rus_RUS.CP1251', 'Russian_Russia.1251');
$a = ($_POST['text1']);

function getUcfirst ($a) {
	$a = preg_replace('@[.]+@', '' , explode('. ', $a));
	$b = array();
	foreach ($a as $k => $v) {
		array_push($b, ucfirst($v));
	}
	return implode('. ', ($b)) . '.';
}

echo "<pre>";
print_r(getUcfirst($a));
echo "</pre>";

?>