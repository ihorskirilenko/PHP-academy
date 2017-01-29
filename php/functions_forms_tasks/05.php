<p>5. Написать функцию, которая выводит список файлов в заданной директории, которые содержат искомое слово.
Директория и искомое слово задаются как параметры функции.</p>

<?php
$dir = $_SERVER['DOCUMENT_ROOT'] . '/PHP-Academy/temp';
$mask = "tes";

//Функция

function searchInDir ($path, $mask) {
	if ($handle = opendir($path)) {
		while (false !== ($file = readdir($handle))) {
			if (fnmatch('*' . $mask . '*', $file)) {
				echo '<br>' . $file;
			}
		}
	}
	closedir($handle);
}

//Вывод

searchInDir($dir, $mask);

?>