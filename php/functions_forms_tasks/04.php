<p>4. Написать функцию, которая выводит список файлов в заданной директории. Директория задается как параметр функции.</p>

<?php
$dir = $_SERVER['DOCUMENT_ROOT'] . '/PHP-Academy/temp';

//Функция

function getDirContent ($path) {
	if ($handle = opendir($path)) {
		while (false !== ($file = readdir($handle))) {
			echo '<br>' . $file;
		}
	}
	closedir($handle);
}

//Вывод

echo 'Директория: ' . $dir;
getDirContent($dir);

?>