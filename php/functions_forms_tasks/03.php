<p>3. Есть текстовый файл. Необходимо удалить из него все слова, длина которых превыщает N символов.
Значение N задавать через форму. Проверить работу на кириллических строках - найти ошибку, найти решение.</p>
<p>Текстовый файл лежит: корень проекта/temp/functions-forms-tasks-03.txt</p>

<form method="post" action="03.php">
	<input name="text1" type="text" pattern="[0-9]{1,2}" placeholder="Длина слова (до 99)">
	<br><input name="submit" type="submit"/>
</form>

<?php
// Получаем цифру из формы и текст из файла
	$len = ($_POST['text1']);
	$file = $_SERVER['DOCUMENT_ROOT'] . '/PHP-Academy/temp/functions-forms-tasks-03.txt';
	$handle = fopen($file, 'r');
	$content = fread($handle, filesize($file));
	fclose($handle);

//Преобразуем в массив, удаляем слова длиннее заданного символа, собираем обратно в строку
	
	$arr = explode(' ', $content);
	foreach ($arr as $k => $v) {
		if (iconv_strlen($v, 'windows-1251') <= $len) {
		} else {
			unset($arr[$k]);
		}
	}
	$content = implode(' ', $arr);

//Перезаписываем файл
	if ($_POST['submit']) {
		$handle = fopen($file, 'w');
		fwrite($handle, $content);
		fclose($handle);
	}

?>