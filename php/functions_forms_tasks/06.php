<body style="font: 90% Tahoma">
	<div>
		<p>6. Создать страницу, на которой можно загрузить несколько фотографий в галерею. Все загруженные фото
		должны помещаться в папку gallery и выводиться на странице в виде таблицы.</p><br>
	</div>
	<div>
		<form enctype="multipart/form-data" method="post" action="06.php">
			<input name="photos[]" type="file" accept="image/*" multiple />
			<input type="submit" name="submit" />
		</form>
	</div>
</body>

<?php

//Переменные скрипта

$home = $_SERVER['DOCUMENT_ROOT'];
$gallery = '/PHP-Academy/temp/gallery/';
$dir = $home . $gallery;
@$files = $_FILES['photos'];
$gal_array = array();

//Проверка и создание директории
if (file_exists($dir)) {
	
} else {
	mkdir($dir, 0777, true);
}

//Функция создает массив ссылок на существующие в галерее файлы для дальнейшего вывода

function getDirContent ($path) {
	global $gallery;
	global $gal_array;
	if ($handle = opendir($path)) {
		while (false !== ($file = readdir($handle))) {
			if ($file != '.' and $file != '..') {
				$gal_array[] = $gallery . $file;
			}
		}
	}
	closedir($handle);
}

getDirContent($dir);

//Функция копирования файлов в постоянную директорию

function copyFiles ($files) {
	global $dir;
	if (!empty($files)) {
		foreach ($files['tmp_name'] as $k => $source) {
			foreach ($files['name'] as $name) {
				copy($source, $dir . uniqid(5) . '_' . $files['name'][$k]);
				break;
			}
		}
	}
}

//Функция построения таблицы

function mkTable ($arr) {
	echo '<table style="margin: 0 auto; border-collapse: collapse">';
	for ($r = 0; $r <= ceil(count($arr)) / 4; $r++) {
		echo '<tr style="width: 1200px">';
		static $nmb = 0;
		for ($c = 0; $c <= 3; $c++) {
			if ($nmb < count($arr)) {
				echo '<td style="width: 300px; border: 1px solid #66CDAA; text-align: center"><img src="' . $arr[$nmb] . '" height="198px" alt="' . $arr[$nmb] . '"/></td>';
				$nmb++;
			}
		}
		echo '</td>';
	}
	echo '</table>';
}

if (@$_POST['submit']) {
	copyFiles($files);
	unset($gal_array);
	getDirContent($dir);
}

mkTable($gal_array);

/*echo '<pre>';
print_r($gal_array);
echo count($gal_array);
echo '</pre>';*/

?>